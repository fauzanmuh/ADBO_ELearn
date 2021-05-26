# SMKLearn
AdminLTE x Laravel E-Learning System Project

Features

User Roles
Admin, Teacher,
Student.

Basic Features

Authentication, Course/Mapel, Class/Kelas,
Upload Theory/Materi (Teacher),
See Theory/Materi based on Student Class and Course.

User Manager

Create Student, Manage Student Profile,
Create Teacher,
Manage Teacher Profile.

# Installation

Create a Database Table in phpMyAdmin

Extract the SMKLearn Source Code that has been downloaded to a folder anywhere.

Open Code Editor → Terminal.
  
Enter these commands one by one (without the $ sign),
  ```$ composer update
  $ composer install
  $ cp .env.example .env
  $ php artisan key:generate
  $ php artisan storage:link
  ```
  
Edit the .env file like this,
  ```DB_CONNECTION = mysql
  DB_HOST = 127.0.0.1 // change to Host your database
  DB_PORT = 3306
  DB_DATABASE = adbo_elearning // change to the name of the database table that you created
  DB_USERNAME = root // change to be your database username, default root
  DB_PASSWORD = ... // change to your databse password, null default 
  ```
  
Run this command for Migrate & Seed :
  ```$ php artisan migrate```
  ```$ php artisan db:seed```
  
Done 😉, to run LaraELearn enter the command below:
  ```$ php artisan serve```
  
Then open the browser, and enter the url:
  ```http://127.0.0.1:8000```
  
or if you want to run on another port, use the command:
  ```$ php artisan serve --port: 627 // e.g. the port is "627"```
  
Thank you, Good Luck ... 😁


# The Accounts on seeder :
Admin Account - Username: admin, Password: 12345678

Teacher Account - Username: teacher, Password: 12345678

Student Account - Username: student, Password: 12345678

You can add new account from admin account.
