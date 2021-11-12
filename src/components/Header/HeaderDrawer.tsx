import { useHeaderDrawer } from "@/context/HeaderDrawerContext";
import {
  Drawer,
  DrawerHeader,
  DrawerBody,
  DrawerCloseButton,
  DrawerContent,
  DrawerOverlay,
} from "@chakra-ui/react";
import { HeaderNav } from "./HeaderNav";
export function HeaderDrawer() {
  const { isOpen, onClose } = useHeaderDrawer();
  return (
    <Drawer isOpen={isOpen} size="full" placement="top" onClose={onClose}>
      <DrawerOverlay>
        <DrawerContent bg="gray.100" p="4">
          <DrawerCloseButton mt="6"></DrawerCloseButton>
          <DrawerBody>
            <HeaderNav />
          </DrawerBody>
        </DrawerContent>
      </DrawerOverlay>
    </Drawer>
  );
}
