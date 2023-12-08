## SAAS Multi Database Boilarplate from Filament with stancl/tenancy Package Manager

# How to use it

1. git clone https://github.com/codeit-np/saas_boilarplate.git
2. composer update
3. cp .env.example .env
4. php artisan key:generate
5. Rename your database name in .env file
6. php artisan migrate
7. php artisan tinker
8. $tenant1 = App\Models\Tenant::create(['id' => 'admin','name'=>'admin','email'=>'admin@gmail.com','password'=>'password']);
9. $tenant1->domains()->create(['domain' => 'localhost']);
10. php artisan serve

Admin Panel
http://localhost:8000/admin/login

email: admin@gmail.com
password: password

# To fix amdin login UI

asset_helper_tenancy = false in config/tenancy.php

User Panel
http://localhost:8000/user/login

## Create Tenant and Domains

http://localhost:8000/subscribe
