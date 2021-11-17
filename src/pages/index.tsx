import { Flex, Divider, Text } from "@chakra-ui/react";
import HomeContent from "@/content/home.json";
import { ButtonTypes } from "@/components/ButtonLink/types";
import { ButtonLink } from "@/components/ButtonLink";

interface TitleProps {
  name: string;
  font_color: string;
}
interface AnchorProps {
  name: string;
  type: "left" | "right" | "hexagonal";
  url: string;
}

interface ContentSections {
  title: TitleProps;
  image: string;
  description: string;
  anchor: AnchorProps;
}

interface ContentProps {
  title: TitleProps;
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
  function splitValuePhrase(value) {
    const valueSplited = value.split(" ");
    const lastValue = valueSplited[valueSplited.length - 1];
    valueSplited.pop();
    const returnValue = valueSplited.join(" ");
    return `${returnValue} ${String(lastValue).fontcolor("red")}`;
  }

  return (
    <Flex direction="column">
      <Flex
        bgImage={data.image}
        bgSize="auto auto"
        h="400px"
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
      </Flex>
      {data.sections.map((section, index) => (
        <Flex
          as="section"
          w="100%"
          key={`${section.title.name}-${index}`}
          bgImage={section.image}
          bgSize="auto auto"
          h="400px"
          bgRepeat="no-repeat"
          bgPos="left center"
          zIndex="-1"
          justify="center"
          align="center"
          direction="column"
        >
          <Text
            fontSize="6xl"
            color={section.title.font_color}
            fontWeight="bold"
          >
            {section.title.name}
          </Text>
          <Text>{section.description}</Text>
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
