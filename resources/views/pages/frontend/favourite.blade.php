@extends('layouts.frontend')

@section('content')
 <!--Konten -->

  <section id="konten-about">
    
      <h2>Sepatuify</h2>
    @foreach($products as $product)
      <div class="column">
        {{ $product->url }}
        <div class="card">
          <img src="{{ asset($product->url) }}"
            alt="" style="width: 100%; padding-bottom: 20px" />
          <div class="container">
            <h2>{{ $product->name }}</h2>
            <p class="title">IDR<span>{{ number_format($product->price) }}</span></p>
            <p>{!! $product->description !!}</p>
            <a href="{{ route('details', $product->slug) }}">
            <p><button class="button" >Details</button></p>
            </a>
          </div>
        </div>
      </div>
    @endforeach

  </section>
  <!-- Konten -->
@endsection