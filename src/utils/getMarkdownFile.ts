import { readdirSync, readFileSync } from "fs";
import matter from "gray-matter";
import { join } from "path";

interface IGerMarkdownFileProps {
  filename: String;
}

interface IGetMarkdownFileReturn {
  slug: string;
  frontmatter: { [key: string]: any };
  content: string;
}

interface IFrontMatterHeader {
  title: string;
  created_at: string;
}

export const getMarkdownFile = async ({
  filename,
}: IGerMarkdownFileProps): Promise<IGetMarkdownFileReturn> => {
  // Get files from the content dir
  const files = readdirSync(join("src", "content"));

  const paths = files.map((filename) => {
    // Create a slug
    const slug = filename.replace(".md", "");

    const markdownWithMeta = readFileSync(
      join("src", "content", filename),
      "utf-8"
    );

    // Get Front Matter
    const { data: frontmatter, content } = matter(markdownWithMeta);

    return {
      slug,
      frontmatter,
      content,
    };
  });

  // Filter by filename
  const file = paths.filter((path) => path.slug === filename)[0];
  return file;
};
