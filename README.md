# 🎓 EduSwap - Swap Skills, Not Money

[![License: MIT](https://img.shields.io/badge/License-MIT-yellow.svg)](https://opensource.org/licenses/MIT)
[![PHP Version](https://img.shields.io/badge/PHP-7.4+-blue.svg)](https://www.php.net/)
[![MySQL](https://img.shields.io/badge/MySQL-8.0+-orange.svg)](https://www.mysql.com/)

**EduSwap** is a community-driven skill exchange platform where knowledge is the currency. Share what you know to earn credits, and spend those credits to learn something new from others.

---

## ✨ Key Features

-   **🔄 Skill Swapping**: A unique ecosystem where you can list skills you want to **Teach** and skills you want to **Learn**.
-   **💳 Credit System**: Earn credits by teaching others. Use your accumulated credits to request sessions from experts in the community.
-   **👤 Professional Profiles**: Show off your expertise with a dedicated profile, including a bio, skill badges, and community ratings.
-   **🔍 Skill Discovery**: Easily find users who specialize in the areas you're interested in through a clean, searchable directory.
-   **📅 Session Management**: Track your teaching and learning requests with a simple status-based system (Pending, Accepted, Completed).
-   **⭐ Peer Reviews**: Build trust within the community through a rating and review system.

---

## 🛠️ Tech Stack

-   **Backend**: PHP (Core)
-   **Database**: MySQL
-   **Frontend**: HTML5, Vanilla CSS, JavaScript
-   **Icons**: [Lucide Icons](https://lucide.dev/)
-   **Avatars**: [iPravatar](https://pravatar.cc/)

---

## 🚀 Getting Started

### Prerequisites

-   A local server environment like **XAMPP**, **WAMP**, or **MAMP**.
-   **PHP 7.4** or higher.
-   **MySQL 8.0** or higher.

### Installation

1.  **Clone the repository**:
    ```bash
    git clone https://github.com/Bipin-subedi/EduShare.git
    ```

2.  **Move to your server directory**:
    Place the `EduSwap` folder in your `htdocs` (XAMPP) or `www` (WAMP) directory.

3.  **Database Setup**:
    -   Create a database named `eduswap` in your MySQL server (e.g., via phpMyAdmin).
    -   Open `db.php` and update the database credentials if necessary:
        ```php
        $conn = mysqli_connect("localhost", "root", "", "eduswap");
        ```

4.  **Initialize the System**:
    Run the setup script by visiting `http://localhost/EduSwap/setup.php` in your browser. This will:
    -   Create all necessary tables.
    -   Populate the database with sample users, skills, and sessions.

5.  **Start Swapping**:
    Visit `http://localhost/EduSwap/home.php` to access the dashboard.

---

## 📂 Project Structure

```text
EduSwap/
├── db.php          # Database connection configuration
├── setup.php       # Database schema and data initialization
├── home.php        # Main dashboard and landing page
├── users.php       # Directory for finding skills/users
├── profile.php     # Detailed user profile and reviews
├── session.php     # Management for teaching/learning sessions
├── style.css       # Core application styling
└── script.js       # Frontend interactivity and icon initialization
```

---

## 🤝 Contributing

Contributions make the community amazing! If you have suggestions for improvement, please:

1.  Fork the Project
2.  Create your Feature Branch (`git checkout -b feature/AmazingFeature`)
3.  Commit your Changes (`git commit -m 'Add some AmazingFeature'`)
4.  Push to the Branch (`git push origin feature/AmazingFeature`)
5.  Open a Pull Request

---

## 📄 License

Distributed under the MIT License. See `LICENSE` for more information.

---

<p align="center">
  Made with ❤️ by the EduSwap Community
</p>
