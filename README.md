<p align="center"><a href="" target="_blank"><img src="https://github.com/kittisolomon/HNG-X-Stage-Two-Task/assets/40053238/4aaeda92-014e-4fd9-b3d1-7fad49230654" width="400" alt="Laravel Logo"></a></p>

## HNG X Stage Two Task

The project is a REST API built with  [Laravel] (https://laravel.com/docs) capable of performing CRUD operation,
of a "Person" resource, the project it interfaces with MYSQL Database, for storage, retrieval and manipulation of resources. The API can create,read,update and delete a person. The API follows the RESTful API principles which include using HTTP methods (POST, GET, PUT, DELETE) to interact with resources.



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
- Edit the file, copy the Database settings below and paste in your '.env' file
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

## Sample Usage

- By now your Project should be running on 'http://localhost:8000' , lets take a dive through Postman to test our API
our project can be access with the endpoint:

> Create Resource
```vbnet
http://127.0.0.1:8000/api/api
```

-  After creating a workspace and collection on Postman, create a new POST request and paste the enpoint above, pass your resource via the body of the request using the form-data panel, hit send and the resource would be persisted to the DB, and a responses would be received as seen:
![create](https://github.com/kittisolomon/HNG-X-Stage-Two-Task/assets/40053238/b126239d-0895-4d33-af9f-0cd270b63767)


> Read Resource

```vbnet
http://127.0.0.1:8000/api/api/id
```

- To read  stored Person resources, you  will need to use the above endpoint but this time, we are passing a route arameter to the endpoint, which is the id that serves as an identifier of individual Person resources in the DB, create GET request on Postman and use the endpoint to retrieve a single Person resource.

![get](https://github.com/kittisolomon/HNG-X-Stage-Two-Task/assets/40053238/beda835c-4ef6-4217-adcf-713223dbb459)


> Update Resource

```vbnet
http://127.0.0.1:8000/api/api/id
```

- To update resource you pass the id to the endpoint, define your request as PUT, pass the resource that would relace the existing DB resource through the body of the request, as seen below:

![update](https://github.com/kittisolomon/HNG-X-Stage-Two-Task/assets/40053238/fee5e587-e556-49b6-b531-13faa1ccb4ee)


> Delete Resource

```vbnet
http://127.0.0.1:8000/api/api/id
```

- To Delete a resource, create a new request with a DELETE method, pass the id you want to delete in the endpoint paramenter and hit send, that particular resource would be deleted.

![delete](https://github.com/kittisolomon/HNG-X-Stage-Two-Task/assets/40053238/0d094dc3-07e7-4568-ba87-4f208af8bd1a)


> Accessing Non-Existant Resource

```vbnet
http://127.0.0.1:8000/api/api/id
```
 - I thought about handling edge cases like when  trying to perform a PUT,DELETE,GET on resource that do not exist, and i define a way to through an error noting that that resource does not exist.
![does_not_exist](https://github.com/kittisolomon/HNG-X-Stage-Two-Task/assets/40053238/74d86ea3-7a4d-470f-a158-0fba7bb9f883)


