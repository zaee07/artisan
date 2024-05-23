<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class RedirectController extends Controller
{
    public function toDownload() {
        return redirect('download');
    }

    public function toWebsite() {
        return redirect()->away('https://zaee07.my.id');
    }
}
