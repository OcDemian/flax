<?include "header.php";?>
<div class="container container_40">
  <div class="breadcrumbs">
    <ul class="breadcrumbs_list">
      <li><a href="">Главная</a>&#8212;</li>
      <li><span>Новости</span></li>
    </ul>
  </div>

  <h1 class="main_h1">Новости</h1>

  <div class="news">

    <?
    for ($i=0; $i < 4; $i++) {
      ?>
      <div class="news_item">
        <div class="news_item_img">
          <a href="#">
            <img src="../image/news_mini.png" alt="">
          </a>
        </div>
        <div class="news_item_content">
          <p class="news_item_content_date">11.11.2017</p>
          <a class="news_item_content_name" href="#">Творческая встреча с Ильей Ибряевым</a>
          <p class="news_item_content_text">28 апреля  провели в Москве встречу с Ильей Ибряевым - одним из самых известных акварелистов России, по которым в мире складывается впечатление об акварельном движении в нашей стране.
            <a href="#">Подробнее</a>
          </p>
        </div>
        <div class="gor_line"></div>
      </div>
      <?
    }
    ?>

    <div class="news_dop">
      <a class="news_dop_btn" href="#">Показать еще</a>
    </div>

  </div>

</div>
<?include "footer.php";?>
