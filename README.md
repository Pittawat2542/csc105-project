# Luk Mha Shop

We sell all of puppies around the world!

<b>How to deploy it on own pc DIY</b><br>
You need: <br>
-Pc<br>
-git<br>
-XAMP or MAMP or something this way <br>
-create new data base in your mysql (for example you can start your XAMP server and go to phpmyadmin localhost/phpmyadmin)<br>
<br> For windows i have no idea how to put it exactly together, but for mac<br>
1. use your terminal, go to the place where you have your XAMP files mine path is:<br>
/Applications/XAMPP/htdocs/ <br>
so you can use command<br>
<code>cd /Applications/XAMPP/htdocs/ </code>
Then lets clone project<br>
<code> git clone https://csgit.sit.kmutt.ac.th/csc105_1_group1/e-commerce.git </code><br>
Then we have to compose project <br>
<code>compose install</code>
<br> If you have error like it couldn't find file composer.json, that means you are not in right directory!<br>
check by <code>ls</code> and go to the directory <code>cd e-commerce</code><br>
After that, go to .env.example and save as as .env setting own database connection settings<br>
Then do <code>php artisan key:generate</code>. After you finish we can migrate things to database<br>
<code> php artisan migrate</code> and seed categories <code>php artisan db:seed </code>. <br>
Finaly you can start work on project <code>php artisan serv</code>
