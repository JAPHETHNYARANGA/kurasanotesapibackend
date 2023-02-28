# Technologies Used
* Laravel 9.
* MYSQL.
* Laravel Passport - For Apis
# How To Set Up Project
* Clone the repository from https://github.com/JAPHETHNYARANGA/kurasanotesapibackend.git

* run `composer install` in your terminal to install the project dependencies.
* create a .env file create your local db environment.
* create an application key in your terminal with the command `php artisan key:generate`
 * Migrate your database with the command `php artisan migrate` in your terminal.
 * Create passport secret key using the command `php artisan passport:client --personal`

 then add the following to your .env files replacing the values with the generated values:
 `PASSPORT_PERSONAL_ACCESS_CLIENT_ID="client-id-value"` <br>
 `PASSPORT_PERSONAL_ACCESS_CLIENT_SECRET="unhashed-client-secret-value"`

 * Run your application by running `php artisan serve` in your terminal and test your api using postman before consuming it in your client application.



# Api End Points

* When running the application on local host, the base url for the application is `http://127.0.0.1:8000/`



## PhoneBook End Point
### Add PhoneBook
* To Create a new note, the end point is `/api/addContact`


* The expected successful response is<br>
`{`<br>
    `"success": true,`<br>
    `"message": "note added successfully"`<br>
`}`<br>



### get phonebook
* To get all contacts, the end point is `/api/contacts`


* The expected successful response is<br>
`{`<br>
    `"success": true,`<br>
    `"notes": [`<br>
      `  {`<br>
         `   "id": 1,`<br>
           ` "firstName": "Jogn",`<br>
           ` "lastName": "Doe",`<br>
            ` "email": "Doe@gmail.com",`<br>
           ` "created_at": "2023-02-16T14:33:33.000000Z",`<br>
            `"updated_at": "2023-02-16T14:33:33.000000Z"`<br>
       ` },`<br>
       





### delete specific contact id
* To delete a specific note, the end point is `/api/deleteContact/{id}`
* The id is the specific id of the note that is obtained when all the notes are fetched.

* The expected successful response is<br>
`{`<br>
    `"success": true,`<br>
    `"message": "note deleted successfully"`<br>
`}`<br>


### update specific contact id
* To update a specific note, the end point is `/api/updatenotes/{id}`
* The id is the specific id of the note that is obtained when all the notes are fetched.


* When testing the update url on postman the parameters to be updated should be attached to the url as shown :<br>      
`PUT :: http://127.0.0.1:8000/api/updateContact/{id}`
* The expected successful response is<br>
`{`<br>
    `"success": true,`<br>
    `"message": "note updated successfully"`<br>
`}`<br>

