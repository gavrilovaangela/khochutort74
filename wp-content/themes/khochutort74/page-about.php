<?php
/*
Template Name: О нас
*/
?>
<?php $page_id = get_the_ID(); ?>
<?php get_header(); ?>

<section class="section single-page">
  <h1 class="page-title"><?php the_title(); ?></h1>
  <div class="container single-page__container">
    <picture>
      <source type="image/webp" srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" data-srcset="<?php echo get_template_directory_uri(); ?>/assets/img/about/da6f0fd7cac5df40881f.webp">
      <img class="section-about__img lazy" style="width: 450px; height: 450px;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" data-src="<?php echo get_template_directory_uri(); ?>/assets/img/about/da6f0fd7cac5df40881f.webp" alt="">
    </picture>
    <div class="container section-page__container">
    <div class="section-page__content">
      <div class="section-page__text">
        <p> 
          <b>Добро пожаловать в нашу кондитерскую "Хочу торт"! </b>
        </p>
        <p>Десерты и торты на заказ украсят ваше событие, а также станут приятным угощением “без повода”.  В детстве мы наслаждались вкусными сладостями. Повзрослев, не можем представить главные моменты в жизни без сладкого десерта.</p>
        <p>Кондитерская "Хочу торт" сделает для вас десерты вкусными как в детстве. В своем искусстве мы сочетаем современные кондитерские техники с изящным дизайном сладостей. Уделяем большое внимание качеству продукции и подбираем вкусовые сочетания, чтобы вы наслаждались нашими творениями с первого взгляда и до последней крошки.</p>
        <p>Мастера кондитерской "Хочу торт" постоянно в поиске вдохновения. Проходим обучение и повышаем квалификацию, чтобы создавать для вас шедевры кулинарии в соответствии со всеми требованиями.</p>
      </div>
    </div>
    </div>
  </div>
</section>




<?php get_footer(); ?>