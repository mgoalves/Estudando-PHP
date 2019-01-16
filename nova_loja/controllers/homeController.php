<?php

class homeController extends controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $dados = array();

        $products = new products();
        $dados['list'] = $products->getList();

        $this->loadTemplate('home', $dados);
    }
}