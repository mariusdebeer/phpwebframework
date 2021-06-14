<?php
/*
PHP Site Framework
@mariusdebeer
 */
 ?>
 <?php $buffer=ob_get_contents();
    ob_end_clean();

    $title = "Home Page";
    $buffer = preg_replace('/(<title>)(.*?)(<\/title>)/i', '$1' . $title . '$3', $buffer);

    echo $buffer; ?>
					<!-- Start HTML -->
<html>
<head>
<title><?php echo $title; ?></title>


</head><body>
<div class="css3gradient"><b>Soon...</b></div>
