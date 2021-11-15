import { extendTheme } from "@chakra-ui/react";

export const theme = extendTheme({
  colors: {
    gray: {
      "900": "#181B23",
      "800": "#1F2029",
      "700": "#353646",
      "600": "#4B4D63",
      "500": "#616480",
      "400": "#797D9A",
      "300": "#9699B0",
      "200": "#B3B5C6",
      "100": "#DBDBDB",
      "50": "#EBEBEB",
    },
    blue: {
      "900": "#15153F",
    },
    cyan: {
      "900": "#065666",
      "800": "#086F83",
      "700": "#0987A0",
      "600": "#00A3C4",
      "500": "#00B5D8",
      "400": "#10C9C3",
      "300": "#76E4F7",
      "200": "#9DECF9",
      "100": "#C4F1F9",
      "50": "##EDFDFD",
    },
  },

  fonts: {
    heading: "Roboto",
    body: "Roboto",
  },

  styles: {
    global: {
      body: {
        bg: "gray.100",
        color: "gray.900",
      },
    },
  },
});
