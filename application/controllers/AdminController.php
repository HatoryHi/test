<?php

namespace application\controllers;

use application\core\Controller;
use application\models\User;

class AdminController extends Controller {

    protected $userModel;

    public function __construct($route)
    {
        parent::__construct($route);

        $this->userModel = new User();
    }

    public function indexAction() {
		$this->view->render('Вход');
	}

    public function loginAction() {
        if ($_POST['login'] === 'Hikirion') {

            return $this->view->redirect('dashboard');
        }

        return $this->view->redirect('index');
    }

    public function dashboardAction()
    {
        $this->view->render('Dashboard');
    }
}