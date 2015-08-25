<?php

class Template extends Controller 
{
    public function __construct($controller, $action)
    {
        parent::__construct($controller, $action);

        $this->load_model('CatagoryModel');
        $this->load_model('TemplateModel');
    }

    public function index()
    {
        $items = $this->get_model('TemplateModel')->getAll();
        $this->get_view()->set('items', $items);

        $this->get_view()->render('common/template_view');
    }
 }
