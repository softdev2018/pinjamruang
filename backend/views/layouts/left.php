<aside class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?= $directoryAsset ?>/img/user2-160x160.jpg" class="img-circle" alt="User Image"/>
            </div>

        </div>
      
        <!-- search form -->

        <!-- /.search form -->

        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu tree', 'data-widget'=> 'tree'],
                'items' => [


                    // ['label' => 'Debug', 'icon' => 'dashboard', 'url' => ['/debug']],
                    ['label' => 'Menu Utama', 'options' => ['class' => 'header']],
                    ['label' => 'Ruang', 'icon' => 'dashboard', 'url' => ['/ruang/']],
                    ['label' => 'Sesi', 'icon' => 'dashboard', 'url' => ['/sesi/']],
                    ['label' => 'peminjaman', 'icon' => 'dashboard', 'url' => ['/peminjaman/']],
                    ['label' => 'log-peminjaman', 'icon' => 'dashboard', 'url' => ['/log-peminjaman/']],
                    ['label' => 'Login', 'url' => ['site/login'], 'visible' => Yii::$app->user->isGuest],

                ],
            ]
        ) ?>

    </section>

</aside>
