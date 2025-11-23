PustakaGo – Digital Library Platform

PustakaGo is a modern online library platform designed to make reading more accessible for everyone. Users can browse, borrow, and manage digital books anytime and anywhere through an intuitive and user-friendly interface.

* Main Features
1. Browse Book Collection 
Users can explore a wide collection of books from various categories and genres.

2. Online Borrowing System
Borrow books with one click. Borrowed books will appear instantly in the user’s personal library.

3. Smart Search & Filtering
Search by title, author, or category to find books quickly and efficiently.

4. My Library Management
All borrowed books are displayed neatly in the My Library section with status and duration.

5. Easy Book Returns
Return borrowed books anytime through the system.

6. Responsive Interface
Designed to work smoothly across desktops, tablets, and smartphones.

* Core Entities Used
Entity		: Description
Users		: Stores user account information (name, email, password).
Books		: Holds data about all available books (title, author, category, description, availability).
Borrowings	: Tracks which user borrowed which book, including borrow date and return date.
Categories	: Optional entity to categorize books by genre or type.

* Entity Relationship Overview :

- One User → Many Borrowings
- One Book → Many Borrowings
- One Category → Many Books

* Database Setup
Below is a simple SQL setup that you can directly use in MySQL / phpMyAdmin / Laragon:

1. Create Database
CREATE DATABASE pustakago;
USE pustakago;

2. Users Table
CREATE TABLE users (
    user_id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    email VARCHAR(100) UNIQUE,
    password VARCHAR(100)
);

3. Books Table
CREATE TABLE books (
    book_id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(200),
    author VARCHAR(150),
    category VARCHAR(100),
    description TEXT,
    availability BOOLEAN DEFAULT TRUE
);

4. Borrowings Table
CREATE TABLE borrowings (
    borrow_id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT,
    book_id INT,
    borrow_date DATE,
    return_date DATE,
    FOREIGN KEY (user_id) REFERENCES users(user_id),
    FOREIGN KEY (book_id) REFERENCES books(book_id)
);

5. (Optional) Categories Table
CREATE TABLE categories (
    category_id INT AUTO_INCREMENT PRIMARY KEY,
    category_name VARCHAR(100)
);

* Authors

Developed by:
• Albert J. V.
• Marvin A.
• Wilson C.
