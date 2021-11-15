import {
  Container as ChakraContainer,
  ContainerProps,
} from "@chakra-ui/layout";

export function Container({ children, ...rest }: ContainerProps) {
  return (
    <ChakraContainer paddingX={8} {...rest} maxW="full">
      {children}
    </ChakraContainer>
  );
}
