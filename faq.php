<?php
 
include “connection.php”
 
if ($_GET['id'])
{
$id = $_GET['id'];
 
$query = "SELECT * FROM faq WHERE id = $id";
$hasil = mysql_query($query);
$data = mysql_fetch_array($hasil);
echo "<p>Pertanyaan : ".$data['question']."</p>"; 
echo "<p>Jawaban : ".$data['answer']."</p>"; }
 
// menampilkan daftar FAQ
$query = "SELECT * FROM faq";
$hasil = mysql_query($query);
echo "<ul>";
while ($data = mysql_fetch_array($hasil))
{
echo "<li><a
href='".$_SERVER['PHP_SELF']."?id=".$data['id']."'>".$data['question']."<
/a></li>";
}
echo "</ul>";
?> 