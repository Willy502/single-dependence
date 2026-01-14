FROM php:7.4-apache

# Instalar dependencias del sistema
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    libzip-dev \
    zip \
    unzip

# Limpiar caché para reducir el tamaño de la imagen
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# Instalar extensiones de PHP requeridas por Laravel y otras librerías comunes
RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd zip

# Habilitar mod_rewrite para Laravel
RUN a2enmod rewrite

# Configurar el DocumentRoot de Apache para que apunte a la carpeta public
ENV APACHE_DOCUMENT_ROOT /var/www/public
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

# Obtener la última versión de Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Establecer el directorio de trabajo
WORKDIR /var/www

# Copiar el contenido del proyecto al contenedor
COPY . /var/www

# Eliminar composer.lock para evitar conflictos de versiones de PHP si se generó en un entorno diferente
RUN rm -f composer.lock

# Instalar dependencias de PHP
# Usamos --no-dev para producción, quítalo si es para desarrollo
RUN composer install --no-interaction --optimize-autoloader --no-dev

# Ajustar permisos (asumiendo que el servidor web usará www-data)
RUN mkdir -p /var/www/storage /var/www/bootstrap/cache \
    && chown -R www-data:www-data /var/www \
    && chmod -R 775 /var/www/storage /var/www/bootstrap/cache

# Exponer el puerto 80 para Apache
EXPOSE 80
