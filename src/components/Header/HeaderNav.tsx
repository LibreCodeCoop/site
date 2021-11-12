import { Flex, VStack, useBreakpointValue } from "@chakra-ui/react";
import { HeaderLink } from "@/components/Header/HeaderLink";

export function HeaderNav() {
  return (
    <Flex
      justify={["space-evenly", "space-evenly", "flex-end"]}
      flexDir={["column", "column", "row"]}
      spacing="4"
      ml="28"
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
