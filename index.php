<?include "header.php";?>

<style media="screen">
  .dev_menu{
    padding-left: 30%;
    list-style: disc;
  }

  .dev_menu li{
    margin-bottom: 10px;
  }

  .dev_menu li a{
    font-weight: bold;
  }

  .dev_menu li a:hover{
    cursor: pointer;
    text-decoration: underline;
    color:rgb(0, 140, 255);
  }
</style>

<ul class="dev_menu">
  <li>
    <a href="/main.php">Главная</a>
  </li>
  <li>
    <a target="_blank" href="/basket.php">Корзина</a>
  </li>
  <li>
    <a target="_blank" href="/login.php">Авторизация</a>
  </li>
  <li>
    <a target="_blank" href="/registration.php">Регистрация</a>
  </li>
  <li>
    <a target="_blank" href="/news_detail.php">Новости</a>
  </li>
  <li>
    <a target="_blank" href="/news.php">Новости детальная</a>
  </li>
  <li>
    <a target="_blank" href="/personal.php">Мой кабинт</a>
  </li>
  <li>
    <a target="_blank" href="/personal_data.php">Личные данные</a>
  </li>
  <li>
    <a target="_blank" href="/order_history.php">История заказов</a>
  </li>
  <li>
    <a target="_blank" href="/order_profile.php">Профили заказов</a>
  </li>
  <li>
    <a target="_blank" href="/order_profile_edit.php">Профили заказов детальная</a>
  </li>
  <li>
    <a target="_blank" href="/order_make.php">Оформление заказа</a>
  </li>
  <li>
    <a target="_blank" href="/list_cat.php">Список категорий</a>
  </li>
  <li>
    <a target="_blank" href="/list_tovar.php">Список товаров</a>
  </li>
  <li>
    <a target="_blank" href="/detail_tovar.php">Детальная страница товара</a>
  </li>
  <li>
    <a target="_blank" href="/modal.php">Модалки</a>
  </li>
</ul>

<div class="castom_checkbox">
  <input class="castom_checkbox_input" id="agreement" type="checkbox" name="" value="">
  <label class="castom_checkbox_label" for="agreement"></label>
</div>

<div class="container color_check">
  <label style="background-color:red;" class="color_check_text">
    <input class="color_check_text_input" type="checkbox" name="test1" value="">
  </label>

  <label style="background-color:red;" class="color_check_text">
    <input class="color_check_text_input" type="checkbox" name="test1" value="">
  </label>

  <label style="background-color:red;" class="color_check_text">
    <input class="color_check_text_input" type="checkbox" name="test1" value="">
  </label>

  <label style="background-color:red;" class="color_check_text">
    <input class="color_check_text_input" type="checkbox" name="test1" value="">
  </label>
</div>

<div class="color_check catalog_carusel_item_cont_color">
  <form>
    <label style="background-color:green;" class="color_check_text">
      <input class="color_check_text_input" type="radio" name="test1" value="">
    </label>

    <label style="background-color:blue;" class="color_check_text">
      <input class="color_check_text_input" type="radio" name="test1" value="">
    </label>

    <label style="background-color:yellow;" class="color_check_text">
      <input class="color_check_text_input" type="radio" name="test1" value="">
    </label>

    <label style="background-color:silver;" class="color_check_text">
      <input class="color_check_text_input" type="radio" name="test1" value="">
    </label>

    <label style="background-color:#00BCD4;" class="color_check_text">
      <input class="color_check_text_input" type="radio" name="test1" value="">
    </label>
  </form>
</div>

<?include "footer.php";?>
