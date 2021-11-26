import { Text, Flex, UnorderedList, ListItem, Avatar } from "@chakra-ui/react";
import { MD5 } from "crypto-js";
import Content from "@/content/about-us/nossos-cooperados.json";
import { MemberCard } from "@/components/MemberCard";

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
  return (
    <Flex direction="column">
      <Flex>
        <Text>{data.title}</Text>
      </Flex>
      <Text>{data.description}</Text>
      <UnorderedList>
        {data.cooperados.map((cooperado, index) => (
          <ListItem key={`${cooperado.name}-${index}`}>
            <MemberCard
              name={cooperado.name}
              avatar={cooperado.avatar}
              jobPosition={cooperado.position}
              email={cooperado.email}
              key={`${cooperado.name}-${index}`}
            />
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
