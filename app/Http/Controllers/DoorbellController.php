<?php
namespace App\Http\Controllers;


class DoorbellController extends Controller {

    public function ding() {
        return array("message" => "dong");
    }
}