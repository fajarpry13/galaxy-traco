<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $articles = Article::where('status','active')
        ->latest()
        ->get();

        if ($articles->isEmpty()) {
           $articles = [
      [
        'month' => 'October 2026',
        'slug' => 'what-you-need-to-know-before-importing-goods',
        'image' => asset('assets/images/importing-goods.png'),
        'title' => [
            'en' => 'What You Need to Know Before Importing Goods from Overseas',
            'id' => 'Hal yang Perlu Anda Ketahui Sebelum Mengimpor Barang dari Luar Negeri',
        ],
        'description' => [
            'en' => 'Importing goods can open doors to bigger business opportunities — better pricing, unique product supply, and access to global manufacturers. However, before you begin, there are a few key things you must understand.',
            'id' => 'Mengimpor barang dapat membuka pintu peluang bisnis yang lebih besar — harga yang lebih baik, pasokan produk yang unik, dan akses ke produsen global. Namun, sebelum Anda mulai, ada beberapa hal penting yang harus Anda pahami.',
        ],
    ],
    [
        'month' => 'October 2026',
        'slug' => 'the-easiest-way-to-import-goods',
        'image' => asset('assets/images/many-business.png'),
        'title' => [
            'en' => 'The Easiest Way to Import Goods: Door-to-Door Shipping',
            'id' => 'Cara Termudah Impor Barang: Pengiriman Door-to-Door',
        ],
        'description' => [
            'en' => 'For many business owners, the most challenging part of importing isnt finding products — it’s handling the process: shipping, customs, paperwork, taxes, and delivery. That’s where door-to-door import services make a.',
            'id' => 'Bagi banyak pelaku bisnis, bagian paling menantang dari kegiatan impor bukanlah mencari produknya — melainkan mengurus prosesnya: pengiriman, bea cukai, dokumen, pajak, dan pengiriman akhir. Di sinilah layanan impor door-to-door sangat membantu.',
        ],
    ],
    [
        'month' => 'October 2026',
        'slug' => 'trending-products-in-china',
        'image' => asset('assets/images/china-remains.png'),
        'title' => [
            'en' => 'Trending Products in China: Ideas to Inspire Your Next Business Move',
            'id' => 'Produk Tren di China: Ide untuk Menginspirasi Langkah Bisnis Anda Selanjutnya',
        ],
        'description' => [
            'en' => 'China remains one of the biggest product innovation hubs, and trends change fast — giving endless opportunities for new business ideas. If youre planning your next import move, here are some categories currently.',
            'id' => 'China tetap menjadi salah satu pusat inovasi produk terbesar, dan tren berubah dengan cepat — memberikan peluang tak terbatas untuk ide bisnis baru. Jika Anda merencanakan langkah impor berikutnya, berikut adalah beberapa kategori yang sedang tren.',
        ],
    ],
];
        }
    $locale = app()->getLocale();
        $articles = array_map(function ($article) use ($locale) {
            $rawTitle = $article['title'] ?? '';
            $title = is_array($rawTitle) ? ($rawTitle[$locale] ?? $rawTitle['en'] ?? '') : $rawTitle;

            $rawDesc = $article['description'] ?? '';
            $description = is_array($rawDesc) ? ($rawDesc[$locale] ?? $rawDesc['en'] ?? '') : $rawDesc;

            $img = $article['image'] ?? '';
            if (!filter_var($img, FILTER_VALIDATE_URL) && !str_starts_with($img, 'assets/') && !str_starts_with($img, 'images/')) {
                $imagePath = asset('storage/' . $img);
            } else {
                $imagePath = asset($img);
            }

            return (object)[
                'image' => $imagePath,
                'title' => $title,
                'description' => $description,
            ];
        }, $articles);


    $hero = \App\Models\Home::first();

    return view ('pages.home',compact('articles','hero'));
    }

    
}
