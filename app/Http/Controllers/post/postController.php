<?php

namespace App\Http\Controllers\post;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class postController extends Controller
{
    public function index(): View
    {
     return  view('post.postForm');
    }

}
