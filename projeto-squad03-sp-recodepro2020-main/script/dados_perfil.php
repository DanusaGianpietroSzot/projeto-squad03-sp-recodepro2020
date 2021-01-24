<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "magnolia_bd";


$conn = mysqli_connect("localhost", "root", "", "magnolia_bd");

if(!$conn){
    die("A conexão ao banco de dados falhou: ".mysqli_connect_error());
}

$sql = "select nome, idade, email, telefone, telefone_contato, regiao, senha from ususaria";
$result = $conn->query($sql);  


// while($row=$result->fetch_assoc()){
//      //echo "Recebi estes dados referente ao índice".$POST['nome']."no cadastramento: " . $POST['idade'] . ", " . $POST['email'] . "e " $POST['senha'] . ".";
//     print_r($row);
//     echo "<hr>";
// }
?>