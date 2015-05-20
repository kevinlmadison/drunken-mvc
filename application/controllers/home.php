<?php

class Home extends Controller 
{
    public function __construct($controller, $action)
    {
        parent::__construct($controller, $action);

        $this->load_model('CatagoryModel');
        $this->load_model('HomeModel');
    }

    public function index()
    {
        $this->search();
    }

    public function search()
    {
        $items = $this->get_model('HomeModel')->getAll();
        $this->get_view()->set('items', $items);

        $this->get_view()->render('common/home_view');
    }
}
