
<p align="center"><b>KULLIYYAH OF INFORMATION AND COMMUNICATION TECHNOLOGY</b></p>

<p align="center"><b>INFO 3305</b></p>
<p align="center"><b>WEB APPLICATION DEVELOPMENT</b></p>


<p align="center"><b>SECTION 2</b></p>
<p align="center"><b>SEMESTER 1, 2025/2026</b></p>


<p align="center"><b>PROPOSAL FOR PROJECT DEVELOPMENT</b></p>

<p align="center"><b>GROUP MEMBERS:</b></p>
<p align="center"><b>1. GHADI BINTI MOHAMAD (2227380)</b></p>
<p align="center"><b>2. NUHA ILYANEE BINTI ROSLAN (2318178)</b></p>
<p align="center"><b>3. NUR ATHIRAH IZZAH BINTI AZIZAN (2312652)</b></p>
<p align="center"><b>4. IRSYAD FAHMI BIN MISWAN (2318837)</b></p>
<p align="center"><b>5. NUR ALYAA IZYAN BINTI BASRI (2311160)</b></p>

## 1.1 INTRODUCTION

IIUM Sejahtera Clinic is the go-to place for every student of International Islamic University Malaysia (IIUM). They exist in every branch of the aforementioned institution and are well-equipped to cater to their target demographic, often placed within the campus itself. That being said, the establishment lacks a proper system to manage appointments. This has led to the clinics constantly being overwhelmed, and students who need to be tended to are not getting the care that they need.

In hopes of increasing efficiency and proactivity, our team has decided to create an appointment manager app for IIUM Sejahtera Clinic. This app will be utilised for patrons to book their meeting with the health practitioner at the branch closest to them in advance, at any time, from anywhere.



## 1.2 PROJECT OBJECTIVE

We aim to create an app that will make doctor trips less of a hassle by easing the appointment-making process. This is made so by the system within the app, which will automatically arrange it so that the patient is well-matched to the practitioner most suited for their entered concerns and is able to see them at a time most convenient to both parties, using the data from their preferred time and date. We will be able to determine whether the app has truly helped with the existing problem by making a record of appointments that are made and completed, as well as how much waiting time has been reduced, according to the system at the clinics themselves.


## 1.3 FEATURES AND FUNCTIONALITY
  This website provides an organized platform that will help users to book clinic appointments efficiently.The features and functionalities of the website are as stated below.
### 1.3.1 Home Page
 - Where users can login/register through provided button on the website to have access to the clinic   booking appointment system
 - Provides quick access to the booking flow
### 1.3.2 Dashboard
- Display the clinic’s information and an overview of user’s upcoming appointments
- Provide a shortcut button for a new booking appointment or view booking history
### 1.3.3 Book Appointment
This module guides the user through a step-by-step appointment booking process:	
- **Branch Selection** : Users choose their selected campus branch
- **Clinic Type**: Users choose the type of medical service category such as general consultation or dental
- **Service Selection**: Display list of services available based on the selected clinic type
- **Date Selection** : Users can pick an available date and time slot
- **Confirmation** : Shows the booking details for final review before confirming the booking
### 1.3.4 Booking History
- Allows users to view history of their past and recent appointments.
- Include details such as appointment date,service, clinic branch and status
### 1.3.5 Profile Page
- Enable user to manage their personal information such as name,phone number and email


---



<p align="center"><b>KULLIYYAH OF INFORMATION AND COMMUNICATION TECHNOLOGY</b></p>

<p align="center"><b>INFO 3305</b></p>
<p align="center"><b>WEB APPLICATION DEVELOPMENT</b></p>


<p align="center"><b>SECTION 2</b></p>
<p align="center"><b>SEMESTER 1, 2025/2026</b></p>


<p align="center"><b>PROPOSAL FOR PROJECT DEVELOPMENT</b></p>

<p align="center"><b>GROUP MEMBERS:</b></p>
<p align="center"><b>1. GHADI BINTI MOHAMAD (2227380)</b></p>
<p align="center"><b>2. NUHA ILYANEE BINTI ROSLAN (2318178)</b></p>
<p align="center"><b>3. NUR ATHIRAH IZZAH BINTI AZIZAN (2312652)</b></p>
<p align="center"><b>4. IRSYAD FAHMI BIN MISWAN (2318837)</b></p>
<p align="center"><b>5. NUR ALYAA IZYAN BINTI BASRI (2311160)</b></p>


