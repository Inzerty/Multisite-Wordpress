# Dockerfile for WordPress with custom PHP settings

FROM wordpress:6.7

# Installation de gettext + pdo_mysql pour WPvivid
RUN apt-get update \
    && apt-get install -y gettext-base \
    && docker-php-ext-install pdo_mysql \
    && rm -rf /var/lib/apt/lists/*

COPY php.ini.template /usr/local/etc/php/php.ini.template

# Arguments pour la config PHP
ARG PHP_DISPLAY_ERRORS
ARG PHP_MEMORY_LIMIT
ARG PHP_UPLOAD_MAX_FILESIZE
ARG PHP_POST_MAX_SIZE

# Variables d’environnement
ENV PHP_DISPLAY_ERRORS=${PHP_DISPLAY_ERRORS} \
    PHP_MEMORY_LIMIT=${PHP_MEMORY_LIMIT} \
    PHP_UPLOAD_MAX_FILESIZE=${PHP_UPLOAD_MAX_FILESIZE} \
    PHP_POST_MAX_SIZE=${PHP_POST_MAX_SIZE}

# Génération du fichier php.ini
RUN envsubst < /usr/local/etc/php/php.ini.template > /usr/local/etc/php/php.ini

# Lancement d’Apache
CMD ["apache2-foreground"]
