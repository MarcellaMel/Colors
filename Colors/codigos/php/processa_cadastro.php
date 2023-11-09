<?php
//incluir o arquivo de conexao com o bd
 include_once("conexao.php");

//receber os dados do formulário
  $nome = $_POST["nomeUser"];
  $sobrenome = $_POST["sobrenomeUser"];
  $email = $_POST["emailUser"];
  $senha = $_POST["senhaUser"];
  $telefone = $_POST["telUser"];
  $nascimento = $_POST["nascimentoUser"];
  $gen = $_POST["generoUser"];
  

  //echo $nome;

//inserir os dados no banco de dados

                        $result = $conn->query("SELECT COUNT(*) FROM usuario WHERE emailUser = '{$email}'");
                        $row = $result->fetch_row();
                       
                        if ($row[0] > 0) {
                          echo  "<script> alert('Email já cadastrado, tente novamente com um outro email ou faça seu login');</script>";
                          header("location: ../html/inicio.html");
                          
                        } else {
                          $sql = "INSERT INTO usuario (nomeUser, sobrenomeUser, emailUser, senhaUser, telUser, nascimentoUser, generoUser) VALUES ('$nome', '$sobrenome', '$email', '$senha', '$telefone', '$nascimento', '$gen')";

                          if($conn->query($sql) === TRUE){
                            alert ("Dados inseridos com sucesso!");
                           
                          } else {
                            alert ( "Erro ao inserir dados: " . $conn->error);
                           
                          }
                        
                        }
                        
 
  $conn->close();
  ?>
