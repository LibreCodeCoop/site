import { Flex, Link as ChakraLink, FlexProps, Text } from "@chakra-ui/react";
import Link from "next/link";
import { ReactNode } from "react";
import { ButtonTypes } from "./types";

interface ButtonLinkProps {
  type: ButtonTypes;
  text: string;
  url: string;
}
interface LettersReturn {
  firstLetters: string;
  lastLetters: string;
}

export function ButtonLink({ text, type, url, ...rest }: ButtonLinkProps) {
  let bgImagePath;

  if (type === ButtonTypes.hexagonal) {
    bgImagePath = "url('static/background-btn-hexagon.svg')";
  } else if (type === ButtonTypes.left) {
    bgImagePath = "url('static/background-btn-left.svg')";
  } else if (type === ButtonTypes.right) {
    bgImagePath = "url('static/background-btn-right.svg')";
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
          <Text fontWeight="light" fontSize="20">
            {letters().firstLetters}
          </Text>
          <Text
            fontSize="20"
            textTransform="capitalize"
            fontWeight="extrabold"
            color="red.800"
          >
            {letters().lastLetters}
          </Text>
        </Flex>
      </ChakraLink>
    </Link>
  );
}
