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
    <a target="_blank" href="/personal.php">Личный кабинет</a>
  </li>
  <li>
    <a target="_blank" href="/order_history.php">История заказов</a>
  </li>
  <li>
    <a target="_blank" href="/order_profile.php">Профили заказов</a>
  </li>
</ul>
<?include "footer.php";?>
