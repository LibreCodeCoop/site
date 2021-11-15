import { useRouter } from "next/router";
import Link, { LinkProps } from "next/link";
import { cloneElement, ReactElement } from "react";
import { useHeaderDrawer } from "@/context/HeaderDrawerContext";

interface ActiveLinkProps extends LinkProps {
  children: ReactElement;
  shouldMatchExactHref?: boolean;
}

export function ActiveLink({
  children,
  shouldMatchExactHref = false,
  ...rest
}: ActiveLinkProps) {
  const { asPath } = useRouter();
  const { isOpen } = useHeaderDrawer();

  let isActive = false;

  if (shouldMatchExactHref && (asPath === rest.href || asPath === rest.as)) {
    isActive = true;
  }

  if (
    !shouldMatchExactHref &&
    (asPath.startsWith(String(rest.href)) || asPath.startsWith(String(rest.as)))
  ) {
    isActive = true;
  }

  return (
    <Link {...rest}>
      {cloneElement(children, {
        color: "gray.600",
        borderBottom: !isOpen && isActive && "1px",
        borderColor: !isOpen && "red.600",
      })}
    </Link>
  );
}
