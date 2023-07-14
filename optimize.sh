#!/bin/bash



echo -e "\e[1;32m Optimizing server \e[0m"
sleep 0.5
{
 	php artisan optimize
}

echo -e "\e[1;32m Config Cache \e[0m"
sleep 0.5
{
    php artisan config:cache
}






echo -e "\e[1;32m Route Cache \e[0m"
sleep 0.5
{
    php artisan route:cache
}

echo -e "\e[1;32m Config Clear \e[0m"
sleep 0.5
{
    php artisan config:clear
}
