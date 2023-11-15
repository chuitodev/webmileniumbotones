# Usa una imagen base de PHP con Apache
FROM php:8.1.10-apache

# Permitir instalar composer como superusuario
ENV COMPOSER_ALLOW_SUPERUSER=1

# Instala extensiones de PHP
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Instala la extensión ZIP de PHP
RUN apt-get update && \
    apt-get install -y \
    libzip-dev \
    zip \
    && docker-php-ext-install zip

# Instala Git y Unzip
RUN apt-get install -y git unzip

# Instala Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Establece el directorio de trabajo
WORKDIR /var/www/html

# Copia el archivo de configuración personalizado de Apache
COPY my-apache-config.conf /etc/apache2/sites-available/000-default.conf


# Copia los archivos de tu aplicación en el contenedor
COPY . /var/www/html

# Usa un comando para escribir las variables de entorno en el archivo .env
RUN echo "API_USER=${API_USER}" >> .env && \
    echo "API_PASSWORD=${API_PASSWORD}" >> .env

# Instala las dependencias de PHP
RUN composer install --no-interaction --verbose

# Expone el puerto 80
EXPOSE 80

# Cambia los permisos de los archivos
RUN chmod -R 755 /var/www/html

