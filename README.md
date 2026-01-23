# 🐳 Docker PHP–MySQL Practice Project

This repository contains a **multi-container Docker setup** for running a basic **PHP application with MySQL and phpMyAdmin**, orchestrated using **Docker Compose**.

The project is built **for learning purposes**, focusing on real-world backend and Docker fundamentals.

---

## 🎯 Learning Objectives

This project focuses on:

- Docker fundamentals
- Multi-container architecture
- Service-to-service networking
- Persistent volumes
- PHP ↔ MySQL connectivity
- Debugging Docker containers using logs

---

## 📌 Tech Stack

- **Docker**
- **Docker Compose**
- **Nginx** (Web Server)
- **PHP-FPM** (PHP Runtime)
- **MySQL 8**
- **phpMyAdmin** (Database Client)

---

## 🧠 Architecture Overview

Each responsibility runs in its **own container**, following best practices.

| Service | Responsibility |
|-------|----------------|
| **nginx** | Handles HTTP requests and forwards PHP execution |
| **php-fpm** | Executes PHP code |
| **mysql** | Stores application data (persistent) |
| **phpMyAdmin** | Web-based MySQL management tool |

### 🔗 Networking

- Containers communicate using **Docker service names**
- No hardcoded IP addresses
- No `localhost` usage between containers

**Example:**
```text
PHP → mysql
phpMyAdmin → mysql
nginx → php


.
├── src/                    # PHP application source code
│   ├── db.php
│   ├── create.php
│   ├── read.php
│   ├── update.php
│   └── delete.php
│
├── config/
│   └── nginx.conf          # Custom Nginx configuration
│
├── Dockerfile              # PHP-FPM image
├── docker-compose.yml      # Multi-container orchestration
├── .env                    # Environment variables (DB credentials)
├── .dockerignore
├── .gitignore
└── README.md
