import { Link as ChakraLink, Text } from "@chakra-ui/react";
import { ActiveLink } from "@/components/ActiveLink";

interface HeaderLinkProps {
  title: string;
  url: string;
}

export function HeaderLink({ title, url }: HeaderLinkProps) {
  return (
    <ActiveLink href={url} passHref>
      <ChakraLink ml="4">
        <Text fontWeight="medium">{title}</Text>
      </ChakraLink>
    </ActiveLink>
  );
}
