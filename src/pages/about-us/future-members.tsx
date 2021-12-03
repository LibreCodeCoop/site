import { Text, Flex, Box } from "@chakra-ui/react";
import { GetStaticProps } from "next";

import Content from "@/content/about-us/future-members.json";
import { getJobByNameOfTheMarkdown } from "@/services/githubAPIService";
import { decodeBase64 } from "@/utils/decodeBase64";

interface FutureMembersProps {
  data: IContent;
}

interface IContent {
  header: string;
  title: string;
  description?: string;
  callToOpenPosition?: string;
  background: string;
  jobs: IJob[];
}
interface IJob {
  title: string;
  url: string;
}

export default function FutureMembers({ data }: FutureMembersProps) {
  return (
    <Flex
      direction="column"
      bgPos="left"
      bgSize="cover"
      bgRepeat="no-repeat"
      bgImage={data.background}
      minH="100vh"
    >
      <Flex
        bgImage={data.header}
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
          {data.title}
        </Text>
      </Flex>
      <Flex direction="column" my="10" mx="14" w="full" justify="center">
        <Text fontWeight="light" fontSize={["2xl", "3xl"]} textAlign="left">
          {data.description}
        </Text>
        <Text fontWeight="light" fontSize={["2xl", "3xl"]} textAlign="left">
          {data.callToOpenPosition}
        </Text>
      </Flex>
    </Flex>
  );
}

export const getStaticProps: GetStaticProps = async () => {
  return {
    props: {
      data: Content,
    },
  };
};
