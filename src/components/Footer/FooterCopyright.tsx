import { Flex, Img, Text } from "@chakra-ui/react";

export function FooterCopyright() {
  return (
    <Flex direction="column" justify="center" align="center">
      <Img mb="10" src="/static/logo.png" />
      <Text>
        © Copyright <strong>LibreCode.</strong> Todos os direitos reservados.
      </Text>
    </Flex>
  );
}
