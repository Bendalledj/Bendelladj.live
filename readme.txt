Read me 
<--------- LOGIN FORM  ------>

CREATED total of 8 files

login.php = Login Form
signup.php = Signup Form
index.php = A page that shows after logging in.
logout.php = For logging out from index page.
config.php = connecting Mysql database to code
functions.php = all the functions checking and validation

2 css file for connecting index page and login, signup page 

<-----  CREATING DATABASE ------>

mysql -u root -p 
create database project;
use project;


<----- CREATING A NEW USER ------>


create user sysadm@localhost identified by 'kr4705';
grant all on project.* to sysadm@localhost;
FLUSH PRIVILEGES;

<----- CREATING TABLE------>

CREATE TABLE users(
 id BIGINT AUTO_INCREMENT PRIMARY KEY,
user_id INT(100),
 user_name VARCHAR(255),
 password VARCHAR(255),
 email VARCHAR(255)
 );
 
 <column_name> <variable_type>(length);
 

 Then connected this databse to website by editing 'config.php' file.
 
 
 then start the server :)
 
 
 BHOOM !!!!! 

