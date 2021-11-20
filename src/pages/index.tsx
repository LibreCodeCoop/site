import { Flex, Divider, Text, Icon } from "@chakra-ui/react";
import Head from "next/head";
import HomeContent from "@/content/home.json";
import { ButtonTypes } from "@/components/ButtonLink/types";
import { ButtonLink } from "@/components/ButtonLink";
import { MouseScroll } from "@/components/MouseScroolIcon";

interface DescriptionProps {
  name: string;
  font_color: string;
}
interface AnchorProps {
  name: string;
  type: "left" | "right" | "hexagonal";
  url: string;
}
interface ContentSections {
  title: DescriptionProps;
  image: string;
  description: DescriptionProps;
  anchor: AnchorProps;
  bgColor: string;
}
interface ContentProps {
  title: DescriptionProps;
  image: string;
  sections: ContentSections[];
}
interface HomeProps {
  data: ContentProps;
}
interface AlignReturn {
  align: string[] | string;
  ml?: string[] | string;
  alignDescription?: string[] | string;
}

enum SectionMarginTop {
  guiamos = "-70px",
  criamos = "-130px",
  desenvolvemos = "-170px",
  implantamos = "-110px",
  aprimoramos = "-170px",
  integramos = "-80px",
  treinamos = "-15px",
  mantemos = "-165px",
}

export default function Home({ data }: HomeProps) {
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

  function getMarginTop(section: ContentSections) {
    switch (section.title.name.toLowerCase()) {
      case "guiamos":
        return SectionMarginTop.guiamos;
      case "criamos":
        return SectionMarginTop.criamos;
      case "desenvolvemos":
        return SectionMarginTop.desenvolvemos;
      case "implantamos":
        return SectionMarginTop.implantamos;
      case "aprimoramos":
        return SectionMarginTop.aprimoramos;
      case "integramos":
        return SectionMarginTop.integramos;
      case "treinamos":
        return SectionMarginTop.treinamos;
      case "mantemos":
        return SectionMarginTop.mantemos;
      default:
        return 0;
    }
  }

  function getAlign(section: ContentSections): AlignReturn {
    switch (section.title.name.toLowerCase()) {
      case "desenvolvemos":
        return {
          align: ["center", "center", "center", "flex-start"],
          ml: ["2", "2", "20"],
        };
      case "implantamos":
        return { align: "center", ml: ["2", "2", "2", "64"] };
      case "aprimoramos":
        return {
          align: ["center", "center", "center", "flex-end"],
          alignDescription: ["inherit", "inherit", "center"],
        };
      case "integramos":
        return { align: ["center", "center", "center", "flex-end"] };
      case "treinamos":
        return { align: ["center", "center", "center", "flex-start"] };
      case "mantemos":
        return { align: ["center", "center", "center", "flex-end"] };
      default:
        return { align: "center", ml: [] };
    }
  }

  function getFontColor(section: ContentSections) {
    if (section.title.name.toLowerCase() == "aprimoramos") {
      return { base: "gray.800", lg: section.description.font_color };
    }
    return section.description.font_color;
  }

  return (
    <Flex direction="column">
      <Head>
        <title>Home</title>
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
          fontSize={["5xl", "9xl"]}
          color={data.title.font_color}
          fontWeight="bold"
        >
          {data.title.name}
        </Text>
        <Divider w="40px" />
        <Icon mt={{ base: "14", lg: "24" }} as={MouseScroll} fontSize="5xl" />
      </Flex>

      {data.sections.map((section, index) => (
        <Flex
          as="section"
          w="100%"
          key={`${section.title.name}-${index}`}
          bgImage={section.image}
          bgSize="cover"
          minH="950px"
          h="100vh"
          bgRepeat="no-repeat"
          bgPos="top center"
          zIndex={index}
          justify="center"
          align={getAlign(section).align}
          direction="column"
          mt={getMarginTop(section)}
          pl={getAlign(section).ml}
          px={{ lg: "4" }}
        >
          <Text
            fontSize={["5xl", "5xl", "6xl", "9xl"]}
            color={section.title.font_color}
            fontWeight="bold"
            alignSelf={getAlign(section).alignDescription}
          >
            {section.title.name}
          </Text>

          <Flex
            direction="column"
            justify="center"
            align="center"
            w={["full", "full", "full", "md"]}
          >
            <Text
              fontSize={["xl", "xl", "2xl", "4xl"]}
              fontWeight="medium"
              color={getFontColor(section)}
              mb="10"
              mx={2}
              textAlign="center"
            >
              {section.description.name}
            </Text>

            <ButtonLink
              type={ReturnTypeButton(section.anchor.type)}
              url={section.anchor.url}
              text={section.anchor.name}
              font_size={
                section.anchor.name.toLowerCase().includes("peça seu ")
                  ? 34
                  : 23
              }
            />
          </Flex>
        </Flex>
      ))}
    </Flex>
  );
}

export async function getStaticProps() {
  return {
    props: {
      data: HomeContent,
    },
  };
}
