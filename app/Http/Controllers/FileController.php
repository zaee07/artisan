<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Routing\Controller;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class FileController extends Controller
{
    //upoad
    public function foto(request $req) {
        $pic = $req->file('picture');
        $pic->storePubliclyAs('pictures', $pic->getClientOriginalname(), 'public');

        return "ok " . $pic->getClientOriginalName();
    }

    public function show(request $req) {
        return response()->file(storage_path('app/file.txt'));
    }
    public function download() {
        return response()->download(storage_path('app/file.txt'));
    }

    public function save() {
        $file = Storage::disk("local");
        $file->put("file.txt", 'ihza');
        $content= $file->get("file.txt");
    }
}
