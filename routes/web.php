<?php

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Foundation\Bootstrap\RegisterFacades;
use Illuminate\Log\Logger;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;
use League\CommonMark\Extension\FrontMatter\Data\SymfonyYamlFrontMatterParser;
use Spatie\YamlFrontMatter\YamlFrontMatter;
use Symfony\Component\HttpKernel\Log\Logger as LogLogger;
use Symfony\Component\Yaml\Yaml;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('posts', [
        'posts' => Post::latest()->get()

    ]);
});

Route::get('posts/{post:slug}', function (Post $post) {// Post::where('slug', $post)->firstOrFail
    return view('post', [
        'post' => $post 
    ]);
});

Route::get("categories/{category:slug}", function(Category $category) {
    return view("posts", [
        "posts"=>$category->posts
    ]);
});

Route::get('authors/{author:username}', function(User $author){
    return view('posts', [
        'posts' => $author->posts
    ]);
});