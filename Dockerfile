FROM php:8.2-apache

# Étape 1 : Installer les dépendances système nécessaires
RUN apt-get update && apt-get install -y \
    sudo \
    default-mysql-client \
    git \
    unzip \
    libicu-dev \
    zlib1g-dev \
    libssl-dev \
    libzstd-dev \
    && pecl install apcu grpc \
    && docker-php-ext-enable apcu grpc \
    && docker-php-ext-install pdo pdo_mysql intl \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/*


# Étape 2 : Installer les extensions PHP et PECL
#RUN intl mbstring zip 

RUN echo "apc.enable_cli=1" > /usr/local/etc/php/conf.d/apcu.ini

# Étape 3 : Installer Node.js et Yarn
RUN apt-get update && apt-get install -y --no-install-recommends nodejs npm \
    && npm install -g yarn \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/*

# Étape 4 : Installer Composer
COPY --from=composer:latest /usr/bin/composer /usr/local/bin/composer

# Étape 5 : Configurer le répertoire de travail
WORKDIR /var/www/

# Étape 6 : Copier les fichiers nécessaires pour optimiser le cache
COPY composer.json composer.lock package.json ./
#RUN composer install --no-dev --prefer-dist --no-progress --no-suggest \
   # && yarn install --frozen-lockfile

# Étape 7 : Copier le reste des fichiers
COPY . .

# Étape 8 : Configurer les permissions
RUN chown -R www-data:www-data /var/www/

# Étape 9 : Copier les fichiers de configuration Apache
COPY apache.conf /etc/apache2/sites-available/000-default.conf

# Étape 10 : Exposer le port 80
EXPOSE 80

# Étape 11 : Lancer Apache
CMD ["apache2-foreground"]
