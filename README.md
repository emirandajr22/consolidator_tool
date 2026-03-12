# Consolidator Tool

## Overview

The **Consolidator Tool** is a web-based application designed to consolidate and organize data from multiple sources into a single structured dataset. It helps simplify data management by allowing users to merge, clean, and standardize information for easier processing, reporting, and analysis.

This tool was developed to streamline workflows where large sets of data need to be gathered and unified into a consistent format. By centralizing the consolidation process, it reduces manual work and improves data accuracy.

The application is built primarily using **PHP**, with a simple and responsive user interface powered by **HTML, CSS, and Bootstrap**.

---

## Tech Stack

### Backend

* PHP

### Frontend

* HTML
* CSS
* Bootstrap

### Other

* Web-based interface for data consolidation and management

---

## Installation Guide

Follow the steps below to run the **Consolidator Tool** on your local machine.

### 1. Install XAMPP

Download and install **XAMPP** if it is not yet installed on your system.

Download link:
https://www.apachefriends.org/index.html

After installation, open the **XAMPP Control Panel** and start the following services:

* Apache
* MySQL (if your project uses a database)

---

### 2. Download the Project

Clone or download this repository.

Example using git:

git clone https://github.com/your-repository/consolidator-tool.git

Or download the ZIP file and extract it.

---

### 3. Move the Project to htdocs

Copy the project folder and place it inside the **htdocs** directory of your XAMPP installation.

Example path:

C:\xampp\htdocs\

Example final structure:

C:\xampp\htdocs\consolidator-tool

---

### 4. Configure PHP Upload Limits

Since this tool may handle large data inputs, you need to increase the file upload limits in **php.ini**.

1. Open the file:

C:\xampp\php\php.ini

2. Find and modify the following values:

upload_max_filesize = 100M
post_max_size = 100M
max_execution_time = 300
max_input_time = 300
memory_limit = 512M

You may increase these values further depending on your needs.

---

### 5. Restart Apache

After saving the changes in **php.ini**, restart **Apache** from the XAMPP Control Panel.

---

### 6. Run the Application

Open your browser and navigate to:

http://localhost/consolidator-tool

The application should now be running locally.
