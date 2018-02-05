<?include "header.php";?>
<div class="container container_40">
  <div class="breadcrumbs">
    <ul class="breadcrumbs_list">
      <li><a href="">Главная</a>&#8212;</li>
      <li><span>Корзина товаров</span></li>
    </ul>
  </div>

  <h1 class="main_h1">Корзина товаров</h1>
  <div class="basket">
    <div class="basket_title">
      <div class="basket_list_item_photo"></div>
      <div class="basket_list_item_info">Название</div>
      <div class="basket_list_item_disc">Скидка</div>
      <div class="basket_list_item_price">Цена</div>
      <div class="basket_list_item_col">Количество</div>
      <div class="basket_list_item_prices">Сумма</div>
      <div class="basket_list_item_del"></div>
    </div>
    <div class="basket_list">
      <?
      for ($i=0; $i < 4 ; $i++) { ?>
        <div class="basket_list_item">
          <div class="basket_list_item_photo">
            <img src="../image/basket_price.png" alt="">
          </div>
          <div class="basket_list_item_info">
            <p class="basket_list_item_info_name">Комплект 22345 </p>
            <p>Артикул 09876</p>
            <p>Цвет: фиолетовый </p>
            <p>Размер: L</p>
          </div>
          <div class="basket_list_item_disc"></div>
          <div class="basket_list_item_price"></div>
          <div class="basket_list_item_col"></div>
          <div class="basket_list_item_prices"></div>
          <div class="basket_list_item_del"></div>
        </div>
      <?}
      ?>
    </div>
  </div>
</div>
<?include "footer.php";?>
