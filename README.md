# Ali's Music App

## Scenario overview

In today’s fast-paced digital world, music is an essential part of our daily lives. Melodify is a user-friendly web application built to offer an immersive music discovery and streaming experience. It allows users to search for songs, discover new artists, and add new songs or delete existing songs in a playlist. Whether you're looking for the latest hits or exploring new genres, Melodify provides a personalized music experience tailored to your tastes.

The goal of the app is to build a platform where users can search for songs by title or artist, create and manage playlists, and enjoy a smooth and interactive browsing experience. It is designed to help users easily discover and enjoy their favorite music on demand, all in one place.

## Objectives

My task is to focus on back-end functionality with Laravel (e.g., routing, controllers, database management, pagination) and front-end user interface design using Blade templates and simple CSS.:

1. Build the music search functionality using Laravel. The user should be able to search for songs by title or artist, with results paginated.
2. Implement playlist management: Allow users to create, view, and manage playlists.
3. Create a simple user interface: Use Blade templates and basic CSS to ensure the app is responsive.

## Installation

Follow these steps to get the Music App up and running locally on your machine:

### Prerequisites

Make sure you have the following installed:

- [PHP](https://www.php.net/) (version 7.4 or higher)
- [Composer](https://getcomposer.org/)
- [Laravel](https://laravel.com/docs) (version 8.x or higher)
- [MySQL](https://www.mysql.com/) (or any other database of your choice)

### Steps

1. **Clone the repository**:
   ```bash
   git clone https://github.com/yourusername/music-app.git
   ```

2. **Set up the environment file**

Copy the `.env.example` to `.env` and set up your database configuration:
- cp .env.example .env
Generate the application key:
- php artisan key:generate
Run migrations to set up the database tables:
- php artisan migrate
Serve the application:
- php artisan serve
The app should now be running at http://127.0.0.1:8000.

