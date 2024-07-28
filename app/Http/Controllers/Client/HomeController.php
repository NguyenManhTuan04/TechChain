<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function compose(View $view): void
    {
        $categoryHome = Category::all();
        $view->with('$categoryHome', $categoryHome);
    }
}
