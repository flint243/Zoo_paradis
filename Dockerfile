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

RUN docker-php-ext-install intl mbstring pdo_mysql zip

RUN pecl install apcu && docker-php-ext-enable apcu

RUN echo "apc.enable_cli=1" > /usr/local/etc/php/conf.d/apcu.ini

# Étape 2 : Installer Node.js et Yarn
RUN apt-get install -y nodejs npm && npm install -g yarn

# Étape 3 : Installer Composer
COPY --from=composer:latest /usr/bin/composer /usr/local/bin/composer

# Étape 4 : Configurer le répertoire de travail
WORKDIR /var/www/

# Étape 5 : Copier les fichiers de l'application
COPY . .

# Étape 6 : Configurer les permissions
RUN chown -R www-data:www-data /var/www/

# Étape 7 : Copier les fichiers de configuration Apache
COPY apache.conf /etc/apache2/sites-available/000-default.conf

# Étape 8 : Exposer le port 80
EXPOSE 80

# Étape 9 : Lancer Apache
CMD ["apache2-foreground"]
