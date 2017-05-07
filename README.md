run in cli:
1) composer install
2) php bin/console doctrine:database:create
3) php bin/console doctrine:schema:update --force
4) php bin/console doctrine:fixtures:load
5) php bin/console server:run

And go to 127.0.0.1:8000 in browser

====
=======
