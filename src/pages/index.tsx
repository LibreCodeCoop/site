import { Flex, Divider, Text, Icon } from "@chakra-ui/react";
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
        return "-80px";
      case "criamos":
        return "-130px";
      case "desenvolvemos":
        return "-165px";
      case "implantamos":
        return "-110px";
      case "aprimoramos":
        return "-165px";
      case "integramos":
        return "-80px";
      case "treinamos":
        return "-15px";
      case "mantemos":
        return "-155px";
      default:
        return "0";
    }
  }

  return (
    <Flex direction="column">
      <Flex
        bgImage={data.image}
        bgSize="cover"
        h="600px"
        bgRepeat="no-repeat"
        bgPos="left center"
        zIndex="-1"
        justify="center"
        align="center"
        direction="column"
      >
        <Text fontSize="6xl" color={data.title.font_color} fontWeight="bold">
          {data.title.name}
        </Text>
        <Divider w="40px" />

        <Icon as={MouseScroll} fontSize="3xl" />
      </Flex>
      {data.sections.map((section, index) => (
        <Flex
          as="section"
          w="100%"
          key={`${section.title.name}-${index}`}
          bgImage={section.image}
          bgSize="cover"
          h="920px"
          bgRepeat="no-repeat"
          bgPos="top center"
          zIndex={index}
          justify="center"
          align="center"
          direction="column"
          mt={getMarginTop(section)}
        >
          <Text
            fontSize="6xl"
            color={section.title.font_color}
            fontWeight="bold"
          >
            {section.title.name}
          </Text>
          <Text>{section.description.name}</Text>
          <ButtonLink
            type={ReturnTypeButton(section.anchor.type)}
            url={section.anchor.url}
            text={section.anchor.name}
            font_size={section.title.name === "Guiamos" ? 34 : 23}
          />
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
