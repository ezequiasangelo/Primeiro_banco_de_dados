<?php

    if(isset($_POST['submit']))

    {
        // print_r('Nome: ' . $_POST['nome']);
        // print_r('<br>');
        // print_r('Email: ' . $_POST['email']);
        // print_r('<br>');
        // print_r('Senha: ' . $_POST['password']);
        // print_r('<br>');
        // print_r('Telefone: ' . $_POST['telefone']);
        // print_r('<br>');
        // print_r('sexo: ' . $_POST["genero"]);
        // print_r('<br>');
        // print_r('Data de nascimento: ' . $_POST['data_nascimento']);
        // print_r('<br>');
        // print_r('Cidade: ' . $_POST['cidade']);
        // print_r('<br>');
        // print_r('Estado: ' . $_POST['estado']);
        // print_r('<br>');
        // print_r('Endereço: ' . $_POST['endereço']);

        include_once('config.php');

         $nome = $_POST['nome'];
         $email = $_POST['email'];
         $senha = $_POST['senha'];
         $telefone = $_POST['telefone'];
         $sexo = $_POST['genero'];
         $data_nasc = $_POST['data_nascimento'];
         $cidade = $_POST['cidade'];
         $estado = $_POST['estado'];
         $endereço = $_POST['endereço'];

         $result = mysqli_query($conexao, "INSERT INTO usuario(nome, email,telefone,sexo,data_nasc,cidade,estado,endereço,senha)
          VALUES ('$nome', '$email','$telefone','$sexo','$data_nasc','$cidade','$estado','$endereço','$senha') ");
        
        header('Location: login.php');
    }


?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Cadastro</title>
    <link rel="stylesheet" href="css/style2.css">
</head>
<body>
    <div class="box">
        <form action="formulario.php" method="POST">
            <fieldset>
                <legend><b>Cadastre-se</b></legend>
                <br>
                <div class="inputBox">
                  <input type="text" name="nome" id="nome" class="inputUser"  required>
                  <label for="nome" class="labelInput">Nome Completo</label>
             </div>
             <br>
             <div class="inputBox">
                  <input type="password" name="senha" id="senha" class="inputUser" required>
                  <label for="senha" class="labelInput">Senha</label>
             </div>
             <br>
             <div class="inputBox">
                  <input type="text" name="email" id="email" class="inputUser" required>
                  <label for="email" class="labelInput">Email</label>
             </div><br>
             <div class="inputBox">
                  <input type="tel" name="telefone" id="telefone" class="inputUser" required>
                  <label for="telefone" class="labelInput">Telefone</label>
             </div>
             <p>Sexo:</p>
             <input type="radio" id="feminino" name="genero" value="Feminino" required>Feminino
             <br>
             <input type="radio" id="masculino" name="genero" value="Masculino" required>Masculino
             <br>
             <input type="radio" id="outro" name="genero" value="Outro" required>Outro
             <br><br>
             <label for="data_nascimento"><b>Data de Nascimento:</b></label>
             <input type="date" name="data_nascimento" id="data_nascimento"  required>
             <br><br>
             <div class="inputBox">
                <input type="text" name="cidade" id="cidade" class="inputUser" required>
                <label for="cidade" class="labelInput">Cidade</label>
            </div><br>
            <div class="inputBox">
                    <input type="text" name="estado" id="estado" class="inputUser" required>
                    <label for="estado" class="labelInput">Estado</label>
            </div><br>
            <div class="inputBox">
                    <input type="text" name="endereço" id="endereço" class="inputUser" required>
                    <label for="endereço" class="labelInput">Endereço</label>
             </div><br>
             <input type="submit" name="submit" id="submit">
             <div> <br>
                    <h4>  <a href="login.php">VOLTAR</a> </h4>
            </div>
            </fieldset>
        </form>
    </div>
</body>
</html>


