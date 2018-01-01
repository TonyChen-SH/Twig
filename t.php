<?php
/**
 * Created by PhpStorm.
 * User: chendan
 * Date: 2018/1/1
 * Time: 12:19
 */

require "vendor/autoload.php";

$navigation = [
    ['href' => 'dddd', 'caption' => 1111],
    ['href' => 'dddd', 'caption' => 1111],
    ['href' => 'dddd', 'caption' => 1111],
    ['href' => 'dddd', 'caption' => 1111],
    ['href' => 'dddd', 'caption' => 1111],
    ['href' => 'dddd', 'caption' => 1111]
];

// 把路径放入构造函数，并设置模板路径
$loader = new Twig_Loader_Filesystem('tpl');
// 模板加载器放入环境
$twig = new Twig_Environment($loader, [
    // 'cache' => 'tpl/compilation_cache',
    'cache' => false,
]);

echo $twig->render('index.twig', ['navigation' => $navigation]);

