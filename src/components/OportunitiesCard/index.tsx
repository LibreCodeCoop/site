import { Flex, Text, FlexProps, Link as ChakraLink } from "@chakra-ui/react";
import Link from "next/link";
import { LogoLibreCode } from "./LogoLibreCode";

interface OportunitiesCardProps extends FlexProps {
  title: string;
  typeOfJob?: "Remoto" | "Presencial";
  time?: string;
  url: string;
}

export function OportunitiesCard({
  title,
  typeOfJob,
  time,
  url,
  ...rest
}: OportunitiesCardProps) {
  return (
    <Flex {...rest} direction="row" p="4">
      <LogoLibreCode />
      <Flex color="darkBlue.100" direction="column" my="4" ml="6">
        <Link href={url} passHref>
          <ChakraLink target="_blank">
            <Text fontWeight="bold">{title}</Text>
          </ChakraLink>
        </Link>
        <Text>LibreCode</Text>
        <Text>Rio de Janeiro, RJ, Brasil - {typeOfJob || "Remoto"}</Text>
        {time ? <Text>Há {time}</Text> : ""}
      </Flex>
    </Flex>
  );
}
