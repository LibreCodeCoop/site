import { Header } from "@/components/Header";
import { ChakraProvider } from "@chakra-ui/react";
import { AppProps } from "next/app";
import { theme } from "../styles/theme";

import LinksMenus from "@/content/menu.json";

function MyApp({ Component, pageProps }: AppProps) {
  return (
    <ChakraProvider theme={theme}>
      <Header menuLinks={LinksMenus.menu} />
      <Component {...pageProps} />
    </ChakraProvider>
  );
}

export default MyApp;
