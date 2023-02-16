# Funkybooking

Funkybooking is a seat reservation system for students, teachers, and administrators. It allows students to reserve seats in classrooms, and teachers to approve or cancel these reservations. The system is built with Laravel as the backend framework and Bootstrap as the frontend framework.

### Features

   * User authentication using Oauth2.0
   * User roles (student, teacher, and administrator)
   * Room, Seat, Booking, and Checkin models
   * Booking creation, update, and deletion
   * Seat availability check
   * Approval required for certain seats
   * Automated anonymization of inactive users
   * Favorite seat functionality for students
   * Teacher and student dashboards
   * Notification for booking reminders

### Getting started

To get started with Funkybooking, follow these steps:

   * Clone the repository
   * Install dependencies with `composer install`
   * Configure your database settings in the .env file
   * Run migrations with `php artisan migrate`
   * Start the development server with `php artisan serve`

### Contributing

If you'd like to contribute to Funkybooking, feel free to submit a pull request. Any contributions, no matter how small, are greatly appreciated!
