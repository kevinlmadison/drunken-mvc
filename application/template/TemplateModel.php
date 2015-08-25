<?php

class TemplateModel extends Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getAll()
    {
        #return $this->db->get('item');
    }

    public function getOne()
    {
        return $this->db->getOne('item');
    }
}
