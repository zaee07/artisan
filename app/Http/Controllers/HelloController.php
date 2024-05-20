<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    private $name = "Muhammad Ihza Sofyansyah";

    public function hello($name) {
        return $this->name . $name;
    }

    public function req($req) {
        return $req->path().PHP_EOL.
                $req->url().PHP_EOL.
                $req->fullUrl().PHP_EOL.
                $req->header().PHP_EOL.
                $req->method();
    }
}
