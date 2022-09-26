run with local mysql database ( document/Group_2_32smiles.sql )


Group_2_32smiles.com is full version zipped on local machine
/////////////////////////////////////////////////////

Backup_Git is git cloned version need to run composer
/////////////////////////////////////////////////////
(newest php )

composer install 
mv .env.example .env 
php artisan cache:clear 
composer dump-autoload 
php artisan key:generate
