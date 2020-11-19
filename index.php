<?
/*
PHP Site Framework
@mariusdebeer
mariusdebeer@icloud.com
 */
 //Start output buffering
  ob_start();
 require("./template/header.php");
// Set the default name 
$page = 'home'; 
// Specify some disallowed paths 
$disallowed_paths = array('header', 'footer'); 
if (!empty($_GET['page'])) { 
    $tmp_page = basename($_GET['page']); 
    // If it's not a disallowed path, and if the file exists, update $page 
    if (!in_array($tmp_page, $disallowed_paths) && file_exists("./pages/{$tmp_page}.php")) 
        $page = $tmp_page; 
} 
// Include $page 
include("./pages/$page.php"); 



require("./template/footer.php");
?>
