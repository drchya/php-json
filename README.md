
# To-Do List Web Application (PHP & HTML)

This is a simple To-Do List web application built using **PHP** and **HTML**. The app allows users to add tasks, store them in a **MySQL** database, and display them dynamically. Tasks are sent and retrieved from the database using a **Controller** and **Model** structure, with data formatted in **JSON** for easy communication between frontend and backend.

## Features

- **Task Management**: Add, view, and delete tasks.
- **MVC Architecture**: Follows the Model-View-Controller design pattern.
- **Database Support**: Tasks are stored in a MySQL database.
- **Real-time Updates**: Task list updates every 5 seconds.
- **JSON Format**: Data sent and received in JSON format.

## Technologies Used

- **PHP**: Backend logic and database interaction.
- **HTML**: Frontend for displaying the to-do list.
- **MySQL**: Database for storing tasks.
- **jQuery**: For AJAX requests and dynamic content updates.
- **JSON**: For data exchange between frontend and backend.

## Installation

### Prerequisites

- PHP >= 7.0
- MySQL
- Web server (Apache/Nginx)

### Steps to Install

1. **Clone the repository**:

   ```bash
   git clone https://github.com/your-username/todo-list-app.git
   ```

2. **Set up the Database**:
   - Create a MySQL database (e.g., `todo_app`).
   - Run the following SQL query:

     ```sql
     CREATE TABLE todos (
         id INT AUTO_INCREMENT PRIMARY KEY,
         task VARCHAR(255) NOT NULL
     );
     ```

3. **Configure Database Connection**:
   - Update database connection settings in the `TodoModel.php`.

4. **Run the Application**:
   - Start your web server.
   - Visit `http://localhost/todo-list-app` in your browser.

## Usage

- **Add a Task**: Enter a task and click "Submit".
- **View Tasks**: Tasks are displayed from the database.
- **Delete Tasks**: Click the "Delete" button next to tasks.

The task list will automatically update every 5 seconds.

## Contributing

Feel free to fork the repository and create a pull request with your changes.

## License

This project is open-source and available under the [MIT License](LICENSE).
