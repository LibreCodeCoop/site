import { Flex, Divider, useBreakpointValue } from "@chakra-ui/react";
import { HeaderLink } from "@/components/Header/HeaderLink";
import { SearchBox } from "./SearchBox";

export function HeaderNav({ ...rest }) {
  const isWideMode = useBreakpointValue({
    base: true,
    md: false,
  });

  return (
    <Flex
      justify={["space-evenly", "space-evenly", "flex-end"]}
      flexDir={["column", "column", "row"]}
      spacing="4"
      align={["center", "center", "flex-end"]}
      h="100%"
      zIndex="20"
      {...rest}
    >
      <HeaderLink title="Home" url="/" />
      <HeaderLink title="Quem Somos" url="/about-us" />
      <HeaderLink title="Produtos e Serviços" url="/products-and-services" />
      <HeaderLink title="Blog" url="/blog" />
      <HeaderLink title="Eventos" url="/events" />
      <HeaderLink title="Apoie" url="/apoie" />
      <HeaderLink title="Contato" url="/contact" />
      <Divider orientation="vertical" h="30px" ml="4" />
      {!isWideMode && <SearchBox alignSelf="flex-end" />}
    </Flex>
  );
}
