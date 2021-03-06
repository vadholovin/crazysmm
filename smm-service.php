<?php
/*
Template Name: SMM-услуга
*/
?>

<!doctype html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo( 'charset' ) ?>">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>
    <?php the_title(); ?>
  </title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
  <!-- <link rel="stylesheet" href="libs/simplebar/simplebar.css">
  <link rel="stylesheet" href="libs/owl-carousel/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="css/style-services.css"> -->
  <?php wp_head(); ?>
</head>

<body>

  <header class="page-header page-header--smm">
    <div class="container">
      <nav class="services-nav smm-nav">
        <a href="/" class="brand brand--smm">
          <img src="<?php bloginfo( 'template_url' ); ?>/assets/smm/img/logo@2x.png"
            srcset="<?php bloginfo( 'template_url' ); ?>/assets/smm/img/logo.png,
            <?php bloginfo( 'template_url' ); ?>/assets/smm/img/logo@2x.png 1.5x,
            <?php bloginfo( 'template_url' ); ?>/assets/smm/img/logo@2x.png 2x" alt="">
        </a>

        <div class="services-menu smm-menu">
          <a href="#" class="services-menu__item">
            <span class="menu-icon menu-icon--rocket"></span>
            SMM продвижение
          </a>
          <a href="#" class="services-menu__item current">
            <span class="menu-icon menu-icon--insta"></span>
            Instagram
          </a>
          <a href="#" class="services-menu__item">
            <span class="menu-icon menu-icon--vk"></span>
            Вконтакте
          </a>
          <a href="#" class="services-menu__item">
            <span class="menu-icon menu-icon--fb"></span>
            Facebook
          </a>
        </div>

        <button class="button button-primary button--menu">ОСТАВИТЬ ЗАЯВКУ</button>

        <a href="#" class="hamburger-holder" role="button" id="hamburgerHolder">
          <div class="hamburger">
            <span class="hamburger-bar"></span>
            <span class="hamburger-bar"></span>
            <span class="hamburger-bar"></span>
          </div>
        </a>
      </nav>
    </div>

    <div class="mobile-nav">
      <div class="services-mobile-menu">
        <a href="#" class="services-menu__item">
          <span class="menu-icon menu-icon--rocket"></span>
          SMM продвижение
        </a>
        <a href="#" class="services-menu__item current">
          <span class="menu-icon menu-icon--insta"></span>
          Instagram
        </a>
        <a href="#" class="services-menu__item">
          <span class="menu-icon menu-icon--vk"></span>
          Вконтакте
        </a>
        <a href="#" class="services-menu__item">
          <span class="menu-icon menu-icon--fb"></span>
          Facebook
        </a>
        <button type="button" class="close close-menu"></button>
      </div>
    </div>
  </header>

  <div class="breadcrumbs-block">
    <div class="container">
      <div class="breadcrumbs">
        <a href="#">Главная</a>
        <a href="#">Социальные сети (SMM)</a>
        <span>Продвижение в Instagram</span>
      </div>
    </div>
  </div>

  <main class="page page--smm">

    <div class="container">
      <div class="pure-g page-heading">
        <div class="pure-u-1 pure-u-lg-2-3 page-heading--text">
          <h1 class="page-title page-title--border smm-title smm-title--border">Продвижение в instagram</h1>
          <div class="smm-desc">
            <p>Посты с вашими предложениями в социальных сетях должны запоминаться людям и приводить их к подписке на группу, заявкам, переходам на сайт. Для этого ваши посты должны выделяться из огромного числа других сообществ, цеплять и четко попадать в нужную аудиторию.</p>
            <p>Это возможно, когда настройкой, ведением и рекламой сообщества занимаются грамотные специалисты с опытом.  Хотите не просто SMM для галочки, а работающий инструмент продвижения в соцсетях? Вам нужен Веб-Центр!</p>
          </div>
        </div>

        <div class="pure-u-1 pure-u-lg-1-3 page-heading--img">
          <div class="page-heading__img">
            <img src="<?php bloginfo( 'template_url' ); ?>/assets/smm/img/insta-big.png" alt="">
          </div>
        </div>
      </div>

      <div class="smm-works">
        <h2 class="h2--service">Примеры работ:</h2>

        <div class="smm-sliders">
          <div class="service-slider service-slider--back owl-carousel" id="sliderBack">
            <div class="backslide" id="back-1">
              <div class="backslide__img">
                <img src="<?php bloginfo( 'template_url' ); ?>/assets/smm/img/phone-pic.png" alt="">
              </div>

              <div class="backslide__text backslide__text-1">
                <b class="backslide__title">Аккаунт:</b>
                <a href="#" class="page-link">@greencityhouse</a>

                <hr class="hr hr-1-7">

                <b class="backslide__title">Задача:</b>
                <div class="backslide__desc">
                  <p>Вопрос показался пользователям настолько сложным, что многие родители остались в недоумении. Некоторые не смогли даже предположить, как решается эта задача. «Это нелепый вопрос, и я здесь только для того, чтобы узнать ответ», — заявил один из посетителей.</p>
                </div>
              </div>

              <div class="backslide__text backslide__text-2">
                <b class="backslide__title">Решение:</b>
                <div class="backslide__desc">
                  <p>«На побережье три маяка. Первый светит в течение трех секунд, затем он отключается на три секунды. Второй светится четыре секунды и выключается на четыре секунды. Третий светит в течение пяти секунд, затем он выключается на пять секунд. Когда в первый раз все три маяка будут одновременно отключены и когда они одновременно загорятся?» — таковы условия задачи. Женщина нашла ее в учебнике для восьмилетних детей. В итоге пользователи начали рисовать графики и создавать формулы, чтобы найти правильный ответ. По мнению большинства технарей, все маяки будут выключены в шесть секунд, а включены одновременно через 120 секунд. Однако решений оказалось несколько, поэтому посетители форума так и не пришли к единому мнению.</p>
                </div>
              </div>

              <button type="button" class="close close-slider"></button>
            </div>

            <div class="backslide" id="back-2">
              <div class="backslide__img">
                <img src="<?php bloginfo( 'template_url' ); ?>/assets/smm/img/phone-pic.png" alt="">
              </div>

              <div class="backslide__text backslide__text-1">
                <b class="backslide__title">Аккаунт:</b>
                <a href="#" class="page-link">@greencityhouse</a>

                <hr class="hr hr-1-7">

                <b class="backslide__title">Задача:</b>
                <div class="backslide__desc">
                  <p>Вопрос показался пользователям настолько сложным, что многие родители остались в недоумении. Некоторые не смогли даже предположить, как решается эта задача. «Это нелепый вопрос, и я здесь только для того, чтобы узнать ответ», — заявил один из посетителей.</p>
                </div>
              </div>

              <div class="backslide__text backslide__text-2">
                <b class="backslide__title">Решение:</b>
                <div class="backslide__desc">
                  <p>«На побережье три маяка. Первый светит в течение трех секунд, затем он отключается на три секунды. Второй светится четыре секунды и выключается на четыре секунды. Третий светит в течение пяти секунд, затем он выключается на пять секунд. Когда в первый раз все три маяка будут одновременно отключены и когда они одновременно загорятся?» — таковы условия задачи. Женщина нашла ее в учебнике для восьмилетних детей. В итоге пользователи начали рисовать графики и создавать формулы, чтобы найти правильный ответ. По мнению большинства технарей, все маяки будут выключены в шесть секунд, а включены одновременно через 120 секунд. Однако решений оказалось несколько, поэтому посетители форума так и не пришли к единому мнению.</p>
                </div>
              </div>

              <button type="button" class="close close-slider"></button>
            </div>

            <div class="backslide" id="back-3">
              <div class="backslide__img">
                <img src="<?php bloginfo( 'template_url' ); ?>/assets/smm/img/phone-pic.png" alt="">
              </div>

              <div class="backslide__text backslide__text-1">
                <b class="backslide__title">Аккаунт:</b>
                <a href="#" class="page-link">@greencityhouse</a>

                <hr class="hr hr-1-7">

                <b class="backslide__title">Задача:</b>
                <div class="backslide__desc">
                  <p>Вопрос показался пользователям настолько сложным, что многие родители остались в недоумении. Некоторые не смогли даже предположить, как решается эта задача. «Это нелепый вопрос, и я здесь только для того, чтобы узнать ответ», — заявил один из посетителей.</p>
                </div>
              </div>

              <div class="backslide__text backslide__text-2">
                <b class="backslide__title">Решение:</b>
                <div class="backslide__desc">
                  <p>«На побережье три маяка. Первый светит в течение трех секунд, затем он отключается на три секунды. Второй светится четыре секунды и выключается на четыре секунды. Третий светит в течение пяти секунд, затем он выключается на пять секунд. Когда в первый раз все три маяка будут одновременно отключены и когда они одновременно загорятся?» — таковы условия задачи. Женщина нашла ее в учебнике для восьмилетних детей. В итоге пользователи начали рисовать графики и создавать формулы, чтобы найти правильный ответ. По мнению большинства технарей, все маяки будут выключены в шесть секунд, а включены одновременно через 120 секунд. Однако решений оказалось несколько, поэтому посетители форума так и не пришли к единому мнению.</p>
                </div>
              </div>

              <button type="button" class="close close-slider"></button>
            </div>

            <div class="backslide" id="back-4">
              <div class="backslide__img">
                <img src="<?php bloginfo( 'template_url' ); ?>/assets/smm/img/phone-pic.png" alt="">
              </div>

              <div class="backslide__text backslide__text-1">
                <b class="backslide__title">Аккаунт:</b>
                <a href="#" class="page-link">@greencityhouse</a>

                <hr class="hr hr-1-7">

                <b class="backslide__title">Задача:</b>
                <div class="backslide__desc">
                  <p>Вопрос показался пользователям настолько сложным, что многие родители остались в недоумении. Некоторые не смогли даже предположить, как решается эта задача. «Это нелепый вопрос, и я здесь только для того, чтобы узнать ответ», — заявил один из посетителей.</p>
                </div>
              </div>

              <div class="backslide__text backslide__text-2">
                <b class="backslide__title">Решение:</b>
                <div class="backslide__desc">
                  <p>«На побережье три маяка. Первый светит в течение трех секунд, затем он отключается на три секунды. Второй светится четыре секунды и выключается на четыре секунды. Третий светит в течение пяти секунд, затем он выключается на пять секунд. Когда в первый раз все три маяка будут одновременно отключены и когда они одновременно загорятся?» — таковы условия задачи. Женщина нашла ее в учебнике для восьмилетних детей. В итоге пользователи начали рисовать графики и создавать формулы, чтобы найти правильный ответ. По мнению большинства технарей, все маяки будут выключены в шесть секунд, а включены одновременно через 120 секунд. Однако решений оказалось несколько, поэтому посетители форума так и не пришли к единому мнению.</p>
                </div>
              </div>

              <button type="button" class="close close-slider"></button>
            </div>

            <div class="backslide" id="back-5">
              <div class="backslide__img">
                <img src="<?php bloginfo( 'template_url' ); ?>/assets/smm/img/phone-pic.png" alt="">
              </div>

              <div class="backslide__text backslide__text-1">
                <b class="backslide__title">Аккаунт:</b>
                <a href="#" class="page-link">@greencityhouse</a>

                <hr class="hr hr-1-7">

                <b class="backslide__title">Задача:</b>
                <div class="backslide__desc">
                  <p>Вопрос показался пользователям настолько сложным, что многие родители остались в недоумении. Некоторые не смогли даже предположить, как решается эта задача. «Это нелепый вопрос, и я здесь только для того, чтобы узнать ответ», — заявил один из посетителей.</p>
                </div>
              </div>

              <div class="backslide__text backslide__text-2">
                <b class="backslide__title">Решение:</b>
                <div class="backslide__desc">
                  <p>«На побережье три маяка. Первый светит в течение трех секунд, затем он отключается на три секунды. Второй светится четыре секунды и выключается на четыре секунды. Третий светит в течение пяти секунд, затем он выключается на пять секунд. Когда в первый раз все три маяка будут одновременно отключены и когда они одновременно загорятся?» — таковы условия задачи. Женщина нашла ее в учебнике для восьмилетних детей. В итоге пользователи начали рисовать графики и создавать формулы, чтобы найти правильный ответ. По мнению большинства технарей, все маяки будут выключены в шесть секунд, а включены одновременно через 120 секунд. Однако решений оказалось несколько, поэтому посетители форума так и не пришли к единому мнению.</p>
                </div>
              </div>

              <button type="button" class="close close-slider"></button>
            </div>

            <div class="backslide" id="back-6">
              <div class="backslide__img">
                <img src="<?php bloginfo( 'template_url' ); ?>/assets/smm/img/phone-pic.png" alt="">
              </div>

              <div class="backslide__text backslide__text-1">
                <b class="backslide__title">Аккаунт:</b>
                <a href="#" class="page-link">@greencityhouse</a>

                <hr class="hr hr-1-7">

                <b class="backslide__title">Задача:</b>
                <div class="backslide__desc">
                  <p>Вопрос показался пользователям настолько сложным, что многие родители остались в недоумении. Некоторые не смогли даже предположить, как решается эта задача. «Это нелепый вопрос, и я здесь только для того, чтобы узнать ответ», — заявил один из посетителей.</p>
                </div>
              </div>

              <div class="backslide__text backslide__text-2">
                <b class="backslide__title">Решение:</b>
                <div class="backslide__desc">
                  <p>«На побережье три маяка. Первый светит в течение трех секунд, затем он отключается на три секунды. Второй светится четыре секунды и выключается на четыре секунды. Третий светит в течение пяти секунд, затем он выключается на пять секунд. Когда в первый раз все три маяка будут одновременно отключены и когда они одновременно загорятся?» — таковы условия задачи. Женщина нашла ее в учебнике для восьмилетних детей. В итоге пользователи начали рисовать графики и создавать формулы, чтобы найти правильный ответ. По мнению большинства технарей, все маяки будут выключены в шесть секунд, а включены одновременно через 120 секунд. Однако решений оказалось несколько, поэтому посетители форума так и не пришли к единому мнению.</p>
                </div>
              </div>

              <button type="button" class="close close-slider"></button>
            </div>

            <div class="backslide" id="back-7">
              <div class="backslide__img">
                <img src="<?php bloginfo( 'template_url' ); ?>/assets/smm/img/phone-pic.png" alt="">
              </div>

              <div class="backslide__text backslide__text-1">
                <b class="backslide__title">Аккаунт:</b>
                <a href="#" class="page-link">@greencityhouse</a>

                <hr class="hr hr-1-7">

                <b class="backslide__title">Задача:</b>
                <div class="backslide__desc">
                  <p>Вопрос показался пользователям настолько сложным, что многие родители остались в недоумении. Некоторые не смогли даже предположить, как решается эта задача. «Это нелепый вопрос, и я здесь только для того, чтобы узнать ответ», — заявил один из посетителей.</p>
                </div>
              </div>

              <div class="backslide__text backslide__text-2">
                <b class="backslide__title">Решение:</b>
                <div class="backslide__desc">
                  <p>«На побережье три маяка. Первый светит в течение трех секунд, затем он отключается на три секунды. Второй светится четыре секунды и выключается на четыре секунды. Третий светит в течение пяти секунд, затем он выключается на пять секунд. Когда в первый раз все три маяка будут одновременно отключены и когда они одновременно загорятся?» — таковы условия задачи. Женщина нашла ее в учебнике для восьмилетних детей. В итоге пользователи начали рисовать графики и создавать формулы, чтобы найти правильный ответ. По мнению большинства технарей, все маяки будут выключены в шесть секунд, а включены одновременно через 120 секунд. Однако решений оказалось несколько, поэтому посетители форума так и не пришли к единому мнению.</p>
                </div>
              </div>

              <button type="button" class="close close-slider"></button>
            </div>

            <div class="backslide" id="back-8">
              <div class="backslide__img">
                <img src="<?php bloginfo( 'template_url' ); ?>/assets/smm/img/phone-pic.png" alt="">
              </div>

              <div class="backslide__text backslide__text-1">
                <b class="backslide__title">Аккаунт:</b>
                <a href="#" class="page-link">@greencityhouse</a>

                <hr class="hr hr-1-7">

                <b class="backslide__title">Задача:</b>
                <div class="backslide__desc">
                  <p>Вопрос показался пользователям настолько сложным, что многие родители остались в недоумении. Некоторые не смогли даже предположить, как решается эта задача. «Это нелепый вопрос, и я здесь только для того, чтобы узнать ответ», — заявил один из посетителей.</p>
                </div>
              </div>

              <div class="backslide__text backslide__text-2">
                <b class="backslide__title">Решение:</b>
                <div class="backslide__desc">
                  <p>«На побережье три маяка. Первый светит в течение трех секунд, затем он отключается на три секунды. Второй светится четыре секунды и выключается на четыре секунды. Третий светит в течение пяти секунд, затем он выключается на пять секунд. Когда в первый раз все три маяка будут одновременно отключены и когда они одновременно загорятся?» — таковы условия задачи. Женщина нашла ее в учебнике для восьмилетних детей. В итоге пользователи начали рисовать графики и создавать формулы, чтобы найти правильный ответ. По мнению большинства технарей, все маяки будут выключены в шесть секунд, а включены одновременно через 120 секунд. Однако решений оказалось несколько, поэтому посетители форума так и не пришли к единому мнению.</p>
                </div>
              </div>

              <button type="button" class="close close-slider"></button>
            </div>
          </div>

          <div class="service-slider service-slider--front owl-carousel" id="sliderFront">
            <div class="frontSlide" id="front-1">
              <img src="<?php bloginfo( 'template_url' ); ?>/assets/smm/img/phone-pic.png" alt="">
            </div>
            <div class="frontSlide" id="front-2">
              <img src="<?php bloginfo( 'template_url' ); ?>/assets/smm/img/phone-pic.png" alt="">
            </div>
            <div class="frontSlide" id="front-3">
              <img src="<?php bloginfo( 'template_url' ); ?>/assets/smm/img/phone-pic.png" alt="">
            </div>
            <div class="frontSlide" id="front-4">
              <img src="<?php bloginfo( 'template_url' ); ?>/assets/smm/img/phone-pic.png" alt="">
            </div>
            <div class="frontSlide" id="front-5">
              <img src="<?php bloginfo( 'template_url' ); ?>/assets/smm/img/phone-pic.png" alt="">
            </div>
            <div class="frontSlide" id="front-6">
              <img src="<?php bloginfo( 'template_url' ); ?>/assets/smm/img/phone-pic.png" alt="">
            </div>
            <div class="frontSlide" id="front-7">
              <img src="<?php bloginfo( 'template_url' ); ?>/assets/smm/img/phone-pic.png" alt="">
            </div>
            <div class="frontSlide" id="front-8">
              <img src="<?php bloginfo( 'template_url' ); ?>/assets/smm/img/phone-pic.png" alt="">
            </div>
          </div>
        </div>
      </div>

      <div class="smm-price">
        <h2 class="h2--service">Тарифы:</h2>

        <div class="service-slider service-slider--price owl-carousel" id="sliderPrice">
          <div class="price-slide">
            <div class="price-slide__head">
              <h3 class="price-slide__title">Like a boss</h3>
              <p class="price-slide__subtitle">(Полная оптимизация для последующего продвижения)</p>
            </div>

            <div class="price-slide__body">
              <div class="price-slide__scroll" data-simplebar>
                <ul class="price-slide__ul">
                  <li class="price-slide__li">
                    Семантическое ядро: сбор, cогласование с заказчиком, кластеризация, распределение по сайту.
                  </li>
                  <li class="price-slide__li">
                    Составление плана по продвижению, определение сроков и возможных результатов.
                  </li>
                  <li class="price-slide__li">
                    Семантическое ядро: сбор, cогласование с заказчиком, кластеризация, распределение по сайту.
                  </li>
                  <li class="price-slide__li">
                    Составление плана по продвижению, определение сроков и возможных результатов.
                  </li>
                </ul>
              </div>
            </div>

            <div class="price-slide__footer">
              <ul class="price-slide__estimate">
                <li class="price-slide__estimate-i price-slide__estimate-i--time">1 неделя</li>
                <li class="price-slide__estimate-i price-slide__estimate-i--money">от 29 000 рублей</li>
              </ul>
              <a href="#" class="button button-primary button-block">Оставить заявку</a>
            </div>
          </div>

          <div class="price-slide">
            <div class="price-slide__head">
              <h3 class="price-slide__title">Like a boss</h3>
              <p class="price-slide__subtitle">(Полная оптимизация для последующего продвижения)</p>
            </div>

            <div class="price-slide__body">
              <div class="price-slide__scroll" data-simplebar>
                <ul class="price-slide__ul">
                  <li class="price-slide__li">
                    Семантическое ядро: сбор, cогласование с заказчиком, кластеризация, распределение по сайту.
                  </li>
                  <li class="price-slide__li">
                    Составление плана по продвижению, определение сроков и возможных результатов.
                  </li>
                  <li class="price-slide__li">
                    Семантическое ядро: сбор, cогласование с заказчиком, кластеризация, распределение по сайту.
                  </li>
                  <li class="price-slide__li">
                    Составление плана по продвижению, определение сроков и возможных результатов.
                  </li>
                </ul>
              </div>
            </div>

            <div class="price-slide__footer">
              <ul class="price-slide__estimate">
                <li class="price-slide__estimate-i price-slide__estimate-i--time">1 неделя</li>
                <li class="price-slide__estimate-i price-slide__estimate-i--money">от 29 000 рублей</li>
              </ul>
              <a href="#" class="button button-primary button-block">Оставить заявку</a>
            </div>
          </div>

          <div class="price-slide">
            <div class="price-slide__head">
              <h3 class="price-slide__title">Like a boss</h3>
              <p class="price-slide__subtitle">(Полная оптимизация для последующего продвижения)</p>
            </div>

            <div class="price-slide__body">
              <div class="price-slide__scroll" data-simplebar>
                <ul class="price-slide__ul">
                  <li class="price-slide__li">
                    Семантическое ядро: сбор, cогласование с заказчиком, кластеризация, распределение по сайту.
                  </li>
                  <li class="price-slide__li">
                    Составление плана по продвижению, определение сроков и возможных результатов.
                  </li>
                  <li class="price-slide__li">
                    Семантическое ядро: сбор, cогласование с заказчиком, кластеризация, распределение по сайту.
                  </li>
                  <li class="price-slide__li">
                    Составление плана по продвижению, определение сроков и возможных результатов.
                  </li>
                </ul>
              </div>
            </div>

            <div class="price-slide__footer">
              <ul class="price-slide__estimate">
                <li class="price-slide__estimate-i price-slide__estimate-i--time">1 неделя</li>
                <li class="price-slide__estimate-i price-slide__estimate-i--money">от 29 000 рублей</li>
              </ul>
              <a href="#" class="button button-primary button-block">Оставить заявку</a>
            </div>
          </div>

          <div class="price-slide">
            <div class="price-slide__head">
              <h3 class="price-slide__title">Like a boss</h3>
              <p class="price-slide__subtitle">(Полная оптимизация для последующего продвижения)</p>
            </div>

            <div class="price-slide__body">
              <div class="price-slide__scroll" data-simplebar>
                <ul class="price-slide__ul">
                  <li class="price-slide__li">
                    Семантическое ядро: сбор, cогласование с заказчиком, кластеризация, распределение по сайту.
                  </li>
                  <li class="price-slide__li">
                    Составление плана по продвижению, определение сроков и возможных результатов.
                  </li>
                  <li class="price-slide__li">
                    Семантическое ядро: сбор, cогласование с заказчиком, кластеризация, распределение по сайту.
                  </li>
                  <li class="price-slide__li">
                    Составление плана по продвижению, определение сроков и возможных результатов.
                  </li>
                </ul>
              </div>
            </div>

            <div class="price-slide__footer">
              <ul class="price-slide__estimate">
                <li class="price-slide__estimate-i price-slide__estimate-i--time">1 неделя</li>
                <li class="price-slide__estimate-i price-slide__estimate-i--money">от 29 000 рублей</li>
              </ul>
              <a href="#" class="button button-primary button-block">Оставить заявку</a>
            </div>
          </div>

          <div class="price-slide">
            <div class="price-slide__head">
              <h3 class="price-slide__title">Like a boss</h3>
              <p class="price-slide__subtitle">(Полная оптимизация для последующего продвижения)</p>
            </div>

            <div class="price-slide__body">
              <div class="price-slide__scroll" data-simplebar>
                <ul class="price-slide__ul">
                  <li class="price-slide__li">
                    Семантическое ядро: сбор, cогласование с заказчиком, кластеризация, распределение по сайту.
                  </li>
                  <li class="price-slide__li">
                    Составление плана по продвижению, определение сроков и возможных результатов.
                  </li>
                  <li class="price-slide__li">
                    Семантическое ядро: сбор, cогласование с заказчиком, кластеризация, распределение по сайту.
                  </li>
                  <li class="price-slide__li">
                    Составление плана по продвижению, определение сроков и возможных результатов.
                  </li>
                </ul>
              </div>
            </div>

            <div class="price-slide__footer">
              <ul class="price-slide__estimate">
                <li class="price-slide__estimate-i price-slide__estimate-i--time">1 неделя</li>
                <li class="price-slide__estimate-i price-slide__estimate-i--money">от 29 000 рублей</li>
              </ul>
              <a href="#" class="button button-primary button-block">Оставить заявку</a>
            </div>
          </div>

          <div class="price-slide">
            <div class="price-slide__head">
              <h3 class="price-slide__title">Like a boss</h3>
              <p class="price-slide__subtitle">(Полная оптимизация для последующего продвижения)</p>
            </div>

            <div class="price-slide__body">
              <div class="price-slide__scroll" data-simplebar>
                <ul class="price-slide__ul">
                  <li class="price-slide__li">
                    Семантическое ядро: сбор, cогласование с заказчиком, кластеризация, распределение по сайту.
                  </li>
                  <li class="price-slide__li">
                    Составление плана по продвижению, определение сроков и возможных результатов.
                  </li>
                  <li class="price-slide__li">
                    Семантическое ядро: сбор, cогласование с заказчиком, кластеризация, распределение по сайту.
                  </li>
                  <li class="price-slide__li">
                    Составление плана по продвижению, определение сроков и возможных результатов.
                  </li>
                </ul>
              </div>
            </div>

            <div class="price-slide__footer">
              <ul class="price-slide__estimate">
                <li class="price-slide__estimate-i price-slide__estimate-i--time">1 неделя</li>
                <li class="price-slide__estimate-i price-slide__estimate-i--money">от 29 000 рублей</li>
              </ul>
              <a href="#" class="button button-primary button-block">Оставить заявку</a>
            </div>
          </div>
        </div>
      </div>

    </div><!-- .container end -->
  </main>

  <footer class="page-footer">
    <div class="container">
      <ul class="footer-social">
        <li class="footer-social__item footer-social__item--phone">
          <a href="tel:+79651500303">
            +7&nbsp;(965)&nbsp;150-03-03
          </a>
        </li>

        <li class="footer-social__item footer-social__item--email">
          <a href="mailto:office@crazy.studio">
            office@crazy.studio
          </a>
        </li>

        <li class="footer-social__item footer-social__item--whatsapp">
          <a title="WhatsApp" href="whatsapp://send?phone=+79651500303">
            +79651500303
          </a>
        </li>

        <li class="footer-social__item footer-social__item--vk">
          <a title="Vkontakte" href="https://vk.com/artemcrazystudio" target="_blank">
            https://vk.com/artemcrazystudio
          </a>
        </li>

        <li class="footer-social__item footer-social__item--telegram">
          <a title="Telegram" href="https://t.me/artemcrazy">
            @artemcrazy
          </a>
        </li>

        <li class="footer-social__item footer-social__item--skype">
          <a title="Skype" href="skype:artem@crazy.studio?chat">
            artem@crazy.studio
          </a>
        </li>
      </ul>
    </div>
  </footer>


  <!-- Scripts -->
  <!-- <script src="js/vendor/jquery-3.2.1.min.js"></script>
  <script src="libs/simplebar/simplebar.js"></script>
  <script src="libs/owl-carousel/owl.carousel.min.js"></script>
  <script src="js/main.js"></script> -->
  <?php wp_footer(); ?>
</body>

</html>