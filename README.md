```diff
- ## !!!!!!!!!! This project is not finished yet !!!!!!!!
```

## User Management Application

Hi,
I made a user management application using Laravel, MongoDB and VueJs. To test the API created in this application,
I used VueJs in the frontend and Bootstrap in the design.


## Specifications

- Add new user
- Delete user key by _id
- Update user key by _id
- Get all users 
- Get single user
- Design support to do all these operations
  
## Used technologies

**Frontend:** Vue, Bootstrap5

**Backend:** PHP,Laravel

**Database:** MongoDB

  
## API USAGE

#### Get All Users

```http
  GET /api/users
```

#### Get Single User

```http
  GET /api/users/{id}
```

| Parametre | Tip     | Açıklama                       |
| :-------- | :------- | :-------------------------------- |
| `id`      | `string` | **important**. Get Single User by _id |


#### Delete User

```http
  DELETE /api/users/{id}
```

| Parametre | Tip     | Açıklama                       |
| :-------- | :------- | :-------------------------------- |
| `id`      | `string` | **important**. DELETE User by _id |

#### Create User

```http
  POST /api/users/
```

#### Update User

```http
  POST /api/users/
```

| Parametre | Tip     | Açıklama                       |
| :-------- | :------- | :-------------------------------- |
| `_id`      | `string` | **important**. if user editing, '_id' variable should be sent with formdata |

  
## Bilgisayarınızda Çalıştırın

Clone project 
```bash
  git clone https://github.com/efeibrahimm/laravel-mongodb-users-api.git
```

Go to project folder

```bash
  cd project-folder
```

Install required packages
```bash
  composer install && composer update
```
```bash
  npm install 
```

Install the Database on Local Server and add the variables to the .env file
```bash
  DB_CONNECTION=mysql
  DB_HOST=127.0.0.1
  DB_PORT=3306
  DB_DATABASE=your_DB_name
  DB_USERNAME=your_DB_username
  DB_PASSWORD=your_DB_password
```


Run the server
```bash
  php artisan serve
```
```bash
  npm run hot 
```

  
## Support

Email ibrahim.efee@hotmail.com for support.