<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class FrontPage extends Controller
{
    public function data(){
        $data = [];
        $data['menu'] = get_field('menu');
        $data['markets'] = get_field('markets');
        $data['catering'] = get_field('catering');
        $data['about'] = get_field('about');

        return $data;
    }
}