## 1.0 ABSTRACT
This project aims to improve the booking system at IIUM Clinics by inrtoducing a new system that can be navigated remotely  via a website by simplifying the appoitment booking process. The system allows the users to book their appointments and view their booking history, along with choosing the type of treatment they would like to get in a structured and user-friendly interface. The IIUM e-Clinic Web Application is developed using Laravel Framework, applying the Model–View–Controller (MVC) architecture to ensure maintainability, security, and scalability.


## 2.0 INTRODUCTION
With the rapid growth of web technologies, healthcare services are increasingly adopting digital systems to improve service delivery. Traditional clinic appointment systems often rely on manual processes, which can lead to inefficiencies such as long waiting times and poor record management. This project proposes a web-based clinic management system to address these issues.

The IIUM e-Clinic Web Application is developed to allow patients to manage their clinic interactions online through a simple and intuitive interface. Laravel was chosen as the main framework due to its robust security features, MVC architecture, and ease of development.

## 3.0 SCOPE OF THE PROJECT
This project was able to cover:
- Patient login authentication
- Brief overview of IIUM Clinics
- Booking Appointment Service
- View Booking History
- Profile view and edit

## 4.0 SYSTEM ARCHITECTURE
The system follows the Client–Server Architecture using Laravel’s MVC framework:
### 4.1 Model
Handles database interactions
List of models used:
- User

### 4.2 View
Blade templates for UI display
List of views made:
-

## 4.3 Controller
Manages business logic and data flow
List of controllers used:
- 


This architecture ensures separation of concerns and easier maintenance.

## 5.0 SYSTEM IMPLEMENTATION
### 5.1 Framework and Tools
#### 5.1.1 Laravel Framework
  We used the Laravel Framework a it provides a complete ecosystem that is easily navigated by web artisans, utilising the starter kits that came with authentication so that we could change the details to better suit our project.

#### 5.1.2 PHP
  Language used in Laravel in order for us to create our web application.

#### 5.1.3 MySQL
  Used for databases that we have in our web application. Its creation is done via the phpMyAdmin website.
  
#### 5.1.4 HTML & CSS
  Hypertext Markup Language (HTML) was used for creating our views, while Cascading Style Sheets (CSS) is core web language that we used to describe the presentation and visual formatting, making our website more visually appealing as opposed to raw HTML files. Some views used an external CSS file while some views made use of the embedded style of referencing the stylesheet, and others used Tailwind, which is essentially connecting the CSS by the inline method.

#### 5.1.5 Blade Template Engine
  Blade is an engine already existing in Laravel that helps with creating a dynamic between HTML and PHP files that are highly readable.

### 5.2 Routing and Controllers
Laravel routes are defined in web.php, mapping URLs to controller methods. Controllers retrieve data and pass it to Blade views for display.

### 5.3 Blade Templates
  Blade templates are used to display data dynamically while maintaining clean and reusable layouts through template inheritance. This is used in our views.

## 6.0 TESTING AND VALIDATION

| Test Case   | Description   | Expected Result   |
| ----------- | ------------- | ----------------- |
|Login Test   | User login    | Succesful login   |
|Book Appointment   | User books an appointment    | Appointment succesfully booked   |
|Booking History   | Display bookings    | Previous vookings shown   |
|View Profile   | Display profile info    | Correct data shown   |
|Edit Profile   | Edit profile info    | Data succesfully updated   |



## 7.0 RESULTS AND DISCUSSION
The system successfully meets all stated objectives. Users can view their profile and booking history in a structured manner. Laravel’s MVC architecture improved code organization and development efficiency. However, the system is limited to display-only functionality.

## 8.0 CONCLUSION
In conclusion, the IIUM e-Clinic Web Application demonstrates the effective use of the Laravel framework to develop a functional and user-friendly web system. The project enhanced understanding of MVC architecture, Blade templating, and web application development best practices.

## 9.0 IMPROVEMENTS FOR THE FUTURE
As the website continues to be widely used, we would like to implement a few improvements in the future, including:
- User email notifications
- Online payment integration
- Mobile application version

## 10.0 REFERENCES
1. Laravel Documentation: https://laravel.com/docs
2. PHP Manual: https://www.php.net
3. W3Schools, HTML & CSS Tutorials
4. Lecture Slides



  




