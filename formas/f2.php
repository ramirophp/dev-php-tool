<?php

require_once '../tool/forma_2.php';

XYZ::doctype();
XYZ::html('es');

    XYZ::head();

        XYZ::title();
            echo "forma 2";
        XYZ::_title();

        XYZ::meta(['charset' => 'UTF-8']);

    XYZ::_head();

XYZ::_html();