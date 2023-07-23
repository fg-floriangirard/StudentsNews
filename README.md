# StudentsNews - First PHP Website 💻

StudentNews is a simple PHP website, serving as a first-time project to practice PHP. The main goals of this project are to use templates to factorize code, employ arrays for dynamic data handling (articles and page URLs), Please note that this website does not support responsive design, as it is primarily intended for PHP learning purposes.

## Features:

📜 **Dynamic Article Rendering:** The website uses template files (php.tpl) to create a consistent layout and structure across different pages. This technique ensures code factorization and reduces redundant HTML code.

🧩 **Template-Based Rendering:** The website uses template files (php.tpl) to create a consistent layout and structure across different pages. This technique ensures code factorization and reduces redundant HTML code.

📅**Date Formatting :** PHP's strtotime() and date() functions are utilized to convert and format article publication dates. This allows for flexibility in displaying dates in a user-friendly format.

📊 **Data Handling with Arrays:** The website manages data using arrays. An array containing articles' information and another array with page URLs ('site map', 'legal notice', and 'contact') simplify data management and retrieval.

📝 **Contact Form:** The 'Contact' page features a form that users can fill out and submit using the GET method. While the backend processing is not handled in this project, users will see their submitted data displayed on the page. 

## Screenshots:

[![overview.png](https://i.postimg.cc/Kzr8pysc/overview.png)](https://postimg.cc/47yGnjgj)
[![article.png](https://i.postimg.cc/7ZGY8zQW/article.png)](https://postimg.cc/yDKz0DKm)
[![contact.png](https://i.postimg.cc/3RB3CFdd/contact.png)](https://postimg.cc/XGrMnFKb)

## Installation:

#### 1. Clone the repository
```console
git clone https://github.com/your-username/StudentNews.git
```
#### 2. Start a local PHP server:
```console
php -S localhost:8000
```
#### 3. Open your web browser and visit http://localhost:8000 to access the StudentNews website.
