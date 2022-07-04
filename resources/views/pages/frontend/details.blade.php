@extends('layouts.frontend')

@section('content')
   <!--Konten -->

  <section class='isi-about'>
        <div style="margin-top: 50px">
    @foreach ($product->galleries as $item)
    <div class=mb-2>
    <div class="item {{ $loop->first ? 'selected' : '' }}"
                      data-img="{{ Storage::url($item->url) }}"
                    >
      <img
        src="{{ Storage::url($item->url) }}"
        alt="front"
        class="img-thumbnail rounded mx-auto d-block"
        style=""
        />
        
      </div>  
      </div>
      @endforeach
          <div class="container">
            <h1 class="mb-2">{{ $product->name }}</h1>
            <p class="title mb-5">IDR<span>{{ number_format($product->price) }}</span></p>
            <p class="mb-5">Description: {!! $product->description !!}</p>
            <a href="{{ route('details', $product->slug) }}">
            </a>
      
      </div>
  </section>
  <!-- Konten -->
@endsection