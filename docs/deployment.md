# Deployment Guide

## Requirements

- Docker Desktop
- WSL2
- Git

## Run Containers

```bash
docker compose up -d
```

## Check Running Containers

```bash
docker ps
```

## Access phpMyAdmin

http://localhost:8080

Username: root

Password: root

## Laravel Backend

```bash
cd backend
php artisan serve
```

Backend URL:

http://127.0.0.1:8000
