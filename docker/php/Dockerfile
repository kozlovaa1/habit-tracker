# PHP 8.4 for Symfony with PostgreSQL support
FROM php:8.4-cli

# Install system dependencies and PHP extensions
RUN apt-get update \
    && apt-get install -y --no-install-recommends \
        libpq-dev \
        git \
        unzip \
    && docker-php-ext-install -j"$(nproc)" pdo_pgsql \
    && rm -rf /var/lib/apt/lists/*

# Install Composer
ENV COMPOSER_HOME=/tmp/composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /app

###> recipes ###
###< recipes ###

# Default command keeps container alive for exec; docker-compose overrides with a dev server command
CMD ["php", "-v"]
