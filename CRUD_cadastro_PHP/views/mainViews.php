<?php

    namespace views;

    class mainViews
    {
        public static function render($page)
        {
            include("$page.php");
        }
    }