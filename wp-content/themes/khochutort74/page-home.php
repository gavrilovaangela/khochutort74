<?php
/*
Template Name: Главная
*/
?>
<?php $page_id = get_the_ID(); ?>
<?php get_header(); ?>

<!-- section-top -->
<?php
  $top_img_id = carbon_get_post_meta( $page_id, 'top_img' );
  $top_img_src = wp_get_attachment_image_url($top_img_id, 'full');
?>
<section class="section-top lazy" data-src="<?php echo $top_img_src ?>" data-src-replace-webp="<?php echo $top_img_src ?>">
  <div class="container section-top__container">
    <p class="section-top__info"><?php echo carbon_get_post_meta( $page_id, 'top_title' ); ?></p>
    <h1 class="section-top__title"><?php echo carbon_get_post_meta( $page_id, 'top_info' ); ?></h1>
    <div class="section-top__btn">
      <button class="btn" type="button" data-scroll-to="<?php echo carbon_get_post_meta( $page_id, 'top_btn_scroll_to' ); ?>"><?php echo carbon_get_post_meta( $page_id, 'top_btn_text' ); ?></button>
    </div>
  </div>
</section>
<!-- /.section-top -->

<!-- section-catalog -->
<section class="section section-catalog" id="section-catalog">
  <div class="container">
    <header class="section__header">
      <h2 class="page-title page-title--accent"><?php echo carbon_get_post_meta( $page_id, 'catalog_title' ); ?></h2>
      <nav class="catalog-nav">
        <?php
           $catalog_nav = carbon_get_post_meta($page_id, 'catalog_nav');
           $catalog_nav_ids = wp_list_pluck($catalog_nav, 'id');

           $catalog_nav_items = get_terms([
            'include' => $catalog_nav_ids,
           ]);
        ?>
        <ul class="catalog-nav__wrapper">
          <li class="catalog-nav__item">
            <button class="catalog-nav__btn is-active" type="button" data-filter="all">все</button>
          </li>

          <?php foreach ($catalog_nav_items as $item) : ?>
            <li class="catalog-nav__item">
              <button class="catalog-nav__btn" type="button" data-filter="<?php echo $item->slug; ?>"><?php echo $item->name; ?></button>
            </li>
          <?php endforeach; ?>

        </ul>
      </nav >
    </header>
    <?php
      $catalog_products = carbon_get_post_meta( $page_id, 'catalog_products' );
      $catalog_products_ids = wp_list_pluck($catalog_products, 'id');

      $catalog_products_args = [
        'post_type' => 'product',
        'post__in' => $catalog_products_ids
      ];
      $catalog_products_query = new WP_Query( $catalog_products_args );
    ?>


    <div class="catalog">
      <?php if ($catalog_products_query->have_posts()) : ?>

        <?php while ($catalog_products_query->have_posts()) : $catalog_products_query->the_post(); ?>
          <?php echo get_template_part('product-content'); ?>
        <?php endwhile; ?>

      <?php endif; ?>
    </div><!-- /.catalog -->
    <div class="section-catalog__footer">
      <a class="link" href="<?php echo get_site_url() . '/products'; ?>">Перейти в каталог</a>
    </div>
  </div>
</section>
<!-- /.section-catalog -->


