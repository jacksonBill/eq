1 cp .env.example .env
2 composer install 
3 ./vendor/bin/sail up -d
4 docker exec {lara container name} bash
5 su - sail
6 cd /var/www/html
7 php artisan migrate

