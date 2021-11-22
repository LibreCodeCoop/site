import {
  Container as ChakraContainer,
  ContainerProps,
} from "@chakra-ui/layout";

export function Container({ children, ...rest }: ContainerProps) {
  return (
    <ChakraContainer maxH="full" minH="xl" paddingX={0} {...rest} maxW="full">
      {children}
    </ChakraContainer>
  );
}
