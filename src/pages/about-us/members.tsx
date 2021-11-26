import { Text } from "@chakra-ui/react";
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
  return <Text>Page in development...</Text>;
}

export function getStaticProps() {
  return {
    props: {
      data: Content,
    },
  };
}
