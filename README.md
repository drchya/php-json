To-Do List Web Application (PHP & HTML)
This is a simple To-Do List web application built using PHP and HTML. The app allows users to add tasks, store them in a MySQL database, and display them in a list format. The tasks are sent and retrieved from the database using a Controller and Model structure, with data formatted in JSON for seamless communication between the frontend and backend.

Features
Task Management: Add tasks to the list and view them.
MVC Architecture: The application follows the Model-View-Controller design pattern.
Database Interaction: Tasks are stored in a MySQL database.
JSON Data Format: Data is sent and received in JSON format between the frontend and backend.
Simple and Responsive UI: Built with basic HTML and simple styling.
Technologies Used
PHP: Backend logic and database interaction.
HTML: Frontend for displaying the to-do list.
MySQL: Database for storing tasks.
jQuery: For AJAX requests and dynamic content updates.
JSON: For data exchange between the frontend and backend.
Installation
Prerequisites
PHP >= 7.0
MySQL
Web server (Apache/Nginx)
Composer (optional for managing dependencies)
Steps to Install
Clone the repository to your local machine:

bash
Copy
Edit
git clone https://github.com/your-username/todo-list-app.git
Set up the Database:

Create a MySQL database (e.g., todo_app).

Import the database schema (or create the todos table) with the following SQL query:

sql
Copy
Edit
CREATE TABLE todos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    task VARCHAR(255) NOT NULL
);
Configure Database Connection:

In the TodoModel.php file, update the database connection details (host, username, password, and database name) to match your local setup.
Run the Application:

Start your web server (Apache or Nginx).
Visit the application in your browser (e.g., http://localhost/todo-list-app).
Usage
Add a Task: Enter a task in the input field and click "Submit" to add it to the list.
View Tasks: Tasks are displayed dynamically from the database.
Delete Tasks: You can delete tasks by clicking the "Delete" button next to each task.
The task list will automatically update every 5 seconds, fetching the latest tasks from the database.

Contributing
If you'd like to contribute to this project, feel free to fork the repository and create a pull request with your changes.

License
This project is open-source and available under the MIT License.
