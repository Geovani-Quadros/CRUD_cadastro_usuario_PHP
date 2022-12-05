<?php

    namespace controllers;

    class ViewController
    {
        public static function index($page)
        {
            \views\mainViews::render($page);
        }
    }

?>