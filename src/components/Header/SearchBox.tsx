import {
  Flex,
  Input,
  Stack,
  Icon,
  HStack,
  RadioGroup,
  Radio,
} from "@chakra-ui/react";
import { useState } from "react";
import { RiSearchLine } from "react-icons/ri";
export function SearchBox() {
  const [selection, setSelection] = useState("");

  return (
    <Flex
      as="label"
      bg="gray.50"
      p="10px"
      w="100%"
      direction="column"
      borderRadius="4"
    >
      <HStack border="1px" borderRadius="10" w="100%">
        <Icon color="cyan.400" ml="2" as={RiSearchLine} fontSize="20" />
        <Input variant="unstyled" px="4" mr="4" />
      </HStack>
      <RadioGroup onChange={setSelection} value={selection}>
        <Stack spacing="1" mt="5">
          <Radio colorScheme="facebook" value="all">
            Em todo o site
          </Radio>
          <Radio colorScheme="facebook" value="single">
            Somente nesta página
          </Radio>
        </Stack>
      </RadioGroup>
    </Flex>
  );
}
