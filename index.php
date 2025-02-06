<?php
include "portfolio_db.php";
$images = getImages();
$about_me = getAboutMe();
$age = floor((strtotime(date('d-m-Y')) - strtotime($about_me[0]["date_of_birth"])) / (60 * 60 * 24 * 365.2421896));
?>
<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
  <title>Golovan portfotio</title>
</head>

<body>
  <div id="image-viewer">
    <span class="close">&times;</span>
    <img class="modal-content" id="full-image">
  </div>
  <div class="header" id="header">
    <h1>xenonych portfolio</h1>
  </div>

  <div class="mainpart" id="main">
    <div class="about">
      <div class="texth">
        <h1 class="about_me"> Веб-разработчик</h1>
      </div>
      <div class="bgpicture1">
        <a target="_blank"><i class='bx bx-code-alt'></i></a>
      </div>
    </div>
    <div class="neubox">
      <div class="skills">
        <div class="langs">
          <div class="languages">
            <div class="block">
              <h2>C#</h2>
              <a class="icon_1 " target="_blank"><i class='bx bxl-visual-studio'></i></a>
            </div>
            <div class="block">
              <h2>HTML</h2>
              <a class="icon_2 " target="_blank"><i class='bx bxl-html5'></i></a>
            </div>
            <div class="block">
              <h2>PY</h2>
              <a class="icon_3 " target="_blank"><i class='bx bxl-python'></i></a>
            </div>
          </div>
          <div class="text">
            <p> Привет, меня зовут Головань Денис! Я обучаюсь в ДонАУИГС, на курсе Прикладной информатики и извучаю C#,
              HTML и Python.</p>
          </div>
        </div>
        <div class="images" &times>
          <img src="<?php echo "images/1.jpg" ?>" alt="" class="image">
        </div>

      </div>

      <div>
        <a class="button continue" href="#info">продолжить</a>
      </div>

    </div>

  </div>
  <div class="info" id="info">
    <div class="about">
      <div class="about">
        <h1 class="about_me"> О себе</h1>
      </div>
      <div class="bgpicture1">
        <a target="_blank"><i class='bx bx-terminal'></i></a>
      </div>
    </div>
    <div class="neubox">
      <div class="about">
        <div class="images" &times>
          <img src="<?php echo $images[1]['src'] ?>" alt="" class="image">
        </div>
        <div class="text ">
          <p>Мне <?php echo $age ?> лет. Родился и вырос в г. Донецке. В школе очень долго не мог определиться с будущей
            специальностью, но в один
            момент понял, что мне очень интересно программирование. C#, Python, а теперь и еще разработка сайтов.
            Последнее мне очень понравилось, так как требует творческого подхода.</p>
          <p>Продолжая тему творчества, мне очень нравится заниматься графикой. 3д в лице SFM (Source Film Maker) и
            немного Blender, а также рисованием. Рисую в основном в блокноте и не много, поэтому в галерее примеров
            маловато. Но и я только начинаю свой творческий путь и надеюсь, мне будет что показать в будущем.</p>
          <p>Мой vk: <a class="about_me_link" href="<?php echo $about_me[0]['vk_link'] ?>">Денис Головань</a></p>
          <p>Мой tg: <a class="about_me_link" href="<?php echo $about_me[0]['tg_link'] ?>">Денис Головань</a></p>
          <p>Моя почта: <a class="about_me_link"
              href="mailto:<?php echo $about_me[0]['email'] ?>">den.daymler@gmail.com</a></p>
        </div>

      </div>
    </div>
  </div>
  </div>
  <div class="gallery" id="info">
    <div class="about">
      <div class="texth">
        <h1 class="about_me"> Галерея</h1>
      </div>
      <div class="bgpicture1">
        <a target="_blank"><i class='bx bx-photo-album'></i></a>
      </div>
    </div>
    <div class="neubox">
      <div class="pictures">

        <?php
        for ($i = 0; $i < count($images); $i++) {
          echo "
          <figure class='images'>
            <img src='" . $images[$i]['src'] . "' alt=''>
            <p>" . $images[$i]['desc'] . " </p>
          </figure>
          ";
        }
        ?>

      </div>
      <div>
        <a class="button continue" href="#header">вверх</a>
      </div>
    </div>

  </div>



  <div class="footer">
    <p>&copy;xenonych-2024</p>
  </div>
  <div id="image-viewer">
    <span class="close">&times;</span>
    <img class="modal-content" id="full-image">
  </div>
  <!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
  <script src="./script.js"></script>

</body>

</html>