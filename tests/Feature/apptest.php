<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class apptest extends TestCase
{
    public function testApp()
    {
        var_dump(App::environment());
    }
}
