import { Flex, Avatar, Text, FlexProps } from "@chakra-ui/react";
import { MD5 } from "crypto-js";

interface MemberCardProps extends FlexProps {
  name: string;
  email: string;
  jobPosition: string;
  avatar: IAvatar;
}

interface IAvatar {
  useGravatarApi: boolean;
  localPath?: string;
}

export function MemberCard({
  name,
  email,
  jobPosition,
  avatar,
}: MemberCardProps) {
  function gravatarUrl(email: string): string {
    const encodedEmail = MD5(email.trim()).toString();
    return `https://gravatar.com/avatar/${encodedEmail}?s=400`;
  }
  return (
    <Flex
      color="purple.1000"
      mx="16"
      my="12"
      justify="center"
      align="center"
      direction="column"
    >
      <Avatar
        name={name}
        size={"2xl"}
        src={avatar.useGravatarApi ? gravatarUrl(email) : avatar.localPath}
        mb="4"
      />
      <Text fontWeight="bold">{name}</Text>
      <Text fontWeight="bold">{jobPosition}</Text>
      <Text fontWeight="bold">{email}</Text>
    </Flex>
  );
}
