Social Media Clone (Laravel + Tailwind CSS)
A simple and modern social media application where users can register and log in, create and delete their own posts, and view a dashboard.

## Screenshots

Here are some visual previews of the application:

### Login Page
A clean and user-friendly login page.
![Login Page Image](https://raw.githubusercontent.com/aglucazgeorgeann-ship-it/social-media-clone/92092798624159abdf493e8a9a152a277787322e/login.jpg)

### Dashboard View
The main dashboard where posts are displayed.
![Dashboard Application Image](https://raw.githubusercontent.com/aglucazgeorgeann-ship-it/social-media-clone/refs/heads/main/dashboard.jpg)

### Posts View
The list of posts submitted by users.
![Posts View Image](https://raw.githubusercontent.com/aglucazgeorgeann-ship-it/social-media-clone/92092798624159abdf493e8a9a152a277787322e/posts.jpg)

Built with Laravel, Blade templates, Tailwind CSS, and SQLite/MySQL.

Core Features
This application currently offers the following functionalities:

User Registration & Authentication: Secure account creation and authentication.

Post Creation: Ability to create new text-based posts.

Post Deletion: Ability to delete one's own posts.

Dashboard View: A centralized page where posts are displayed.

Dynamic UI: Responsive and modern user interface for a seamless experience.

Technologies Used
This project is built using the following core technologies:

Backend Framework: Laravel (PHP)

Templating Engine: Blade

CSS Framework: Tailwind CSS

Database: SQLite (for development) / MySQL (for production)

Package Managers: Composer (PHP), npm (JavaScript/CSS)

Version Control: Git, GitHub

Screenshots
Here are some visual previews of the application:

Login Page
A clean and user-friendly login page.

Dashboard View
The main dashboard where posts are displayed.

Posts View
The list of posts submitted by users.

Project Setup
To run this project on your local machine, follow these steps:

Clone the repository:

git clone https://github.com/aglucazgeorgeann-ship-it/social-media-clone.git
cd social-media-clone

Install PHP Dependencies:

composer install

Install JavaScript/NPM Dependencies:

npm install

Copy the .env file and Configure:

cp .env.example .env

Edit the .env file and configure your database connection. If you're using SQLite (recommended for quick setup), ensure you have a database.sqlite file in the database/ folder (you can create it: touch database/database.sqlite on Linux/macOS, or manually create an empty file on Windows).

Set the APP_URL to your development URL, for example: APP_URL=http://127.0.0.1:8000

Generate the Application Key:

php artisan key:generate

Run Database Migrations:

php artisan migrate

Compile Frontend Assets:

npm run dev
# Or 'npm run build' for production assets

Run the Laravel Development Server:

php artisan serve

Visit the Application:

Open your browser and navigate to http://127.0.0.1:8000.

Usage
After setting up the project:

Register a new user account.

Log in using your credentials.

Start creating new posts on the dashboard.

Try deleting your own posts.

Future Enhancements
Like/Unlike functionality for posts.

Comments on posts.

Follow/Unfollow system between users.

User profiles with a list of their posts.

Real-time notifications using WebSockets (e.g., Laravel Echo, Pusher, Socket.IO).

Image/Media uploads to posts.

Search functionality.

Pagination for posts.

License
This project is open-source and licensed under the MIT License.
