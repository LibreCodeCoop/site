import { useDisclosure, UseDisclosureReturn } from "@chakra-ui/react";
import { createContext, ReactNode, useContext } from "react";

interface HeaderDrawerProviderProps {
  children: ReactNode;
}

type HeaderDrawerContextData = UseDisclosureReturn;

const HeaderDrawerContext = createContext({} as HeaderDrawerContextData);

export function HeaderDrawerProdiver({ children }: HeaderDrawerProviderProps) {
  const disclousure = useDisclosure();

  return (
    <HeaderDrawerContext.Provider value={disclousure}>
      {children}
    </HeaderDrawerContext.Provider>
  );
}

export const useHeaderDrawer = () => useContext(HeaderDrawerContext);
