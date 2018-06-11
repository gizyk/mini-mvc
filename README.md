# mini-mvc

It's my own interpretation of MVC patter in PHP.
* version: pre-alfa

## 

* Files explanation
    * config/database.php - basic informations required to connect with database
    * controller/* - controllers - get data from models and output view
    * core/* - The engine of MVC
    * model/* - models - connect with database and make some SQL commands also with my custom class sqlBuilder witch allow us to get rid us of writing SQL by ourself
    * routes/map.php - the file when we can define routes to controllers also allow to use parrameters.
    * view/* - All files with view