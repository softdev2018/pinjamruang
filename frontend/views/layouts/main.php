<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => 'Peminjaman Ruang UPT TIK UNS',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    $menuItems = [
        ['label' => 'Home', 'url' => ['/site/index']],
        ['label' => 'Cari Data Ruang', 'url' => ['/ruang']],

    ];
    if (Yii::$app->user->isGuest) {
        $menuItems[] = ['label' => 'Signup', 'url' => ['/site/signup']];
        $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
    } else {
        $menuItems[] =   ['label' => 'Peminjaman Saya', 'url' => ['/peminjaman/']];
        $menuItems[] = '<li>'
            . Html::beginForm(['/site/logout'], 'post')
            . Html::submitButton(
                'Logout (' . Yii::$app->user->identity->username . ')',
                ['class' => 'btn btn-link logout']
            )
            . Html::endForm()
            . '</li>';
    }
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => $menuItems,
    ]);
    NavBar::end();
    ?>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <h5><b>Alamat</b></h5>
        <p>Jalan Ir. Sutami 36 A, Surakarta, 57126 <br/> (0271) 638959 <br/> tik@uns.ac.id</p>


      </div>
      <div class="col-md-4">
        <h5><b>Contact</b></h5>
        <ul>
          <li><a class="fa fa-instagram" href="https://www.instagram.com/upt.tikuns/" target="_blank"> UPT. TIK UNS (Puskom)</a></li>
          <li><a class="fa fa-facebook-square" href="https://id-id.facebook.com/tekinfokomuns/" target="_blank"> UPT. Tekinfokom UNS</a></li>
        </ul>
      </div>
      <div class="col-md-4">
        <h5><b>Daftar Ruang</b></h5>
        <p>Lab. Komputer <br/> Video Conference <br/> Aula</p>

        <!--ul>
          <li><a style="color:#000;" href="#!">Lab. Komputer</a></li>
          <li><a style="color:#000;" href="#!">Video Conference</a></li>
          <li><a style="color:#000;" href="#!">Aula</a></li>
        </ul-->
      </div>
    </div>
      <!--p class="pull-left">&copy; My Company <!?= date('Y') ?></p>

      <p class="pull-right"><!?= Yii::powered() ?></p-->
  </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
