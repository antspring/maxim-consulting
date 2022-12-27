<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="<?= $assetDir ?>/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
             style="opacity: .8">
        <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

        <!-- SidebarSearch Form -->
        <!-- href be escaped -->
        <!-- <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div> -->

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <?php
            echo \hail812\adminlte\widgets\Menu::widget([
                'items' => [
                    [
                        'label' => 'Новости',
                        'icon' => 'pencil-alt',
                        'url' => ['/news']
                    ],
                    [
                        'label' => 'Категории',
                        'icon' => 'pencil-alt',
                        'url' => ['/categories']
                    ],
                    [
                        'label' => 'Контакты',
                        'icon' => 'pencil-alt',
                        'url' => ['/contacts']
                    ],
                    [
                        'label' => 'Цены на услуги',
                        'icon' => 'pencil-alt',
                        'url' => ['/prices']
                    ],
                    [
                        'label' => 'Категории цен на услуги',
                        'icon' => 'pencil-alt',
                        'url' => ['/service-price-categories']
                    ],
                    [
                        'label' => 'Услуги',
                        'icon' => 'pencil-alt',
                        'url' => ['/services']
                    ]
                ],
            ]);
            ?>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>