<!-- section-fillings -->
<section class="section section-fillings">
  <h2 class="page-title page-title--accent"><?php echo carbon_get_post_meta( $page_id, 'fillings_title' ); ?></h2>
  <div class="container">
	<div class="material-container">
      <div class="container-antin">
        <div class="container">
          <div class="fltgbs">
            <div class="fltgbs__inner">
              <div class="fltgb">
                <div class="fltgb__image"><img class="b-lazy b-loaded" src="<?php echo get_template_directory_uri(); ?>/assets/img/section-about/1.jpg" data-src="<?php echo get_template_directory_uri(); ?>/assets/img/section-about/1.jpg" alt=""></div>
                <div class="fltgb__content">
                  <div class="fltgb__title h2">Пралине</div>
                  <div class="fltgb__summary">Фирменный шоколадный бисквит с добавлением черного шоколада, прослоен шоколадно-молочным муссом в сочетании с прослойкой орехового пралине и вафельной крошки.</div>
                </div>
              </div>
              <div class="fltgb">
                <div class="fltgb__image"><img class="b-lazy b-loaded" src="<?php echo get_template_directory_uri(); ?>/assets/img/section-about/2.jpg" data-src="<?php echo get_template_directory_uri(); ?>/assets/img/section-about/2.jpg" alt=""></div>
                <div class="fltgb__content">
                  <div class="fltgb__title h2">Черничный мусс</div>
                  <div class="fltgb__summary">У этой начинки нежный и деликатный вкус. Черничный мусс с натуральными ягодами, и ванильный бисквит пропитанный сиропом с добавлением коньяка (по желанию клиента алкоголь исключается), вкус сладкий, но совсем не приторный.</div>
                </div>
              </div>
              <div class="fltgb">
                <div class="fltgb__image"><img class="b-lazy b-loaded" src="<?php echo get_template_directory_uri(); ?>/assets/img/section-about/3.jpg" data-src="<?php echo get_template_directory_uri(); ?>/assets/img/section-about/3.jpg" alt=""></div>
                <div class="fltgb__content">
                  <div class="fltgb__title h2">Мокко (кофейная)</div>
                  <div class="fltgb__summary">Шоколадный бисквит из горького шоколада, пропитан сиропом с добавлением ликера Gointreau. Прослойка из нежного французского крема Ganache и кофейного мусса. Мусс состоит из сыра Креметта, белого шоколада, натуральных сливок и кофе. Такая начинка будет по вкусу любителям кофе.</div>
                </div>
              </div>
              <div class="fltgb">
                <div class="fltgb__image"><img class="b-lazy b-loaded" src="<?php echo get_template_directory_uri(); ?>/assets/img/section-about/4.jpg" data-src="<?php echo get_template_directory_uri(); ?>/assets/img/section-about/4.jpg" alt=""></div>
                <div class="fltgb__content">
                  <div class="fltgb__title h2">Йогуртовая</div>
                  <div class="fltgb__summary">Традиционный бисквит, пропитан сахарным сиропом с добавлением коньяка (по желанию исключается), прослоен йогуртово-сметанным муссом и начинкой из лесных ягод.</div>
                </div>
              </div>
              <div class="fltgb">
                <div class="fltgb__image"><img class="b-lazy b-loaded" src="<?php echo get_template_directory_uri(); ?>/assets/img/section-about/5.jpg" data-src="<?php echo get_template_directory_uri(); ?>/assets/img/section-about/5.jpg" alt=""></div>
                <div class="fltgb__content">
                  <div class="fltgb__title h2">Сметанная</div>
                  <div class="fltgb__summary">Традиционный белый бисквит пропитан сиропом с добавлением коньяка (по желанию исключается), прослоен сметанным муссом с добавлением персиков, ананасов и ягод.</div>
                </div>
              </div>
              <div class="fltgb">
                <div class="fltgb__image"><img class="b-lazy b-loaded" src="<?php echo get_template_directory_uri(); ?>/assets/img/section-about/6.jpg" data-src="<?php echo get_template_directory_uri(); ?>/assets/img/section-about/6.jpg" alt=""></div>
                <div class="fltgb__content">
                  <div class="fltgb__title h2">Тирамису</div>
                  <div class="fltgb__summary">Традиционный бисквит, пропитан кофейным сиропом с добавлением коньяка (по желанию исключается), прослоен сливочно-сырным муссом.</div>
                </div>
              </div>
              <div class="fltgb">
                <div class="fltgb__image"><img class="b-lazy b-loaded" src="<?php echo get_template_directory_uri(); ?>/assets/img/section-about/7.jpg" data-src="<?php echo get_template_directory_uri(); ?>/assets/img/section-about/7.jpg" alt=""></div>
                <div class="fltgb__content">
                  <div class="fltgb__title h2">Тирамису клубничная</div>
                  <div class="fltgb__summary">Традиционный бисквит, пропитан сахарным сиропом с добавлением коньяка (по желанию исключается), прослоен сливочно-сырным муссом и клубничной начинкой, приготовленной из свежих ягод.</div>
                </div>
              </div>
              <div class="fltgb">
                <div class="fltgb__image"><img class="b-lazy b-loaded" src="<?php echo get_template_directory_uri(); ?>/assets/img/section-about/8.jpg" data-src="<?php echo get_template_directory_uri(); ?>/assets/img/section-about/8.jpg" alt=""></div>
                <div class="fltgb__content">
                  <div class="fltgb__title h2">Творожная</div>
                  <div class="fltgb__summary">Сочетание двух видов бисквитов: шоколадно-сливочного и традиционного белого, пропитанных сиропом с добавлением коньяка (по желанию исключается), прослоены творожно-сливочным муссом с добавлением фруктовой начинки (по выбору).</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>	
    </div>
  </div>
  <div class="section-catalog__footer">
      <a class="link" href="<?php echo get_site_url() . '/начинки'; ?>">Еще начинки</a>
    </div>
