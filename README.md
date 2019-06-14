A task:
=======

Required technologies:
PHP, JS, MySQL / PostgreSQL, Git, YII2 framework

Notes:
The user can leave the registration (close the window) at any step before its completion. With
return to the form he must return to the step where he interrupted the filling out of the form and all the earlier
filled in data must be in the form.

Form design is not required, a minimal UI is sufficient. For validation of fields, standard validators are sufficient.

- Build a small web application that is registration. Includes 4 steps.
- Design and enable the database for this task.

This should be a step-by-step form, with the possibility of moving in steps.

Step 1: 															
First name, last name, phone number 								

Step 2: 															
Address (street, house number, city) 								

Step 3: 															
Comment																
URL: http://test.vrgsoft.net/feedbacks 								
																	
Step 4:
Result page. Print the message 										
successful submission, and output feedBackDataId. 					

###POST request example:
```php
{
"client_id": 1,
"address": "Dnipro, Naberezhnaya st. 22",
"comment": "Example comment"
}
```

###An example of a successful response:
```php
{
"feedBackDataId": "rPNrGXssXbUpUSNTyKTVLDc4ufQBKbou"
}
```

Save the received feedBackDataId to the database.

In case of an error (response code other than 200) make it logged.

Actions on deployment of the project:
=====================================

1. `git clone << project path >>`

2. `сomposer install`

3. configure domain settings:

* ***on Ubuntu( Linux )***

_access to files in a folder_

`sudo chmod -R 777 /var/www/YII/vrgsoft_test.loc` 
	
_create new virtual host files_
	
`sudo cp /etc/apache2/sites-available/test.loc.conf /etc/apache2/sites-available/vrgsoft_test.loc.conf`

_open a new file in the editor with root-rights_
	
`sudo nano /etc/apache2/sites-available/vrgsoft_test.loc.conf`
		
_configure on vrgsoft_test.loc_  
```
Ctrl + O
Enter 
Ctrl + X
```
_enable new virtual hosts_	
	
`sudo a2ensite vrgsoft_test.loc.conf`	
				
_after completion, you must restart Apache for the changes to take effect_

`sudo service apache2 restart`

_or_
				
`sudo systemctl restart apache2`

_edit hosts file_

`sudo nano /etc/hosts`
  
* ***on Windows***
 
`hosts` file, `httpd.conf`.


4. make a new database - vrgsoft_test for example ( utf8_general_ci encoding )

5. database settings in `config/db.php` file:

```php
return [
    'class' => 'yii\db\Connection',
    'dsn' => 'mysql:host=localhost;dbname=vrgsoft_test',
    'username' => 'root',
    'password' => '',
    'charset' => 'utf8',
];
```

6. start migration:	
   
   `php yii migrate/up`		

Useful links:
=============

####Registration
* Yii2 basic: Registration and authorization through the database, changing the User class

<http://bologer.ru/yii2-basic-registraciya-i-avtorizaciya-cherez-bazu-menyaem-user-klass/>

* Yii2 Blog - Authorization # 16 (12:34)

<https://www.youtube.com/watch?v=Ee7UAf2y0P4>

####Logging
* Yii2 basic: Logs. How to make them and why are they needed?

<http://bologer.ru/yii2-basic-logi-kak-ix-delat-i-pochemu-oni-nuzhny/>

####Step by step form 
* Step Wizard with Bootstrap 4 (9:13)

<https://www.youtube.com/watch?v=5czWkFFLdQc>

* Turn any web form into a bright step by step wizard with jQuery

<https://ruseller.com/lessons.php?rub=32&id=432>





