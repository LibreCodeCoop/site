export const decodeBase64 = (base64: string): string => {
  return Buffer.from(base64, "base64").toString("binary");
};