</section>
<!-- /.section-fillings -->


<!-- section-delivery -->
<section class="section section-delivery">
  <div class="section" id="section-conditions">
    <div class="container-section">
      <header class="section__header">
        <h2 class="page-title page-title--accent">Условия заказа</h2>
      </header>
      <div class="conditions">
        <div class="condition">
          <div class="condition__inner">
            <img class="condition__icon condition__icon--time" src="<?php echo get_template_directory_uri(); ?>/assets/img/i-timing.png" data-src="<?php echo get_template_directory_uri(); ?>/assets/img/i-timing.png" alt="">
            <div class="condition__title">12&nbsp;часов <small>cрок изготовления торта</small></div>
            <div class="condition__note">Выполняем срочные заказы менее чем за 12 часов.</div>
          </div>
        </div>
  
        <div class="condition">
          <div class="condition__inner">
            <img class="condition__icon condition__icon--payment" style="background-size: auto 80%;" src="<?php echo get_template_directory_uri(); ?>/assets/img/i-payment.svg" data-src="<?php echo get_template_directory_uri(); ?>/assets/img/i-payment.svg" alt="">
            <div class="condition__title">Без предоплаты <small>до&nbsp;получения</small></div>
            <div class="condition__note">Вы можете заказать любой торт на сайте и оплатить его при получении</div>
          </div>
        </div>
  
        <div class="condition">
          <div class="condition__inner">
            <img class="condition__icon condition__icon--delivery" src="<?php echo get_template_directory_uri(); ?>/assets/img/i-delivery.svg" data-src="<?php echo get_template_directory_uri(); ?>/assets/img/i-delivery.svg" alt="">
            <div class="condition__title">Доставка <small>до вашего адреса</small></div>
            <div class="condition__note">Заказав тортик у нас, вы всегда можете быть уверены, что он будет готов точно в срок</div>
          </div>
        </div>
  
      </div>
  
    </div>
  </div>
</section>
<!-- /.section-delivery -->

