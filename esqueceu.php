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
            <a href="" class="scroll-link">
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
		<div class="esqueceu">ESQUECEU A SENHA?</div><br>
		<form method="POST">
		
		<input 
		class="input-login" 
		placeholder=" E-MAIL" 
		name="email" 
		id="username" 
		type="text" 
		maxlength="40" ><br/><br>



	<a 
	href="">
	<button 
	type="submit" 
	class="esqueceu__btn">ENVIAR</button></a><br><br>

	<div 
	class="nr-login">TELA DE LOGIN:
	<a 
	href="login.php"
	> Clique aqui! </a></div><br>
	<div 
	class="nr-login">Não registrado? 
	<a class="link"
	href="cadastro.php"
	> Clique aqui! </a></div>




	</div>


	</div>
</form>

</body>

</html>