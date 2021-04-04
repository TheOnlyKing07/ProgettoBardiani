<?php 
$hostname_connect = "localhost";
$database_connect = "Bardiani";
$username_connect = "root";
$password_connect = "";
$connect = mysqli_connect($hostname_connect, $username_connect, $password_connect, $database_connect);

$id= $_GET['id'];

$elimina = "DELETE FROM imballaggio WHERE id_imballaggio = '".$id."' ";
$risultati = mysqli_query($connect,$elimina);
if($risultati){
		header("location: ListaImballaggi.php");
	}
	else{
		echo("Inserimento non effetuato!");
	}
?>
