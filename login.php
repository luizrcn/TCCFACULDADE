<?php 
require_once 'classes/usuarios.php';
$u = new Usuario;
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Archivo:wght@400;700&display=swap" rel="stylesheet" />
    <link rel="shortcut icon" href="./images/favicon.ico" type="image/x-icon" />


  <!-- Carousel -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.4.1/css/glide.core.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.4.1/css/glide.theme.min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="C:\Users\luis_\OneDrive\Área de Trabalho\TCC\SITE QUASE PRONTO\css/style_login.css">

  <!-- Custom StyleSheet -->
     <link rel="stylesheet" href="styles.css" />

  <title>GAMING+ CENTER</title>
</head>

<body>

 <!-- Header -->
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
            <a href="index.php" class="scroll-link">
              GAMING+ CENTER
            </a>
          </div>

          <div class="nav__menu">
            <div class="menu__top">
              <span class="nav__category">GAMING+ CENTER</span>
              <a href="index.php" class="close__toggle">
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
                <a href="computadores.php" class="nav__link scroll-link">COMPUTADORES</a>
              </li>
              <li class="nav__item">
                <a href="consoles.php" class="nav__link scroll-link">CONSOLES</a>
              </li>
              <li class="nav__item">
                <a href="hardware.php" class="nav__link scroll-link">HARDWARES</a>
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

            <a href="cart.php" class="icon__item">
              <svg class="icon__cart">
                <use xlink:href="./images/sprite.svg#icon-shopping-basket"></use>
              </svg>
              <span id="cart__total">0</span>
            </a>
          </div>
        </nav>
      </div>
    </div>


	<div class="campo-logar">
		<div class="name-login">LOGIN</div><br>
		<form method="POST">
		
		<input 
		class="input-login" 
		placeholder=" E-MAIL" 
		name="email" 
		id="username" 
		type="text" 
		maxlength="40" ><br/><br>


	<input 
	class="input-login" 
	placeholder="  SENHA" 
	name="senha" 
	id="password" 
	type="password"  
	maxlength="32";><br/><br>


	<a 
	href="">
	<button 
	type="submit" 
	class="logar__btn">LOGAR</button></a><br><br>

	<div 
	class="nr-login">Esqueceu a senha? 
	<a 
	href="esqueceu.php"
	> Clique aqui! </a></div><br>
	<div 
	class="nr-login">Não registrado? 
	<a 
	href="cadastro.php"
	> Clique aqui! </a></div>




	</div>


	</div>
</form>
		
    <?php 
    
    if(isset($_POST['email'])){

  
  				$email = addslashes($_POST['email']);

  				$senha = addslashes($_POST['senha']);
 
  	if( !empty($email) &&  !empty($senha)) 
	  {
			$u->conectar("cadastro_login","localhost","root","");
			if($u->msgErro == "")
			{
				if($u->logar($email,$senha))
				{
					header("location: areaprivada.php");
				}
				else
				{
					echo "E-mail e/ou senha estão incorretos!";
				}
			}
			else{
				echo "Erro: ".$u->msgErro;
			}
		}
	else{
		echo "Preencha todos os campos!";
	}								
	}
    ?>

</body>

</html>