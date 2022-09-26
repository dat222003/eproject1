run with local mysql database ( local database/Group_2_32smiles.sql )


Git version need to run composer

( composer install
mv .env.example .env 
php artisan cache:clear 
composer dump-autoload 
php artisan key:generate )
