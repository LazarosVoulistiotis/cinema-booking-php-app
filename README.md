# Cinema Booking PHP App
<p> This is a responsive web application for a cinema booking system, built with a PHP backend and a dynamic frontend. The application allows users to browse movies, check showtimes, and book seats. </p>

### 📝 Table of Contents
1. [Features](Features "Features")
2. [Technologies_Used](Technologies_Used "Technologies_Used")
3. [Prerequisites](Prerequisites "Prerequisites")
4. [Installation](Installation "Installation")
5. [Usage](Usage "Usage")
6. [Database_Schema](Database_Schema "Database_Schema")
7. [API_Endpoints](API_Endpoints "API_Endpoints")
8. [Future_Improvements](Future_Improvements "Future_Improvements")

## ✨ Features
* **Responsive Design:** Ensures a seamless user experience across various devices, including desktops, tablets, and mobile phones.
* **User Authentication:** Secure login and registration for customers and employees.
* **Movie Browse:** View a list of available movies with details and showtimes.
* **Seat Booking:** An intuitive interface for selecting and reserving seats in a specific theater.
* **API-Driven:** The frontend communicates with the backend via RESTful API endpoints, allowing for dynamic data synchronization.
* **Employee Dashboard:** A separate interface for employees to manage movie schedules and bookings.

## 🛠️ Technologies_Used
* **Backend:**

  - **PHP 8.2.12:** The core server-side scripting language.

  - **MySQL:** The relational database for storing movie, user, and booking information.

* **Frontend:**

  - **HTML5, CSS3, JavaScript:** The foundational web technologies.

  - **Bootstrap 5 & MDB 5 (Material Design for Bootstrap):** For a modern and responsive user interface.

  - **jQuery:** For DOM manipulation and handling client-side interactions.

  - **Font Awesome:** For a variety of icons.

## ✅ Prerequisites
To run this project, you will need a local server environment with support for PHP and MySQL. We recommend using one of the following:
* **XAMPP**
* **WAMP**
* **MAMP**

You should also have Composer installed to manage PHP dependencies.

## 🚀 Installation
Follow these steps to get the project up and running on your local machine:

1. **Clone the repository:**

> Bash
> 
> git clone https://github.com/your-username/cinema-booking-php-app.git

2. **Navigate to the project directory:**

> Bash
> 
>cd cinema-booking-php-app

3. **Install PHP dependencies using Composer:**

> Bash
> 
>composer install

4. **Database Setup:**
* Create a new MySQL database (e.g., cinema_db).
* Import the database schema from the database.sql file (if provided) into your newly created database.
* Update the database connection details in your configuration file (e.g., config/database.php).

5. **Configure the Application:**
* Create a .env file from the provided .env.example file.
* Update your database credentials and other necessary configurations in the .env file.

6. **Run the application:**
* Start your local web server (Apache/Nginx).
* Access the application by navigating to the project's root URL in your web browser (e.g., http://localhost/cinema-booking-php-app).

## 📖 Usage
* **Registration:** Navigate to the /register page to create a new user account.
* **Login:** Log in with your new credentials on the /login page.
* **Booking:** Select a movie, a showtime, and your preferred seats to complete a booking.
* **Employee Panel:** Access the employee dashboard (if you have the correct permissions) to manage movies and bookings.

## 🗃️ Database Schema
The database is designed with several tables to manage movies, users, bookings, and other related data.

* **Users Table:** Stores user information, including roles (customer, employee).
* **Movies Table:** Contains details about each movie, such as title, description, and duration.
* **Showtimes Table:** Links movies to specific dates and times in a theater.
* **Bookings Table:** Records customer reservations for seats.
* **Seats Table:** Stores information about the seats in each theater.

## 📡 API_Endpoints
The application uses RESTful API endpoints for data exchange. Here are some of the key endpoints:

* **GET /api/movies:** Retrieve a list of all movies.
* **GET /api/showtimes/{movie_id}:** Get showtimes for a specific movie.
* **POST /api/bookings:**  Create a new booking.
* **GET /api/seats/{showtime_id}:** Check seat availability for a given showtime.

## 🚀 Future_Improvements
Based on the project documents, potential future enhancements include:

* **Offline Support:** Implement Service Workers to provide offline functionality.
* **Progressive Web App (PWA) Integration:** Turn the web application into a PWA for a better mobile experience.
* **Improved Performance:** Enhance speed through data caching mechanisms.
* **User Reviews:** Add a feature for users to rate and review movies.
* **Payment Gateway Integration:** Allow for multiple payment options.
