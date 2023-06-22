# University-Portal-DBMS-Project
I created a fully functional university portal for my Database Management project in 4th semester where I used various frontend and backend server technologies including PHP and fundamental database techniques using PhpMyAdmin. The website incorporates all CRUD database operations which are explained in detail as follows.



# Topic: “University Portal” (30-06-22)




## INTRODUCTION

For this semester’s project of Database System, I have created a web application that is based upon existing DBMS for students of our university. This is a full stack web application which involves use of various frameworks and programming languages for frontend as well as backend. The user will either be a student or an administrator. The student user will have the access to view their information such as their results, attendance, personal information etc. On the other hand, the admin user will have the ability to perform CRUD operations like adding a new student, updating or deleting existing student’s information etc.  

## MOTIVATION

“*As there already exists a student’s portal of our university, why is there a need to make another one?* ”, is a common question that I have been asked many times by my colleagues when working for this project. I used to say that I wanted to upgrade the look of the existing portal and if this project succeeds, I will show this to our faculty and higher authorities, so they give us a chance to upgrade the entire DBMS up to the modern standards with newer frameworks. Hence, I decided to work on this project and understand how things in the backend look like. 

On the mid of May this year however, the IT department upgraded the old student portal with a much better one and of exactly how I dreamt about my portal to look like, by that time this project was halfway complete, so I decided to keep on working as I still got so much to learn from this project.

## PRACTICALITY

This portal is themed about Institute of Space Technology, where I study, but the practicality of this portal can be applied anywhere. All educational institutions, businesses, companies can find this project useful as the backend working involved the use of databases and nothing in today’s modern era works without proper database modelling. Therefore, this application is quite useful for many purposes.

## DEMONSTRATION:

Here are some screenshots that I’ve attached which demonstrate the working of this project.

- Main Login Form:


- User Type: Letting the user choose whether they are a student or administrator.

- **If the user is Student:**

They are greeted with this dashboard, and they can select various options from the sidebar.


When we click on the “Student Profile”:



It shows the information fetched from the database of the student that is currently logged in.

Similarly,

More pages were made which showed various information









So, as we can see, all of this information can be accessed via database and the students only have ability to view their personal information.

- **If the user is Administrator:**

The admin users will have ability to completely view as well as make changes to the database as shown in the following images.

The admin is greeted with the above dashboard, where they can select options from side bar.

The admin can view the list of all the students and can also search for a specific student by their registration number. They can also choose to edit or delete a student from the list.

**CRUD Operation: READ**


Searching for this registration number will provide the following information fetched from the database.


**CRUD Operation: UPDATE**

When clicking the edit button, we are able to make changes and another webpage is opened.










In case we don’t select any option, it shows the following message:


Now let’s change the program of registration number: “200901024” from EE to Computer Science. 

As we can see, the database successfully got updated with the new information.



**CRUD Operation: CREATE**

A new user can also be added by providing relevant information. This is shown as follows.

Adding the new user will add a new user in the database.

**CRUD Operation: DELETE**

Similarly, the admin is privileged to delete a student if they are dropped out of the institution.

If we click the delete button, this user will be removed from the database.



A notification pops up that says the record has been deleted.

Hence the as we can see from the list above, the student Mike having registration number 200901030 has been deleted.





- **Log out Button:**

After the admin or student has ended their task, they can end the session by clicking logout button. It will lead them back to the main login form.


## WORKING

Now we will discuss about how this project was made and what tools and frameworks were used.

##  TOOLS
- HTML
- CSS
- Bootstrap 
- PHP
- MySQL Database
- phpMyAdmin
- Adobe Dreamweaver

## FRONT-END
For the front-end, I used HTML, CSS, Bootstrap to design the layout and theme of website.

The theme was based upon IST’s color scheme mainly light-blue and white therefore I tried to keep it simple. Adobe Dreamweaver was used to help with CSS and for its live design feature.


The image below shows all the files and folders created in order to make this project happen:



## BACK-END
For the back-end, a database was created using MySQL with the use of XAMPP along with phpMyAdmin software. PHP was used as a native language to connect front-end with database. As the database was set up on my computer’s IP address so it will only connect in this device unless some configurations are made in PHP files.

Further details of the database design and links will be explained as follows.

## DATABASE

For the database, I used my understanding of what I studied in this course as well as things like normalization were applied where found necessary. A total of 9 tables were made.

These tables contained all relevant information.  

The schema diagram above shows all the tables and their relationships. Here RegistrationNumber is considered as the primary key and it’s been used as a foreign key in many other tables. The table ‘courses\_info’ was created to assign a course ID to particular course name for normalization purposes.

Various queries have been applied to these tables.

## CONCLUSION 

Working on this project enhanced my knowledge of database management as well as it helped me gain experience as a web developer. I learned so many things and now have the basic knowledge of how DBMS of organizations work. I hope to continue working on similar projects to meet various demands and gain fluency with required tools and frameworks.

