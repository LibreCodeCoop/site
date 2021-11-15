import { Link as ChakraLink, Text } from "@chakra-ui/react";
import Link from "next/link";

interface FooterLinkProps {
  url: string;
  text: string;
}

export function FooterLink({ url, text }: FooterLinkProps) {
  return (
    <Link href={url} passHref>
      <ChakraLink>
        <Text>{text}</Text>
      </ChakraLink>
    </Link>
  );
}
