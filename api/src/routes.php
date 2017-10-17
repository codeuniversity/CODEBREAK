<?php

use src\Middleware\Authentification;



//JUST FOR Test
$app->post('/test/list', $cN . 'Test:list')->setName('listTest');
$app->post('/test/{projectId}', $cN . 'Test:reset')->setName('detailTest');



$app->group('/login', function () use ($app, $cN) {
    $app->post('', $cN.'Login:login')->setName('login');
    $app->group('/forget', function () use ($app, $cN) {
        $app->post('/', $cN . 'Login:forget')->setName('forget');
        $app->post('/validate', $cN . 'Login:validate')->setName('validate');
        $app->post('/reset', $cN . 'Login:reset')->setName('reset');
    });
});


//this routes are allowed if user is logged in
$app->group('/', function () use ($app,$cN){
    $app->group('action', function () use ($app, $cN) {
        $app->get('', $cN . 'Action:list')->setName('list');
        $app->post('/create', $cN . 'Action:create')->setName('create');
        $app->group('/{id}', function () use ($app, $cN) {
            $app->post('/join', $cN . 'Action:join')->setName('join');
            $app->post('/leave', $cN . 'Action:leave')->setName('leave');
            $app->get('/delete', $cN . 'Action:delete')->setName('delete');
        });
    });

    $app->group('restaurant', function () use ($app, $cN) {
        $app->get('', $cN . 'Restaurant:list')->setName('list');
        $app->group('/{id}', function () use ($app, $cN) {
            $app->post('', $cN . 'Restaurant:detail')->setName('detail');
            $app->get('/meals', $cN . 'Restaurant:meals')->setName('meals');
        });
    });
//})->add(new Authentification($app->getContainer())); //currently disabled until login works
});