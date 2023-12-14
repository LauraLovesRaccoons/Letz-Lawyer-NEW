To run the project run these 5 commands (Laravel must be installed)

This is for docker and mac:

---

docker compose up

composer install

php artisan migrate --seed

php artisan key:generate

php artisan serve

---

be sure to adjust the .env file in the root for Windows (with XAMPP) - 
the compose.yaml should also probably be adjusted in that case

see comments for optimal settings

for Linux (not tested) the Mac commands probably work the same

