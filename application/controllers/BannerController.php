<?php

namespace application\controllers;

use application\core\Controller;
use application\models\Banner;

class BannerController extends Controller {

    protected $bannerModel;

    public function __construct($route)
    {
        parent::__construct($route);

        $this->bannerModel = new Banner();
    }

    public function indexAction()
    {
        // тут грид со всеми банерами
    }

    public function createAction()
    {
        // тут вывод формы баннера (пустая)
    }

    public function addAction()
    {
        // тут cохранение нового баннера
        // при удачном сохранение редирект на банер индекс
        // при не удачном назад на форму пустую и вывести ошибку
    }

    public function editAction()
    {
        // тут  форма с данными для существующего баннера
        // при нажатии на кнопку переходим на баннер сейв
    }

    public function saveAction()
    {
        // тут  обновление данных баннера
        // при удачном сохранении переходим на страницу баннер индекс ( грид с баннерами)
    }

    public function deleteAction()
    {
        //удаляем баннер
        // при удачном удалении на грид (всегда)
    }
}