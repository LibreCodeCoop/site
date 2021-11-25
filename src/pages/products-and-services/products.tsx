import { Text, Flex, Box } from "@chakra-ui/react";
import Content from "@/content/products-and-services/produtos.json";
import { ButtonLink } from "@/components/ButtonLink";
import { ButtonTypes } from "@/components/ButtonLink/types";

interface ProductsProps {
  data: IContent;
}
interface IContent {
  title: string;
  image: string;
  background: string;
  description: string;
  products: IProducts[];
}

interface IProducts {
  title: string;
  description: string;
  features: string[];
  anchor: IAnchor;
}

interface IAnchor {
  type: ButtonTypes;
  name: string;
  url: string;
}

export default function Products({ data }: ProductsProps) {
  function getTypeButton(type) {
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
    <Flex
      bgImage={data.background}
      bgRepeat="repeat-y"
      bgSize="cover"
      bgPos="left"
      w="full"
      direction="column"
    >
      <Flex direction="column" justify="center" align="center" h="full">
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
            <Text color="gray.50" fontSize={["6xl", "8xl"]} fontWeight="bold">
              {data.title}
            </Text>
          </Flex>
        </Box>
        <Box m="10">
          <Text w="4xl" fontSize="2xl">
            {data.description}
          </Text>
        </Box>
      </Flex>
      {data.products.map((product, index) => (
        <Flex
          justify="center"
          align="center"
          bg="gray.50"
          my="10"
          p="10"
          direction="column"
          key={`${product.title}-${index}`}
        >
          <Text color="gray.900" fontWeight="bold" fontSize="5xl">
            {product.title}
          </Text>
          <Text fontSize="xl" color="gray.900">
            {product.description}
          </Text>
          {product.features && (
            <Flex direction="column">
              {product.features.map((feature, index) => (
                <Text key={`${feature}-index`}>{feature}</Text>
              ))}
            </Flex>
          )}
          <ButtonLink
            text={product.anchor.name}
            url={product.anchor.url}
            type={getTypeButton(product.anchor.type)}
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
