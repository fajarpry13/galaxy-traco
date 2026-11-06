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
            'zh' => '从海外进口商品前需要了解的事项',
        ],
        'description' => [
            'en' => 'Importing goods can open doors to bigger business opportunities — better pricing, unique product supply, and access to global manufacturers. However, before you begin, there are a few key things you must understand.',
            'id' => 'Mengimpor barang dapat membuka pintu peluang bisnis yang lebih besar — harga yang lebih baik, pasokan produk yang unik, dan akses ke produsen global. Namun, sebelum Anda mulai, ada beberapa hal penting yang harus Anda pahami.',
            'zh' => '进口商品能够开启更广阔的商业机遇——例如获得更优惠的价格、独具特色的产品供应，以及与全球制造商建立联系。然而，在着手开展进口业务之前，有几个关键事项必须了解。'
        ],
    ],
    [
        'month' => 'October 2026',
        'slug' => 'the-easiest-way-to-import-goods',
        'image' => asset('assets/images/many-business.png'),
        'title' => [
            'en' => 'The Easiest Way to Import Goods: Door-to-Door Shipping',
            'id' => 'Cara Termudah Impor Barang: Pengiriman Door-to-Door',
            'zh' => '最简单的进口货物方式：门到门运输'
        ],
        'description' => [
            'en' => 'For many business owners, the most challenging part of importing isnt finding products — it’s handling the process: shipping, customs, paperwork, taxes, and delivery. That’s where door-to-door import services make a.',
            'id' => 'Bagi banyak pelaku bisnis, bagian paling menantang dari kegiatan impor bukanlah mencari produknya — melainkan mengurus prosesnya: pengiriman, bea cukai, dokumen, pajak, dan pengiriman akhir. Di sinilah layanan impor door-to-door sangat membantu.',
            'zh' => '对于许多企业主而言，进口业务中最具挑战性的环节并非寻找产品，而是处理整个流程——包括运输、清关、单证、税费以及最终交付。而“门到门”进口服务恰好能在此发挥作用。'
        ],
    ],
    [
        'month' => 'October 2026',
        'slug' => 'trending-products-in-china',
        'image' => asset('assets/images/china-remains.png'),
        'title' => [
            'en' => 'Trending Products in China: Ideas to Inspire Your Next Business Move',
            'id' => 'Produk Tren di China: Ide untuk Menginspirasi Langkah Bisnis Anda Selanjutnya',
            'zh' => '中国热门产品：为您下一次商业布局提供灵感'
        ],
        'description' => [
            'en' => 'China remains one of the biggest product innovation hubs, and trends change fast — giving endless opportunities for new business ideas. If youre planning your next import move, here are some categories currently.',
            'id' => 'China tetap menjadi salah satu pusat inovasi produk terbesar, dan tren berubah dengan cepat — memberikan peluang tak terbatas untuk ide bisnis baru. Jika Anda merencanakan langkah impor berikutnya, berikut adalah beberapa kategori yang sedang tren.',
            'zh' => '中国依然是全球最大的产品创新中心之一，且潮流更迭迅速，这为各类全新的商业构想提供了无限机遇。如果您正在筹划下一次进口业务，以下是一些当前值得关注的产品类别。'
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
