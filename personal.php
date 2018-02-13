<?include "header.php";?>
<div class="container container_40">
  <div class="breadcrumbs">
    <ul class="breadcrumbs_list">
      <li><a href="">Главная</a>&#8212;</li>
      <li><span>Личный кабинет</span></li>
    </ul>
  </div>

  <h1 class="main_h1">Личный кабинет</h1>
  <div class="personal">
    <?
    $name=array('История заказов', 'Личные данные', 'Профили заказов', 'Корзина', 'Выход <br /> из личного кабинета');
    $ico=array('personal_history.png','personal_personal.png','personal_profil.png','personal_basket.png','personal_exit.png');
    foreach ($name as $key => $value) {?>
      <a class="personal_link" href="#">
        <img class="personal_link_ico" src="img/<?=$ico[$key]?>" alt="">
        <p class="personal_link_text"><?=$value?></p>
      </a>
    <?} ?>
  </div>
</div>
<?include "footer.php";?>
