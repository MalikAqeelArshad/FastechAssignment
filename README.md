## JWT Authentication Demo
- Install composer and postman in your pc
- Insall any server in your pc e.g. wamp, ammps, xammp etc and start the server
- Go to the htdocs or www folder of your localhost server
- Open cmd window
- cmd: git clone https://github.com/MalikAqeelArshad/jwt-authentication.git
- After download the project open the task folder 'jwt-authentication'
- Configure with mysql database in .env file
- DB_CONNECTION=mysql
- DB_HOST=127.0.0.1
- DB_PORT=3306
- DB_DATABASE=fastechtask
- DB_USERNAME=root
- DB_PASSWORD=mysql

### Open Terminal and Run Commands
- Open cmd window in project folder and run some commands:

```bash
composer install
```
```bash
php artisan migrate
```
```bash
php artisan serve
```

- Open postman and can register/login/logout, profile update urls with these methods (get,post,put)
- post: http://127.0.0.1:8000/api/auth/register
- post: http://127.0.0.1:8000/api/auth/login
- post: http://127.0.0.1:8000/api/auth/logout
- get: http://127.0.0.1:8000/api/auth/profile
- put: http://127.0.0.1:8000/api/auth/profile
- get: http://127.0.0.1:8000/api/auth/users (admin can see list of user)
