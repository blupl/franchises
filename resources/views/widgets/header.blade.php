<?php $navbar = new Illuminate\Support\Fluent([
    'id'    => 'media',
    'title' => 'Media',
    'url'   => handles('blupl::media'),
    'menu'  => view('blupl/franchises::widgets._menu'),
]); ?>

@decorator('navbar', $navbar)
