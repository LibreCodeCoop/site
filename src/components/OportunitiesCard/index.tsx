import { Flex, Text, FlexProps } from "@chakra-ui/react";
import { LogoLibreCode } from "./LogoLibreCode";

interface OportunitiesCardProps extends FlexProps {
  title: string;
  typeOfJob?: "Remoto" | "Presencial";
  time?: string;
}

export function OportunitiesCard({
  title,
  typeOfJob,
  time,
  ...rest
}: OportunitiesCardProps) {
  return (
    <Flex {...rest} direction="row" p="4">
      <LogoLibreCode />
      <Flex direction="column" my="4" ml="6">
        <Text>{title}</Text>
        <Text>LibreCode</Text>
        <Text>Rio de Janeiro, RJ, Brasil - {typeOfJob || "Remoto"}</Text>
        {time ? <Text>Há {time}</Text> : ""}
      </Flex>
    </Flex>
  );
}
