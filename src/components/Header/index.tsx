import { Icon, Flex, IconButton, useBreakpointValue } from "@chakra-ui/react";
import { HeaderNav } from "@/components/Header/HeaderNav";
import { SearchBox } from "./SearchBox";
import { useHeaderDrawer } from "@/context/HeaderDrawerContext";
import { RiMenuLine } from "react-icons/ri";
import { HeaderDrawer } from "./HeaderDrawer";
import Logo from "./Logo";

interface IProps {
  name: string;
  link: string;
}

export const Header = () => {
  const { onOpen } = useHeaderDrawer();
  const isDrawerSidebar = useBreakpointValue({
    base: true,
    md: false,
  });

  return (
    <Flex
      bg="gray.100"
      h="150px"
      justify="center"
      align={["center", "center", "flex-end"]}
      _before={{
        content: `""`,
        position: "absolute",
        width: "100%",
        height: "100%",
        bgImage: {
          base: "url('/static/texture-right-Mobile.png')",
          lg: "url('/static/texture-right-Desktop.png')",
        },
        bgPos: "bottom left",
        bgRepeat: "no-repeat",
        bgSize: "auto auto",
        backgroundOrigin: "border-box",
      }}
      _after={{
        content: `""`,
        position: "absolute",
        width: "100%",
        height: "100%",
        bgImage: {
          base: "url('/static/texture-left-Mobile.png')",
          lg: "url('/static/texture-left-Desktop.png')",
        },
        bgPos: "bottom right",
        bgRepeat: "no-repeat",
        bgSize: "auto",
        backgroundOrigin: "border-box",
      }}
    >
      {isDrawerSidebar ? (
        <Flex
          direction="column"
          align="center"
          w="100%"
          h="100%"
          justify="center"
          zIndex="20"
        >
          <Logo />
          <Flex mt="4" w="100%" align="center" justify="center">
            <IconButton
              icon={<Icon as={RiMenuLine} />}
              variant="unstyled"
              aria-label="Open Header Navigation"
              onClick={() => onOpen()}
              mr="2"
              fontSize="24"
            ></IconButton>
            <HeaderDrawer />
            <SearchBox />
          </Flex>
        </Flex>
      ) : (
        <Flex h="100%" align="center" directionr="row">
          <Logo />
          <HeaderNav mb="20" ml="14" />
        </Flex>
      )}
    </Flex>
  );
};
