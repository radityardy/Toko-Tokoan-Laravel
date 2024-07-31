# Laravel Authentication Template

This is a basic Laravel authentication template that includes a navigation bar with login, register, and logout functionality. The template uses Bootstrap for styling and includes necessary scripts and styles for a responsive design.

## Features

- User authentication (login, register, logout)
- Responsive navigation bar
- Bootstrap 4.5.2 for styling
- Google Fonts (Nunito)

## Installation

1. Clone the repository:
    ```sh
    git clone https://github.com/yourusername/laravel-auth-template.git
    cd laravel-auth-template
    ```

2. Install dependencies:
    ```sh
    composer install
    npm install
    ```

3. Copy the `.env.example` file to `.env` and update your environment variables:
    ```sh
    cp .env.example .env
    ```

4. Generate an application key:
    ```sh
    php artisan key:generate
    ```

5. Run migrations:
    ```sh
    php artisan migrate
    ```

6. Serve the application:
    ```sh
    php artisan serve
    ```

## Usage

- Visit `http://localhost:8000` in your browser.
- Use the navigation bar to register, login, and logout.

## Contributing

Contributions are welcome! Please open an issue or submit a pull request for any changes.

## License

This project is open-source and available under the MIT License.