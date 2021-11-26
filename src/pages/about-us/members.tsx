import { Text, Flex, UnorderedList, ListItem, Avatar } from "@chakra-ui/react";
import { MD5 } from "crypto-js";
import Content from "@/content/about-us/nossos-cooperados.json";

interface MembersProps {
  data: IContent;
}
interface IContent {
  title: string;
  image: string;
  background: string;
  description: string;
  cooperados: ICooperados[];
}
interface ICooperados {
  name: string;
  avatar: IAvatar;
  position: string;
  email: string;
}
interface IAvatar {
  useGravatarApi: boolean;
  localPath?: string;
}

export default function Members({ data }: MembersProps) {
  function gravatarUrl(email: string) {
    const encodedEmail = MD5(email.trim()).toString();
    return `https://gravatar.com/avatar/${encodedEmail}`;
  }
  return (
    <Flex direction="column">
      <Flex>
        <Text>{data.title}</Text>
      </Flex>
      <Text>{data.description}</Text>
      <UnorderedList>
        {data.cooperados.map((cooperado, index) => (
          <ListItem key={`${cooperado.name}-${index}`}>
            <Avatar
              name={cooperado.name}
              src={
                cooperado.avatar.useGravatarApi
                  ? gravatarUrl(cooperado.email)
                  : cooperado.avatar.localPath
              }
            />
            <Text>{cooperado.name}</Text>
            <Text>{cooperado.position}</Text>
            <Text>{cooperado.email}</Text>
          </ListItem>
        ))}
      </UnorderedList>
    </Flex>
  );
}

export function getStaticProps() {
  return {
    props: {
      data: Content,
    },
  };
}
