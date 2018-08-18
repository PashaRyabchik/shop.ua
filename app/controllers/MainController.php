<?php

namespace app\controllers;

use ishop\Cache;

class MainController extends AppController {

    public function indexAction(){

        $posts = \R::findAll('test');

        $this->setMeta('Главная страница', 'Описание', 'Ключевики...');

        $this->set(['name' => 'Pasha', 'age' => 31, 'posts' => $posts]);
    }

}