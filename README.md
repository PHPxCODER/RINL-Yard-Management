# Yard Management System (YMS)

**A Web-Based Solution for Efficient Yard Management**

This project was developed for Rashtriya Ispat Nigam Limited - Visakhapatnam Steel Plant (RINL-VSP) in my Internship. It streamlines the sale, distribution, and yard management of steel products through an advanced web application.

---

## Features
- **User Authentication**: Secure login and registration.
- **Role-Based Access**: Separate dashboards for users, management, and admin.
- **Inventory Tracking**: Real-time updates on inventory and dispatch schedules.
- **Order Management**: Create, edit, delete, and process orders seamlessly.
- **E-commerce Integration**: Cart and checkout functionality.
- **Password Recovery**: Email-based password reset valid for 15 minutes.

---

## Technologies Used
- **Frontend**: HTML, CSS, JavaScript
- **Backend**: PHP, MySQL
- **Frameworks**: Bootstrap, Material UI

---

## How to Use

## Installation

To set up and run the Yard Management System locally, follow these steps:

### 1. Prerequisites
- **PHP** (version 7.4 or later)
- **MySQL** (or any compatible database server)
- A local server environment like [XAMPP](https://www.apachefriends.org/index.html) or [WAMP](https://www.wampserver.com/).

### 2. Clone the Repository
Download the project files to your local machine:
```bash
git clone https://github.com/PHPxCODER/RINL-Yard-Management.git
```

### 3. Set Up the Database
1. Open your MySQL management tool (e.g., phpMyAdmin).
2. Create a new database, e.g., `yard_management`.
3. Import the provided `yard_management.sql` file into the database.

### 4. Configure Database Connection
Update the `init.php` file inside users directory with your database credentials:
```php
define('host', 'localhost');
define('username', 'your_username');
define('password', 'your_password');
define('db', 'yard_management');
```

### 5. Start the Server
Run a local server to serve the application:
```bash
php -S localhost:8000
```

### 6. Access the Application
Open your browser and navigate to:
```
http://localhost:8000
```

---

## Usage

### User Roles and Dashboards
- **Admin**:
  - Manage users, inventory, and orders.
  - Access analytics and system settings.
- **Management**:
  - Oversee dispatch and yard operations.
  - Manage logistical data.
- **User**:
  - Browse products, place orders, and track purchases.

### Main Features
- **Login/Register**:
  - Secure authentication system with role-based access control.
- **Order Management**:
  - Add items to the cart, proceed to checkout, and confirm orders.
- **Password Recovery**:
  - Reset password via email. The reset link is valid for 15 minutes.
- **Inventory Management**:
  - Real-time updates on stock levels and dispatch schedules.

---

## Benefits

- **Efficiency**:
  - Optimizes yard resource utilization and reduces processing times.
- **Customer Satisfaction**:
  - Provides a seamless user experience for buyers.
- **Real-Time Tracking**:
  - Enables live updates on inventory and dispatch status.
- **Scalability**:
  - Modular design allows easy expansion and customization.
- **Cost Savings**:
  - Automates manual processes, reducing operational costs.

---

## References

- [PHP Official Documentation](https://php.net/)
- [W3Schools - PHP](https://w3schools.com/php/)
- [MySQL Tutorial](https://w3schools.com/MySQL/)
- [UserSpice Framework](https://userspice.com/)
- [Bootstrap Framework](https://getbootstrap.com/)

---
