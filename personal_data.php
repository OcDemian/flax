<?include "header.php";?>
<div class="container container_40">
  <div class="breadcrumbs">
    <ul class="breadcrumbs_list">
      <li><a href="">Главная</a>&#8212;</li>
      <li><a href="">Мой кабинет</a>&#8212;</li>
      <li><span>Личные данные</span></li>
    </ul>
  </div>

  <h1 class="main_h1">Личные данные</h1>

  <div class="personal_data_time">
    <p class="personal_data_time_update">Дата обновления: 23.12.2016 09:59:38</p>
    <p class="personal_data_time_login">Последняя авторизация: 18.05.2017 10:30:28</p>
  </div>

  <div class="personal_data">
    <div class="registration_main personal_data_main">
      <form action="" method="">

        <div class="registration_main_item">
          <label for="">Фамилия</label>
          <input type="text" name="" value="" placeholder="Иванов">
        </div>

        <div class="registration_main_item">
          <label for="">Имя</label>
          <input type="text" name="" value="" placeholder="Михаил">
        </div>

        <div class="registration_main_item">
          <label for="">Отчество</label>
          <input type="text" name="" value="" placeholder="Валентинович">
        </div>

        <div class="registration_main_item personal_data_main_email">
          <label for="">E-mail</label>
          <input type="text" name="" value="" placeholder="maxa@yandex.ru">
        </div>

        <div class="registration_main_item">
          <label for="">Новый пароль</label>
          <input class="personal_data_main_password" type="text" name="" value="" placeholder="">
          <p class="registration_main_item_tip">минимум 6 символов</p>
        </div>

        <div class="registration_main_item">
          <label for="">Подтверждение <br /> нового пароля</label>
          <input type="text" name="" value="" placeholder="">
        </div>

        <div class="registration_main_item_btn">
          <input class="personal_data_main_save" type="submit" name="" value="Сохранить изменения">
          <a class="personal_data_main_back" href="#">Отмена</a>
        </div>

      </form>
    </div>

    <div class="registration_seti">
      <p class="registration_seti_title">Войти через ваш аккаунт в сецсетях</p>
      <div class="registration_seti_list">
        <a class="registration_seti_list_item" href="#">
          <img src="../img/fb.png" alt="">
        </a>

        <a class="registration_seti_list_item" href="#">
          <img src="../img/tw.png" alt="">
        </a>

        <a class="registration_seti_list_item" href="#">
          <img src="../img/vk.png" alt="">
        </a>
      </div>
    </div>

  </div>
</div>
<?include "footer.php";?>
