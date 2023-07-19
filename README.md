<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>
<h1> Project - Setup Instructions</h1>

Thank you for showing interest in this Laravel project! Below are the step-by-step instructions to download, configure, and run the project after cloning or downloading the ZIP from the GitHub repository.

## Prerequisites

- [Composer](https://getcomposer.org/) installed on your system.
- [PHP](https://www.php.net/manual/en/install.php) installed on your system (PHP 8.0 or higher recommended).
- [MySQL](https://www.mysql.com/) or any other supported database management system.
- or you can install XAMPP for PHP and MySQL 
- Basic knowledge of working with Laravel, PHP, and MySQL.

## Steps to Run the Project

### 1. Clone the Repository or Download ZIP

You have two options to get the project files:

- **Option 1: Clone the Repository (Recommended)**
  ```
  git clone https://github.com/Ghnshym/repository-name.git
  ```

- **Option 2: Download ZIP**
  - Visit the GitHub repository at https://github.com/Ghnshym/Blogging-App.git
  - Click on the "Code" button and select "Download ZIP."
  - Extract the downloaded ZIP file to a directory of your choice.

### 2. Install Dependencies

- Open a terminal or command prompt.
- Navigate to the project folder (the one containing `composer.json`).
- Run the following command to install the project's dependencies:

  ```
  composer install
  ```

### 3. Configure Environment

- In the project folder, locate the `.env.example` file and rename it to `.env`.
- Open the `.env` file in a text editor and set your database connection details, such as database name, username, and password.

### 4. Generate Application Key

- In the terminal or command prompt, run the following command to generate the application key:

  ```
  php artisan key:generate
  ```

### 5. Run Migrations

- In the terminal or command prompt, run the following command to create the necessary database tables:

  ```
  php artisan migrate
  ```

### 6. Serve the Application

- In the terminal or command prompt, run the following command to start the development server:

  ```
  php artisan serve
  ```

- The application will be served at `http://localhost:8000`.

## Accessing the Application

You can now access the Laravel project by visiting `http://localhost:8000` in your web browser.

## Troubleshooting

If you encounter any issues during the setup process, here are some common troubleshooting tips:

- Make sure all prerequisites are installed and set up correctly.
- Double-check the database connection details in the `.env` file.
- Verify that you have the necessary permissions to create and access the database.
- Check for any Laravel-specific error messages in the terminal or `storage/logs/laravel.log` file.

If you still face problems, feel free to reach out for assistance by creating an issue on the GitHub repository.

Enjoy working with the Laravel project! 🚀