<!-- section-about -->
<section class="section section-about">
  <div class="t500">
    <div class="t-container">
      <div class="t-col">
        <div class="t-section__topwrapper">
          <div class="t-section__title" field="btitle">
            <div style="font-size: 48px;
            text-align: center;
            font-family: 'Montserrat', sans-serif;
            margin-bottom: 40px;
            font-weight: 900; color: #6cc7ce;" data-customstyle="yes">Почему заказывают у нас?</div>
          </div>
        </div>
      </div>
    </div>
    <div class="t-container1">
      <div class="t-cell-left">
        <div class="t500__item" data-animate-style="fadein" data-animate-chain="yes" data-animate-start-time="1648464613448" style="transition-delay: 0s;">
          <div class="t500__iconwrapper_mobile">
            <div class="t500__bgimg" bgimgfield="img" data-original="<?php echo get_template_directory_uri(); ?>/assets/img/about/3st_recycling.svg" style="width:80px; height:80px; background-image: url('https://static.tildacdn.com/lib/tildaicon/30396164-6237-4437-b038-353631313235/3st_recycling.svg');"></div>
          </div>
          <div class="t500__textwrapper">
            <div class="t-name" field="title" style="padding-bottom: 10px;font-weight:900;font-size: 22px;">Без трансжиров</div>
            <div class="t500__descr" field="descr" style="">Мы не используем маргарин и растительные жиры.</div>
          </div>
        </div>
        <div class="t-clear"></div>
        <div class="t500__item" data-animate-style="fadein" data-animate-chain="yes" data-animate-start-time="1648464613608" style="transition-delay: 0.16s;">
          <div class="t500__iconwrapper_mobile">
            <div class="t500__bgimg" bgimgfield="img2" data-original="<?php echo get_template_directory_uri(); ?>/assets/img/about/Tilda_Icons_28_law_balance.svg" style="width:80px; height:80px; background-image: url('https://static.tildacdn.com/lib/tildaicon/34646536-3365-4532-b064-663030313063/Tilda_Icons_28_law_balance.svg');"></div>
          </div>
          <div class="t500__textwrapper">
            <div class="t-name" field="title2" style="padding-bottom: 10px;font-weight:900;font-size: 22px;">Перевес за наш счёт</div>
            <div class="t500__descr" field="descr2" style="">Наши торты всегда больше, и это за наш счёт.</div>
          </div>
        </div>
        <div class="t-clear"></div>
        <div class="t500__item" data-animate-style="fadein" data-animate-chain="yes" data-animate-start-time="1648464613768" style="transition-delay: 0.32s;">
          <div class="t500__iconwrapper_mobile">
            <div class="t500__bgimg" bgimgfield="img3" data-original="<?php echo get_template_directory_uri(); ?>/assets/img/about/3st_percent.svg" style="width:80px; height:80px; background-image: url('https://static.tildacdn.com/lib/tildaicon/65653337-6233-4030-b731-623533316263/3st_percent.svg');"></div>
          </div>
          <div class="t500__textwrapper">
            <div class="t-name" field="title3" style="padding-bottom: 10px;font-weight:900;font-size: 22px;">100% гарантия</div>
            <div class="t500__descr" field="descr3" style="">Если торт не понравился - вернём деньги!</div>
          </div>
        </div>
        <div class="t-clear"></div>
      </div>
      <div class="t-cellt500">
        <img class="t500__img" data-animate-style="fadeinup" data-animate-group="yes" src="<?php echo get_template_directory_uri(); ?>/assets/img/about/da6f0fd7cac5df40881f.webp" data-original="<?php echo get_template_directory_uri(); ?>/assets/img/about/da6f0fd7cac5df40881f.webp" imgfield="img7">
      </div>
      <div class="t-cell-right">
        <div class="t500__item" data-animate-style="fadein" data-animate-chain="yes" data-animate-start-time="1648464761720" style="transition-delay: 0.16s;">
          <div class="t-cell t-valign_top">
            <div class="t500__bgimg t-bgimg loaded" bgimgfield="img4" data-original="<?php echo get_template_directory_uri(); ?>/assets/img/about/Tilda_Icons_47dlvr_speed.svg" style="width:80px; height:80px; background-image: url('https://static.tildacdn.com/lib/tildaicon/31643538-3131-4563-b735-636634373338/Tilda_Icons_47dlvr_speed.svg');"></div>
          </div>
          <div class="t500__textwrapper">
            <div class="t-name" field="title4" style="padding-bottom: 10px;font-weight:900;font-size: 22px;">Торт приедет вовремя</div>
            <div class="t500__descr" field="descr4" style="">Доставка осуществляется штатным сотрудником.</div>
          </div>
        </div>
        <div class="t-clear"></div>
        <div class="t500__item" data-animate-style="fadein" data-animate-chain="yes" data-animate-start-time="1648464904806" style="transition-delay: 0.16s;">
          <div class="t-cell">
            <div class="t500__bgimg" bgimgfield="img5" data-original="<?php echo get_template_directory_uri(); ?>/assets/img/about/4wed_cake.svg" style="width:80px; height:80px; background-image: url('https://static.tildacdn.com/lib/tildaicon/36393463-3235-4932-b138-633339323864/4wed_cake.svg');"></div>
          </div>
          <div class="t500__textwrapper">
            <div class="t-name" field="title5" style="padding-bottom: 10px;font-weight:900;font-size: 22px;">Опыт</div>
            <div class="t500__descr" field="descr5" style="">Делаем торты уже более 3 лет.</div>
          </div>
        </div>
        <div class="t-clear"></div>
        <div class="t500__item" data-animate-style="fadein" data-animate-chain="yes" data-animate-start-time="1648464904966" style="transition-delay: 0.318s;">
          <div class="t-cell">
            <div class="t500__bgimg" bgimgfield="img6" data-original="<?php echo get_template_directory_uri(); ?>/assets/img/about/Tilda_Icons_47dlvr_24hr.svg" style="width:80px; height:80px; background-image: url('https://static.tildacdn.com/lib/tildaicon/64653365-6662-4139-b732-646566333733/Tilda_Icons_47dlvr_24hr.svg');"></div>
          </div>
          <div class="t500__textwrapper">
            <div class="t-name" field="title6" style="padding-bottom: 10px;font-weight:900;font-size: 22px;">Очень быстро</div>
            <div class="t500__descr" field="descr6">Выполняем срочные заказы менее чем за 24 часа.</div>
          </div>
        </div>
        <div class="t-clear"></div>
      </div>
    </div>
  </div>
