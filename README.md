# REST API with Laravel and PHP

This is a simple REST API built using Laravel and PHP for managing user data with a SQL database.

## Table of Contents

- [Introduction](#introduction)
- [Prerequisites](#prerequisites)
- [Installation](#installation)
- [Usage](#usage)
- [Endpoints](#endpoints)
- [Contributing](#contributing)


## Introduction

This Laravel and PHP REST API allows you to perform basic CRUD (Create, Read, Update, Delete) operations on user data stored in a SQL database. You can create, retrieve, update, and delete user records.

## Prerequisites

Before using this API, ensure you have the following prerequisites installed:

- PHP: [Download and install PHP](https://prototype.php.net/downloads/)
- XAMPP: [Install and set up Xampp](https://www.apachefriends.org/)

## Installation

 Clone the repository:
 
   git clone https://github.com/leakeybraxton/hngStage2.git
   cd into  the project
   

 Install dependencies:
  terminal
  npm composer
 

## Usage
Start the server
  Xampp
  Set the Apache directory to the project
  
You can now use the API to perform CRUD operations on user data

## Endpoints
### Create a User
- URL: /api/person

- Method: POST

- Request Body: JSON object with a "name" field (required)

- Example:
  
    {
      "name": "Leakey"
    }
  
- Response: JSON object with the created user's data
- Example:
  
  {
    "_id": "1",
    "name": "Leakey"
  }
  

### Retrieve All Users
- URL: /api/person
- Method: GET
- Response: JSON array containing all user records

### Retrieve a User by ID
- URL: /api/person/{id}
- Method: GET
- Response: JSON object with the user's data or "No such user" if not found


### Update a User by ID
- URL: /api/person/{id}/edit

- Method: PUT

- Request Body: JSON object with the "name" field for updating

- Example:
  
  {
  "name": "New Name"
  }
  
- Response: JSON object with the updated user's data or "No such user" if not found

### Delete a User by ID
- URL: /api/person/{id}/delete
- Method: DELETE
- Response: JSON object with the deleted user's data or "User not found" if not found


## Contributing
Contributions are welcome! If you would like to contribute to this project, please open an issue or submit a pull request.
