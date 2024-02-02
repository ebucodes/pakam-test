# Pakam Test

This project was developed using **PHP 8.2.6 (Laravel 10)** for the Backend and **Vue 3** for the frontend.

## Installation

1. Clone or download the project from the source repository: [https://github.com/ebucodes/pakam-test.git](https://github.com/ebucodes/pakam-test.git)

### Backend Setup

2. Navigate to the `api` section of the application.

3. Run the following commands:
    ```bash
    composer update
    ```

4. Create a file named `.env` in the root folder of the `api` section (`api/.env`). Copy the contents of `api/env.example` and paste it into the newly created `.env` file.

5. Create a database with the same name as specified in the `.env` file.

6. Run the migration to create the necessary tables:
    ```bash
    php artisan migrate
    ```

7. Start the backend application:
    ```bash
    php artisan serve
    ```

### Frontend Setup

8. Navigate to the `app` section of the project.

9. Run the following commands:
    ```bash
    npm install
    ```

10. In the `app/.env` file, if you are using a different port for the backend, change the port number. Otherwise, you can leave it as is.

11. Start the frontend application:
    ```bash
    npm run dev
    ```

12. Create an account, login, and start using the application.

**Note**: The PHP version used is **8.2.6**.

Thank you.
