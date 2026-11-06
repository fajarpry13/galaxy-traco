<?php

namespace App\Livewire\Components;

use Livewire\Component;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class ArticleFilter extends Component
{
    public $selectedMonth = 'October 2026';
    public $selectedArticleSlug = 'what-you-need-to-know-before-importing-goods';
    public $locale;

    public function changeMonth($month)
    {
        $this->selectedMonth = $month;

        $firstArticle = collect($this->getArticlesData())->first(fn($item) => $item['month'] === $month);
        if ($firstArticle) {
            $this->selectedArticleSlug = $firstArticle['slug'];
            return $this->redirectRoute('insight', ['slug' => $this->selectedArticleSlug], navigate: true);        }
    }

    public function selectArticle($slug)
    {
        $this->selectedArticleSlug = $slug;
        return $this->redirectRoute('insight', ['slug' => $this->selectedArticleSlug], navigate: true);    }

    public function previousArticle()
    {
        $activeArticles = $this->getArticlesData();
        $currentIndex = collect($activeArticles)->search(fn($article) => $article['slug'] === $this->selectedArticleSlug);

        if ($currentIndex !== false && $currentIndex > 0) {

            $targetArticle = $activeArticles[$currentIndex - 1];
            $this->selectedArticleSlug = $targetArticle['slug'];
            $this->selectedMonth = $targetArticle['month'];
            return $this->redirectRoute('insight', ['slug' => $this->selectedArticleSlug], navigate: true);        }
    }

    public function nextArticle()
    {
        $activeArticles = $this->getArticlesData();
        $currentIndex = collect($activeArticles)->search(fn($article) => $article['slug'] === $this->selectedArticleSlug);

        if ($currentIndex !== false && $currentIndex < count($activeArticles) - 1) {
            $targetArticle = $activeArticles[$currentIndex + 1];
            $this->selectedArticleSlug = $targetArticle['slug'];
            $this->selectedMonth = $targetArticle['month'];
            return $this->redirectRoute('insight', ['slug' => $this->selectedArticleSlug], navigate: true);        }
    }

    private function getArticlesData()
    {
        return [
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
        'en' => '
            <p>Importing goods can open doors to bigger business opportunities — better pricing, unique product supply, and access to global manufacturers. However, before you begin, there are a few key things you must understand.</p>
            <br>
            <h3>1. Know Your Product & HS Code</h3>
            <p>Start by identifying exactly what you are importing and its HS (Harmonized System) Code. The HS Code determines applicable duties, taxes, and import requirements.</p>
            <br>
            <h3>2. Check Import Regulations</h3>
            <p>Different products may require specific permits, certifications, or technical standards. Make sure your goods comply with the regulations of the destination country before shipping.</p>
            <br>
            <h3>3. Calculate the Total Landed Cost</h3>
            <p>The purchase price is only part of the cost. Consider freight, insurance, import duties, taxes, customs clearance, port charges, and other logistics fees to understand your actual landed cost.</p>
            <br>
            <h3>4. Choose the Right Shipping Method</h3>
            <p>Depending on your cargo volume, urgency, and budget, you may choose sea freight, air freight, or other transportation solutions. The right option can significantly affect both cost and delivery time.</p>
            <br>
            <h3>5. Understand Incoterms</h3>
            <p>Terms such as EXW, FOB, CIF, and DDP define who is responsible for costs, transportation, insurance, and risks at each stage of the shipment. Make sure you and your supplier have a clear understanding of the agreed Incoterms.</p>
            <br>
            <h3>6. Prepare Accurate Documentation</h3>
            <p>Common documents include commercial invoices, packing lists, bills of lading or air waybills, certificates of origin, and required permits or certifications. Incomplete or inaccurate documents can lead to customs delays.</p>
            <br>
            <h3>7. Work with the Right Logistics Partner</h3>
            <p>An experienced logistics partner can help coordinate shipping, documentation, customs clearance, and delivery — giving you greater visibility and reducing unnecessary complications.</p>
            <br>
            <h3>Import Smarter, Move with Confidence</h3>
            <p>International importing doesn\'t have to be complicated when every step is planned properly. By understanding the requirements, calculating your costs, preparing the right documents, and working with a reliable logistics partner, you can make your overseas sourcing process more predictable and efficient.</p>
            <br>
            <p><em>Galaxy Traco is ready to support your international logistics needs — from overseas shipment to customs clearance and final delivery.</em></p>
        ',
        'id' => '
            <p>Mengimpor barang dapat membuka pintu peluang bisnis yang lebih besar — harga yang lebih baik, pasokan produk yang unik, dan akses ke produsen global. Namun, sebelum Anda mulai, ada beberapa hal penting yang harus Anda pahami.</p>
            <br>
            <h3>1. Ketahui Produk & Kode HS Anda</h3>
            <p>Mulailah dengan mengidentifikasi secara pasti apa yang Anda impor dan Kode HS (Harmonized System)-nya. Kode HS menentukan bea masuk, pajak, dan persyaratan impor yang berlaku.</p>
            <br>
            <h3>2. Periksa Peraturan Impor</h3>
            <p>Produk yang berbeda mungkin memerlukan izin, sertifikasi, atau standar teknis khusus. Pastikan barang Anda mematuhi peraturan negara tujuan sebelum dikirim.</p>
            <br>
            <h3>3. Hitung Total Landed Cost (Biaya Keseluruhan)</h3>
            <p>Harga pembelian hanya bagian dari biaya. Pertimbangkan freight (ongkos kirim), asuransi, bea masuk, pajak, pengurusan bea cukai (customs clearance), biaya pelabuhan, dan biaya logistik lainnya untuk memahami total biaya riil sampai barang tiba.</p>
            <br>
            <h3>4. Pilih Metode Pengiriman yang Tepat</h3>
            <p>Tergantung pada volume kargo, tingkat urgensi, dan anggaran Anda, Anda dapat memilih sea freight (pengiriman laut), air freight (pengiriman udara), atau solusi transportasi lainnya. Pilihan yang tepat dapat berdampak signifikan pada biaya dan waktu pengiriman.</p>
            <br>
            <h3>5. Pahami Incoterms</h3>
            <p>Istilah seperti EXW, FOB, CIF, dan DDP menentukan siapa yang bertanggung jawab atas biaya, transportasi, asuransi, dan risiko pada setiap tahap pengiriman. Pastikan Anda dan pemasok memiliki pemahaman yang jelas tentang Incoterms yang disepakati.</p>
            <br>
            <h3>6. Siapkan Dokumentasi yang Akurat</h3>
            <p>Dokumen umum meliputi faktur komersial (commercial invoice), packing list, bill of lading atau air waybill, surat keterangan asal (certificate of origin), serta izin atau sertifikasi yang diperlukan. Dokumen yang tidak lengkap atau tidak akurat dapat menyebabkan penundaan di bea cukai.</p>
            <br>
            <h3>7. Bekerja Sama dengan Mitra Logistik yang Tepat</h3>
            <p>Mitra logistik yang berpengalaman dapat membantu mengoordinasikan pengiriman, dokumentasi, pengurusan bea cukai (customs clearance), dan pengiriman akhir — memberikan Anda visibilitas yang lebih besar serta mengurangi kendala yang tidak perlu.</p>
            <br>
            <h3>Impor Lebih Cerdas, Melangkah dengan Percaya Diri</h3>
            <p>Impor internasional tidak harus rumit jika setiap langkah direncanakan dengan benar. Dengan memahami persyaratan, menghitung biaya, menyiapkan dokumen yang tepat, dan bekerja sama dengan mitra logistik yang terpercaya, Anda dapat membuat proses pengadaan barang dari luar negeri menjadi lebih terprediksi dan efisien.</p>
            <br>
            <p><em>Galaxy Traco siap mendukung kebutuhan logistik internasional Anda — mulai dari pengiriman luar negeri hingga pengurusan bea cukai dan pengiriman akhir.</em></p>
        ',
        'zh' => '
            <p>进口商品可以打开更大的商业机遇——更优惠的价格、独特的产品供应以及直接对接全球制造商。然而，在开始之前，有几个关键事项您必须了解。</p>
            <br>
            <h3>1. 明确您的产品与 HS 编码</h3>
            <p>首先明确您要进口的具体商品及其 HS（协调制度）编码。HS 编码将决定适用的关税、税率以及进口监管要求。</p>
            <br>
            <h3>2. 检查进口法规政策</h3>
            <p>不同商品可能需要特定的许可证、认证或技术标准。发货前，请确保您的货物符合目的国的法律法规。</p>
            <br>
            <h3>3. 计算总落地成本（Landed Cost）</h3>
            <p>采购价格只是成本的一部分。您还需要考量海运/空运运费、保险费、进口关税、税费、报关清关费、港口杂费以及其他物流费用，以掌握真实的落地总成本。</p>
            <br>
            <h3>4. 选择合适运输方式</h3>
            <p>根据货物的体积重、时效要求和预算，您可以选择海运、空运或其他运输方案。正确的运输方式能显著降低成本并缩短交货时间。</p>
            <br>
            <h3>5. 了解国际贸易术语（Incoterms）</h3>
            <p>诸如 EXW、FOB、CIF 和 DDP 等术语明确了运输各阶段中费用、运输、保险和风险的责任划分。请确保您与供应商对约定的贸易术语理解一致。</p>
            <br>
            <h3>6. 准备准确齐全的单证</h3>
            <p>常见单据包括商业发票（Commercial Invoice）、装箱单（Packing List）、海运/空运提单（Bill of Lading / Air Waybill）、原产地证明（Certificate of Origin）以及所需的许可认证。单证不全或不准确可能导致海关扣关或延误。</p>
            <br>
            <h3>7. 与专业的物流伙伴合作</h3>
            <p>经验丰富的物流合作伙伴能够协助统筹运输、单证办理、清关和末端派送——为您提供透明的全程追踪，减少不必要的繁琐麻烦。</p>
            <br>
            <h3>更聪明的进口，更自信的远航</h3>
            <p>只要规划得当，跨国进口并不复杂。通过明确监管要求、精算成本、准备齐备单证，并与值得信赖的物流伙伴合作，您可以让海外采购流程变得更加可控与高效。</p>
            <br>
            <p><em>Galaxy Traco 随时准备为您提供全面的国际物流支持——从海外发货、报关清关到最终派送，全程保驾护航。</em></p>
        ',
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
    public function render()
    {
         $allArticles = $this->getArticlesData();

        $months = [
            'October 2026',
            'September 2026',
            'August 2026',
            'July 2026',
            'June 2026',
        ];

        $activeArticles = array_values(array_filter($allArticles, fn($article) => $article['month'] === $this->selectedMonth));
        $currentArticle = collect($allArticles)->first(fn($article) => $article['slug'] === $this->selectedArticleSlug);
        $currentIndex = false;
        foreach ($allArticles as $index => $article) {
            if ($article['slug'] === $this->selectedArticleSlug) {
                $currentIndex = $index;
                break;
            }
        }
        // $currentIndex = collect($allArticles)->search(fn($article) => $article['slug'] === $this->selectedArticleSlug);
        $hasPrevious = $currentIndex !== false && $currentIndex > 0;
        $hasNext = $currentIndex !== false && $currentIndex < count($allArticles) - 1;
        $prevSlug = $hasPrevious ? $allArticles[$currentIndex - 1]['slug'] : null;
$nextSlug = $hasNext ? $allArticles[$currentIndex + 1]['slug'] : null;
        return view('livewire.components.article-filter',[
            'months' => $months,
            'articles' => $activeArticles,
            'currentArticle' => $currentArticle,
            'hasPrevious' => $hasPrevious,
            'hasNext' => $hasNext,
            'locale' => $this->locale,
            'prevSlug' => $prevSlug,
            'nextSlug' => $nextSlug,
        ]);
    }

    public function mount($slug = null)
    {
        $this->locale = LaravelLocalization::getCurrentLocale();

        if (!$slug) {
        $firstArticle = collect($this->getArticlesData())->first();
        if ($firstArticle) {
            $this->redirectRoute('insight', ['slug' => $firstArticle['slug']]);
            return; 
        }
    }

        if ($slug) {
            $this->selectedArticleSlug = $slug;
        }

        if ($this->selectedArticleSlug) {
            $article = collect($this->getArticlesData())->firstWhere('slug', $this->selectedArticleSlug);
            if ($article) {
                $this->selectedMonth = $article['month'];
            }
        }
    }
}
