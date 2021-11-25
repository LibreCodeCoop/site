import {
  Flex,
  Stack,
  Link as ChakraLink,
  FlexProps,
  Text,
} from "@chakra-ui/react";
import Link from "next/link";
import { ReactNode } from "react";
import { ButtonTypes } from "./types";

interface ButtonLinkProps {
  type: ButtonTypes;
  text: string;
  url: string;
  font_size?: number;
}
interface LettersReturn {
  firstLetters: string;
  lastLetters: string;
}

export function ButtonLink({
  text,
  font_size = 23,
  type,
  url,
  ...rest
}: ButtonLinkProps) {
  let bgImagePath;

  if (type === ButtonTypes.hexagonal) {
    bgImagePath = "/static/background-btn-hexagon.svg";
  } else if (type === ButtonTypes.left) {
    bgImagePath = "/static/background-btn-left.svg";
  } else if (type === ButtonTypes.right) {
    bgImagePath = "/static/background-btn-right.svg";
  }

  const letters = (): LettersReturn => {
    const splitText = text.split(" ");
    const lastValue = splitText[splitText.length - 1];
    splitText.pop();

    return {
      firstLetters: splitText.join(" "),
      lastLetters: lastValue,
    };
  };

  return (
    <Link href={url} passHref>
      <ChakraLink>
        <Flex
          as="button"
          bgImage={bgImagePath}
          bgRepeat="no-repeat"
          bgSize="contain"
          bgPos="left"
          w={
            type === ButtonTypes.hexagonal
              ? "170px"
              : type === ButtonTypes.left
              ? "216px"
              : "220px"
          }
          h={type === ButtonTypes.hexagonal ? "150px" : "100px"}
          direction="column"
          pb={type === ButtonTypes.hexagonal && "4"}
          borderRadius="10px"
          justify="center"
          align="center"
          {...rest}
        >
          <Stack spacing="-2">
            <Text
              fontWeight="light"
              fontSize={font_size}
              textTransform="uppercase"
            >
              {letters().firstLetters}
            </Text>
            <Text
              fontSize="23"
              textTransform="uppercase"
              fontWeight="bold"
              color="red.800"
            >
              {letters().lastLetters}
            </Text>
          </Stack>
        </Flex>
      </ChakraLink>
    </Link>
  );
}
