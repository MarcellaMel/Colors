<?php
//incluir o arquivo de conexao com o bd
 include_once("conexao.php");
 session_start();

$userId= $_GET['idUser'];

//receber os dados do formulário
  $nome = $_SESSION["nomeUser"];
  $sobrenome = $_SESSION["sobrenomeUser"];
  $email = $_SESSION["emailUser"];
  
  $telefone = $_SESSION["telUser"];
  $nascimento = $_SESSION["nascimentoUser"];
 


//inserir os dados no banco de dados

                        //$result = $conn->query("SELECT COUNT(*) FROM usuario WHERE emailUser = '{$email}'");
                        //$row = $result->fetch_row();
                          $sql = "UPDATE usuario SET  nomeUser = '$nome', sobrenomeUser ='$sobrenome', emailUser = '$email',telUser = '$telefone', nascimentoUser = '$nascimento';";

                          if($conn->query($sql) === TRUE){
                            echo ("Dados inseridos com sucesso!");
                            header("location: ../html/quizz.html");
                           
                          } else {
                            echo ( "Erro ao inserir dados: " . $conn->error);
                           
                          }
                        
                        
                        
 
  $conn->close();

  ?>