@extends('layouts.page')

@section('title', 'Galaxy Traco - Trusted Solution to Import Goods Overseas')

@section('content')

@include('main.insight')

<section class="container mx-auto px-22 py-4">
    <div class="relative items-center ">
        <h1 class="font-bold text-4xl text-black mb-12">
            Artikel
        </h1>
    </div>
  <div class="grid grid-cols-3 text-white gap-4 ">
      <div class="bg-green-600/60 p-5 rounded-xl border border-white/10">
          <div class="text-black">
            <h1 class="font-bold text-center">Judul artikel</h1>
            <p>deskripsi</p>
          </div>
      </div>
      <div class="bg-green-600/60 p-5 rounded-xl border border-white/10">
        <div class="text-black">
            <h1 class="font-bold text-center">Judul artikel</h1>
            <p>deskripsi</p>
          </div>
      </div>
      <div class="bg-green-600/60 p-5 rounded-xl border border-white/10">
      <div class="text-black">
            <h1 class="font-bold text-center">Judul artikel</h1>
            <p>deskripsi</p>
          </div>
      </div>
  </div>
</section>

@endsection

