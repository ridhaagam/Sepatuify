@extends('layouts.frontend')

@section('content')


 <!--Konten -->
    <section id="konten-about">
      <div class="isi-about">
        <h2>PT. Sepatuify</h2>

        <div class="column">
          <div class="card">
            <img
              src="{{ asset('frontend/img/foto1.png') }}"
              alt="John"
              style="width: 100%; padding-bottom: 20px"
            />
            <div class="container">
              <h2>Deden</h2>
              <p class="title">CEO</p>
              <p>Pemegang saham 55%</p>

              <p><button class="button">Contact</button></p>
            </div>
          </div>
        </div>

        <div class="column">
          <div class="card">
            <img
              src="{{ asset('frontend/img/foto1.png') }}"
              alt="John"
              style="width: 100%; padding-bottom: 20px"
            />
            <div class="container">
              <h2>Dedes</h2>
              <p class="title">HRD</p>
              <p>Asisten pribadi</p>

              <p><button class="button">Contact</button></p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Konten -->
@endsection