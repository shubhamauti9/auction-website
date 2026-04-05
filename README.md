# Boly.com - Auction Website

![License: MIT](https://img.shields.io/badge/License-MIT-yellow.svg)
![PHP](https://img.shields.io/badge/PHP-7.4%2B-blue.svg)
![MySQL](https://img.shields.io/badge/MySQL-8.0%2B-orange.svg)

## 📌 Introduction
Boly.com is an online auction web application designed to provide a robust platform for users to buy and sell products through competitive bidding. Built with PHP and MySQL, the application enables individuals to easily register, authenticate, and manage their listings, creating a dynamic marketplace driven by an auction-style bidding system. 

"An Auction Win is Not a Sin."

## 🚀 Features
- **User Authentication:** Secure user signup and login systems, including OTP-based password recovery.
- **Admin Dashboard:** Administrative controls for monitoring users, approving listings, and managing the site platform.
- **Buy & Sell Products:** Authenticated users can list their products for auction or place bids on listed items.
- **Interactive UI:** Responsive, aesthetically pleasing design using HTML5, CSS3, and JavaScript logic.
- **Product Details:** Detailed views for auction items, including descriptions, current bid, and history. 
- **Search Functionality:** End-to-end functionality for searching active auctions.

## 🛠️ Technology Stack
- **Frontend Layer:** HTML5, CSS3 (Vanilla), JavaScript
- **Backend Layer:** PHP (Core)
- **Database Layer:** MySQL
- **Dependencies:** FontAwesome Icons, Google Fonts (Alfa Slab One, Lobster, Poppins, Roboto)

## 📋 Prerequisites
To run this application locally, you will need the following tools installed on your system:
- **XAMPP / WAMP / MAMP:** For creating a local web server with PHP and MySQL support.
- **Web Browser:** Modern web browser (Chrome, Firefox, Safari) for rendering the application.

## ⚙️ Installation & Setup Complete Guide
Follow these steps to deploy the application on your local machine:

1. **Clone the Repository**
   ```bash
   git clone https://github.com/shubhamauti9/auction-website.git
   cd auction-website
   ```

2. **Move to Web Server Directory**
   Move the project folder into your local server's web root directory:
   - For XAMPP: Move to `C:\xampp\htdocs\`
   - For WAMP: Move to `C:\wamp\www\`

3. **Database Setup**
   - Open your MySQL Database manager (e.g., phpMyAdmin which comes with XAMPP).
   - Create a new database named `boly`.
   - *Note: Since an SQL file wasn't provided, ensure you create the `register`, `products`, etc. tables matching the PHP logic.*

4. **Change Database Credentials (If Needed)**
   If your local database setup does not use the default `root` with no password, you'll need to modify the MySQL connection strings across the PHP files (e.g., `app/login.php`):
   ```php
   $conn = mysqli_connect("localhost", "your_username", "your_password", "boly");
   ```

5. **Run the Application**
   - Start your Apache Server and MySQL via your local server control panel.
   - Open your web browser and navigate to:
     ```
     http://localhost/auction-website/app/homepage.php
     ```

## 📁 Directory Structure
```text
├── app/                  # Core PHP application and logic layer (views & controllers)
│   ├── homepage.php      # Main landing page
│   ├── login.php         # User authentication handling
│   ├── signup.html       # User registration
│   ├── admin.php         # Administration controls
│   ├── buy.php & sell.php# Core marketplace logic
│   ├── *.css             # Application-specific styling
│   └── *.js              # Application-specific scripts
├── assets/               # Static assets & media resources
│   └── images/           # Contains static media items
├── .git/                 # Git version control directory
├── LICENSE               # Project License information
└── README.md             # Project documentation
```

## 💡 Usage Highlights
- **Access Homepage:** Users typically land on `homepage.php` as their first interaction point.
- **Login/Registration:** New users must establish an account via the "Sign Up" flow and sign in to bid or sell.
- **Admin Access:** Can be accessed via the standard login page if an Admin logs in using administrative credentials (e.g. `admin123@boly.com`).
- **Selling Items:** Sellers navigate to `sell.php` to input product specs and establish an active auction.

## 🤝 Contributing
Contributions, issues, and feature requests are welcome! 
1. Fork the project.
2. Create your Feature Branch (`git checkout -b feature/AmazingFeature`)
3. Commit your Changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the Branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request

## 📄 License
This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.