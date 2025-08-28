This repository brings together best practices and advanced concepts for writing clean and maintainable code in **Symfony**. It highlights principles such as **Value Objects**, **DTOs**, the **Command Pattern**, as well as **CQRS** and **Clean Architecture**.

# Clean Archi Project with Docker

This Symfony project runs using Docker. Follow the instructions below to get started.

## Prerequisites

- Docker
- Docker Compose
- Git

## Setup

### 1. Clone the repository

### 2. Build and start the Docker containers

docker compose up -d

### 3. Access the PHP container
docker compose exec php bash
### 4. Create database
php bin/console d:d:c
php bin/console make:migration
php bin/console doctrine:migrations:migrate 
### 5. Verify Adminer and mailer in local
http://localhost:8025/
http://localhost:8082/