@extends('layouts.page')

@section('title', 'Galaxy Traco - Trusted Solution to Import Goods Overseas')

@section('content')

@include('main.insight')

<section class="container mx-auto px-4 md:px-8 py-4">
  <div class="flex flex-col text-white ">
    <div class="relative container mx-auto bg-[#606161] text-black">
        {{ Breadcrumbs::render('insight') }}
    </div>
            
            <livewire:components.article-filter :slug="$slug ?? null" />
{{-- 
        <div class="text-black col-span-3 bg-white p-6 rounded-lg shadow-sm">
            <p class="text-gray-500 italic">Pilih bulan di sidebar sebelah kiri untuk melihat daftar artikel.</p>
        </div> --}}
  </div>
</section>

@endsection

{{-- @foreach ($articles as $article)
    <div class="bg-green-600/60 p-5 rounded-xl border border-white/10">
        <div class="text-black">
          <h1 class="font-bold text-center">{{ $article['title'][LaravelLocalization::getCurrentLocale()] }}</h1>
          <p>{{$article['description'][LaravelLocalization::getCurrentLocale()]}}</p>
        </div>
    </div>
    @endforeach --}}