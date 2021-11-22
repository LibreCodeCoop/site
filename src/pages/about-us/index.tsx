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

enum SectionMarginTop {
  cooperativismo = "-50px",
  softwarelivre = "-60px",
  nossoscooperados = "-80px",
  futuroscooperados = "-200px",
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

  function getSectionMarginTop(section: ISections) {
    switch (section.title.name.split(" ").join("").toLowerCase().trim()) {
      case "cooperativismo":
        return SectionMarginTop.cooperativismo;
      case "softwarelivre":
        return SectionMarginTop.softwarelivre;
      case "nossoscooperados":
        return SectionMarginTop.nossoscooperados;
      case "futuroscooperados":
        return SectionMarginTop.futuroscooperados;
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
        bgPos={{ base: "bottom right", xl: "bottom center" }}
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
          minH="100vh"
          bgRepeat="no-repeat"
          bgPos={{ base: "top center", xl: "top center" }}
          zIndex={index}
          justify="center"
          align="center"
          direction="column"
          h="full"
          mt={getSectionMarginTop(section)}
          maxH="883px"
        >
          <Text
            fontSize={["3xl", "4xl", "6xl", "8xl", "9xl"]}
            color={section.title.fontColor}
            fontWeight="bold"
          >
            {section.title.name}
          </Text>
          {section.anchor ? (
            <ButtonLink
              type={ReturnTypeButton(section.anchor.type)}
              url={section.anchor.url}
              text={section.anchor.name}
              font_size={23}
            />
          ) : (
            <Text
              fontSize={["2xl", "4xl"]}
              fontWeight="bold"
              color={section.title.fontColor}
            >
              {section.description}
            </Text>
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
