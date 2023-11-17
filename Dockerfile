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

# Instalar el cliente de MySQL
RUN apt-get update && apt-get install -y default-mysql-client

# Instala Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Establece el directorio de trabajo
WORKDIR /var/www/html

# Copia el archivo de configuración personalizado de Apache
COPY my-apache-config.conf /etc/apache2/sites-available/000-default.conf

# Copiar "wait-for-db.sh" en el contenedor
COPY wait-for-db.sh /wait-for-db.sh
RUN chmod +x /wait-for-db.sh

# Habilitar mod rewrite
RUN a2enmod rewrite

# Copia los archivos de tu aplicación en el contenedor
COPY . /var/www/html

# Asignar permisos adecuados a los directorios storage y bootstrap/cache
RUN chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

# Usa un comando para escribir las variables de entorno en el archivo .env
RUN echo "API_USER=${API_USER}" >> .env && \
    echo "API_PASSWORD=${API_PASSWORD}" >> .env

# Instala las dependencias de PHP
RUN composer install --no-interaction --verbose

# Expone el puerto 80
EXPOSE 80

# Cambia los permisos de los archivos
RUN chmod -R 755 /var/www/html