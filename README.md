## Getting Started

These instructions will give you a copy of the project up and running on
your local machine for development and testing purposes. 

A step by step series of examples that tell you how to get a development
environment running. If you already have the downloaded file, you can skip
the "clone repository".

### Clone repository 

    git clone https://github.com/JaydenKu03/MMU-FYP-System-PART2.git


### Note
- Create a database call "fyp_web" and import the sample_data.sql

- The db_connect.php and session.php is inside the function folder. Use that to connect db and access session variable

- Any pages that require login to access can place "require ('function/session.php');" You can also access
  the login user's name, ID, and role by using the $_SESSION[]

- If the new added php file only work as function, then place inside the function foler. If it's for viewing purpose 
like need to include nav bar/ footer, then place it at the root folder.

