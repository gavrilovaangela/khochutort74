<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

Container::make( 'post_meta', 'Дополнительные поля' )
  ->show_on_page(8)
  ->add_tab( 'Первый экран', [
    Field::make( 'text', 'top_title', 'Заголовок' ),
    Field::make( 'text', 'top_info', 'Подзаголовок' ),
    Field::make( 'text', 'top_btn_text', 'Текст кнопки' )
      ->set_width(50),
    Field::make( 'text', 'top_btn_scroll_to', 'Класс секции для перехода по кнопке' )
      ->set_width(50),
    Field::make( 'image', 'top_img', 'Изображение' ),
  ])
  ->add_tab( 'Каталог', [
    Field::make( 'text', 'catalog_title', 'Заголовок' ),
    Field::make( 'association', 'catalog_nav', 'Категории товаров' )
    ->set_types( [
        [
            'type'      => 'term',
            'taxonomy' => 'product-categories',
        ]
    ] ),
    Field::make( 'association', 'catalog_products', 'Товары' )
    ->set_types( [
        [
            'type'      => 'post',
            'post_type' => 'product',
        ]
     ] )
  ])
  ->add_tab( 'Начинки', [
    Field::make( 'text', 'fillings_title', 'Заголовок' ),
    Field::make( 'text', 'fillings_1', 'Название для 1 начинки' ),
    Field::make( 'rich_text', '1_text', 'Текст для 1 начинки' ),
  ])
  ->add_tab( 'Доставка и оплата', [
    Field::make( 'text', 'delivery_title', 'Заголовок' ),
  ])
  ->add_tab( 'О нас', [
    Field::make( 'text', 'about_title', 'Заголовок' ),
  ])
  ->add_tab( 'Контакты', [
    Field::make( 'text', 'contacts_title', 'Заголовок' ),
  ]);


  Container::make( 'post_meta', 'Дополнительные поля' )
  ->show_on_post_type('product')

  ->add_tab( 'Информация товара', [
      Field::make( 'text', 'product_price', 'Цена' ),
      Field::make( 'complex', 'product_attributes', 'Атрибуты' )
      ->set_max(3)
      ->add_fields([
        Field::make( 'text', 'name', 'Название' )->set_width(50),
        Field::make( 'text', 'price', 'Цена' )->set_width(50),
       ])
  ]);