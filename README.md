<div align="center">
  <h1>📋 Questionario</h1>
  <p><em>PHP Web Application for Wellness & Technology Surveys</em></p>
  
  <img src="https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white" alt="PHP"/>
  <img src="https://img.shields.io/badge/MySQL-00000F?style=for-the-badge&logo=mysql&logoColor=white" alt="MySQL"/>
  <img src="https://img.shields.io/badge/HTML5-E34F26?style=for-the-badge&logo=html5&logoColor=white" alt="HTML5"/>
</div>

---

## 📖 Overview

**Questionario** is an academic project featuring a web-based survey about the prevention of psycho-physical risks in the workplace through the use of technology.

Built with procedural PHP and vanilla HTML/CSS, it serves as a foundational exercise in building web forms, handling HTTP GET parameters, and establishing communication with a MySQL database to store user responses.

### 🎯 Core Features

- **Dynamic Survey Interface**: Front-end form tailored with W3.CSS for responsive design, dynamically splitting questions based on the user's employment type (office vs. manual labor).
- **Data Collection**: A `backend.php` script that captures form submissions and constructs a SQL query to register responses.
- **Database Integration**: Direct connection to a MySQL database (`my_antonybuffone1`) appending answers to a `questionari` table with timestamps.

## 🛠️ Architecture & Tech Stack

- **Backend Logic**: Procedural PHP implementation utilizing `mysqli_connect` and `mysqli_query` for database interactions.
- **Frontend**: HTML5 and CSS3, styled largely via raw structure and W3.CSS utility classes.
- **Database**: Relational MySQL structure designed to hold a wide array of discrete survey answers (`ris1` to `ris16`).

---

## ⚙️ Setup & Installation

To run the application locally, you will need a PHP server environment (like XAMPP, MAMP, or LAMP).

1. **Clone the repository** into your server's root directory (`htdocs` or `www` veya `var/www/html`):

   ```bash
   git clone https://github.com/beergrillers/Questionario.git
   ```

2. **Database Configuration**:
   - Create a MySQL database named `my_antonybuffone1`.
   - Create a table named `questionari` with the following columns: `data` (datetime) and `ris1` through `ris16` (ints/varchars).
   - Verify the database user credentials in `backend.php` (Line 13: `root` and `""` by default).

3. **Run**:
   Open your browser and navigate to `http://localhost/Questionario/index.html` (or `backend.php` directly).
