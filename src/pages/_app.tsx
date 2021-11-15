import { Header } from "@/components/Header";
import { ChakraProvider } from "@chakra-ui/react";
import { AppProps } from "next/app";
import { theme } from "../styles/theme";

import LinksMenus from "@/content/menu.json";
import { HeaderDrawerProdiver } from "@/context/HeaderDrawerContext";
import { SearchBoxProvider } from "@/context/SearchBarContext";

function MyApp({ Component, pageProps }: AppProps) {
  return (
    <ChakraProvider theme={theme}>
      <HeaderDrawerProdiver>
        <SearchBoxProvider>
          <Header />
        </SearchBoxProvider>
      </HeaderDrawerProdiver>
      <Component {...pageProps} />
    </ChakraProvider>
  );
}

export default MyApp;
