import { Flex, Text, Divider, Icon } from "@chakra-ui/react";
import Head from "next/head";

import AboutUsContent from "@/content/about-us/index.json";
import { MouseScroll } from "@/components/MouseScroolIcon";
import { ButtonLink } from "@/components/ButtonLink";
import { ButtonTypes } from "@/components/ButtonLink/types";

interface ContentProps {
  title: IDescription;
  image: string;
  sections: ISections[];
}
interface AnchorProps {
  name: string;
  type: "left" | "right" | "hexagonal";
  url: string;
}
interface ISections {
  title: IDescription;
  description?: string;
  anchor?: AnchorProps;
  url?: string;
  image: string;
}

interface IDescription {
  name: string;
  fontColor: string;
}

interface AboutUsProps {
  data: ContentProps;
}

export default function AboutUs({ data }: AboutUsProps) {
  function ReturnTypeButton(type) {
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
    <Flex direction="column">
      <Head>
        <title>Quem Somos</title>
      </Head>
      <Flex
        bgImage={data.image}
        bgSize="cover"
        h="100vh"
        bgRepeat="no-repeat"
        bgPos={{ base: "center", xl: "bottom center" }}
        zIndex="-1"
        justify="center"
        align="center"
        direction="column"
      >
        <Text
          color={data.title.fontColor}
          fontWeight="bold"
          fontSize={["3xl", "4xl", "6xl", "8xl", "9xl"]}
        >
          {data.title.name}
        </Text>
        <Divider w="40px" />
        <Icon
          mt={{ base: "14", lg: "24" }}
          as={MouseScroll}
          fontSize={["3xl", "4xl", "5xl"]}
        />
      </Flex>

      {data.sections.map((section, index) => (
        <Flex
          as="section"
          w="100%"
          key={`${section.title.name}-${index}`}
          bgImage={section.image}
          bgSize="cover"
          h="full"
          minH="500px"
          bgRepeat="no-repeat"
          bgPos="top center"
          zIndex={index}
          mt="-22px"
          justify="center"
          direction="column"
          px={{ lg: "4" }}
        >
          <Text>{section.title.name}</Text>
          {section.anchor ? (
            <ButtonLink
              type={ReturnTypeButton(section.anchor.type)}
              url={section.anchor.url}
              text={section.anchor.name}
              font_size={23}
            />
          ) : (
            <Text>{section.description}</Text>
          )}
        </Flex>
      ))}
    </Flex>
  );
}

export async function getStaticProps() {
  return {
    props: {
      data: AboutUsContent,
    },
  };
}
