<?php

use Diglactic\Breadcrumbs\Breadcrumbs;
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

Breadcrumbs::for('home', function (BreadcrumbTrail $trail) {
    $trail->push(__('messages.home'), LaravelLocalization::localizeURL(route('home')));
});

Breadcrumbs::for('insight', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push(__('messages.insights'), LaravelLocalization::localizeURL(route('insight')));
});

Breadcrumbs::for('article.show', function (BreadcrumbTrail $trail, $articleTitle) {
    $trail->parent('insight');
    $trail->push($articleTitle);
});