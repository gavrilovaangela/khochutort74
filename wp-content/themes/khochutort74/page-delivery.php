<?php
/*
Template Name: Доставка и оплата
*/
?>
<?php $page_id = get_the_ID(); ?>
<?php get_header(); ?>

<!-- section-delivery -->
<section class="section section-delivery">
  <div class="section" id="section-conditions">
    <div class="container-section">
      <header class="section__header">
        <h2 class="page-title page-title--accent"><?php the_title(); ?></h2>
        <div class="header_title">Заказав тортик у нас, Вы всегда можете быть уверены, что он будет готов точно в срок.</div>
      </header>
      <div class="conditions">

  
        <div class="condition_delivery">
          <div class="condition__inner">
            <img class="condition__icon condition__icon--payment" style="background-size: auto 80%;" src="<?php echo get_template_directory_uri(); ?>/assets/img/i-payment.svg" data-src="<?php echo get_template_directory_uri(); ?>/assets/img/i-payment.svg" alt="">
            <div class="condition__title">Оплата<small>после&nbsp;получения</small></div>
            <div class="condition__note">Вы можете заказать любой торт на сайте и оплатить его курьеру при получении наличными или банковской картой.</div>
          </div>
        </div>
  
        <div class="condition_delivery">
          <div class="condition__inner">
            <img class="condition__icon condition__icon--delivery" src="<?php echo get_template_directory_uri(); ?>/assets/img/i-delivery.svg" data-src="<?php echo get_template_directory_uri(); ?>/assets/img/i-delivery.svg" alt="">
            <div class="condition__title">Доставка <small>до вашего адреса</small></div>
            <div class="condition__note">Курьер свяжется с Вами за 30 минут до прибытия и доставит Ваш торт в целости и сохранности, какого бы размера он ни был.</div>
          </div>
        </div>
  
      </div>
  
    </div>
  </div>
</section>
<!-- /.section-delivery -->


<?php get_footer(); ?>