</section>
<!-- /.section-about -->

<!-- section-contacts -->
<section class="section section-contacts">
  <div class="container section-contacts__container">
    <div class="section-contacts__img lazy" data-src="img/section-contacts/intro-cake.webp" data-src-replace-webp="img/section-contacts/intro-cake.jpg"></div>
    <header class="section__header">
      <h2 class="page-title sectoin-contacts__title"><?php echo carbon_get_post_meta( $page_id, 'contacts_title' ); ?></h2>
    </header>
    <div class="contacts">
      <div class="contacts__start">
        <div class="contacts__map">
        <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A02767d565635eb908d6214d9bc7a6457060c72196fe5eec81682afb0fe5e48d6&amp;width=580&amp;height=450&amp;lang=ru_RU&amp;scroll=true"></script>
        </div>
      </div>
      <div class="contacts__end">
        <div class="contacts__item">
          <h3 class="contacts__title">Адрес</h3>
          <p class="contacts__text"><?php echo $GLOBALS['khochutort']['address'] ?></p>
        </div>
        <div class="contacts__item">
          <h3 class="contacts__title">Телефон</h3>
          <p class="contacts__text">
            <a class="contacts__phone" href="tel:<?php echo $GLOBALS['khochutort']['phone_digits'] ?>"><?php echo $GLOBALS['khochutort']['phone'] ?></a>
          </p>
        </div>
        <div class="contacts__item">
          <h3 class="contacts__title">Социальные сети</h3>
          <ul class="socials">
            <li class="socials__item">
              <a href="<?php echo $GLOBALS['khochutort']['vk_url'] ?>" class="socials__link" target="_blank">
                <svg class="socials__icon socials__icon--vk" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 112.2 112.2" width="35" height="35">
                  <g>
                    <circle cx="56.1" cy="56.1" r="56.1" />
                    <path class="socials__logo" d="M54,80.7h4.4a3.33,3.33,0,0,0,2-.9,3.37,3.37,0,0,0,.6-1.9s-.1-5.9,2.7-6.8,6.2,5.7,9.9,8.2c2.8,1.9,4.9,1.5,4.9,1.5l9.8-.1s5.1-.3,2.7-4.4c-.2-.3-1.4-3-7.3-8.5-6.2-5.7-5.3-4.8,2.1-14.7,4.5-6,6.3-9.7,5.8-11.3s-3.9-1.1-3.9-1.1l-11.1.1a2.32,2.32,0,0,0-1.4.3,3.58,3.58,0,0,0-1,1.2A60,60,0,0,1,70,50.9c-4.9,8.4-6.9,8.8-7.7,8.3-1.9-1.2-1.4-4.9-1.4-7.5,0-8.1,1.2-11.5-2.4-12.4a17.68,17.68,0,0,0-5.2-.5c-4,0-7.3,0-9.2.9-1.3.6-2.2,2-1.6,2.1a5.05,5.05,0,0,1,3.3,1.6c1.1,1.5,1.1,5,1.1,5s.7,9.6-1.5,10.7c-1.5.8-3.5-.8-7.9-8.4a67.05,67.05,0,0,1-4-8.2,2.82,2.82,0,0,0-.9-1.2,5.13,5.13,0,0,0-1.7-.7l-10.5.1s-1.6,0-2.2.7,0,1.9,0,1.9,8.2,19.3,17.6,29c8.5,9,18.2,8.4,18.2,8.4Z" />
                  </g>
                </svg>
              </a>
            </li>
            <li class="socials__item">
              <a href="<?php echo $GLOBALS['khochutort']['fb_url'] ?>" class="socials__link" target="_blank">
                <svg class="socials__icon socials__icon--fb" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 112.2 112.2" width="35" height="35">
                  <g>
                    <circle cx="56.1" cy="56.1" r="56.1" />
                    <path class="socials__logo" d="M70.2,58.3h-10V95H45V58.3H37.8V45.4H45V37.1c0-6,2.8-15.3,15.3-15.3H71.5V34.3H63.3c-1.3,0-3.2.7-3.2,3.5v7.6H71.4Z" />
                  </g>
                </svg>
              </a>
            </li>
            <li class="socials__item">
              <a href="<?php echo $GLOBALS['khochutort']['inst_url'] ?>" class="socials__link" target="_blank">
                <svg class="socials__icon socials__icon--inst" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="35" height="35">
                  <g>
                    <path d="M332.3,136.2H179.7a44.21,44.21,0,0,0-44.2,44.2V333a44.21,44.21,0,0,0,44.2,44.2H332.3A44.21,44.21,0,0,0,376.5,333V180.4A44.21,44.21,0,0,0,332.3,136.2ZM256,336a79.3,79.3,0,1,1,79.3-79.3A79.42,79.42,0,0,1,256,336Zm81.9-142.2A18.8,18.8,0,1,1,356.7,175,18.78,18.78,0,0,1,337.9,193.8Z" />
                    <path d="M256,210.9a45.8,45.8,0,1,0,45.8,45.8A45.86,45.86,0,0,0,256,210.9Z" />
                    <path d="M256,0C114.6,0,0,114.6,0,256S114.6,512,256,512,512,397.4,512,256,397.4,0,256,0ZM410,333a77.78,77.78,0,0,1-77.7,77.7H179.7A77.78,77.78,0,0,1,102,333V180.4a77.84,77.84,0,0,1,77.7-77.7H332.3A77.84,77.84,0,0,1,410,180.4Z" />
                  </g>
                </svg>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- /.section-contacts -->

<?php get_footer(); ?>