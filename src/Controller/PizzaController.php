<?php

namespace App\Controller;

use Core\Controller\Controller;
use Core\Attributes\Route;


class PizzaController extends Controller
{
    #[Route(uri:'/pizzas', routeName: 'pizza')]
    public function index()
    {
        return $this->render('pizzas/index', []);
    }
}