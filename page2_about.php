<?php 
$pdo = require 'model/connect.php';
$sql1 = 'SELECT * FROM about';
$sql2 = 'SELECT * FROM nav';
$sql3 = 'SELECT * FROM footer';
$statement = $pdo->query($sql1);
// fetch the data
$data1 = $statement->fetch(PDO::FETCH_ASSOC);
$statement = $pdo->query($sql2);
$data2 = $statement->fetch(PDO::FETCH_ASSOC);
$statement = $pdo->query($sql3);
$data3 = $statement->fetch(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link href="style.css" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Oxanium:wght@300;400;500;600&display=swap"
      rel="stylesheet"
    />
    <title>Pauline AL - About</title>
  </head>
  <body>
  <!-- Le header-->
  <header>
  <nav>
      <img class="mono" src="monogramebleu.png" alt="monogram of my initials, PAL"/>
        <a href="index.php"><?php echo $data2["title_1"]?></a>
        <a href="page2_about.php"><?php echo $data2["title_2"]?></a>
        <a href="page3_work.php"><?php echo $data2["title_3"]?></a>
        <a href="page4_contact.php"><?php echo $data2["title_4"]?></a>
        <a href="admin/login.php"><img src="https://pcci-group.com/wp-content/uploads/2022/09/Back-Office.png" alt="backoffice icon"></a>
      </nav>
</header>

  <div class="centre">
      <!-- L'onglet au dessus-->
      <div class="onglet">
        <p><?php echo $data2["title_2"]?></p>
        <a class="X" href="index.php"> X </a>
      </div>
      <div class="bg">
                  <!-- About me-->
                  <div class="Me">
                    <h1>About me</h1>
                    <img
                      src="<?php echo $data1["img_about"]?>" alt=""
                    />
                    <div class="mep">
                    <p>
                    <?php echo $data1["txt_about_1"]?>
                    </p>
                    <p>
                    <?php echo $data1["txt_about_2"]?> 
                    </p>
                  </div>
                  </div>

                  <hr/>

                  <!-- CV-->
                  <div class="Cv">
                      <h1>CV</h1>
                      
                      <div class="cvdl">
                      <h2> Download my CV here </h2><br>
                      <a class ="button" href="CV_Pauline_AguiarLalanne.pdf" download> Click here to download </a>
                      </div>
                  </div>

                  <hr/>

                    <!-- Skills-->
                    <div class="skills">
                    <h1> Skills </h1>
                    <h2> HTML / CSS</h2>
                      <progress value="65" max="100"> </progress>
                      <h2>Photoshop / Illustrator</h2>
                      <progress value="60" max="100"> </progress>
                      <h2> English </h2> 
                      <progress id="EN" value="80" max="100"> </progress>
                      <h2> French </h2>
                      <progress id="FR" value="100" max="100"> </progress>
                      <h2> Creativity </h2>
                      <progress id="Crea" value="85" max="100"> </progress>
                    </div>
                
      </div>
    </div>

    <!-- Le super footer-->
    <footer>
      <div class="RS_liens">
      <h4><a href=<?php echo $data3['lien_insta']?>><img class="rs" src="https://cdn-icons-png.flaticon.com/512/174/174855.png" alt="logo instagram"> <?php echo $data3["instagram"]?></a></h4>
      <h4><a href=<?php echo $data3['lien_linkedin']?>><img class="rs" src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/81/LinkedIn_icon.svg/768px-LinkedIn_icon.svg.png" alt="logo linkedin"><?php echo $data3["linkedin"]?></a></h4>
      <h4><a href=<?php echo $data3['lien_twt']?>><img class="rs" src="https://cdn4.iconfinder.com/data/icons/social-media-icons-the-circle-set/48/twitter_circle-512.png" alt="logo twitter"><?php echo $data3["twitter"]?></a></h4>
</div>
<hr class="footer_separator">
      <p><?php echo $data3["txt_footer"]?></h4>
    </footer>
  </body>
</html>
