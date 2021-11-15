import { Flex, VStack, useBreakpointValue } from "@chakra-ui/react";
import { HeaderLink } from "@/components/Header/HeaderLink";

export function HeaderNav() {
  return (
    <Flex
      justify={["space-evenly", "space-evenly", "flex-end"]}
      flexDir={["column", "column", "row"]}
      spacing="4"
      align={["center", "center", "flex-end"]}
      mb={["0", "0", "10"]}
      ml={["0", "0", "28"]}
      h={{
        base: "80vh",
        lg: "100%",
      }}
    >
      <HeaderLink title="Home" url="/" />
      <HeaderLink title="Quem Somos" url="/about-us" />
      <HeaderLink title="Produtos e Serviços" url="products-and-services" />
      <HeaderLink title="Blog" url="/blog" />
      <HeaderLink title="Eventos" url="/events" />
      <HeaderLink title="Apoie" url="/apoie" />
      <HeaderLink title="Contato" url="/contact" />
    </Flex>
  );
}
