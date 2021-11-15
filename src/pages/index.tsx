import {
  getMarkdownFile,
  IGetMarkdownFileReturn,
} from "../utils/getMarkdownFile";

interface HomeProps {
  data: IGetMarkdownFileReturn;
}

export default function Home({ data }: HomeProps) {
  return (
    <>
      <h1>{data.frontmatter.title}</h1>
    </>
  );
}

export async function getStaticProps() {
  const file = await getMarkdownFile({ filename: "home" });
  return {
    props: {
      data: file,
    },
  };
}
