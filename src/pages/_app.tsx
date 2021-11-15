import { Header } from "@/components/Header";
import { ChakraProvider } from "@chakra-ui/react";
import { AppProps } from "next/app";
import { theme } from "../styles/theme";

import LinksMenus from "@/content/menu.json";
import { HeaderDrawerProdiver } from "@/context/HeaderDrawerContext";
import { SearchBoxProvider } from "@/context/SearchBarContext";
import Footer from "@/components/Footer";
import DefaultLayout from "@/components/Layouts/DefaultLayout";

function MyApp({ Component, pageProps }: AppProps) {
  return (
    <ChakraProvider theme={theme}>
      <DefaultLayout>
        <Component {...pageProps} />
      </DefaultLayout>
    </ChakraProvider>
  );
}

export default MyApp;
