# StoryShare laravel-blog

Website Demo: [https://larablog.kevinmissback.com](https://larablog.kevinmissback.com).

## Installation

1. Clone the repo and `cd` into it
1. `composer install`
1. Rename or copy `.env.example` file to `.env`
1. `php artisan key:generate`
1. Set your database credentials in your `.env` file
1. `npm install`
1. Migrate the Database `php artisan migrate`
1. `npm run dev`
1. `php artisan serve`
1. Visit `localhost:8000` in your browser

## local development

Set a Safety Key in your `.env` file, so that the PostController can interact with your Database.
