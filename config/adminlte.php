<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Title
    |--------------------------------------------------------------------------
    |
    | Here you can change the default title of your admin panel.
    |
    | For detailed instructions you can look the title section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/6.-Basic-Configuration
    |
    */

    'title' => 'SICC',
    'title_prefix' => '',
    'title_postfix' => '| SICC',

    /*
    |--------------------------------------------------------------------------
    | Favicon
    |--------------------------------------------------------------------------
    |
    | Here you can activate the favicon.
    |
    | For detailed instructions you can look the favicon section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/6.-Basic-Configuration
    |
    */

    'use_ico_only' => 'true',
    'use_full_favicon' => false,

    /*
    |--------------------------------------------------------------------------
    | Logo
    |--------------------------------------------------------------------------
    |
    | Here you can change the logo of your admin panel.
    |
    | For detailed instructions you can look the logo section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/6.-Basic-Configuration
    |
    */

    'logo' => '<b>SICC</b>',
    'logo_img' => 'img/cclogo.png',
    'logo_img_class' => 'brand-image img-circle elevation-3',
    'logo_img_xl' => null,
    'logo_img_xl_class' => 'brand-image-xs',
    'logo_img_alt' => 'cclogo',

    /*
    |--------------------------------------------------------------------------
    | User Menu
    |--------------------------------------------------------------------------
    |
    | Here you can activate and change the user menu.
    |
    | For detailed instructions you can look the user menu section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/6.-Basic-Configuration
    |
    */

    'usermenu_enabled' => true,
    'usermenu_header' => false,
    'usermenu_header_class' => 'bg-primary',
    'usermenu_image' => false,
    'usermenu_desc' => false,
    'usermenu_profile_url' => false,

    /*
    |--------------------------------------------------------------------------
    | Layout
    |--------------------------------------------------------------------------
    |
    | Here we change the layout of your admin panel.
    |
    | For detailed instructions you can look the layout section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/7.-Layout-and-Styling-Configuration
    |
    */

    'layout_topnav' => null,
    'layout_boxed' => null,
    'layout_fixed_sidebar' => null,
    'layout_fixed_navbar' => null,
    'layout_fixed_footer' => null,

    /*
    |--------------------------------------------------------------------------
    | Authentication Views Classes
    |--------------------------------------------------------------------------
    |
    | Here you can change the look and behavior of the authentication views.
    |
    | For detailed instructions you can look the auth classes section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/7.-Layout-and-Styling-Configuration
    |
    */

    'classes_auth_card' => 'card-outline card-primary',
    'classes_auth_header' => '',
    'classes_auth_body' => '',
    'classes_auth_footer' => '',
    'classes_auth_icon' => '',
    'classes_auth_btn' => 'btn-flat btn-primary',

    /*
    |--------------------------------------------------------------------------
    | Admin Panel Classes
    |--------------------------------------------------------------------------
    |
    | Here you can change the look and behavior of the admin panel.
    |
    | For detailed instructions you can look the admin panel classes here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/7.-Layout-and-Styling-Configuration
    |
    */

    'classes_body' => '',
    'classes_brand' => '',
    'classes_brand_text' => '',
    'classes_content_wrapper' => '',
    'classes_content_header' => '',
    'classes_content' => '',
    'classes_sidebar' => 'sidebar-light-info elevation-4',
    'classes_sidebar_nav' => '',
    'classes_topnav' => 'navbar-white navbar-light',
    'classes_topnav_nav' => 'navbar-expand',
    'classes_topnav_container' => 'container',

    /*
    |--------------------------------------------------------------------------
    | Sidebar
    |--------------------------------------------------------------------------
    |
    | Here we can modify the sidebar of the admin panel.
    |
    | For detailed instructions you can look the sidebar section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/7.-Layout-and-Styling-Configuration
    |
    */

    'sidebar_mini' => true,
    'sidebar_collapse' => false,
    'sidebar_collapse_auto_size' => false,
    'sidebar_collapse_remember' => false,
    'sidebar_collapse_remember_no_transition' => true,
    'sidebar_scrollbar_theme' => 'os-theme-light',
    'sidebar_scrollbar_auto_hide' => 'l',
    'sidebar_nav_accordion' => true,
    'sidebar_nav_animation_speed' => 300,

    /*
    |--------------------------------------------------------------------------
    | Control Sidebar (Right Sidebar)
    |--------------------------------------------------------------------------
    |
    | Here we can modify the right sidebar aka control sidebar of the admin panel.
    |
    | For detailed instructions you can look the right sidebar section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/7.-Layout-and-Styling-Configuration
    |
    */

    'right_sidebar' => false,
    'right_sidebar_icon' => 'fas fa-cogs',
    'right_sidebar_theme' => 'dark',
    'right_sidebar_slide' => true,
    'right_sidebar_push' => true,
    'right_sidebar_scrollbar_theme' => 'os-theme-light',
    'right_sidebar_scrollbar_auto_hide' => 'l',

    /*
    |--------------------------------------------------------------------------
    | URLs
    |--------------------------------------------------------------------------
    |
    | Here we can modify the url settings of the admin panel.
    |
    | For detailed instructions you can look the urls section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/6.-Basic-Configuration
    |
    */

    'use_route_url' => false,
    'dashboard_url' => 'dash',
    'logout_url' => 'logout',
    'login_url' => 'login',
    'register_url' => false,
    'password_reset_url' => 'forgot-password',
    'password_email_url' => 'password/email',
    'profile_url' => false,

    /*
    |--------------------------------------------------------------------------
    | Laravel Mix
    |--------------------------------------------------------------------------
    |
    | Here we can enable the Laravel Mix option for the admin panel.
    |
    | For detailed instructions you can look the laravel mix section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/9.-Other-Configuration
    |
    */

    'enabled_laravel_mix' => false,
    'laravel_mix_css_path' => 'css/app.css',
    'laravel_mix_js_path' => 'js/app.js',

    /*
    |--------------------------------------------------------------------------
    | Menu Items
    |--------------------------------------------------------------------------
    |
    | Here we can modify the sidebar/top navigation of the admin panel.
    |
    | For detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/8.-Menu-Configuration
    |
    */

    'menu' => [
        [
            'text' => 'search',
            'search' => false,
            'topnav' => true,
        ],
        [
            'text' => 'Perfil',
            'url'  => 'user/profile',
            'icon' => 'fas fa-fw fa-user',
        ],
        ['header' => 'Administraci??n Usuarios',
         'can'    => 'view-menu'
        ],
        [
            'text'    => 'Unidades',
            'icon'    => 'fas fa-id-card-alt',
            'can'     => 'view-menu',
            'submenu' => [
                [
                    'text' => 'Listar Unidades',
                    'icon'=>'far fa-address-card',
                    'url'  => '/unidades'
                ],
                [
                    'text'=>'Crear Nueva Unidad',
                    'icon'=>'fas fa-address-card',
                    'url'=>'/unidades/create',
                ],
            ],
        ],
        [
          'text' => 'Usuarios',
          'icon' =>'fas fa-user-cog',
          'can'  =>'view-menu',
          'submenu'=>[
              [
                'text'=>'Listar Usuarios',
                'icon'=>'fas fa-users',
                'url'=>'/usuarios'
              ],
              [
                  'text'=>'Crear Nuevo Usuario',
                  'icon'=>'fas fa-user-plus',
                  'url'=>'/usuarios/create',
              ]
          ],
        ],
        ['header'=>'Administraci??n de Inventarios'],
        [
            'text'=>'Inventarios',
            'icon'=>'fas fa-warehouse',
            'submenu'=>[
                [
                    'text'=>'Listar Inventarios',
                    'icon'=>'fas fa-clipboard-list',
                    'url'=>'/inventarios',
                ],
                [
                    'text'=>'Crear Nuevo Inventario',
                    'icon'=>'fas fa-clipboard-check',
                    'url'=>'/inventarios/create',
                ],
            ],
        ],
        [
            'text'=>'Art??culos',
            'icon'=>'fas fa-boxes',
            'submenu'=>[
              [
                  'text'=>'Listar Art??culos',
                  'icon'=>'fas fa-box',
                  'url'=>'/articulos',
              ],
              [
                  'text'=>'Ingresar Nuevo Art??culo',
                  'icon'=>'fas fa-box-open',
                  'url'=>'/articulos/create',
              ]
            ],
        ],
        ['header'=>'Administraci??n de Pr??stamos'],
        [
            'text'=>'Listar Usuarios de Pr??stamo',
            'icon'=>'fas fa-user',
            'url'=>'/pusers',
        ],
        [
            'text'=>'Listar Pr??stamos Activos',
            'icon'=>'fas fa-file-invoice',
            'url'=>'/prestamos',
        ],
        ['header'=>'Reportes'],
        [
            'text'=>'Generales',
            'icon'=>'fas fa-cog',
            'submenu'=>[
                [
                    'text'=>'Inventarios',
                    'icon'=>'fas fa-warehouse',
                    'url'=>'/reporte_inventarios',
                ],
                [
                    'text'=>'Usuarios',
                    'icon'=>'fas fa-users',
                    'url'=>'/reporte_usuarios',
                ],
            ],
        ],
        [
            'text'=>'Art??culos',
            'icon'=>'fas fa-boxes',
            'submenu'=>[
                [
                    'text'=>'Todos los Art??culos',
                    'icon'=>'fas fa-box',
                    'url'=>'/reporte_articulos',
                ],
                [
                    'text'=>'Art??culos Vigentes',
                    'icon'=>'fas fa-box',
                    'url'=>'/reporte_articulos_vigentes',
                ],
                [
                    'text'=>'Art??culos Dados de Baja',
                    'icon'=>'fas fa-box',
                    'url'=>'/reporte_articulos_dados_baja',
                ],
            ],
        ],
        [
            'text'=>'Pr??stamos',
            'icon'=>'fas fa-people-carry',
            'submenu'=>[
                [
                    'text'=>'Todos los Pr??stamos',
                    'icon'=>'fas fa-file-invoice',
                    'url'=>'/reporte_prestamos',
                ],
                
                [
                    'text'=>'Pr??stamos Vigentes',
                    'icon'=>'fas fa-file-invoice',
                    'url'=>'/reporte_prestamos_vigentes',
                ],
                [
                    'text'=>'Pr??stamos a Devoluci??n',
                    'icon'=>'fas fa-file-invoice',
                    'url'=>'/reporte_prestamos_devolucion',
                ],
            ],
        ],
        [
            'text'=>'Documentos',
            'icon'=>'fas fa-clipboard-check',
            'submenu'=>[
                [
                    'text'=>'Boletas',
                    'icon'=>'fas fa-file-alt',
                    'url'=>'/reporte_boleta',
                ],
                [
                    'text'=>'Facturas',
                    'icon'=>'fas fa-file-alt',
                    'url'=>'/reporte_factura',
                ],
            ],
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Menu Filters
    |--------------------------------------------------------------------------
    |
    | Here we can modify the menu filters of the admin panel.
    |
    | For detailed instructions you can look the menu filters section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/8.-Menu-Configuration
    |
    */

    'filters' => [
        JeroenNoten\LaravelAdminLte\Menu\Filters\GateFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\HrefFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\SearchFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\ActiveFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\ClassesFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\LangFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\DataFilter::class,
    ],

    /*
    |--------------------------------------------------------------------------
    | Plugins Initialization
    |--------------------------------------------------------------------------
    |
    | Here we can modify the plugins used inside the admin panel.
    |
    | For detailed instructions you can look the plugins section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/9.-Other-Configuration
    |
    */

    'plugins' => [
        'Datatables' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js',
                ],
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js',
                ],
                [
                    'type' => 'css',
                    'asset' => false,
                    'location' => '//cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css',
                ],
            ],
        ],
        'Select2' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js',
                ],
                [
                    'type' => 'css',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.css',
                ],
            ],
        ],
        'Chartjs' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.0/Chart.bundle.min.js',
                ],
            ],
        ],
        'Sweetalert2' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdn.jsdelivr.net/npm/sweetalert2@8',
                ],
            ],
        ],
        'Pace' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'css',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/themes/blue/pace-theme-center-radar.min.css',
                ],
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/pace.min.js',
                ],
            ],
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Livewire
    |--------------------------------------------------------------------------
    |
    | Here we can enable the Livewire support.
    |
    | For detailed instructions you can look the livewire here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/9.-Other-Configuration
    */

    'livewire' => false,
];
