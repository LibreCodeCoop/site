import { Flex, Link as ChakraLink, FlexProps } from "@chakra-ui/react";
import Link from "next/link";
import { ReactNode } from "react";
import { ButtonTypes } from "./types";

interface ButtonLinkProps {
  type: ButtonTypes;
  url: string;
  children: ReactNode;
}

export function ButtonLink({ type, children, url, ...rest }: ButtonLinkProps) {
  let bgImagePath;

  if (type === ButtonTypes.hexagonal) {
    bgImagePath = "url('static/background-btn-hexagon.svg')";
  } else if (type === ButtonTypes.left) {
    bgImagePath = "url('static/background-btn-left.svg')";
  } else if (type === ButtonTypes.right) {
    bgImagePath = "url('static/background-btn-right.svg')";
  }

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
          {children}
        </Flex>
      </ChakraLink>
    </Link>
  );
}
