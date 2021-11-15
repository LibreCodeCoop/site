import { Flex } from "@chakra-ui/react";
import { FooterCopyright } from "./FooterCopyright";
import { FooterNav } from "./FooterNav";

export default function Footer() {
  return (
    <Flex
      color="whiteAlpha.900"
      dir="row"
      h="450px"
      justify="space-around"
      align="flex-end"
      pb="10"
      zIndex="20"
      _after={{
        content: `""`,
        color: "whiteAlpha.900",
        position: "absolute",
        bg: "gray.900",
        w: "100%",
        h: "390px",
        zIndex: "-1",
        left: 0,
        bottom: 0,
        clipPath: "polygon(0 0, 100% 20%, 100% 100%, 0% 100%)",
      }}
      _before={{
        content: `""`,
        color: "whiteAlpha.900",
        position: "absolute",
        bg: "gray.50",
        w: "100%",
        h: "440px",
        zIndex: "-1",
        left: 0,
        bottom: 0,
        clipPath: "polygon(0 0, 100% 29%, 100% 100%, 0% 100%)",
      }}
    >
      <FooterNav />

      <FooterCopyright />
    </Flex>
  );
}
