<?php 
	include 'conexao.php';

$nome = $_POST['nome'];
$email = $_POST['email'];

$insert = "INSERT INTO dados(nome, email) VALUES ('$nome', '$email')";
$query = mysqli_query($conn, $insert);
header("Location: lista_pdf.php");
?>