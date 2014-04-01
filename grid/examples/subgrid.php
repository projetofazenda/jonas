<?php
require_once("../conf.php");      
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Subgrid</title>
</head>
<body> 

<?php
$dg = new C_DataGrid("SELECT * FROM orders", "orderNumber", "orders");


// enable edit
$dg->enable_edit("INLINE", "CRUD");

// multiple select
$dg -> set_multiselect(true);

// second grid as detail grid. Notice it is just another regular phpGrid with properites.
$sdg = new C_DataGrid("SELECT * FROM orderdetails", array("orderLineNumber", "productCode"), "orderdetails");


$sdg->enable_edit("INLINE", "CRUD");


// second grid as detail grid. Notice it is just another regular phpGrid with properites.
$sdg2 = new C_DataGrid("SELECT * FROM products", array("productCode"), "products");

$sdg2->enable_edit("INLINE", "CRUD");

// define master detail relationship by passing the detail grid object as the first parameter, then the foriegn key name.
// set query filter
$sdg->set_subgrid($sdg2, 'productCode');
$dg->set_subgrid($sdg, 'orderNumber');

$dg->add_column("actions", array('name'=>'actions',
    'index'=>'actions',
    'width'=>'80',
    'formatter'=>'actions',
    'formatoptions'=>array('keys'=>true)),'Actions');


$dg->display();
?>

</body>
</html>