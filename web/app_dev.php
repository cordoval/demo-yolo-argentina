<?php

require __DIR__.'/../vendor/autoload.php';

$container = Yolo\createContainer(
    [
        'debug' => true,
    ],
    [
        new Yolo\DependencyInjection\MonologExtension(),
        new Yolo\DependencyInjection\ServiceControllerExtension(),
//        new Yolo\DependencyInjection\CallableExtension(
//            'controller',
//            function ($configs, $container) {
//                $container->register('hello.controller', 'HelloController')
//                    ->addArgument('%hello.name%');
//            }
//        ),
    ]
);

$app = new Yolo\Application($container);

$app->get('/', 'yolo_demo_controller:indexAction');

$app->run();
