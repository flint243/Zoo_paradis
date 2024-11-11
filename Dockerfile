# Étape 1 : Utiliser une image de base PHP avec Apache
FROM php:8.2-apache

# Étape 2 : Installer les dépendances système nécessaires
RUN apt-get update && apt-get install -y \
    default-mysql-client \
    git \
    unzip \
    libicu-dev \
    libgrpc-dev \
    zlib1g-dev \
    && pecl install grpc \
    && docker-php-ext-enable grpc \
    && docker-php-ext-install pdo pdo_mysql intl \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/*

# Étape 3 : Installer Composer
COPY --from=composer:latest /usr/bin/composer /usr/local/bin/composer

# Étape 4 : Configurer le répertoire de travail
WORKDIR /var/www/

# Étape 5 : Copier les fichiers de l'application dans le conteneur
COPY . .

# Étape 7 : Modifier les permissions si nécessaire
RUN chown -R www-data:www-data /var/www/

# Étape 5 : Copier les fichiers de configuration Apache (si nécessaire)
COPY apache.conf /etc/apache2/sites-available/000-default.conf

# Étape 8 : Exposer le port 80
EXPOSE 80

# Étape 9 : Démarrer Apache
CMD ["apache2-foreground"]
