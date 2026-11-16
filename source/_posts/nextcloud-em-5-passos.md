---
extends: _layouts.post
title: "Nextcloud: Setup em 5 passos"
author: Henrique Mohr
date: "2026-11-16"
description: "Guia rápido para instalar o Nextcloud com Docker Compose, Nginx Proxy, PostgreSQL e Redis."

---

Nextcloud é uma ferramenta incrível. Descubra como fazer o setup facilmente.

Precisa de ajuda com seu Nextcloud? Entre em contato conosco.

# Como subir o Nextcloud em 5 passos

O Nextcloud permite criar uma nuvem própria para armazenar, sincronizar e compartilhar arquivos. Neste guia, você vai subir uma instalação com HTTPS automático usando os projetos da LibreCode: [nginx-proxy](https://github.com/LibreCodeCoop/nginx-proxy), [postgres-docker](https://github.com/LibreCodeCoop/postgres-docker) e [nextcloud-docker](https://github.com/LibreCodeCoop/nextcloud-docker), além do Redis.

## 1. Prepare o servidor e as redes

Você precisa de um servidor com Docker e Docker Compose e de um domínio apontando para o IP dele.

Crie as redes externas que conectam os serviços:

```bash
docker network create reverse-proxy
docker network create postgres
docker network create redis
```

## 2. Suba o proxy reverso

O proxy cuida do HTTPS com Let's Encrypt:

```bash
git clone https://github.com/LibreCodeCoop/nginx-proxy ~/projects/nginx-proxy
cd ~/projects/nginx-proxy
docker compose up -d
```

## 3. Suba o PostgreSQL e o Redis

Clone o projeto do PostgreSQL, configure o `.env` e suba o serviço:

```bash
git clone https://github.com/LibreCodeCoop/postgres-docker ~/projects/postgres
cd ~/projects/postgres
cp .env.example .env
nano .env
docker compose up -d
```

Agora o Redis. Crie o diretório e o arquivo `docker-compose.yml`:

```bash
mkdir -p ~/projects/redis
cd ~/projects/redis
nano docker-compose.yml
```

```yaml
networks:
  redis:
    external: true
    name: redis

services:
  redis:
    image: redis:alpine
    restart: unless-stopped
    volumes:
      - ./volumes/redis/data:/data
      - /etc/timezone:/etc/timezone:ro
      - /etc/localtime:/etc/localtime:ro
    networks:
      - redis
    environment:
      - TZ=America/Sao_Paulo
```

```bash
docker compose up -d
```

## 4. Baixe e configure o Nextcloud

```bash
git clone https://github.com/LibreCodeCoop/nextcloud-docker ~/projects/nextcloud
cd ~/projects/nextcloud
cp .env.example .env
nano .env
```

Preencha pelo menos:

```bash
VIRTUAL_HOST=cloud.seudominio.com.br
LETSENCRYPT_HOST=cloud.seudominio.com.br
LETSENCRYPT_EMAIL=voce@seudominio.com.br
NEXTCLOUD_TRUSTED_DOMAINS=cloud.seudominio.com.br,web
NEXTCLOUD_ADMIN_USER=admin
NEXTCLOUD_ADMIN_PASSWORD=troque-por-uma-senha-forte
NEXTCLOUD_ADMIN_EMAIL=voce@seudominio.com.br
POSTGRES_PASSWORD=mesma-senha-do-postgres
TZ=America/Sao_Paulo
```

Para o Nextcloud enxergar o Redis, crie o arquivo `docker-compose.override.yml`:

```yaml
networks:
  redis:
    external: true
    name: redis

services:
  app:
    networks:
      - redis
```

## 5. Suba e valide o Nextcloud

```bash
docker compose up -d
docker compose logs -f app
```

Aguarde a inicialização e acesse `https://cloud.seudominio.com.br`. Para conferir a instalação:

```bash
docker compose ps
docker compose exec -u www-data app ./occ status
```

Depois, revise os avisos em `https://cloud.seudominio.com.br/settings/admin/overview`. Se aparecer algo sobre índices, rode:

```bash
docker compose exec -u www-data app ./occ db:add-missing-indices
```

Pronto: seu Nextcloud já está no ar.

Para configurações de produção, backup automatizado, integrações e solução de problemas, entre em contato conosco!
