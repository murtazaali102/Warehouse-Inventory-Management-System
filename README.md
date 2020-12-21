# Warehouse-Inventory-Management-System
This project is basic inventory management system providing some basic and core functioning for managing the inventory. It's built mainly on php with mysql as the database, javascript and bootstrap. The core model for it is referred from oswa-inv. Follow the steps in readme file to setup this project on your system.

----------------------------------------------------------------------------------------------------------------------------------------------------------------------------
Installation:

First, download the latest updated project folder from the provided git link or clone that repository to your system.

Second, to configure the database and set up the basic structure of the databases, load or import the ‘wms-db.sql’ file into your mySql database.

Third, you have to modify the config.php file in the includes folder. File path is as follows: (includes/config.php). After opening the config file, change/modify the variables to match your host, database, username and password. This information is available on your database host site (e.g phpmyadmin).

Fourth, change the permissions for the folder under the folder named ‘uploads‘ either to ‘www’ group or 777 if available. (if using windows, chmod won’t work, you have to use ‘icacls’ command)

Fifth, after successfully implementing the above steps, login into the system by the following credentials,
Username: admin , Password: admin
Username: special , Password: special
