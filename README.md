# ProgramimiInternet_Gr10

## Biblioteka Sinan Dobreva - PHP MVC Framework

* E-library website with login and register system.
Guests can browse news, authors and books available, while signed up and logged in users can download books.
Admins can edit, update and delete posts/books (see user status in database).

* Personalized profile: profile picture, website visits during last month (using cookies) and other user registration info.

* APIs: random book quote generator API at 'Galeria.php'.

* Email sender for users to send emails to Biblioteka BSD at 'Kontakti.php'.
Another automated email sender system from Biblioteka BSD to its users (located in the footer section of website).
Implementation details at 'index.php' in phpmailer.

#### Usage: 
1. Downloaded folder should be located in xampp/htdocs. For phpmailer to work, that folder should be outside ProgramimiInternet_Gr10, in htdocs.
2. Create a database in phpMyAdmin named "bsd_db" and import "bsd_db.sql" to it.

To view static website visit: https://bibliotekabsd.netlify.app/
