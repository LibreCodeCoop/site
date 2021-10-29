# [LibreCode](https://librecode.coop) site

Repositório do site institucional da LibreCode

## Instalação

```bash
git clone git@github.com:librecodecoop/site.git
cd site
docker-compose up
```

 - Abra no navegador o endereço:
   http://localhost/

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
