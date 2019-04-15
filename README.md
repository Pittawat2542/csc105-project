# Luk Mha Shop (Temporarily name)
Our platform intend to be a greatest platform for both people who looking for puupies
and people who someone to adopt their puppies by using our platform we will provide
variety of breeds, ages, colors, and so much more. Not only that, our platform also
provide direct ways to contact the owner of the puppies to deal or make an agreement
through Facebook, LINE, Email, and Telephone.

We sell all of puppies around the world!

<b>How to deploy it on own pc DIY</b><br>
You need: <br>
-Pc<br>
-git<br>
-XAMP or MAMP or something this way <br>
-create new data base in your mysql (for example you can start your XAMP server and go to phpmyadmin localhost/phpmyadmin)<br>
<br> For windows i have no idea how to put it exactly together, but for mac<br>
use your terminal, go to the place where you have your XAMP files mine path is:<br>
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

## Technology Stack
We using ```laravel```, which is a framework for ```PHP```, as a main framework in our project.
It provides us a lot of heavy lifting stuff such as authentication, ORM. We also
use ```Bootstrap 4``` as a main framework for drawing our user interface.

## Design
We use Adobe XD to make our design more easily to manage as e can share directly
with a link to everyone.

You can see our design at [this link](https://xd.adobe.com/spec/6d31023e-106f-4861-6c8e-461e0d8468e5-1b00/?fbclid=IwAR2FhNZFoIYVFR7VhD7r0SFi73svbiI6nH2MVMeymf_6TYd3zBv42eEzA7k)
with password: ```e73StrattHDMpaU```