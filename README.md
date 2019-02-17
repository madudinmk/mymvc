# MyMVC - Custom PHP MVC framework
A custom PHP framework based on Brad Traversy's course on PHP OOP MVC
- The custom framework maintains the usefulness of MVC
  - single point of entry (index.php)
  - pretty urls
  - better code maintainability
  
1. clone or download all files into a named folder in a web server root directory (e.g. c:\xampp\htdocs).
2. make some changes in rootfolder\public\ .htaccess: change the 'mymvc' in "RewriteBase /mymvc/public" to your desired root folder name.
3. change database configurations in rootfolder\app\config\config.php accordingly.

The directory tree for the custome framework as follows:
- rootfolder
  - app
    - config
    - controllers
    - helpers
    - libraries
    - models
    - views
    - .HTACCESS
    - bootstrap.php
  - public
    - css
    - img
    - js
    - .HTACCESS
    - index.php
  - .HTACCESS

p.s. Note that in the repo there's some folder missing. That is because there is no file yet within the folders. The files will be need to be added as controllers and models instantiated.
p.s. The .HTACCESS file is hidden in the repo.
