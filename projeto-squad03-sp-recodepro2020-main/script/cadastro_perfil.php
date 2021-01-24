<?php
session_start();

$nome = $_POST['nome'];
$idade = $_POST['idade'];
$email = $_POST['email'];
$telefone = $_POST['telefone];
$telefone_contato = $_POST['telefone_contato'];
$regiao = $_POST['regiao'];
$senha = $_POST['senha'];


if (strlen($nome) > 3 && strlen($email) > 3 && strlen($senha) > 3 && strlen(telefone) > 3 && strlen($telefone_contato) > 3  {


    $conn = mysqli_connect("localhost", "root", "", "magnolia_bd");
    
    $senha_cripto = md5($senha);    

    $sql = "INSERT INTO cadastro (nome, idade, email, telefone, telefone_contato, regiao, senha) values ('$nome', '$idade', '$email', '$telefone', '$telefone_contato', '$regiao','$senha_cripto')";
    $conn->query($sql);

    $_SESSION['nome'] = $nome;
    $_SESSION['idade'] = $idade;
    $_SESSION['email'] = $email;
    $_SESSION['telefone'] = $telefone;
    $_SESSION['telefone_contato'] = $telefone_contato;
    $_SESSION['regiao'] = $regiao;

    echo "<script>
            alert('Cadastro efetuado!')
            window.location.href = '../perfil.php'
        </script>
        ";
}

else if (strlen($nome) <= 3) {
    echo "<script>
        alert('Digite um nome válido para realizar o cadastro!')
        window.location.href = '../cadastramento.php'
    </script>
    ";
}
else if (strlen($email) <= 3) {
    echo "<script>
        alert('Digite um e-mail válido para realizar o cadastro!')
        window.location.href = 'cadastramento.php'
    </script>
    ";
}
else if (strlen($senha) <= 3) {
    echo "<script>
        alert('Digite uma senha válida para realizar o cadastro!')
        window.location.href = 'cadastramento.php'
    </script>
    ";
}
else if (strlen($telefone) <= 3) {
    echo "<script>
        alert('Digite um telefone válido para realizar o cadastro!')
        window.location.href = 'cadastramento.php'
    </script>
    ";
}    
    else if (strlen($telefone_contato) <= 3) {
        echo "<script>
            alert('Digite um telefone de recados válido para realizar o cadastro!')
            window.location.href = 'cadastramento.php'
        </script>
        ";
}
    

?>