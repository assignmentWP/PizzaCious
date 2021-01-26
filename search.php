<?php

mysql_connect("127.0.0.1", "root", "");
mysql_select_db("search");

?>

<form action="search.php" method="POST">
<input type="text" placeholder="Search.." name="search">
<button type="submit"><i class="fa fa-search"></i></button>
</form>

<?php
if(isset($_POST['s']))
{
    $ti = $_POST['t'];
    $c= mysql_connect("127.0.0.1", "root", "");
    $c = mysql_query($c, "SELECT * FROM search WHERE 'keywords' LIKE '%$ti'");
>?

<table border=1>
<?<?php
while($r = mysql_fetch_array($s))
{
?>
<tr>
<td>?php echo $r['name']; ?</td>
</tr>
<td>?php echo $r['keywords']; ?</td>
</tr>
<?php } 
?>
</table>
?php } ?>

