# Multisite-Wordpress
# 🚀 WordPress Multisite Docker (localhost:7000)

Ce projet Docker vous permet de lancer un environnement WordPress Multisite en local via `localhost:7000`, en utilisant Docker Compose.

---

## 📦 Contenu

- **WordPress** 6.7
- **MySQL** 8.0
- **phpMyAdmin** (port 8080)
- Multisite activé (sous-dossiers)

---

## 🧰 Prérequis

- Docker & Docker Compose installés
- Port `7000` libre sur votre machine

---

## ⚙️ Installation

### 1. Cloner ce dépôt ou copier les fichiers dans un dossier

### 2. Configurer l'environnement

Créer un fichier `.env` à la racine :

```env
# MySQL
MYSQL_ROOT_PASSWORD=mysql_root_password
MYSQL_DATABASE=mysql_database
MYSQL_USER=mysql_user
MYSQL_PASSWORD=mysql_password

# WordPress
WORDPRESS_DB_HOST=db
WORDPRESS_DB_USER=db_user
WORDPRESS_DB_PASSWORD=db_password
WORDPRESS_DB_NAME=db_name

# Multisite
DOMAIN_CURRENT_SITE=localhost:7000

# PHP
PHP_DISPLAY_ERRORS=On
PHP_MEMORY_LIMIT=256M
PHP_UPLOAD_MAX_FILESIZE=64M
PHP_POST_MAX_SIZE=64M

# Réseau multisite
DOMAIN_CURRENT_SITE=localhost

* * * * * cd /home/franck/www/multisite-gvt && docker exec multisite_gvt-wordpress wp eval 'do_action("inzerty_cron_refresh_campaigns");' --quiet
