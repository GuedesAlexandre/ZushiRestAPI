FROM api-platform/php
COPY . /app
RUN composer install
