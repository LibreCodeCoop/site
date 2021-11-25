import { ButtonTypes } from "./types";

export function ReturnTypeButtonByString(string) {
  switch (string) {
    case "left":
      return ButtonTypes.left;
    case "right":
      return ButtonTypes.right;
    case "hexagonal":
      return ButtonTypes.hexagonal;
  }
}
