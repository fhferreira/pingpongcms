<?php

use App\Support\NavMenuPresenter;

return array(

    'styles' => array(
        'navbar' => 'Pingpong\Menus\Presenters\Bootstrap\NavbarPresenter',
        'navbar-right' => 'Pingpong\Menus\Presenters\Bootstrap\NavbarRightPresenter',
        'nav-pills' => 'Pingpong\Menus\Presenters\Bootstrap\NavPillsPresenter',
        'nav-tab' => 'Pingpong\Menus\Presenters\Bootstrap\NavTabPresenter',
        'sidebar' => 'Pingpong\Menus\Presenters\Bootstrap\SidebarMenuPresenter',
        'navmenu' => NavMenuPresenter::class
    )

);