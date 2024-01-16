FROM php:8.2-apache
#Indica la imatge de contenidor que volem descarregar de Dockerhub
RUN docker-php-ext-install pdo pdo_mysql 
#Aquesta ordre serveix per instalar PDO per PHP i accedir a MySQL
