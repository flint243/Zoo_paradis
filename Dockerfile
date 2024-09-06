# Utiliser l'image officielle PHP avec Apache
FROM php:8.3-apache

# Installer les extensions PHP nécessaires
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    libicu-dev \
    libpq-dev \
    libzip-dev \
    libonig-dev \
    && docker-php-ext-install intl pdo pdo_mysql pdo_pgsql opcache zip

# Installer Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Copier les fichiers de l'application Symfony
COPY . /var/www/html

# Configurer le répertoire de travail
WORKDIR /var/www/html

# Configurer les permissions
RUN chown -R www-data:www-data /var/www/html/var /var/www/html/public

# Activer le module Apache mod_rewrite
RUN a2enmod rewrite

# Exposer le port 80 pour le service web
EXPOSE 80
