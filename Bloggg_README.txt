Bloggg

Bloggg is a Laravel-based blog application that allows users to create posts, comment on posts, and manage their profiles.
It uses Laravel Breeze for authentication and Bootstrap for the user interface.

FEATURES
- User authentication (Login, Register, Logout)
- User profile management (edit name, email, password)
- Create, edit, and delete blog posts
- Comment system with edit and delete (owner only)
- Confirmation dialogs for delete and logout actions
- Clean blog-style UI using Bootstrap
- Responsive design

TECHNOLOGIES USED
- Laravel (PHP Framework)
- Laravel Breeze (Authentication)
- Blade (Templating Engine)
- Bootstrap 5
- MySQL

INSTALLATION & SETUP
1. Clone the repository
   git clone https://github.com/Zekrom615/bloggg.git
   cd bloggg

2. Install dependencies
   composer install
   npm install
   npm run build

3. Environment setup
   cp .env.example .env
   php artisan key:generate

4. Configure database in .env
   DB_DATABASE=bloggg
   DB_USERNAME=root
   DB_PASSWORD=

5. Run migrations
   php artisan migrate

6. Run the application
   php artisan serve

USER ROLES
Guest:
- View blog posts
- Login / Register

Authenticated User:
- Create, edit, delete own posts
- Comment on posts
- Edit and delete own comments
- Manage profile information


AUTHOR
John Mark Cabonegro

GitHub Profile:
https://github.com/Zekrom615
