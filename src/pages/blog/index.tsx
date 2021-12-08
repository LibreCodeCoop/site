import { Text } from "@chakra-ui/react";
import { GetStaticProps } from "next";
import Content from "@/content/blog.json";

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
  return <Text>Page in development...</Text>;
}

export const getStaticProps: GetStaticProps = async () => {
  return {
    props: {
      data: Content,
    },
  };
};
