import { Text } from "@chakra-ui/react";
import Content from "@/content/products-and-services/services.json";

interface ServicesProps {
  data: IContent;
}
interface IContent {
  title: string;
  description: string;
  services: IServices[];
}

interface IServices {
  title: string;
  description: string;
  features: string[];
  anchor: IAnchor;
}

interface IAnchor {
  type: string;
  name: string;
  url: string;
}

export default function Services({ data }: ServicesProps) {
  return <Text>Page in development...</Text>;
}

export function getStaticProps() {
  return {
    props: {
      data: Content,
    },
  };
}
