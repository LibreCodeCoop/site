import { useState, EventHandler, FormEvent } from "react";
import { FaSearch } from "react-icons/fa";

import style from "./styles.module.scss";

interface IEventHandler {
  target: HTMLInputElement;
}

export const SearchBar = () => {
  const [selection, setSelection] = useState("all");
  const [valueSearch, setValueSearch] = useState("");

  const handleSearch = (event: IEventHandler) => {
    setValueSearch(event.target.value);
  };

  const submitForm = (event: FormEvent<HTMLSpanElement>) => {
    event.preventDefault();
    console.info(selection, valueSearch);
  };

  return (
    <>
      <form onSubmit={submitForm} className={style.container}>
        <div className={style.input}>
          <FaSearch size={16} color="" />
          <input type="text" value={valueSearch} onChange={handleSearch} />
        </div>

        <div className={style.selection}>
          <label htmlFor="all">
            <input
              checked={selection === "all"}
              onChange={() => setSelection("all")}
              type="radio"
              id="all"
              value="all"
              name="Em todo o site"
            />
            Em todo o site
          </label>
          <label htmlFor="single">
            <input
              type="radio"
              id="single"
              value="single"
              checked={selection === "single"}
              onChange={() => setSelection("single")}
              name="Somente nesta página"
            />
            Somente nesta página
          </label>
        </div>
      </form>
    </>
  );
};
