---
extends: _layouts.post
title: "Nextcloud: Setup em 5 passos"
author: Henrique Mohr
date: "2026-11-16"
description: "Guia rápido para instalar o Nextcloud com Docker Compose, PostgreSQL e Redis."

---

Nextcloud é uma ferramenta incrível. Descubra como fazer o setup facilmente. 

Precisa de ajuda com seu Nextcloud? Entre em contato conosco.

# Como subir o Nextcloud em 5 passos

O Nextcloud permite criar uma nuvem própria para armazenar, sincronizar e compartilhar arquivos. Neste guia, você vai subir uma instalação básica usando Docker Compose, PostgreSQL e Redis.

## 1. Prepare o servidor e o domínio

Antes de começar, tenha:

- um servidor com Docker e Docker Compose instalados;
- pelo menos 4 GB de memória e 20 GB de espaço em disco;
- um domínio apontando para o IP do servidor.

Crie também as redes Docker usadas pelos serviços:

```bash
docker network create postgres
docker network create redis
docker network create reverse-proxy
```

## 2. Suba o PostgreSQL e o Redis

Crie um diretório para os serviços:

```bash
mkdir -p /opt/infra-nextcloud
cd /opt/infra-nextcloud
```

Crie um arquivo `.env` com senhas fortes:

```bash
POSTGRES_DB=nextcloud
POSTGRES_USER=nextcloud
POSTGRES_PASSWORD=troque-por-uma-senha-forte
REDIS_PASSWORD=troque-por-outra-senha-forte
TZ=America/Sao_Paulo
```

Depois, crie o arquivo `docker-compose.yml`:

```yaml
networks:
  postgres:
    external: true
  redis:
    external: true

services:
  postgres:
    image: postgres:17-alpine
    container_name: postgres-postgres-1
    restart: unless-stopped
    environment:
      POSTGRES_DB: ${POSTGRES_DB}
      POSTGRES_USER: ${POSTGRES_USER}
      POSTGRES_PASSWORD: ${POSTGRES_PASSWORD}
      TZ: ${TZ}
    volumes:
      - ./volumes/postgres:/var/lib/postgresql/data
    networks:
      - postgres

  redis:
    image: redis:alpine
    container_name: redis-redis-1
    restart: unless-stopped
    command: ["redis-server", "--appendonly", "yes", "--requirepass", "${REDIS_PASSWORD}"]
    environment:
      REDIS_PASSWORD: ${REDIS_PASSWORD}
    volumes:
      - ./volumes/redis:/data
    networks:
      - redis
```

Suba os serviços e verifique o funcionamento:

```bash
docker compose up -d
docker compose ps
docker compose exec postgres pg_isready -U nextcloud
docker compose exec redis sh -c 'redis-cli -a "$REDIS_PASSWORD" ping'
```

Os dois últimos comandos devem indicar que o PostgreSQL está aceitando conexões e retornar `PONG` para o Redis.

## 3. Baixe o projeto

Clone o projeto da LibreCode e acesse o diretório:

```bash
git clone https://github.com/LibreCodeCoop/nextcloud-docker /opt/nextcloud
cd /opt/nextcloud
```

## 4. Configure o ambiente

Crie o arquivo de configuração a partir do exemplo:

```bash
cp .env.example .env
nano .env
```

Preencha o domínio, o e-mail do certificado e o usuário administrador. Para conectar os serviços criados no passo 2, use:

```bash
POSTGRES_HOST=postgres-postgres-1
POSTGRES_DB=nextcloud
POSTGRES_USER=nextcloud
POSTGRES_PASSWORD=mesma-senha-definida-na-infra
REDIS_HOST=redis-redis-1
REDIS_HOST_PORT=6379
REDIS_HOST_PASSWORD=mesma-senha-definida-na-infra
```

Não publique os arquivos `.env` e use a mesma senha de cada serviço nos dois projetos.

## 5. Suba e valide o Nextcloud

Valide a configuração e inicie os serviços:

```bash
docker compose config
docker compose up -d
docker compose logs -f app
```

Aguarde a conclusão da inicialização. Depois, abra no navegador o domínio configurado, por exemplo: `https://cloud.seudominio.com.br`.

Confira também o estado da instalação:

```bash
docker compose ps
docker compose exec -u www-data app php occ status
docker compose exec -u www-data app php occ check
```

No painel administrativo, revise os avisos em **Administração > Visão geral**. Para finalizar, configure backups automáticos do banco de dados, do arquivo `.env` e dos diretórios de configuração e dados.

Pronto: seu Nextcloud já está no ar. 

Para configurações de produção, integrações e solução de problemas, entre em contato conosco!
