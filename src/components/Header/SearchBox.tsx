import { useSearchBox } from "@/context/SearchBarContext";
import {
  Flex,
  Input,
  Stack,
  Icon,
  HStack,
  RadioGroup,
  Radio,
  Box,
  IconButton,
  Divider,
} from "@chakra-ui/react";
import { useState } from "react";
import { RiSearchLine } from "react-icons/ri";

export function SearchBox({ ...rest }) {
  const { searchBoxState, toggleSearchBox } = useSearchBox();

  return (
    <>
      {searchBoxState ? (
        <Flex
          as="label"
          bg="gray.50"
          p="10px"
          w="210px"
          direction="column"
          borderRadius="8"
          ml="4"
          alignSelf="flex-end"
          {...rest}
        >
          <HStack border="1px" borderRadius="10" w="100%">
            <Icon color="cyan.400" ml="2" as={RiSearchLine} fontSize="20" />
            <Input variant="unstyled" px="1" mr="4" />
          </HStack>
        </Flex>
      ) : (
        <Flex justify="center" align="center">
          <IconButton
            icon={<Icon as={RiSearchLine} />}
            fontSize="20"
            variant="unstyled"
            aria-label="Open Search Box"
            onClick={toggleSearchBox}
            mr="2"
          ></IconButton>
        </Flex>
      )}
    </>
  );
}
