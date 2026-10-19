<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
     public function index($slug = null){
        // $articles = Article::where('status','active')
        // ->latest()
        // ->get();
        $locale = LaravelLocalization::getCurrentLocale();
      
     
        $articles = [
    [
        'month' => 'October 2026',
        'slug' => 'what-you-need-to-know-before-importing-goods',
        'image' => null,
        'title' => [
            'en' => 'What You Need to Know Before Importing Goods from Overseas',
        ],
        'description' => [
            'en' => 'Importing goods can open doors to bigger business opportunities — better pricing, unique product supply, and access to global manufacturers. However, before you begin, there are a few key things you must understand.',
        ],
    ],
    [
        'month' => 'October 2026',
        'slug' => 'the-easiest-way-to-import-goods',
        'image' => null,
        'title' => [
            'en' => 'The Easiest Way to Import Goods: Door-to-Door Shipping',
        ],
        'description' => [
            'en' => 'For many business owners, the most challenging part of importing isnt finding products — it’s handling the process: shipping, customs, paperwork, taxes, and delivery. That’s where door-to-door import services make a.',
        ],
    ],
    [
        'month' => 'October 2026',
        'slug' => 'trending-products-in-china',
        'image' => null,
        'title' => [
            'en' => 'Trending Products in China: Ideas to Inspire Your Next Business Move',
        ],
        'description' => [
            'en' => 'China remains one of the biggest product innovation hubs, and trends change fast — giving endless opportunities for new business ideas. If youre planning your next import move, here are some categories currently.',
        ],
    ],
];

$currentArticle = null;
    $prevArticle = null;
    $nextArticle = null;

      if ($slug) {
        $article = collect($articles)->firstWhere('slug', $slug);
        if (!$article) {
            abort(404);
        }
        $currentIndex = collect($articles)->search(fn($item) => $item['slug'] === $slug);
        $prevArticle = $currentIndex > 0 ? $articles[$currentIndex - 1] : null;
        $nextArticle = $currentIndex < count($articles) - 1 ? $articles[$currentIndex + 1] : null;

        $currentArticle = $article;
    }

    return view ('pages.insight',compact('locale','slug'));
    }
//     public function show($slug){
//         $locale = LaravelLocalization::getCurrentLocale();
//         $articles = [
//     [
//         'image' => null,
//         'title' => [
//             'en' => 'What You Need to Know Before Importing Goods from Overseas',
//         ],
//         'description' => [
//             'en' => 'Importing goods can open doors to bigger business opportunities — better pricing, unique product supply, and access to global manufacturers. However, before you begin, there are a few key things you must understand.',
//         ],
//     ],
//     [
//         'image' => null,
//         'title' => [
//             'en' => 'The Easiest Way to Import Goods: Door-to-Door Shipping',
//         ],
//         'description' => [
//             'en' => 'For many business owners, the most challenging part of importing isnt finding products — it’s handling the process: shipping, customs, paperwork, taxes, and delivery. That’s where door-to-door import services make a.',
//         ],
//     ],
//     [
//         'image' => null,
//         'title' => [
//             'en' => 'Trending Products in China: Ideas to Inspire Your Next Business Move',
//         ],
//         'description' => [
//             'en' => 'China remains one of the biggest product innovation hubs, and trends change fast — giving endless opportunities for new business ideas. If youre planning your next import move, here are some categories currently.',
//         ],
//     ],
// ];
//     $article = collect($articles)->firstWhere('slug', $slug);
//     return view ('pages.insight-detail',compact('article','locale'));
//     }
}
