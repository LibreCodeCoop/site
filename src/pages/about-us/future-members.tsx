import { Text, Flex, Box } from "@chakra-ui/react";
import { GetStaticProps } from "next";

import Content from "@/content/about-us/future-members.json";
import { OportunitiesCard } from "@/components/OportunitiesCard";

interface FutureMembersProps {
  data: IContent;
}

export interface IContent {
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
  githubSha: string;
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
      <Flex
        direction="column"
        my="10"
        px={{ base: "4", md: "24" }}
        w="full"
        justify="center"
      >
        <Text fontWeight="light" fontSize={["2xl", "3xl"]} textAlign="left">
          {data.description}
        </Text>
        <Text fontWeight="light" fontSize={["2xl", "3xl"]} textAlign="left">
          {data.callToOpenPosition}
        </Text>
      </Flex>
      <Flex direction="column">
        {data.jobs.map((job, index) => (
          <OportunitiesCard
            ml={{ base: "2", md: "24" }}
            title={job.title}
            url={job.url}
            key={`${job.title}-${index}`}
          />
        ))}
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
