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
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
        integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

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

    <!-- Hero -->
    <div class="hero">
      <div class="glide" id="glide_1">
        <div class="glide__track" data-glide-el="track">
          <ul class="glide__slides">
            <li class="glide__slide">
              <div class="hero__center">
                <div class="hero__left">
                  <span class=""></span>
                  <h1 class="">COMPUTADORES PARA VOCÊ!</h1>
                  <p></p>
                  <a href="computadores.php"><button class="hero__btn agregar-carrito">COMPRE AGORA</button></a>
                </div>
                <div class="hero__right">
                  <div class="hero__img-container">
                    <img class="banner_01" src="./images/banner_01.png" alt="banner2" />
                  </div>
                </div>
              </div>
            </li>
            <li class="glide__slide">
              <div class="hero__center">
                <div class="hero__left">
                  <span></span>
                  <h1>CONSOLES PARA VOCÊ!</h1>
                  <p></p>
                  <a href="#"><button class="hero__btn agregar-carrito">COMPRE AGORA</button></a>
                </div>
                <div class="hero__right">
                  <img class="banner_02" src="./images/banner_02.png" alt="banner2" />
                </div>
              </div>
            </li>
            <li class="glide__slide">
              <div class="hero__center">
                <div class="hero__left">
                  <span></span>
                  <h1>HARDWARES PARA VOCÊ!</h1>
                  <p></p>
                  <a href="#"><button class="hero__btn">COMPRE AGORA</button></a>
                </div>
                <div class="hero__right">
                  <img class="banner_02" src="./images/banner_03.png" alt="banner3" />
                </div>
              </div>
            </li>
          </ul>
        </div>
        <div class="glide__bullets" data-glide-el="controls[nav]">
          <button class="glide__bullet" data-glide-dir="=0"></button>
          <button class="glide__bullet" data-glide-dir="=1"></button>
          <button class="glide__bullet" data-glide-dir="=2"></button>
        </div>

        <div class="glide__arrows" data-glide-el="controls">
          <button class="glide__arrow glide__arrow--left" data-glide-dir="<">
            <svg>
              <use xlink:href="./images/sprite.svg#icon-arrow-left2"></use>
            </svg>
          </button>
          <button class="glide__arrow glide__arrow--right" data-glide-dir=">">
            <svg>
              <use xlink:href="./images/sprite.svg#icon-arrow-right2"></use>
            </svg>
          </button>
        </div>
      </div>
    </div>
  </header>
  <!-- End Header -->

  <!-- Main -->
  <main id="main">
    <div class="container">
      <!-- Collection -->
      <section id="collection" class="section collection">
        <div class="collection__container" data-aos="fade-up" data-aos-duration="1200">
          <div class="collection__box">
            <div class="img__container">
              <img class="collection_02" src="./images/collection_02.png" alt="">
            </div>
            <div class="collection__content">
              <div class="collection__data">
                <span>Novas Cores</span>
                <h1>HEADPHONES</h1>
                <a href="#shop">COMPRE AGORA</a>
              </div>
            </div>
          </div>
          <div class="collection__box">
            <div class="img__container">
              <img class="collection_01" src="./images/collection_01.png" alt="">
            </div>
            <div class="collection__content">
              <div class="collection__data">
                <span>Novos smartphones</span>
                <h1>SMARTPHONES</h1>
                <a href="#">COMPRE AGORA</a>
              </div>
            </div>
          </div>
      </section>

      <!-- Latest Products -->
      <section class="section latest__products" id="latest">
        <div class="title__container">
          <div class="section__title active" data-id="Latest Products">
            <span class="dot"></span>
            <h1 class="primary__title">Ultimos Produtos</h1>
          </div>
        </div>
        <div class="container" data-aos="fade-up" data-aos-duration="1200">
          <div class="glide" id="glide_2">
            <div class="glide__track" data-glide-el="track">
              <ul class="glide__slides latest-center">
                <li class="glide__slide">
                  <div class="product">
                    <div class="product__header">
                      <img src="./images/products/computadores/cpu1.png" alt="product">
                    </div>
                    <div class="product__footer">
                      <h3>CPU</h3>
                      <div class="rating">
                        <svg>
                          <use xlink:href="./images/sprite.svg#icon-star-full"></use>
                        </svg>
                        <svg>
                          <use xlink:href="./images/sprite.svg#icon-star-full"></use>
                        </svg>
                        <svg>
                          <use xlink:href="./images/sprite.svg#icon-star-full"></use>
                        </svg>
                        <svg>
                          <use xlink:href="./images/sprite.svg#icon-star-full"></use>
                        </svg>
                        <svg>
                          <use xlink:href="./images/sprite.svg#icon-star-full"></use>
                        </svg>
                      </div>
                      <div class="product__price">
                        <h4>R$750</h4>
                      </div>
                      <a href=""><button type="submit" class="product__btn">Adicionar ao carrinho</button></a>
                    </div>
                    <ul>
                      <li>
                        <a data-tip="Quick View" data-place="left" href="product.php">
                          <svg>
                            <use xlink:href="./images/sprite.svg#icon-eye"></use>
                          </svg>
                        </a>
                      </li>
                      
                    </ul>
                  </div>
                </li>
                <li class="glide__slide">
                  <div class="product">
                    <div class="product__header">
                      <img src="./images/products/computadores/cpu2.png" alt="product">
                    </div>
                    <div class="product__footer">
                      <h3>CPU</h3>
                      <div class="rating">
                        <svg>
                          <use xlink:href="./images/sprite.svg#icon-star-full"></use>
                        </svg>
                        <svg>
                          <use xlink:href="./images/sprite.svg#icon-star-full"></use>
                        </svg>
                        <svg>
                          <use xlink:href="./images/sprite.svg#icon-star-full"></use>
                        </svg>
                        <svg>
                          <use xlink:href="./images/sprite.svg#icon-star-full"></use>
                        </svg>
                        <svg>
                          <use xlink:href="./images/sprite.svg#icon-star-empty"></use>
                        </svg>
                      </div>
                      <div class="product__price">
                        <h4>R$900</h4>
                      </div>
                      <a href=""><button type="submit" class="agregar-carrito product__btn">Adicionar ao carrinho</button></a>
                    </div>
                    <ul>
                      <li>
                        <a data-tip="Quick View" data-place="left" href="#">
                          <svg>
                            <use xlink:href="./images/sprite.svg#icon-eye"></use>
                          </svg>
                        </a>
                      </li>
                      
                    </ul>
                  </div>
                </li>
                <li class="glide__slide">
                  <div class="product">
                    <div class="product__header">
                      <img src="./images/products/computadores/cpu3.png" alt="product">
                    </div>
                    <div class="product__footer">
                      <h3>CPU</h3>
                      <div class="rating">
                        <svg>
                          <use xlink:href="./images/sprite.svg#icon-star-full"></use>
                        </svg>
                        <svg>
                          <use xlink:href="./images/sprite.svg#icon-star-full"></use>
                        </svg>
                        <svg>
                          <use xlink:href="./images/sprite.svg#icon-star-full"></use>
                        </svg>
                        <svg>
                          <use xlink:href="./images/sprite.svg#icon-star-full"></use>
                        </svg>
                        <svg>
                          <use xlink:href="./images/sprite.svg#icon-star-empty"></use>
                        </svg>
                      </div>
                      <div class="product__price">
                        <h4>R$600</h4>
                      </div>
                      <a href="#"><button type="submit" class="product__btn">Adicionar ao carrinho</button></a>
                    </div>
                    <ul>
                      <li>
                        <a data-tip="Quick View" data-place="left" href="#">
                          <svg>
                            <use xlink:href="./images/sprite.svg#icon-eye"></use>
                          </svg>
                        </a>
                      </li>
                      
                    </ul>
                  </div>
                </li>
                <li class="glide__slide">
                  <div class="product">
                    <div class="product__header">
                      <img src="./images/products/computadores/cpu4.png" alt="product">
                    </div>
                    <div class="product__footer">
                      <h3>CPU</h3>
                      <div class="rating">
                        <svg>
                          <use xlink:href="./images/sprite.svg#icon-star-full"></use>
                        </svg>
                        <svg>
                          <use xlink:href="./images/sprite.svg#icon-star-full"></use>
                        </svg>
                        <svg>
                          <use xlink:href="./images/sprite.svg#icon-star-full"></use>
                        </svg>
                        <svg>
                          <use xlink:href="./images/sprite.svg#icon-star-full"></use>
                        </svg>
                        <svg>
                          <use xlink:href="./images/sprite.svg#icon-star-empty"></use>
                        </svg>
                      </div>
                      <div class="product__price">
                        <h4>R$850</h4>
                      </div>
                      <a href="#"><button type="submit" class="product__btn">Adicionar ao carrinho</button></a>
                    </div>
                    <ul>
                      <li>
                        <a data-tip="Quick View" data-place="left" href="#">
                          <svg>
                            <use xlink:href="./images/sprite.svg#icon-eye"></use>
                          </svg>
                        </a>
                      </li>
                      
                    </ul>
                  </div>
                </li>
                <li class="glide__slide">
                  <div class="product">
                    <div class="product__header">
                      <img src="./images/products/computadores/cpu5.png" alt="product">
                    </div>
                    <div class="product__footer">
                      <h3>CPU</h3>
                      <div class="rating">
                        <svg>
                          <use xlink:href="./images/sprite.svg#icon-star-full"></use>
                        </svg>
                        <svg>
                          <use xlink:href="./images/sprite.svg#icon-star-full"></use>
                        </svg>
                        <svg>
                          <use xlink:href="./images/sprite.svg#icon-star-full"></use>
                        </svg>
                        <svg>
                          <use xlink:href="./images/sprite.svg#icon-star-full"></use>
                        </svg>
                        <svg>
                          <use xlink:href="./images/sprite.svg#icon-star-empty"></use>
                        </svg>
                      </div>
                      <div class="product__price">
                        <h4>R$450</h4>
                      </div>
                      <a href="#"><button type="submit" class="product__btn">Adicionar ao carrinho</button></a>
                    </div>
                    <ul>
                      <li>
                        <a data-tip="Quick View" data-place="left" href="#">
                          <svg>
                            <use xlink:href="./images/sprite.svg#icon-eye"></use>
                          </svg>
                        </a>
                      </li>
                      <li>
                        <a data-tip="Add To Wishlist" data-place="left" href="#">
                          <svg>
                            <use xlink:href="./images/sprite.svg#icon-heart-o"></use>
                          </svg>
                        </a>
                      </li>
                      <li>
                        <a data-tip="Add To Compare" data-place="left" href="#">
                          <svg>
                            <use xlink:href="./images/sprite.svg#icon-loop2"></use>
                          </svg>
                        </a>
                      </li>
                    </ul>
                  </div>
                </li>
                <li class="glide__slide">
                  <div class="product">
                    <div class="product__header">
                      <img src="./images/products/computadores/cpu6.png" alt="product">
                    </div>
                    <div class="product__footer">
                      <h3>CPU</h3>
                      <div class="rating">
                        <svg>
                          <use xlink:href="./images/sprite.svg#icon-star-full"></use>
                        </svg>
                        <svg>
                          <use xlink:href="./images/sprite.svg#icon-star-full"></use>
                        </svg>
                        <svg>
                          <use xlink:href="./images/sprite.svg#icon-star-full"></use>
                        </svg>
                        <svg>
                          <use xlink:href="./images/sprite.svg#icon-star-full"></use>
                        </svg>
                        <svg>
                          <use xlink:href="./images/sprite.svg#icon-star-full"></use>
                        </svg>
                      </div>
                      <div class="product__price">
                        <h4>R$300</h4>
                      </div>
                      <a href="#"><button type="submit" class="product__btn">Adicionar ao carrinho</button></a>
                    </div>
                    <ul>
                      <li>
                        <a data-tip="Quick View" data-place="left" href="#">
                          <svg>
                            <use xlink:href="./images/sprite.svg#icon-eye"></use>
                          </svg>
                        </a>
                      </li>
                      <li>
                        <a data-tip="Add To Wishlist" data-place="left" href="#">
                          <svg>
                            <use xlink:href="./images/sprite.svg#icon-heart-o"></use>
                          </svg>
                        </a>
                      </li>
                      <li>
                        <a data-tip="Add To Compare" data-place="left" href="#">
                          <svg>
                            <use xlink:href="./images/sprite.svg#icon-loop2"></use>
                          </svg>
                        </a>
                      </li>
                    </ul>
                  </div>
                </li>
                <li class="glide__slide">
                  <div class="product">
                    <div class="product__header">
                      <img src="./images/products/computadores/cpu7.png" alt="product">
                    </div>
                    <div class="product__footer">
                      <h3>CPU</h3>
                      <div class="rating">
                        <svg>
                          <use xlink:href="./images/sprite.svg#icon-star-full"></use>
                        </svg>
                        <svg>
                          <use xlink:href="./images/sprite.svg#icon-star-full"></use>
                        </svg>
                        <svg>
                          <use xlink:href="./images/sprite.svg#icon-star-full"></use>
                        </svg>
                        <svg>
                          <use xlink:href="./images/sprite.svg#icon-star-full"></use>
                        </svg>
                        <svg>
                          <use xlink:href="./images/sprite.svg#icon-star-empty"></use>
                        </svg>
                      </div>
                      <div class="product__price">
                        <h4>R$300</h4>
                      </div>
                      <a href="#"><button type="submit" class="product__btn">Adicionar ao carrinho</button></a>
                    </div>
                    <ul>
                      <li>
                        <a data-tip="Quick View" data-place="left" href="#">
                          <svg>
                            <use xlink:href="./images/sprite.svg#icon-eye"></use>
                          </svg>
                        </a>
                      </li>
                      <li>
                        <a data-tip="Add To Wishlist" data-place="left" href="#">
                          <svg>
                            <use xlink:href="./images/sprite.svg#icon-heart-o"></use>
                          </svg>
                        </a>
                      </li>
                      <li>
                        <a data-tip="Add To Compare" data-place="left" href="#">
                          <svg>
                            <use xlink:href="./images/sprite.svg#icon-loop2"></use>
                          </svg>
                        </a>
                      </li>
                    </ul>
                  </div>
                </li>
                <li class="glide__slide">
                  <div class="product">
                    <div class="product__header">
                      <img src="./images/products/computadores/cpu8.png" alt="product">
                    </div>
                    <div class="product__footer">
                      <h3>CPU</h3>
                      <div class="rating">
                        <svg>
                          <use xlink:href="./images/sprite.svg#icon-star-full"></use>
                        </svg>
                        <svg>
                          <use xlink:href="./images/sprite.svg#icon-star-full"></use>
                        </svg>
                        <svg>
                          <use xlink:href="./images/sprite.svg#icon-star-full"></use>
                        </svg>
                        <svg>
                          <use xlink:href="./images/sprite.svg#icon-star-full"></use>
                        </svg>
                        <svg>
                          <use xlink:href="./images/sprite.svg#icon-star-empty"></use>
                        </svg>
                      </div>
                      <div class="product__price">
                        <h4>R$250</h4>
                      </div>
                      <a href="#"><button type="submit" class="product__btn">Adicionar ao carrinho</button></a>
                    </div>
                    <ul>
                      <li>
                        <a data-tip="Quick View" data-place="left" href="#">
                          <svg>
                            <use xlink:href="./images/sprite.svg#icon-eye"></use>
                          </svg>
                        </a>
                      </li>
                      <li>
                        <a data-tip="Add To Wishlist" data-place="left" href="#">
                          <svg>
                            <use xlink:href="./images/sprite.svg#icon-heart-o"></use>
                          </svg>
                        </a>
                      </li>
                      <li>
                        <a data-tip="Add To Compare" data-place="left" href="#">
                          <svg>
                            <use xlink:href="./images/sprite.svg#icon-loop2"></use>
                          </svg>
                        </a>
                      </li>
                    </ul>
                  </div>
                </li>
                <li class="glide__slide">
                  <div class="product">
                    <div class="product__header">
                      <img src="./images/products/computadores/cpu9.png" alt="product">
                    </div>
                    <div class="product__footer">
                      <h3>CPU</h3>
                      <div class="rating">
                        <svg>
                          <use xlink:href="./images/sprite.svg#icon-star-full"></use>
                        </svg>
                        <svg>
                          <use xlink:href="./images/sprite.svg#icon-star-full"></use>
                        </svg>
                        <svg>
                          <use xlink:href="./images/sprite.svg#icon-star-full"></use>
                        </svg>
                        <svg>
                          <use xlink:href="./images/sprite.svg#icon-star-full"></use>
                        </svg>
                        <svg>
                          <use xlink:href="./images/sprite.svg#icon-star-empty"></use>
                        </svg>
                      </div>
                      <div class="product__price">
                        <h4>R$550</h4>
                      </div>
                      <a href="#"><button type="submit" class="product__btn">Adicionar ao carrinho</button></a>
                    </div>
                    <ul>
                      <li>
                        <a data-tip="Quick View" data-place="left" href="#">
                          <svg>
                            <use xlink:href="./images/sprite.svg#icon-eye"></use>
                          </svg>
                        </a>
                      </li>
                      <li>
                        <a data-tip="Add To Wishlist" data-place="left" href="#">
                          <svg>
                            <use xlink:href="./images/sprite.svg#icon-heart-o"></use>
                          </svg>
                        </a>
                      </li>
                      <li>
                        <a data-tip="Add To Compare" data-place="left" href="#">
                          <svg>
                            <use xlink:href="./images/sprite.svg#icon-loop2"></use>
                          </svg>
                        </a>
                      </li>
                    </ul>
                  </div>

              </ul>
            </div>

            <div class="glide__arrows" data-glide-el="controls">
              <button class="glide__arrow glide__arrow--left" data-glide-dir="<">
                <svg>
                  <use xlink:href="./images/sprite.svg#icon-arrow-left2"></use>
                </svg>
              </button>
              <button class="glide__arrow glide__arrow--right" data-glide-dir=">">
                <svg>
                  <use xlink:href="./images/sprite.svg#icon-arrow-right2"></use>
                </svg>
              </button>
            </div>
          </div>
        </div>
      </section>

      <section class="category__section section" id="category">
        <div class="tab__list">
          <div class="title__container tabs">
            <div class="section__titles category__titles ">
              <div class="section__title filter-btn active" data-id="All Products">
                <span class="dot"></span>
                <h1 class="primary__title">All Products</h1>
              </div>
            </div>
            <div class="section__titles">
              <div class="section__title filter-btn" data-id="Trending Products">
                <span class="dot"></span>
                <h1 class="primary__title">Trending Products</h1>
              </div>
            </div>

            <div class="section__titles">
              <div class="section__title filter-btn" data-id="Special Products">
                <span class="dot"></span>
                <h1 class="primary__title">Special Products</h1>
              </div>
            </div>

            <div class="section__titles">
              <div class="section__title filter-btn" data-id="Featured Products">
                <span class="dot"></span>
                <h1 class="primary__title">Featured Products</h1>
              </div>
            </div>

          </div>
        </div>
        <div class="category__container" data-aos="fade-up" data-aos-duration="1200">
          <div class="category__center"></div>
        </div>
    </div>
    </section>

    <!-- Facility Section -->
    <section class="facility__section section" id="facility">
      <div class="container">
        <div class="facility__contianer" data-aos="fade-up" data-aos-duration="1200">
          <div class="facility__box">
            <div class="facility-img__container">
              <svg>
                <use xlink:href="./images/sprite.svg#icon-airplane"></use>
              </svg>
            </div>
            <p>FREE SHIPPING WORLD WIDE</p>
          </div>

          <div class="facility__box">
            <div class="facility-img__container">
              <svg>
                <use xlink:href="./images/sprite.svg#icon-credit-card-alt"></use>
              </svg>
            </div>
            <p>100% MONEY BACK GUARANTEE</p>
          </div>

          <div class="facility__box">
            <div class="facility-img__container">
              <svg>
                <use xlink:href="./images/sprite.svg#icon-credit-card"></use>
              </svg>
            </div>
            <p>MANY PAYMENT GATWAYS</p>
          </div>

          <div class="facility__box">
            <div class="facility-img__container">
              <svg>
                <use xlink:href="./images/sprite.svg#icon-headphones"></use>
              </svg>
            </div>
            <p>24/7 ONLINE SUPPORT</p>
          </div>
        </div>
      </div>
    </section>
    </div>

    <!-- Testimonial Section -->
    <section class="section testimonial" id="testimonial">
      <div class="testimonial__container">
        <div class="glide" id="glide_4">
          <div class="glide__track" data-glide-el="track">
            <ul class="glide__slides">
              <li class="glide__slide">
                <div class="testimonial__box">
                  <div class="client__image">
                    <img src="./images/profile1.jpg" alt="profile">
                  </div>
                  <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Recusandae fuga hic nesciunt tempore
                    quibusdam consequatur eligendi unde officia ex quae.ipsum dolor sit amet consectetur adipisicing
                    elit. Recusandae fuga hic nesciunt tempore
                    quibusdam consequatur eligendi unde officia ex quae.</p>
                  <div class="client__info">
                    <h3>John Smith</h3>
                    <span>Founder at Apple</span>
                  </div>
                </div>
              </li>
              <li class="glide__slide">
                <div class="testimonial__box">
                  <div class="client__image">
                    <img src="./images/profile2.jpg" alt="profile">
                  </div>
                  <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Recusandae fuga hic nesciunt tempore
                    quibusdam consequatur
                    eligendi unde officia ex quae.ipsum dolor sit amet consectetur adipisicing elit. Recusandae fuga hic
                    nesciunt tempore
                    quibusdam consequatur eligendi unde officia ex quae.adipisicing elit. Recusandae fuga hic
                    nesciunt tempore
                    quibusdam consequatur eligendi unde officia ex quae.</p>
                  <div class="client__info">
                    <h3>John Smith</h3>
                    <span>Founder at Apple</span>
                  </div>
                </div>
              </li>
              <li class="glide__slide">
                <div class="testimonial__box">
                  <div class="client__image">
                    <img src="./images/profile3.jpg" alt="profile">
                  </div>
                  <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Recusandae fuga hic nesciunt tempore
                    quibusdam consequatur
                    eligendi unde officia ex quae.ipsum dolor sit amet consectetur adipisicing elit. Recusandae fuga hic
                    nesciunt tempore
                    quibusdam consequatur eligendi unde officia ex quae.adipisicing elit. Recusandae fuga hic
                    nesciunt tempore
                    quibusdam consequatur eligendi unde officia ex quae.</p>
                  <div class="client__info">
                    <h3>John Smith</h3>
                    <span>Founder at Apple</span>
                  </div>
                </div>

              </li>
              <li class="glide__slide">
                <div class="testimonial__box">
                  <div class="client__image">
                    <img src="./images/profile4.jpg" alt="">
                  </div>
                  <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Recusandae fuga hic nesciunt tempore
                    quibusdam consequatur
                    eligendi unde officia ex quae.adipisicing elit. Recusandae fuga hic
                    nesciunt tempore
                    quibusdam consequatur eligendi unde officia ex quae.
                    hic
                    nesciunt tempore
                    quibusdam consequatur eligendi unde officia ex quae.</p>
                  <div class="client__info">
                    <h3>John Smith</h3>
                    <span>Founder at Apple</span>
                  </div>
                </div>
              </li>
            </ul>
          </div>

          <div class="glide__bullets" data-glide-el="controls[nav]">
            <button class="glide__bullet" data-glide-dir="=0"></button>
            <button class="glide__bullet" data-glide-dir="=1"></button>
            <button class="glide__bullet" data-glide-dir="=2"></button>
            <button class="glide__bullet" data-glide-dir="=3"></button>
          </div>
        </div>
      </div>
    </section>




    <!-- Footer -->
    <footer id="footer" class="section footer">
      <div class="container">
        <div class="footer__top">
          <div class="footer-top__box">
            <h3>REDES SOCIAIS</h3>
            <a href="#">instagram</a>
            <a href="#">Twitter</a>
            <a href="#">FaceBook</a>
            <a href="#">TikTok</a>
            <a href="#">WhatsApp</a>
          </div>
          <div class="footer-top__box">

            <div class="footer-top__box">
              <h3>CONTATE-NOS</h3>
              <div>
                <span>
                  <svg>
                    <use xlink:href="./images/sprite.svg#icon-location"></use>
                  </svg>
                </span>
                Av de Santa Cruz 9999, Realengo-RJ
              </div>
              <div>
                <span>
                  <svg>
                    <use xlink:href="./images/sprite.svg#icon-envelop"></use>
                  </svg>
                </span> <a href="#">gamingpluscenter@outlook.com</a>
              </div>
              <div>
                <span>
                  <svg>
                    <use xlink:href="./images/sprite.svg#icon-phone"></use>
                  </svg>
                </span>
                (21)9 9999-9999
              </div>
              <div>
                <span>
                  <svg>
                    <use xlink:href="./images/sprite.svg#icon-paperplane"></use>
                  </svg>
                </span>
                Rio de Janeiro, BRASIL
              </div>
            </div>
          </div>
        </div>
        <div class="footer__bottom">
          <div class="footer-bottom__box">

          </div>
          <div class="footer-bottom__box">

          </div>
        </div>
      </div>
    </footer>
    <!-- End Footer -->



    <!-- Go To -->

    <a href="#header" class="goto-top scroll-link">
      <svg>
        <use xlink:href="./images/sprite.svg#icon-arrow-up"></use>
      </svg>
    </a>


    <!-- Glide Carousel Script -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.4.1/glide.min.js"></script>
    <!-- Animate On Scroll -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <!-- Custom JavaScript -->
    <script src="./js/products.js"></script>
    <script src="./js/index.js"></script>
    <script src="./js/slider.js"></script>
    <script src="./js/app.js"></script>

</body>

</html>