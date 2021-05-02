<?php

require_once 'classes/usuarios.php';

$u = new Usuario;


?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />

 
  <link rel="stylesheet" href="styles.css" />

  <title>GAMING+ CENTER</title>
</head>

<body>


  <header id="header" class="header">
    <div class="navigation">
      <div class="container">
        <nav class="nav">
          <div class="nav__hamburger">
            <svg>
              <use xlink:href="./images/sprite.svg#icon-menu"></use>
            </svg>
          </div>

          <div class="nav__logo">
            <a href="/" class="scroll-link">
              GAMING+ CENTER
            </a>
          </div>

          <div class="nav__menu">
            <div class="menu__top">
              <span class="nav__category">GAMING+ CENTER</span>
              <a href="#" class="close__toggle">
                <svg>
                  <use xlink:href="./images/sprite.svg#icon-cross"></use>
                </svg>
              </a>
            </div>
            <ul class="nav__list">
              <li class="nav__item">
                <a href="index.php" class="nav__link scroll-link">Inicio</a>
              </li>
              <li class="nav__item">
                <a href="#" class="nav__link scroll-link">COMPUTADORES</a>
              </li>
              <li class="nav__item">
                <a href="#" class="nav__link scroll-link">CONSOLES</a>
              </li>
              <li class="nav__item">
                <a href="#" class="nav__link scroll-link">HARDWARES</a>
              </li>
            </ul>
          </div>

          <div class="nav__icons">
            <a href="login.php" class="icon__item">
              <svg class="icon__user">
                <use xlink:href="./images/sprite.svg#icon-user"></use>
              </svg>
            </a>

            <a href="#" class="icon__item">
              <svg class="icon__search">
                <use xlink:href="./images/sprite.svg#icon-search"></use>
              </svg>
            </a>

            <a href="#" class="icon__item">
              <svg class="icon__cart">
                <use xlink:href="./images/sprite.svg#icon-shopping-basket"></use>
              </svg>
              <span id="cart__total">0</span>
            </a>
          </div>
        </nav>
      </div>
    </div>

    <div class="campo-cadastrar">
	<form method="post">
	<div class="name-login">LOGIN</div><br>
            
<input 
type="text"
placeholder="Nome Completo"
maxlength="30"
name="nome"
class="input-login"
><br><br>

<input 
type="text"
placeholder="Telefone"
maxlength="30"
name="telefone"
class="input-login"
><br><br>

<input 
type="email"     
placeholder="E-MAIL"
name="email"
class="input-login"
><br><br>

<input type="text"      
placeholder="CPF"        
name="cpf"
class="input-login"
><br><br>
<input 
type="password"  
placeholder="DIGITE SUA SENHA"                  
name="senha"
class="input-login"
><br><br>
<input 
type="password"  
placeholder="CONFIRME SUA SENHA"        
name="confirmar_password" 
class="input-login"
><br><br>
<a 
	href="">
	<button 
	type="submit" 
	class="logar__btn">CADASTRAR</button></a><br>
	

	<div 
	class="nr-login">TELA DE LOGIN:
	<a 
	href="login.php"
	> Clique aqui! </a></div>

</form>


    <?php

  if(isset($_POST['nome'])){
    
    $nome = addslashes($_POST['nome']);
    $telefone = addslashes($_POST['telefone']);
    $cpf = addslashes($_POST['cpf']);
    $email = addslashes($_POST['email']);
    $senha = addslashes($_POST['senha']);
    $confirmarSenha = addslashes($_POST['confirmar_password']);

    if( !empty($nome) && 
        !empty($telefone) && 
        !empty($cpf) && 
        !empty($email) && 
        !empty($senha ) && 
        !empty($confirmarSenha)){

          $u->conectar("cadastro_login","localhost","root","");
          if($u->msgErro == ""){
            if($senha == $confirmarSenha){
              if($u->cadastrar($nome,$telefone,$email,$cpf,$senha)){
                echo "Cadastrado com Sucesso!";
              }
              else{
                echo "Email já cadastrado!";
              }
            }
            else{
              echo "Senha e/ou confirmar senha não correspondem!";
            }
            
          }
          else{
            echo "Erro:".$u->msgErro;
          }
        }

        else{
          echo " Preencha todos os campos!";
        }

  }
  
  ?>

</body>

</html>