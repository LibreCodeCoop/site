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
    <Flex bg="gray.900" direction="column">
      <Head>
        <title>Produtos e Serviços</title>
      </Head>
      <Flex
        h="100vh"
        bgImage={data.image}
        bgSize="cover"
        bgRepeat="no-repeat"
        bgPos="center"
        justify="center"
        align="center"
        zIndex="auto"
        direction="column"
      >
        <Text
          color="gray.50"
          fontWeight="bold"
          fontSize={["4xl", "7xl", "9xl"]}
        >
          {data.title}
        </Text>
      </Flex>

      {data.sections.map((section, index) => (
        <Flex
          key={`${section.title}-${index}`}
          h="100vh"
          bgImage={section.image}
          bgSize="cover"
          bgRepeat="no-repeat"
          bgPos="center"
          justify="center"
          align="center"
          direction="column"
        >
          <Text
            color="gray.50"
            fontWeight="bold"
            fontSize={["4xl", "7xl", "9xl"]}
          >
            {section.title}
          </Text>

          <ButtonLink
            font_size={25}
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
