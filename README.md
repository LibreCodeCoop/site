# Site Lyseon Tech

Repositório do site da Lyseon Tech

## Instalação

```bash
git clone git@github.com:LyseonTech/site.git
cd site
composer install
```

## Ambiente de desenvolvimento

O projeto utiliza gulp para monitorar mudanças nos arquivos e executar o build
automaticamente.

Para iniciar o `watch` e o `build` automático do projeto execute o comando abaixo:

```bash
composer dev
```

Com este comando irá abrir uma janela do navegador onde você poderá ver em tempo
real as mudanças do projeto.

## Deploy

Para fazer deploy faça um fork do projeto com sua conta pessoal, adicione um
novo remote com a url do seu fork, crie uma nova branch a partir da develop com o nome da
funcionalidade a ser implementada, faça seus commits, empurre a branch criada
para seu remote e crie um pull request para o repositório oficial do site na
branch develop.

Exemplo:

```bash
git remote add fork <seu_fork>
git checkout origin/develop
git checkout -b <nome_da_branch>
# Desenvolva as mudanças
git commit
git push fork <nome_da_branch>
```

Após o seu pull request ser aceito, faça um pull request da branch develop para
a master. Quando este pull request também for aceito, irá iniciar o deploy
pelo Travis, caso não ocorram erros o site estará atualizado em produção.
