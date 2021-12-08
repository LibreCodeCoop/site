import { Flex, UnorderedList, ListItem, Text } from "@chakra-ui/react";
import { GetServerSideProps } from "next";
import Content from "@/content/about-us/future-members.json";
import { IContent } from "../future-members";
import { getFileBySha } from "@/services/githubAPIService";
import { decodeBase64 } from "@/utils/decodeBase64";
import { Blob } from "@/services/githubAPIService";
import { lexer, parse } from "marked";

interface OportunitieProps {
  data: IData;
}

interface IData {
  content: IContent;
  slug: string;
  job: Blob;
  converted: string;
  metadata: IMeta[];
}

interface IMeta {
  depth: number;
  raw: string;
  text: string;
  type: string;
}

export default function Oportunitie({ data }: OportunitieProps) {
  const metadata = lexer(data.job.content);
  const meta = metadata.filter((metat) => metat.type !== "space");
  console.info(meta);
  return (
    <Flex
      direction="column"
      bgPos="left"
      bgSize="cover"
      bgRepeat="no-repeat"
      bgImage={data.content.background}
      minH="100vh"
    >
      <Flex
        bgImage={data.content.header}
        bgPos="center"
        bgRepeat="no-repeat"
        w="full"
        bgSize="cover"
        h="400px"
        justify="center"
        align="center"
      >
        <Text
          fontSize={["3xl", "5xl", "7xl"]}
          color="gray.50"
          fontWeight="bold"
        >
          {data.content.title}
        </Text>
      </Flex>
      <Flex
        direction="column"
        my="10"
        px={{ base: "4", md: "24" }}
        w="full"
        justify="center"
      >
        <Text fontWeight="light" fontSize={["2xl", "3xl"]} textAlign="left">
          {data.content.description}
        </Text>
        <Text fontWeight="light" fontSize={["2xl", "3xl"]} textAlign="left">
          {data.content.callToOpenPosition}
        </Text>
        <Flex direction="column">
          {/*
          <Text fontWeight="medium" fontSize={{ base: "xl", md: "3xl" }}>
            {metadata[0].text}
          </Text>
          <UnorderedList>
            {metadata[1].items.map((item) => (
              <ListItem key={item.raw}>{item.text}</ListItem>
            ))}
          </UnorderedList>
            */}
          {meta.map((metadataJob) => {
            switch (metadataJob.type) {
              case "heading":
                return (
                  <Text
                    key={metadataJob.raw}
                    fontWeight="medium"
                    fontSize={{ base: "xl", md: "2xl" }}
                  >
                    {metadataJob.text}
                  </Text>
                );
              case "list":
                return (
                  <UnorderedList>
                    {metadataJob.items.map((item) => (
                      <ListItem key={item.raw}>{item.text}</ListItem>
                    ))}
                  </UnorderedList>
                );
              default:
                break;
            }
          })}
        </Flex>
      </Flex>
    </Flex>
  );
}

export const getServerSideProps: GetServerSideProps = async ({ params }) => {
  const { slug } = params;
  const job = Content.jobs.filter((job) => job.title === slug)[0];
  const fileRepo = await getFileBySha(job.githubSha);
  fileRepo.content = decodeBase64(fileRepo.content);

  return {
    props: {
      data: { content: Content, slug, job: fileRepo },
    },
  };
};
