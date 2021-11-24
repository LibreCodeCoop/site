import Head from "next/head";
import { Flex, Text } from "@chakra-ui/react";
import Content from "@/content/products-and-services/index.json";
import { ButtonLink } from "@/components/ButtonLink";
import { ButtonTypes } from "@/components/ButtonLink/types";

interface ProductsAndServicesProps {
  data: IContent;
}

interface IContent {
  title: string;
  image: string;
  sections: ISections[];
}

interface ISections {
  title: string;
  image: string;
  anchor: IAnchor;
}

interface IAnchor {
  name: string;
  type: string;
  url: string;
}

export default function ProductsAndServices({
  data,
}: ProductsAndServicesProps) {
  function getTypeOfButton(type) {
    switch (type) {
      case "left":
        return ButtonTypes.left;
      case "right":
        return ButtonTypes.right;
      case "hexagonal":
        return ButtonTypes.hexagonal;
    }
  }

  return (
    <Flex h="100vh" color="gray.50" bg="gray.900" direction="column">
      <Head>
        <title>Produtos e Serviços</title>
      </Head>
      <Flex bgImage={data.image}>
        <Text>{data.title}</Text>
      </Flex>

      {data.sections.map((section, index) => (
        <Flex key={`${section.title}-${index}`}>
          <Text>{section.title}</Text>

          <ButtonLink
            text={section.anchor.name}
            url={section.anchor.url}
            type={getTypeOfButton(section.anchor.type)}
          />
        </Flex>
      ))}
    </Flex>
  );
}

export function getStaticProps() {
  return {
    props: {
      data: Content,
    },
  };
}
