## Rest API - FormBay

Please follow the guide.

1. `git clone`
2. `update the .env file along with database connection`
3. `composer install && composer update`
4. `php artisan migrate`
5. `php artisan db:seed`

set the APP_URL in .env file (e.g)

```
APP_URL=http://localhost:8000
```

Open an terminal window and copy paste the following command

```
php artisan serve
```

Use postman or browser to call the below API
```
URL : http://localhost/rest-api-test/api/users
```

1. Get All Users
```
URL : http://localhost/rest-api-test/api/users
```
2. Get users by ID
```
URL : http://localhost/rest-api-test/api/users/5a0e4b82078f471ae05dd33f
```
3. Get All Users
```
Example Params: key=name / value=Susana
URL : http://localhost/rest-api-test/api/users?name=Susana