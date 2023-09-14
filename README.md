

## CRUD API

The project is a CRUD API built with  Laravel and the API is capable of performing CRUD operation,
of a "Person" resource, the project interfaces with MYSQL Database for storage, retrieval and manipulation of resources. The API can create,read,update and delete a Person resource. The API follows the RESTful API principles which include using HTTP methods (POST, GET, PUT, DELETE) to interact with resources.



## Stack Used
- PHP
- Laravel
- Composer




## Project Setup  Guide:

- Fork this REPO
- Clone the repo from your GitHub account to your local PC
```
https://github.com/kittisolomon/HNG-X-Stage-Two-Task.git
```

- Navigate to the cloned Project directory
```
 cd cloned-project-directory
```

- Run the composer command to install depencies

```
composer install
```

- Create '.env' file in the project root directory
- Copy the Database settings below and paste in your '.env' file, edit the file and define appropriate Database configurations
```
  DB_CONNECTION=mysql
  DB_HOST=127.0.0.1
  DB_PORT=3306
  DB_DATABASE=My_Database
  DB_USERNAME=root
  DB_PASSWORD=
```
- Generate an Application Key with the command:
```vbnet
php artisan key:generate
```
- Create a database:

 Create a Database in your local database management system (e.g MYSQL) with the same name as defined in your '.env' file above

- Run Migrations:
  To create the project database table, run the command below

  ```
  php artisan migrate
  ```
- Start the Development Server

```
php artisan serve
```
by default your app should be running on 'http://localhost:8000'

Hurray!!! :rocket: you have set the project up and running! :smile:

## CRUD Operation

### Read (GET/api)
- The index method fetches all the information about people stored in the database and sends it back in a JSON format.
### Create (POST/api)
- The create method is employed to insert a new person into the database. Using the following steps:

1. It checks the input data to make sure that a name is provided, that it's a valid string, and that it doesn't exceed a certain length.

2. It looks up the database to see if another person with the same name already exists.

3. If no matching name is found, it creates a brand new record for that person in the database, and return the created person details in JSON.

### Read Single (GET /api/{People:id})
- The create method is used to insert a new person into the database. Here's how it works:
1. It makes sure that the input data is correct, including checking if a name is provided, if it's a valid string, and if it doesn't exceed a certain length.
2. It checks if there is already a person with the same name in the database.
3. If no person with the same name is found, it creates a new record for that person in the database.
4. 
### Update (PATCH /api/{people:id})
- The update method is used to change the name of a person who already exists in the database, based on the passed id:

1. It first checks if the input data is a  string, and doesn't exceed a certain length.
2. Then, it checks if the new name you want to use is not already taken by someone else.
3. If the person is in the database, it updates their name with the new one, and return the updated record fr.

### Delete (DELETE /api/{people:id})
- The destroy method removes a person's record from the database using their ID. If the person is in the database, it gets deleted.

## Sample Usage

> Create a new person 
```vbnet
http://127.0.0.1:8000/api/
```

![create](https://github.com/kittisolomon/HNG-X-Stage-Two-Task/assets/40053238/f3a749d9-62f3-42e7-9841-61c32bba31f2)





> Read a single person detail

```vbnet
http://127.0.0.1:8000/api/id
```

![get](https://github.com/kittisolomon/HNG-X-Stage-Two-Task/assets/40053238/5cd2673f-f669-45f2-9edd-f9c851bf2dfd)





> Update a person detail

```vbnet
http://127.0.0.1:8000/api/id
```
![update](https://github.com/kittisolomon/HNG-X-Stage-Two-Task/assets/40053238/8570250f-78a6-44a7-9aa7-5cd3a54525e9)




> Delete a person 

```vbnet
http://127.0.0.1:8000/api/id
```

![delete](https://github.com/kittisolomon/HNG-X-Stage-Two-Task/assets/40053238/eea7cd8a-d025-41be-afdf-3eb2e73a6cad)








