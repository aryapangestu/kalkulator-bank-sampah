Belum selesai :(
</br>

## Installation

1. Clone the github repo:

    ```bash
    git clone https://github.com/aryapangestu/kalkulator-bank-sampah.git
    ```
2. Go the project directory:

    ```bash
    cd kalkulator-bank-sampah
    ```
3. Install the project dependencies:
    ```bash
    composer install
    ```
4. Copy the .env.example to .env or simly rename it:
   </br>If linux:
   ```bash
   cp .env.example .env
   ```
   If Windows:
    ```bash
    copy .env.example .env
    ```
5. Run XAMPP and create an empty Database named "kalkulator-bank-sampah"
   
6. Create tables into database using Laravel migration and seeder:
    ```bash
    php artisan migrate:fresh --seed
    ```
7. Create the application key:
    ```bash
    php artisan key:generate
    ```
8. To create the symbolic link:
    ```bash
    php artisan storage:link
    ```
9.  Start the laravel server:
    ```bash
    php artisan serve
    ```
    If css/js doesn't work:
    ```bash
    php -S 127.0.0.1:8000 -t public
    ```
