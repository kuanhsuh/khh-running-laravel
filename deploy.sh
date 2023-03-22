
echo "Deployment started ..."

ssh root@157.230.47.27
cd /var/www/khh-running/laravel
#!/bin/sh
# activate maintenance mode
#php artisan down
# update source code
git pull
# update PHP dependencies
# composer install --no-interaction --no-dev --prefer-dist
# --no-interaction Do not ask any interactive question
# --no-dev  Disables installation of require-dev packages.
# --prefer-dist  Forces installation from package dist even for dev versions.
# Clear the old cache
#php artisan clear-compiled

# Recreate cache
#php artisan optimize

# Compile npm assets
#npm run build

# update database
#php artisan migrate
# --force  Required to run when in production.
# stop maintenance mode
#php artisan up

echo "Deployment finished!"
