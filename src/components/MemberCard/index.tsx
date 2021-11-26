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
    return `https://gravatar.com/avatar/${encodedEmail}`;
  }
  return (
    <Flex direction="column">
      <Avatar
        name={name}
        src={avatar.useGravatarApi ? gravatarUrl(email) : avatar.localPath}
      />
      <Text>{name}</Text>
      <Text>{jobPosition}</Text>
      <Text>{email}</Text>
    </Flex>
  );
}
