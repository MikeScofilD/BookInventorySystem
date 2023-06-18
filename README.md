

Here is a step-by-step guide on unpacking a Laravel project from GitHub:

1) Clone the repository: Open the command line (terminal) on your computer and execute the following command to clone the repository from GitHub:

git clone https://github.com/MikeScofilD/BookInventorySystem.git

Replace <repository_URL> with the URL of your GitHub repository.

2) Navigate to the project directory: Navigate to the project directory using the cd command:

cd BIS-BookInventorySystem

Replace <directory_name> with the name of the directory where the repository was cloned.

3) Install dependencies: Run the composer install command to install all the dependencies specified in the composer.json file:

composer install

4) Create the .env file: Copy the contents of the .env.example file into a new .env file:

cp .env.example .env

5) Generate the application key: Execute the php artisan key:generate command to generate a unique key for your application:
php artisan key:generate

6) Configure the database connection: Open the .env file and provide the necessary details for connecting to your database, including the database name, username, and password.

7) Run the migrations: Run the migrations and seeds to create the required tables in the database:
php artisan migrate
php artisan db:seed

Name: admin
Email: admin@admin.com
Password: password

Name: User
Email: user@admin.com
Password: password

Command to display images Run php artisan storage:link.

If the images are not displaying, modify the .env file: Update the APP_URL to http://127.0.0.1:8000.

8) Start the development server: Launch the Laravel's built-in development server using the command:
php artisan serve

9) Open the application in a browser: Open a web browser and navigate to http://localhost:8000 to see your Laravel application in action.
