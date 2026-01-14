FROM php:7.4-fpm

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
RUN chown -R www-data:www-data /var/www \
    && chmod -R 755 /var/www/storage

# Exponer el puerto 9000 para PHP-FPM
EXPOSE 9000
CMD ["php-fpm"]
