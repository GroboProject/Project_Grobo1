# tutorial menjalan project 

### buka git bash
### masuk ke folder xampp/htdocs
### git clone https://github.com/GroboProject/Project_Grobo1.git
### masuk ke folder xampp/htdocs/Project_Grobo1
### lalu buka vscode, buat file .env baru dan salin isi file dari .env.example (semuanya)
### buka terminal, lalu
->composer install
->php artisan config:cache
->php artisan config:clear
->php artisan key:generate
->php artisan storage:link
->php artisan migrate
    yes
->php artisan config:cache
->php artisan config:clear
->php artisan serve 
