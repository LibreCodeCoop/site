import { Text } from "@chakra-ui/react";
import Content from "@/content/about-us/software-livre.json";

interface SoftwareLivreProps {
  data: IContent;
}

interface IContent {
  title: string;
  description: string;
  pilars: string[];
  subSection: ISubSection;
}

interface ISubSection {
  title: string;
  description: string;
  anchor: string;
}

export default function SoftwareLivre({ data }: SoftwareLivreProps) {
  return <Text>Page in development...</Text>;
}

export function getStaticProps() {
  return {
    props: {
      data: Content,
    },
  };
}
