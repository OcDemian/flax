<?include "header.php";?>
<div class="container container_40 container_100haight">
  <div class="breadcrumbs">
    <ul class="breadcrumbs_list">
      <li><a href="">Главная</a>&#8212;</li>
      <li><span>Профили заказов</span></li>
    </ul>
  </div>

  <h1 class="main_h1">Профили заказов</h1>

  <div class="order_prof">
    <div class="order_prof_title">
      <div class="order_prof_title_item order_prof_title_code">Код</div>
      <div class="order_prof_title_item order_prof_title_date">Дата обновления</div>
      <div class="order_prof_title_item order_prof_title_name">Название</div>
      <div class="order_prof_title_item order_prof_title_move">Действия</div>
      <div class="order_prof_title_item order_prof_title_del"></div>
    </div>

    <div class="order_prof_body">
      <?
      for ($i=0; $i < 3 ; $i++) { ?>
      <div class="order_prof_body_item">
        <div class="order_prof_title_item order_prof_title_code"><?=33+$i;?></div>
        <div class="order_prof_title_item order_prof_title_date">16.05.2017 18:12:51</div>
        <div class="order_prof_title_item order_prof_title_name">Домашний адрес</div>
        <div class="order_prof_title_item order_prof_title_move">
          <a class="order_prof_title_move_link" href="">Изменить</a>
        </div>
        <div class="order_prof_title_item order_prof_title_del">
          <a href="">
            <img src="../img/basket_del_mini.png" alt="">
          </a>
        </div>
      </div>
      <?}?>
    </div>
  </div>

</div>
<?include "footer.php";?>
