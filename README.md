# fourthSprint
Laravel framework.
Project about a football management.

![Home view for a guest](home.png)

## Installation

1. Clone the repo to your computer
```
git clone https://github.com/GabrielaMaureira/fourthSprint.git
```
2. On your terminal, navigate to the folder location
```
cd soccerLeague
```
3. Run composer install. (If you don't have composer on your computer, install it: https://getcomposer.org/download/)
```
composer install
```
4. Create a MySQL database on your computer. (If you don't have it, you can install Xampp, which also includes PHP: https://www.apachefriends.org/download.html).
5. Configure the .env file of your project for your system to match the database. Fields that you must match:
```
DB_HOST
DB_PORT
DB_DATABASE
DB_USERNAME
DB_PASSWORD
```
6. Create an application key
```
php artisan key:generate
```
7. Migrate the database by typing on the terminal:
```
php artisan migrate --seed
```
8. Install npm:
```
npm install
```
10. Run the Vite server: 
```
npm run dev
```
11. Run the Laravel server in another terminal: 
```
php artisan serve
```
Use the route returned by the last command to access the app (typically http://127.0.0.1:8000)
