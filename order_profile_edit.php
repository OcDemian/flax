<?include "header.php";?>
<div class="container container_40 container_100haight">
  <div class="breadcrumbs">
    <ul class="breadcrumbs_list">
      <li><a href="">Главная</a>&#8212;</li>
      <li><a href="">Профили заказов</a>&#8212;</li>
      <li><span>Редактирование профиля</span></li>
    </ul>
  </div>

  <h1 class="main_h1">Редактирование профиля</h1>

  <form action="" method="">
    <div class="order_prof_edit">
      <div class="registration_main registration_main_one">
        <div class="registration_main_item">
          <label for="">Название*</label>
          <input type="text" name="" value="Домашний адрес для доставки">
        </div>

        <div class="registration_main_item">
          <label for="">Индекс</label>
          <input type="text" name="" value="101000">
        </div>

        <div class="registration_main_item">
          <label class="registration_main_item_lab_aft" for="">Адрес доставки*</label>
          <textarea name="name" rows="8" cols="80">Самара, ул. Северная, 11-34</textarea>
        </div>
      </div>

      <div class="registration_main registration_main_two">
        <div class="registration_main_item">
          <label for="">ФИО*</label>
          <input type="text" name="" value="Иванов Иван Иванович">
        </div>

        <div class="registration_main_item">
          <label for="">E-mail*</label>
          <input type="text" name="" value="ivan@mail.ru">
        </div>

        <div class="registration_main_item">
          <label for="">Телефон*</label>
          <input type="text" name="" value="+7 (499) 444-00-99">
        </div>
      </div>

      <div class="order_prof_edit_btn">
        <input class="order_prof_edit_btn_save" type="submit" name="" value="Сохранить изменения">
        <a class="order_prof_edit_btn_otm" href="#">Отмена</a>
      </div>

    </div>

    <a class="back_link" href="#">
      « К списку профилей
    </a>

  </form>
</div>
<?include "footer.php";?>
