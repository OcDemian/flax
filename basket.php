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
    <div class="basket_body">
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
        for ($i=0; $i < 5 ; $i++) { ?>
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
            <div class="basket_list_item_disc">5%</div>
            <div class="basket_list_item_price">
              <p class="basket_list_item_price_now">22 210 руб.</p>
              <p class="basket_list_item_price_old">44 300 руб.</p>
            </div>
            <div class="basket_list_item_col">
              <input class="input-custom" value="1" min="1" max="5" type="number">
            </div>
            <div class="basket_list_item_prices">
              <p class="basket_list_item_prices_now">66 200 руб.</p>
              <p class="basket_list_item_prices_old">88 200 руб.</p>
            </div>
            <div class="basket_list_item_del">
              <a href="#">
                <img src="../img/basket_del_mini.png" alt="">
              </a>
            </div>
          </div>
        <?}
        ?>
      </div>
    </div>
    <div class="basket_rezult">
      <div class="basket_rezult_cupon">
        <input class="basket_rezult_cupon_text" type="text" name="" value="" placeholder="Купон на скидку">
        <button class="basket_rezult_cupon_btn" type="button" name="button">Применить</button>
      </div>

      <div class="basket_rezult_all">
        <p class="basket_rezult_all_price">Товаров на 115 985 руб.</p>
        <p class="basket_rezult_all_sale">Скидка 5 985 руб.</p>
        <p class="basket_rezult_all_rezult">Итого 110 000 руб.</p>
        <input class="basket_rezult_all_btn" type="submit" name="" value="Оформить заказ">
      </div>
    </div>
  </div>

</div>
<?include "footer.php";?>
