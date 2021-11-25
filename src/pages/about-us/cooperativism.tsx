import { Text, Flex, OrderedList, ListItem, Link } from "@chakra-ui/react";
import Content from "@/content/about-us/cooperativismo.json";

interface CooperativismProps {
  data: IContent;
}
interface ITitle {
  name: string;
  color: string;
}
interface IContent {
  title: ITitle;
  description: string;
  image: string;
  mainSectionTitle: string;
  background: string;
  principles: string[];
  subSection: ISection;
}
interface ISection {
  title: string;
  description: string;
  anchor: string;
}

export default function Cooperativism({ data }: CooperativismProps) {
  return (
    <Flex
      direction="column"
      _after={{
        content: `""`,
        position: "absolute",
        width: "100%",
        height: "100%",
        bgImage: data.background,
        bgPos: "left",
        zIndex: "-1",
        bgSize: "cover",
        bgRepeat: "no-repeat",
      }}
    >
      <Flex
        direction="column"
        bgImage={data.image}
        h="400px"
        bgSize="cover"
        bgPos="bottom"
        bgRepeat="no-repeat"
        justify="center"
        align="center"
      >
        <Text
          fontSize={["3xl", "5xl", "7xl"]}
          fontWeight="bold"
          color={data.title.color}
        >
          {data.title.name}
        </Text>
      </Flex>
      <Text
        fontSize="2xl"
        textAlign="justify"
        lineHeight="10"
        color="darkBlue.100"
        my={{ base: "8", xl: "10" }}
        mx={{ base: "8", xl: "24" }}
        fontWeight="light"
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
          w={{ base: "full", xl: "lg" }}
          py="4"
          px="2"
        >
          {data.mainSectionTitle}
        </Text>
        <OrderedList>
          {data.principles.map((principle, index) => (
            <ListItem
              fontSize="2xl"
              fontWeight="normal"
              my="2"
              key={`${principle}-${index}`}
            >
              {principle}
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
        <Link w="xs" variant="unstyled" href={data.subSection.anchor}>
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
