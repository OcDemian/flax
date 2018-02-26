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
    <a class="open_modal" data_modal="mobal_castom_by" href="#">Купить</a>
  </li>
  <li>
    <a class="open_modal" data_modal="mobal_castom_by_one" href="#">Купить в 1 клик</a>
  </li>
  <li>
    <a class="open_modal" data_modal="mobal_castom_basket" href="#">Добавлен в корзину</a>
  </li>
  <li>
    <a class="open_modal" data_modal="mobal_castom_city" href="#">Выбор города</a>
  </li>
  <li>
    <a class="open_modal" data_modal="mobal_castom_phone" href="#">Заказ звонка</a>
  </li>
</ul>
<?include "footer.php";?>
