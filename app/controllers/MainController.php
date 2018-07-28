<?php

namespace app\controllers;

class MainController extends AppController {

    public function indexAction(){
        //echo __METHOD__;
        $this->setMeta('Главная страница', 'Описание', 'Ключевики...');
        $this->set(['name' => 'Pasha', 'age' => 31]);
    }

}