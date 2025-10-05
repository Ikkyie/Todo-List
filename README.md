# 📝 PHP To-Do List  

A simple **To-Do List web application** built with **PHP** and **HTML/CSS**, designed to demonstrate session handling, form submission, and basic CRUD operations (Create, Read, Delete).  

This project uses **PHP sessions** to store tasks temporarily in the browser, without the need for a database.  

---

## 🚀 Features  

✅ Add new tasks  
✅ Display all saved tasks  
✅ Delete selected tasks using checkboxes  
✅ Clear all tasks at once  
✅ Persistent task list within the current browser session  
✅ Simple and responsive user interface  

---

## 🧠 How It Works  

1. When the user adds a task through the input field, it is stored in the PHP `$_SESSION` array.  
2. Tasks are displayed as a list with checkboxes.  
3. The user can:  
   - Select specific tasks and delete them.  
   - Click “Clean all” to remove all tasks from the list.  
4. The data persists only during the active session — once the session ends or the browser is closed, the list is reset.  

---

## 💻 Technologies Used  

- **PHP** — Backend logic and session handling  
- **HTML5** — Page structure  
- **CSS3** — Styling and layout  

---

## 🗂️ Project Structure  

/project-folder
│
├── index.php # Main PHP file with HTML and logic
├── style.css # Stylesheet for the layout and design
└── README.md # Project documentation

yaml


---

## ⚙️ Installation & Usage  

1. Clone or download this repository:  
   ```bash
   git clone https://github.com/yourusername/php-todo-list.git
Place the project folder inside your local server directory (e.g., htdocs for XAMPP or www for WAMP`).

Start your local PHP server:

bash
Copiar código
php -S localhost:8000
Open your browser and navigate to:

arduino
http://localhost:8000
Add, delete, and manage your tasks!

🧩 Example of Core Logic
php
Copiar código
if (isset($_POST["tasktext"])) {
    $tasktext = htmlspecialchars($_POST["tasktext"]);
    $_SESSION["tasks"][] = $tasktext;
}
This snippet safely captures user input and stores it inside the session array.

🎨 Style Overview
The CSS defines a clean and modern interface with variables for easy color customization:

css
:root {
  --primary-color: #d5dfdf;
  --secondary-color: #646a6a;
  --background-color: #b6bdbc;
}
It also includes hover effects for buttons and responsive design for smaller screens.

🧹 Future Improvements
Add persistent storage using a database (e.g., MySQL).

Allow task editing.

Add a “completed” state with strikethrough styling.

Include dark/light theme options.
🧑‍💻 Author

Vinicius Casarin
📧 [viniciuscasarin92870@gmail.com]
