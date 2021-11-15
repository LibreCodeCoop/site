import { Img, Link as ChakraLink } from "@chakra-ui/react";
import Link from "next/link";

export default function Logo() {
  return (
    <Link href="/" passHref>
      <ChakraLink>
        <Img src="/static/logo.png" htmlWidth="150px" />
      </ChakraLink>
    </Link>
  );
}
