<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
// use Illuminate\Routing\Controller;

class HelloController extends Controller
{
    private $name = "Muhammad Ihza Sofyansyah";

    public function hello($name) {
        return $this->name . $name;
    }

    public function req(Request $request) {
        return $request->path(). "<br>".PHP_EOL .
                $request->url(). PHP_EOL .
                $request->fullUrl(). PHP_EOL .
                $request->method(). PHP_EOL .
                $request->header('Accept');
    }

    public function firstName(request $name) {
        $first = $name->input('name');
        $except = $name->only('name');
        $only = $name->except(['name' => false]);
        $merge = $name->mergeIfMissing(['name' =>'oke']);
        return "hello". $first;
    }
}
