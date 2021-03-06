<?php

Menu::create('admin.left', function ($menu) {
    $menu->style('navmenu');
    $menu->route('admin.index', 'Home');
    $menu->dropdown('Posts', function ($sub) {
        $sub->route('admin.posts.index', 'All Posts', [], [
            'inactive' => function () {
                return URL::full() == route('admin.posts.index', ['type' => 'page']);
            }
        ]);
        $sub->route('admin.posts.create', 'Add New', [], ['inactive' => function () {
                return URL::full() == route('admin.posts.create', ['type' => 'page']);
            }]);
    }, ['inactive' => function () {
        return URL::full() == route('admin.posts.index', ['type' => 'page']);
    }]);
    $menu->dropdown('Pages', function ($sub) {
        $sub->route('admin.posts.index', 'All Pages', ['type' => 'page'], [
            'active' => function () {
                return URL::full() == route('admin.posts.index', ['type' => 'page']);
            }
        ]);
        $sub->route('admin.posts.create', 'Add New', ['type' => 'page'], ['active' => function () {
                return URL::full() == route('admin.posts.create', ['type' => 'page']);
            }]);
    }, ['active' => function () {
        return URL::full() == route('admin.posts.index', ['type' => 'page']) ||
        URL::full() == route('admin.posts.create', ['type' => 'page']) ;
    }]);
    $menu->dropdown('Categories', function ($sub) {
        $sub->route('admin.categories.index', 'All Categories');
        $sub->route('admin.categories.create', 'Add New');
    });
    $menu->dropdown('Tags', function ($sub) {
        $sub->route('admin.tags.index', 'All Tags');
        $sub->route('admin.tags.create', 'Add New');
    });
    $menu->dropdown('Users', function ($sub) {
        $sub->route('admin.users.index', 'All Users');
        $sub->route('admin.users.create', 'Add New');
    });
});

Menu::create('admin.right', function ($menu) {
    $menu->style('navbar-right');
    $menu->url('/', 'Visit Site', ['target' => '_blank']);
    $menu->dropdown('Account', function ($sub) {
        $sub->url('auth/logout', 'Logout');
    });
});
