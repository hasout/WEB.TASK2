# TASK2 Web Application

A simple PHP + MySQL web app that allows users to submit their name and age, displays all records in a table, and allows toggling the status for each entry using AJAX (no page reload).

---

## 🛠️ Technologies Used

- **PHP** (Backend Logic)
- **MySQL** (Database)
- **HTML5** (Structure)
- **CSS3** (Styling)
- **JavaScript (Fetch API)** (AJAX Toggle)

---

## ⚙️ Features

- Submit name and age via a form.
- Store user data in a MySQL database.
- View all records in a styled table.
- Toggle the user's status between `0` and `1` dynamically using AJAX.
- Modern, responsive UI with CSS styling.

---

## 🗃️ Database Setup

1. Open **phpMyAdmin** or any MySQL client.
2. Run the following SQL:

```sql
CREATE DATABASE IF NOT EXISTS TASK2;
USE TASK2;

CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    age INT NOT NULL,
    status TINYINT(1) DEFAULT 0
);
