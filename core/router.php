<?php
class Router 
{
    public function route($url) 
    {
        $url_array = array();
        $url_array = explode("/", $url);

        $controller = isset($url_array[0]) ? $url_array[0] : '';
        array_shift($url_array);
        $action = isset($url_array[0]) ? $url_array[0] : '';

        array_shift($url_array);

        $query_string = $url_array;


        if(empty($controller))
            $controller = DEFAULT_CONTROLLER;

        if(empty($action))
            $action = 'index';

        $controller_name = $controller;
        $controller = ucwords($controller);
        $dispatch = new $controller($controller_name, $action);

        if ((int) method_exists($controller, $action))
            call_user_func_array(array($dispatch, $action), $query_string);
        else
        {
            /* error generation code */
        }


    }
}
