🐳 Docker PHP–MySQL Practice Project

This repository contains a multi-container Docker setup for running a basic PHP application with MySQL and phpMyAdmin, orchestrated using Docker Compose.

The project is built for learning purposes, focusing on:

Docker fundamentals

Multi-container architecture

Service networking

Persistent volumes

PHP ↔ MySQL connectivity

📌 Tech Stack

Docker

Docker Compose

Nginx (Web Server)

PHP-FPM (PHP Runtime)

MySQL 8

phpMyAdmin (Database Client)

🧠 Architecture Overview

Each service runs in its own container, following best practices:

Service	Responsibility
nginx	Handles HTTP requests and forwards PHP requests
php-fpm	Executes PHP code
mysql	Stores application data (persistent)
phpMyAdmin	Web-based MySQL management tool
Networking

Containers communicate using Docker service names

No hardcoded IPs or localhost usage

Example:

PHP connects to MySQL using mysql as hostname

📂 Project Structure
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

⚙️ Services Configuration
Nginx

Exposed on port 8080

Serves PHP files from /var/www/html

Forwards PHP requests to php:9000

PHP-FPM

Custom-built via Dockerfile

Uses pdo_mysql for database access

No ports exposed to the host

MySQL

Uses official mysql:8.x image

Data stored in a named Docker volume

Environment variables used only during first initialization

phpMyAdmin

Exposed on port 8081

Connects to MySQL internally using Docker networking

🚀 Getting Started
1️⃣ Prerequisites

Make sure you have installed:

Docker

Docker Compose

Verify:

docker --version
docker-compose --version

2️⃣ Clone the Repository
git clone https://github.com/your-username/your-repo-name.git
cd your-repo-name

3️⃣ Configure Environment Variables

Create a .env file:

MYSQL_ROOT_PASSWORD=your_root_password
MYSQL_DATABASE=testDb


⚠️ Note:
MySQL environment variables are applied only on first container startup.

4️⃣ Start the Containers
docker-compose up --build

🌐 Access the Application
Service	URL
PHP App	http://localhost:8080

phpMyAdmin	http://localhost:8081
🧪 CRUD Test (Database Connectivity Check)

The project includes simple PHP scripts to test CRUD operations:

File	Action
create.php	Insert data
read.php	Fetch data
update.php	Update data
delete.php	Delete data

Example:

http://localhost:8080/create.php
http://localhost:8080/read.php


This confirms:

PHP ↔ MySQL connectivity

Docker networking works

Data persistence is functional

💾 Persistent Storage

MySQL data is stored in a Docker named volume

Data survives container restarts

To reset database completely:

docker-compose down -v


⚠️ This will delete all database data.

🧠 Key Learnings

Multi-container Docker architecture

Internal Docker DNS (service-name-based networking)

PHP-FPM vs web server separation

MySQL initialization behavior

Volume persistence

Debugging Docker containers using logs

⚠️ Common Pitfalls Covered

❌ Using localhost between containers

❌ Exposing unnecessary ports

❌ Mixing MySQL and phpMyAdmin env variables

❌ Expecting MySQL env vars to reapply after first run

🔮 Possible Enhancements

Use non-root database user

Load DB credentials via PHP .env

Add HTML forms for CRUD

Convert project to Laravel

Add SSL (HTTPS)

Add healthchecks

Remove exposed MySQL port for production

👨‍💻 Author

Abir Bose
Docker & Backend Practice Project
Focused on real-world backend and DevOps fundamentals

If you want, next I can:

make this production-ready

add badges (Docker, PHP)

tailor the README for job portfolios

convert this into a WordPress or Laravel Docker setup

Just tell me 👍