import { extendTheme } from "@chakra-ui/react";

export const theme = extendTheme({
  config: {
    cssVarPrefix: "LibreCode",
  },
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
      "950": "#1F1C58",
      "900": "#0C0255",
      "800": "#050055",
    },
    red: {
      "900": "#ff0000",
      "800": "#E5332A",
      "700": "#F73F20",
      "600": "#C53030",
      "500": "#E53E3E",
      "400": "#F56565",
      "300": "#FC8181",
      "200": "#FEB2B2",
      "100": "#FED7D7",
      "50": "#FFF5F5",
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
    purple: {
      "1000": "#481A4D",
      "950": "#441048",
      "900": "#322659",
      "800": "#44337A",
      "700": "#553C9A",
      "600": "#6B46C1",
      "500": "#805AD5",
      "400": "#9F7AEA",
      "300": "#B794F4",
      "200": "#D6BCFA",
      "100": "#E9D8FD",
      "50": "#FAF5FF",
    },
    yellow: {
      "400": "#E2C619",
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
