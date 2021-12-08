interface ITrees {
  sha: string;
  tree: ITree[];
  truncated: false;
  url: string;
}

interface ITree {
  mode: string;
  path: string;
  sha: string;
  size: number;
  type: string;
  url: string;
}

interface IJob {
  title: string;
  url: string;
}

export interface Blob {
  content: string;
  encoding: string;
  node_id: string;
  sha: string;
  size: number;
  url: string;
}

export const getMainTree = async (
  organizationName: string
): Promise<ITrees> => {
  const response = await fetch(
    `https://api.github.com/repos/${organizationName}/jobs/git/trees/main`
  );

  return response.json();
};

const getJobPath = async (): Promise<ITrees> => {
  const response = await fetch(
    "https://api.github.com/repos/LibreCodeCoop/jobs/git/trees/fe73ce6cfdbfd30832d20c22c540826fcd7b91e8"
  );

  return response.json();
};

export const getFileBySha = async (sha: string): Promise<Blob> => {
  const response = await fetch(
    `https://api.github.com/repos/LibreCodeCoop/jobs/git/blobs/${sha}`
  );
  return response.json();
};

export const getJobByNameOfTheMarkdown = async (name: string) => {
  const path = await getJobPath();

  const job = path.tree.find((jobs) => jobs.path.split(".md")[0] === name);
  const blob = await getFileBySha(job.sha);
  return blob;
};
