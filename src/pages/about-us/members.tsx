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
    <Flex
      direction="column"
      _before={{
        content: `""`,
        position: "absolute",
        width: "100%",
        height: "80%",
        bgImage: data.background,
        bgPos: "left",
        zIndex: "-1",
        transform: "scaleX(-1)",
        bgSize: "cover",
        bgRepeat: "no-repeat",
      }}
    >
      <Flex
        direction="column"
        bgSize="cover"
        bgRepeat="no-repeat"
        justify="center"
        align="center"
        h="400px"
        bgPos="bottom"
        bgImage={data.image}
      >
        <Text
          color="gray.50"
          fontSize={["3xl", "5xl", "7xl"]}
          fontWeight="bold"
        >
          {data.title}
        </Text>
      </Flex>
      <Text
        alignSelf="center"
        m="10"
        p="4"
        fontWeight="normal"
        fontSize="2xl"
        textAlign="justify"
        lineHeight="10"
        color="gray.700"
      >
        {data.description}
      </Text>
      <Flex
        justify="center"
        align="center"
        mx="20"
        direction="row"
        flexWrap="wrap"
      >
        {data.cooperados.map((cooperado, index) => (
          <MemberCard
            key={`${cooperado.name}-${index}`}
            name={cooperado.name}
            avatar={cooperado.avatar}
            jobPosition={cooperado.position}
            email={cooperado.email}
          />
        ))}
      </Flex>
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
