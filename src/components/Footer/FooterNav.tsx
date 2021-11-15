import { VStack } from "@chakra-ui/react";
import { FooterLink } from "./FooterLink";

export function FooterNav() {
  return (
    <VStack alignItems="start">
      <FooterLink text="Home" url="/" />
      <FooterLink text="Sobre a LibreCode" url="/about-us" />
      <FooterLink text="Produtos e Serviços" url="/products-and-services" />
      <FooterLink text="Blog" url="/blog" />
      <FooterLink text="Eventos" url="/events" />
      <FooterLink text="Apoie" url="/apoie" />
      <FooterLink text="Contato" url="/contact" />
    </VStack>
  );
}
