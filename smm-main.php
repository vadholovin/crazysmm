<?php
/*
Template Name: SMM - главная страница
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
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <?php wp_head(); ?>
</head>

<body>

  <header class="page-header page-header--smm">
    <div class="container">
      <nav class="services-nav smm-nav">
        <a href="/" class="brand brand--smm">
          <img src="img/logo@2x.png"
            srcset="img/logo.png,
            img/logo@2x.png 1.5x,
            img/logo@2x.png 2x" alt="">
        </a>

        <div class="services-menu smm-menu">
          <a href="#" class="services-menu__item current">
            <span class="menu-icon menu-icon--rocket"></span>
            SMM продвижение
          </a>
          <a href="#" class="services-menu__item">
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

        <a href="#" class="button button-primary button--menu">ОСТАВИТЬ ЗАЯВКУ</a>

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
        <a href="#" class="services-menu__item current">
          <span class="menu-icon menu-icon--rocket"></span>
          SMM продвижение
        </a>
        <a href="#" class="services-menu__item">
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
        <span>Социальные сети (SMM)</span>
      </div>
    </div>
  </div>

  <main class="page page--smm">

    <div class="container">
      <div class="pure-g page-heading page-heading--smm">
        <div class="pure-u-1 pure-u-lg-2-3 page-heading--text">
          <h1 class="page-title page-title--border smm-title smm-title--border">Социальные сети (smm)</h1>
          <div class="smm-desc">
            <p>Посты с вашими предложениями в социальных сетях должны запоминаться людям и приводить их к подписке на группу, заявкам, переходам на сайт.
              <br> Для этого ваши посты должны выделяться из огромного числа других сообществ,
              <br>цеплять и четко попадать в нужную аудиторию.</p>
            <p>Это возможно, когда настройкой, ведением и рекламой сообщества занимаются грамотные специалисты с опытом.  Хотите не просто SMM для галочки, а работающий инструмент
              <br>продвижения в соцсетях? Вам нужен Веб-Центр!</p>
          </div>
        </div>

        <div class="pure-u-1 pure-u-lg-1-3 page-heading--img">
          <div class="page-heading__img page-heading__img--smm">
            <img src="<?php bloginfo( 'template_url' ); ?>/assets/smm/img/smm-big.png" alt="">
          </div>
        </div>
      </div>

      <div class="smm-content">
        <h2 class="h2--smm">Как оценить результат SMM?</h2>
        <p>У каждого клиента в нашем агентстве есть аккаунт-менеджер, который каждый месяц готовит и презентует подробный отчет по ключевым показателям. Это делается для того, чтобы вы могли легко отследить изменения и видеть прогресс.</p>

        <ul class="smm-list">
          <b class="smm-list__title">В отчет мы включаем данные по следующим показателям:</b>
          
          <li>количество подписчиков;</li>
          <li>количество реакций на посты за месяц;</li>
          <li>количество переходов на сайт;</li>
          <li>количество обращений (лидов).</li>
        </ul>

        <p>Для роста этих показателей наши специалисты используют только легальные “белые” методы работы: таргетинговую рекламу, промопосты, интересный для аудитории контент, конкурсы. Если хотите, чтобы наши специалисты внимательно изучили ваш бизнес и подготовят индивидуальное коммерческое предложение, заполните формы и отправьте заявку на консультацию.</p>

        <h2 class="h2--smm" style="margin-bottom: 75px;">Как строится работа по вашему продвижению в социальных сетях?</h2>

        <div class="smm-order">
          <div class="smm-order__item">
            <div class="smm-order__heading">
              <span class="smm-order__num">1</span>
              <span class="smm-order__title">Изучаем ваш бизнес</span>
            </div>
            <ul class="smm-order__ul">
              <li>- особенности целевой аудитории</li>
              <li>- особенности предложения</li>
              <li>- стратегию конкурентов</li>
            </ul>
          </div>

          <div class="smm-order__item">
            <div class="smm-order__heading">
              <span class="smm-order__num">2</span>
              <span class="smm-order__title">Определяем цели</span>
            </div>
            <ul class="smm-order__ul">
              <li>- количество новых подписчиков</li>
              <li>- количество продаж</li>
              <li>- трафик на сайт и др.</li>
            </ul>
          </div>

          <div class="smm-order__item">
            <div class="smm-order__heading">
              <span class="smm-order__num">3</span>
              <span class="smm-order__title">Создаем стратегию</span>
            </div>
            <ul class="smm-order__ul">
              <li>- создаем/обновляем сообщество</li>
              <li>- создаем контент- и медиаплан</li>
              <li>- подбираем иллюстрации</li>
              <li>- разрабатываем фирменный стиль</li>
            </ul>
          </div>

          <div class="smm-order__item">
            <div class="smm-order__heading">
              <span class="smm-order__num">4</span>
              <span class="smm-order__title">Запускаем рекламную кампанию</span>
            </div>
            <ul class="smm-order__ul">
              <li>- настраиваем объявления</li>
              <li>- запускаем тестовую рекламную кампанию</li>
              <li>- анализируем результаты</li>
            </ul>
          </div>

          <div class="smm-order__item">
            <div class="smm-order__heading">
              <span class="smm-order__num">5</span>
              <span class="smm-order__title">Корректируем рекламную кампанию</span>
            </div>
            <ul class="smm-order__ul">
              <li>- корректируем оформление</li>
              <li>- меняем настройки по охвату целевой аудитории</li>
              <li>- уточняем параметры показов</li>
            </ul>
          </div>

          
          <div class="smm-order__item">
            <div class="smm-order__heading">
              <span class="smm-order__num">6</span>
              <span class="smm-order__title">Предоставляем подробные и полезные отчеты</span>
            </div>
            <ul class="smm-order__ul">
              <li>- по результативности рекламной кампании</li>
              <li>- по расходу бюджета</li>
              <li>- по проведенным работам</li>
            </ul>
          </div>
        </div>

        <div class="button-holder" style="margin-bottom: 0;">
          <a href="#" class="button button-primary button--smm">ОТПРАВИТЬ ЗАЯВКУ</a>
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


  <?php wp_footer(); ?>
</body>

</html>