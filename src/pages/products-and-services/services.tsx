import {
  Text,
  Flex,
  Box,
  Icon,
  UnorderedList,
  ListItem,
} from "@chakra-ui/react";
import Content from "@/content/products-and-services/services.json";
import { LibreCodeDarkIcon } from "@/components/Logo/Dark";

interface ServicesProps {
  data: IContent;
}
interface IContent {
  title: string;
  image: string;
  background: string;
  callServices: string;
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
  return (
    <Flex
      direction="column"
      justify="center"
      align="center"
      _after={{
        content: `""`,
        position: "absolute",
        width: "100%",
        height: "100%",
        bgImage: data.background,
        bgPos: "left",
        zIndex: "-1",
        transform: "scaleX(-1)",
        bgSize: "cover",
        bgRepeat: "no-repeat",
      }}
    >
      <Flex
        w="full"
        direction="column"
        justify="center"
        align="center"
        h="full"
      >
        <Box bg="gray.900" w="full">
          <Flex
            bgImage={data.image}
            bgSize="cover"
            bgPos="bottom"
            h="450px"
            bgRepeat="no-repeat"
            justify="center"
            align="center"
          >
            <Text color="gray.50" fontSize={["6xl", "9xl"]} fontWeight="bold">
              {data.title}
            </Text>
          </Flex>
        </Box>
        <Box m="10">
          <Text
            w={{ base: "full", xl: "4xl" }}
            fontSize={{ base: "xl", xl: "2xl" }}
          >
            {data.description}
          </Text>
        </Box>
      </Flex>
      <Text fontWeight="bold" fontSize="2xl">
        {data.callServices}
      </Text>
      {data.services.map((service, index) => (
        <Flex
          justify="center"
          align="center"
          bg="gray.50"
          m="10"
          p="14"
          maxW="3xl"
          borderRadius="10"
          direction="column"
          key={`${service.title}-${index}`}
        >
          <Icon as={LibreCodeDarkIcon} fontSize="5xl" />
          <Text>{service.title}</Text>
          <Text>{service.description}</Text>
          {service.features && (
            <UnorderedList>
              {service.features.map((feature, index) => (
                <ListItem my="2" key={`${feature}-${index}`}>
                  {feature}
                </ListItem>
              ))}
            </UnorderedList>
          )}
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
