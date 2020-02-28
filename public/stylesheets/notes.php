<!-- if statement in php 

v1
if(isset($_GET['page'])) {
    $page = $_GET['page'];
} else {
    $page = '1';
}

ternary
$page  isset($_GET['page']) ? $_GET['page'] : '1';

PHP 7.0
$page = $_GET['page'] ?? '1'; -->

<!--- NOTES FOR CHALLENGE ASSIGNMENT

Add a form under /staff/pages/new.php - complete

Add form for  /staff/pages/edit.php

Add links to both pages

**Editing requires a page ID**

Add single page form processing for both forms
**if form was not submitted, display form.
**if form was submitted, display form parameters at the top like before and the form below

Display submitted menu_name on the forms

**bonus**
display submitted position and visible on forms

-->
