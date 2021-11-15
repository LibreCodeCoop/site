import {
  Icon,
  Flex,
  Box,
  IconButton,
  useBreakpointValue,
} from "@chakra-ui/react";
import { HeaderNav } from "@/components/Header/HeaderNav";
import { SearchBox } from "./SearchBox";
import { useHeaderDrawer } from "@/context/HeaderDrawerContext";
import { RiMenuLine } from "react-icons/ri";
import { HeaderDrawer } from "./HeaderDrawer";

interface IProps {
  name: string;
  link: string;
}

interface ComponentProps {
  menuLinks: IProps[];
}

export const Header = ({ menuLinks }: ComponentProps) => {
  const { onOpen } = useHeaderDrawer();
  const isDrawerSidebar = useBreakpointValue({
    base: true,
    md: false,
  });

  return (
    <Flex
      bg="gray.100"
      h={["250px", "250px", "170px", "170px"]}
      justify="center"
      align={["center", "center", "flex-end"]}
      pb={["0", "4", "10", "8"]}
      mb="4"
      pl={["10", "10", "1"]}
      bgImage={[
        "url('/static/background-hover-mobile.svg')",
        "url('/static/background-hover-mobile.svg')",
        "url('/static/background-hover-desktop.svg')",
      ]}
      bgRepeat="no-repeat"
      bgSize={{ base: "contain", "2xl": "cover" }}
    >
      {isDrawerSidebar ? (
        <Flex alignSelf={["center", "flex-end"]}>
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
      ) : (
        <HeaderNav />
      )}
    </Flex>
  );
};
