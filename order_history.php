<?include "header.php";?>
<div class="container container_40">
  <div class="breadcrumbs">
    <ul class="breadcrumbs_list">
      <li><a href="">Главная</a>&#8212;</li>
      <li><span>История заказов</span></li>
    </ul>
  </div>

  <h1 class="main_h1">История заказов</h1>
  <div class="tab_history">
    <a class="tab_history_btn activ" href="#">Выполненные заказы</a>
    <a class="tab_history_btn" href="#">Текущие заказы</a>
    <a class="tab_history_btn" href="#">Отмененные заказы</a>
  </div>

  <div class="history_body">
    <? for ($i=0; $i < 4 ; $i++) { ?>

      <div id="op_<?=$i?>" class="history_body_item">
        <div class="history_body_title">
          <div class="history_body_title_text">
            <b>Заказ №2</b> от 23.12.2016 10:01:13, <b>3 товара на сумму 5 747.10 руб</b>
          </div>
          <div class="history_body_title_text">
            Заказ выполнен  27.12.2016
          </div>
          <div class="history_body_title_text">
            <a class="history_body_title_text_detail" data_open="op_<?=$i?>" href="#">Подробнее о заказе</a>
            <!-- <a class="history_body_title_text_detail_back">информация о заказе</a> -->
          </div>
          <div class="history_body_title_text">
            <a class="history_body_title_text_repeat" href="#">Повторить заказ</a>
          </div>
        </div>

        <div class="history_body_content">

          <div class="history_body_content_img">
            <img src="../image/basket_price.png" alt="">
          </div>

          <div class="history_body_content_info">
            <p class="basket_list_item_info_name">Комплект 22345 </p>
            <p>Артикул 09876</p>
            <p>Цвет: фиолетовый </p>
            <p>Размер: L</p>
          </div>

          <div class="history_body_content_price">
            <p>Цена: 23 100 руб.</p>
            <p>Количество: 1 шт.</p>
          </div>

        </div>
      </div>

    <?} ?>
  </div>
</div>
<?include "footer.php";?>
