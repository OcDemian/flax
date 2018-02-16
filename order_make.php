<?include "header.php";?>
<div class="container container_40 container_100haight">
  <div class="breadcrumbs">
    <ul class="breadcrumbs_list">
      <li><a href="">Главная</a>&#8212;</li>
      <li><span>Оформление заказа</span></li>
    </ul>
  </div>

  <h1 class="main_h1">Оформление заказа</h1>

  <div class="order_make">
    <div class="order_make_info">
      <div class="order_make_info_tovar">
        <div class="order_make_info_tovar_title">
          <p class="order_make_info_tovar_title_text">Товары в заказе</p>
          <a class="order_make_info_tovar_title_link" href="#">Изменить</a>
        </div>
        <div class="order_make_info_tovar_list">
          <?
          $photo=array('basket_price.png','cat_img_5.png');
          for ($i=0; $i <2 ; $i++) {
            ?>
            <div class="order_make_info_tovar_list_item">
              <div class="order_make_info_tovar_list_item_photo">
                <img src="../image/<?=$photo[$i]?>" alt="">
              </div>
              <div class="order_make_info_tovar_list_item_info">
                <p class="basket_list_item_info_name">Комплект 22345 </p>
                <p>Артикул 09876</p>
                <p>Россия</p>
                <p class="order_make_info_tovar_list_item_info_price">Цена: 10 210 руб. Количество: 1 шт.</p>
              </div>
            </div>
          <?}?>
        </div>

        <div class="order_make_info_tovar_cupon">
          <form class="order_make_info_tovar_cupon_box" method="post">
            <input class="order_make_info_tovar_cupon_text" type="text" name="" placeholder="Купон на скидку">
            <input class="order_make_info_tovar_cupon_btn" type="submit" name="" value="Применить">
          </form>
        </div>

        <div class="order_make_info_tovar_btn">
          <a class="order_make_info_tovar_btn_next" href="#">Далее</a>
        </div>

      </div>

      <div class="order_make_info_buyer">
        <div class="order_make_info_buyer_title">
          Покупатель
        </div>
        <div class="order_make_info_buyer_body">
          <div class="registration_main_item">
            <label for="">ФИО*</label>
            <input type="text" name="" value="Иванов Иван Иванович">
          </div>
          <div class="registration_main_item">
            <label for="">E-mail</label>
            <input type="text" name="" value="ivan@mail.ru">
          </div>
          <div class="registration_main_item">
            <label for="">Телефон*</label>
            <input type="text" name="" value="+7 (499) 444-00-99">
          </div>
          <div class="registration_main_item">
            <label for="">Адрес доставки*</label>
            <textarea name="name" rows="8" cols="80">ул. Северная, 11-3 4</textarea>
          </div>
          <div class="registration_main_item">
            <label for="">Способ оплаты*</label>
            <input type="text" name="" value="">
          </div>
          <div class="registration_main_item">
            <label for="">Способ доставки*</label>
            <input type="text" name="" value="">
          </div>
          <div class="registration_main_item">
            <label for="">Комментарий к заказу</label>
            <textarea name="name" rows="8" cols="80"></textarea>
          </div>
        </div>
        <div class="order_make_info_buyer_btn_body">
          <a class="order_make_info_buyer_btn" href="#">Назад</a>
        </div>
      </div>
    </div>

    <div class="order_make_prices">
      <p class="order_make_prices_current">
        Товаров на 115 000 руб.
      </p>
      <p class="order_make_prices_current">
        Доставка 500 руб.
      </p>
      <p class="order_make_prices_result">
        ИТОГО 115 000 руб.
      </p>
    </div>
  </div>

  <div class="castom_checkbox order_make_info_check">
    <input class="castom_checkbox_input" id="agreement" type="checkbox" name="" value="">
    <label class="castom_checkbox_label" for="agreement"></label>
    <p class="order_make_info_check_text">
      Нажимая кнопку «Отправить», я даю свое согласие на обработку моих персональных данных, в соответствии с Федеральным законом от 27.07.2006 года №152-ФЗ «О персональных данных», на условиях и для целей, определенных в <a href="">Согласии на обработку персональных данных</a>
    </p>
  </div>

  <div class="order_make_info_btn_box">
    <button class="order_make_info_btn" type="button" name="button">оформить заказ</button>
  </div>

</div>
<?include "footer.php";?>
