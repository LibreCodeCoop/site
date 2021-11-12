import { Header } from "@/components/Header";
import { ChakraProvider } from "@chakra-ui/react";
import { AppProps } from "next/app";
import { theme } from "../styles/theme";

import LinksMenus from "@/content/menu.json";
import { HeaderDrawerProdiver } from "@/context/HeaderDrawerContext";

function MyApp({ Component, pageProps }: AppProps) {
  return (
    <ChakraProvider theme={theme}>
      <HeaderDrawerProdiver>
        <Header menuLinks={LinksMenus.menu} />
        <Component {...pageProps} />
      </HeaderDrawerProdiver>
    </ChakraProvider>
  );
}

export default MyApp;
