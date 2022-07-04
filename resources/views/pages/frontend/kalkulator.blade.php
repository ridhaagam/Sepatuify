@extends('layouts.frontend')

@section('content')
  <!--Konten -->
    <section class="isi-about">
        <div class="kalkulator">
            <input type="text" class="calculator-screen" value="0" disabled />
            <div class="kalkulator-keys">
                <div class="row">
                    <button class="hps-semua">C/CE</button>
                    <button class="operator" value="n">aⁿ</button>
                    <button class="operator" value="/">&divide;</button>
                    <button class="operator" value="%">%</button>
                </div>
                <div class="row">
                    <button class="number" value="7">7</button>
                    <button class="number" value="8">8</button>
                    <button class="number" value="9">9</button>
                    <button class="operator" value="*">&times;</button>
                </div>
                <div class="row">
                    <button class="number" value="4">4</button>
                    <button class="number" value="5">5</button>
                    <button class="number" value="6">6</button>
                    <button class="operator" value="-">-</button>
                </div>
                <div class="row">
                    <button class="number" value="1">1</button>
                    <button class="number" value="2">2</button>
                    <button class="number" value="3">3</button>
                    <button class="operator" value="+">+</button>
                </div>
                <div class="row">
                    <button class="number zero-btn" value="0">0</button>
                    <button class="desimal" value=".">.</button>
                    <button class="equal-sign">=</button>
                </div>
            </div>
        </div>
    </section>
    <!-- Konten -->
@endsection