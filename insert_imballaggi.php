<?php 
$hostname_connect = "localhost";
$database_connect = "Bardiani";
$username_connect = "root";
$password_connect = "";
$connect = mysqli_connect($hostname_connect, $username_connect, $password_connect, $database_connect);

$id= $_POST['id_imballaggio'];
$nome= $_POST['nome'];
$volume= $_POST['volume'];
$altezza= $_POST['altezza'];
$larghezza= $_POST['larghezza'];
$lunghezza= $_POST['lunghezza'];

$inserisci = "INSERT INTO imballaggio (`id_imballaggio`, `nome`, `volume`, `altezza`, `larghezza`, `lunghezza`) VALUES ('$id','$nome','$volume','$altezza','$larghezza','$lunghezza')";
echo $inserisci;
$risultati = mysqli_query($connect,$inserisci);
if($risultati){
		header("location: ListaImballaggi.php");
	}
	else{
		echo("Inserimento non effetuato!");
	}
?>
