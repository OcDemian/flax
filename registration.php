<?include "header.php";?>
<div class="container container_40">
  <div class="breadcrumbs">
    <ul class="breadcrumbs_list">
      <li><a href="">Главная</a>&#8212;</li>
      <li><span>Регистрация</span></li>
    </ul>
  </div>

  <h1 class="main_h1">Регистрация</h1>

  <div class="registration">
    <div class="registration_main">
      <form action="" method="">

        <div class="registration_main_item">
          <label for="">Логин</label>
          <input type="text" name="" value="">
        </div>

        <div class="registration_main_item">
          <label for="">E-mail</label>
          <input type="text" name="" value="">
        </div>

        <div class="registration_main_item">
          <label for="">Пароль</label>
          <input type="text" name="" value="">
          <p class="registration_main_item_tip">минимум 6 символов</p>
        </div>

        <div class="registration_main_item">
          <label for="">Повторите<br /> пароль</label>
          <input type="text" name="" value="">
        </div>

        <div class="registration_main_item registration_main_item_check_body castom_checkbox">
          <input class="castom_checkbox_input registration_main_item_checkbox" id="agreement" type="checkbox" name="" value="">
          <label class="castom_checkbox_label registration_main_item_check" for="agreement"></label>
          <p class="registration_main_item_text">
            Нажимая кнопку «Отправить», я даю свое согласие на обработку моих персональных данных, в соответствии с Федеральным законом от 27.07.2006 года №152-ФЗ «О персональных данных», на условиях и для целей, определенных в <a>Согласии на обработку персональных данных</a>
          </p>
        </div>

        <input class="registration_main_item_submit_btn" type="submit" name="" value="Отправить">
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
