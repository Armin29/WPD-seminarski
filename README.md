# WPD

## Table of Contents

- [Features](#features)
- [Installation](#installation)
- [Usage](#usage)
- [Project Structure](#project-structure)
- [Technologies Used](#technologies-used)
- [Contributing](#contributing)
- [License](#license)

## Features

- Add new tasks with a title, description, and expiration date.
- View tasks categorized by status (Unfinished, Finished, Expired).
- Automatically updates task statuses based on expiration.
- Simple and clean user interface.
- Tasks can be marked as complete or deleted.
- User authentication system to secure access to the tasks.

## Installation

### Prerequisites

Before you can run the project, make sure you have the following installed on your machine:

- PHP (>=7.0)
- MySQL Database
- Apache or Nginx Server
- Composer (Optional for dependency management)

### Steps

1. Clone the repository:
    ```bash
    git clone https://github.com/your-username/task-master.git
    ```

2. Navigate into the project directory:
    ```bash
    cd task-master
    ```

3. Import the database:
    - Create a new MySQL database.
    - Import the provided SQL file (`database.sql`) to create the necessary tables:
      ```bash
      mysql -u username -p database_name < database.sql
      ```

4. Configure the database connection:
    - Open `database.php` and adjust the credentials to match your database configuration:
      ```php
      $konekcija = new mysqli("localhost", "username", "password", "database_name");
      ```

5. Start your local server:
    - If using PHP’s built-in server, run:
      ```bash
      php -S localhost:8000
      ```

6. Access the application in your web browser:
    ```
    http://localhost:8000
    ```

## Usage

- **User Authentication:** Login to the system with your credentials (you may need to register a user in the database).
- **Adding Tasks:** Click on the "Add new Task" button to create new tasks.
- **Managing Tasks:** Tasks will be displayed in different sections based on their status:
  - **Unfinished Tasks:** Pending tasks.
  - **Finished Tasks:** Completed tasks.
  - **Expired Tasks:** Tasks that passed their expiration date.
- **Status Updates:** You can manually update the task's status or delete tasks.

## Project Structure

```bash
.
├── calcdate.php        # Functions for calculating time differences
├── database.php        # Database connection file
├── delete.php          # Script to delete a task
├── editstatus.php      # Script to change the status of a task
├── index.php           # User login page
├── main.php            # Main dashboard showing tasks
├── add.php             # Form to add new tasks
├── styles/
│   └── style.css       # Stylesheet for the application
├── tasks/
│   └── task-container  # Task display logic
└── README.md           # This README file
