import { createContext, ReactNode, useContext, useState } from "react";

interface SearchBoxProviderProps {
  children: ReactNode;
}

interface ISearchBoxContext {
  searchBoxState: boolean;
  toggleSearchBox?: () => void;
}

const defaultState = {
  searchBoxState: false,
};

const SearchBoxContext = createContext<ISearchBoxContext>(defaultState);

export function SearchBoxProvider({ children }: SearchBoxProviderProps) {
  const [searchBoxState, setSearchboxState] = useState(false);
  const toggleSearchBox = () => {
    setSearchboxState(!searchBoxState);
    console.info(searchBoxState);
  };

  return (
    <SearchBoxContext.Provider value={{ searchBoxState, toggleSearchBox }}>
      {children}
    </SearchBoxContext.Provider>
  );
}

export const useSearchBox = () => useContext(SearchBoxContext);
