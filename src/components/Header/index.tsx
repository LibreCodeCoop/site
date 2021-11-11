import { Flex, Stack, Text, Link as ChakraLink } from "@chakra-ui/react";
import { ActiveLink } from "@/components/ActiveLink";
import Logo from "./Logo";

interface IProps {
  name: string;
  link: string;
}

interface ComponentProps {
  menuLinks: IProps[];
}

export const Header = ({ menuLinks }: ComponentProps) => {
  return (
    <Flex
      bg="gray.100"
      h="150px"
      justify="space-around"
      align="center"
      bgImage={[
        "url('/static/background-hover-mobile.svg')",
        "url('/static/background-hover-desktop.svg')",
      ]}
    >
      <Flex
        flexDir={["column", "column", "row", "row"]}
        mt="20"
        ml="40"
        spacing="4"
      >
        <ActiveLink href="/" passHref>
          <ChakraLink>
            <Text ml="4">Home</Text>
          </ChakraLink>
        </ActiveLink>
        <ActiveLink href="/" passHref>
          <ChakraLink>
            <Text ml="4">Quem Somos</Text>
          </ChakraLink>
        </ActiveLink>
        <ActiveLink href="/" passHref>
          <ChakraLink>
            <Text ml="4">Produtos e Serviços</Text>
          </ChakraLink>
        </ActiveLink>
        <ActiveLink href="/" passHref>
          <ChakraLink>
            <Text ml="4">Blog</Text>
          </ChakraLink>
        </ActiveLink>
        <ActiveLink href="/" passHref>
          <ChakraLink>
            <Text ml="4">Eventos</Text>
          </ChakraLink>
        </ActiveLink>
        <ActiveLink href="/" passHref>
          <ChakraLink>
            <Text ml="4">Apoie</Text>
          </ChakraLink>
        </ActiveLink>
        <ActiveLink href="/" passHref>
          <ChakraLink>
            <Text ml="4">Contato</Text>
          </ChakraLink>
        </ActiveLink>
      </Flex>
    </Flex>
  );
};
