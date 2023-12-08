## SAAS Multi Database Boilarplate

# Project : Filament with stancl/tenancy Package Manager

# How to use it

1. git clone https://github.com/codeit-np/saas_boilarplate.git
2. composer update
3. php artisan migrate
4. php artisan tinker
5. $tenant1 = App\Models\Tenant::create(['id' => 'foo','name'=>'admin','email'=>'admin@gmail.com','password'=>'password']);
6. $tenant1->domains()->create(['domain' => 'localhost']);

## Now create Tenant and Domain with this url

http://localhost:8000/subscribe
