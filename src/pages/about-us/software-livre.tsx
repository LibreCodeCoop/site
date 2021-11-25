import { Text, Flex, OrderedList, Link, ListItem } from "@chakra-ui/react";
import Content from "@/content/about-us/software-livre.json";

interface SoftwareLivreProps {
  data: IContent;
}

interface IContent {
  title: ITitle;
  description: string;
  pilars: string[];
  subSection: ISubSection;
  image: string;
  background: string;
  mainSectionTitle: string;
}
interface ITitle {
  name: string;
  color: string;
}

interface ISubSection {
  title: string;
  description: string;
  anchor?: string;
}

export default function SoftwareLivre({ data }: SoftwareLivreProps) {
  return (
    <Flex direction="column">
      <Flex
        direction="column"
        justify="center"
        align="center"
        h="400px"
        bgImage={data.image}
        bgSize="cover"
        bgPos="bottom"
        bgRepeat="no-repeat"
      >
        <Text fontSize={["6xl", "8xl"]} fontWeight="bold" color="darkBlue.100">
          {data.title.name}
        </Text>
      </Flex>
      <Text
        fontSize={["xl", "3xl"]}
        fontWeight="normal"
        color="darkBlue.100"
        mx={{ base: "8", xl: "24" }}
      >
        {data.description}
      </Text>
      <Flex
        color="darkBlue.100"
        direction="column"
        mx={{ base: "8", xl: "24" }}
      >
        <Text
          fontSize="5xl"
          fontWeight="bold"
          my="10"
          borderTop="1px solid black"
          borderBottom="1px solid black"
          w={{ base: "full", xl: "3xl" }}
          py="4"
          px="2"
        >
          {data.mainSectionTitle}
        </Text>
        <OrderedList>
          {data.pilars.map((pilars, index) => (
            <ListItem
              fontSize="2xl"
              fontWeight="normal"
              my="2"
              key={`${pilars}-${index}`}
            >
              {pilars}
            </ListItem>
          ))}
        </OrderedList>
      </Flex>
      <Flex
        color="darkBlue.100"
        my="6"
        direction="column"
        mx={{ base: "8", xl: "24" }}
      >
        <Text my="4" fontSize="4xl" fontWeight="bold">
          {data.subSection.title}
        </Text>
        <Text fontSize="2xl" color="darkBlue.100" textAlign="left">
          {data.subSection.description}
        </Text>
        <Link w="xl" variant="unstyled" href={data.subSection.anchor}>
          <Text
            fontWeight="bold"
            fontSize="2xl"
            borderBottom="2px solid #f26522"
          >
            {data.subSection.anchor}
          </Text>
        </Link>
      </Flex>
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
