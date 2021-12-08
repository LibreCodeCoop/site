import { Flex, Text, Icon } from "@chakra-ui/react";
import { GetStaticProps } from "next";
import Content from "@/content/blog.json";
import { MouseScroll } from "@/components/MouseScroolIcon";

interface BlogProps {
  data: IContent;
}

interface IContent {
  header: IHeader;
}

interface IHeader {
  title: string;
  background: string;
}

export default function Blog({ data }: BlogProps) {
  return (
    <Flex direction="column">
      <Flex
        bgImage={data.header.background}
        bgPos="bottom"
        bgRepeat="no-repeat"
        bgSize="cover"
        h="500px"
        justify="center"
        align="center"
        direction="column"
      >
        <Text
          fontSize={{ base: "6xl", xl: "8xl" }}
          fontWeight="bold"
          color="gray.50"
        >
          {data.header.title}
        </Text>
        <Icon
          mt={{ base: "10", lg: "14" }}
          as={MouseScroll}
          fontSize={["4xl", "5xl"]}
        />
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
