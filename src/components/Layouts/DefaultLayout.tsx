import { Container } from "@/components/Layouts/Container";
import { ReactNode } from "react";
import { HeaderDrawerProdiver } from "@/context/HeaderDrawerContext";

import { Header } from "../Header";
import { SearchBoxProvider } from "@/context/SearchBarContext";
import Footer from "../Footer";

interface DefaultLayoutProps {
  children: ReactNode;
}
export default function DefaultLayout({ children }: DefaultLayoutProps) {
  return (
    <>
      <HeaderDrawerProdiver>
        <SearchBoxProvider>
          <Header />
        </SearchBoxProvider>
      </HeaderDrawerProdiver>
      <Container as="main">{children}</Container>
      <Footer />
    </>
  );
}