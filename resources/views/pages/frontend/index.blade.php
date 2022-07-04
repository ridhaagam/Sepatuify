@extends('layouts.frontend')

@section('content')

   <!--banner -->
    <div class="foto">
      <div class="banner">
        <img class="banner" src="{{ asset('frontend/img/banner.png') }}" style="width: 1550px" />
      </div>
    </div>
    <!-- end -->

    <!--Konten -->
    <section id="konten">
      <div class="penawaran">
        <h2>Jual sepatu apa saja</h2>
      </div>
      <div class="container-konten">
        <div class="row">
          <div class="kiri">
            <div class="hot-konten">
              <h1>Newest Release</h1>
              <h3>Air Walk</h3>
              <img src="{{ asset('frontend/img/foto1.png') }}" />
              <p style="margin-top: 10px">
                Lorem Ipsum is simply dummy text of the printing and typesetting
                industry. Lorem Ipsum has been the industry's standard dummy
                text ever since the 1500s, when an unknown printer took a galley
                of type and scrambled it to make a type specimen book. It has
                survived not only five centuries.<a href="#"> Load More</a>
              </p>
              <p class="tanggal">Indonesia, <span>4 april 2022</span></p>
            </div>
            <div class="sub-konten">
              <div class="box">
                <img src="{{ asset('frontend/img/foto2.png') }}" />
                <h1>Sneakers</h1>
                <p>
                  Lorem Ipsum is simply dummy text of the printing and
                  typesetting industry. Lorem Ipsum has been the industry's
                  standard dummy text ever since the 1500s, when an unknown
                  printer took a galley of type and scrambled it to make a type.
                </p>
                <p class="tanggal">Indonesia, <span>3 april 2022</span></p>
              </div>
              <div class="box">
                <img src="{{ asset('frontend/img/foto3.png') }}" alt="Gambar Promo 3" />
                <h1>Nikes</h1>
                <p>
                  Lorem Ipsum is simply dummy text of the printing and
                  typesetting industry. Lorem Ipsum has been the industry's
                  standard dummy text ever since the 1500s, when an unknown
                  printer took a galley of type and scrambled it to make a type.
                </p>
                <p class="tanggal">Indonesia, <span>3 april 2022</span></p>
              </div>
            </div>
            <div class="sub-konten">
              <div class="box">
                <img src="{{ asset('frontend/img/foto4.png') }}" alt="Gambar Promo 4" />
                <h1>Sepatu pintar</h1>
                <p>
                  Lorem Ipsum is simply dummy text of the printing and
                  typesetting industry. Lorem Ipsum has been the industry's
                  standard dummy text ever since the 1500s, when an unknown
                  printer took a galley of type and scrambled it to make a type.
                </p>
                <p class="tanggal">Indonesia, <span>3 april 2022</span></p>
              </div>
              <div class="box">
                <img src="{{ asset('frontend/img/foto5.png') }}" alt="Gambar Promo 3" />
                <h1>Convers</h1>
                <p>
                  Lorem Ipsum is simply dummy text of the printing and
                  typesetting industry. Lorem Ipsum has been the industry's
                  standard dummy text ever since the 1500s, when an unknown
                  printer took a galley of type and scrambled it to make a type.
                </p>
                <p class="tanggal">Indonesia, <span>3 april 2022</span></p>
              </div>
            </div>
            <div class="pagination">
              <a href="#">&laquo;</a>
              <a href="#">1</a>
              <a href="#">2</a>
              <a href="#">3</a>
              <a href="#">4</a>
              <a href="#">5</a>
              <a href="#">6</a>
              <a href="#">&raquo;</a>
            </div>
          </div>

          <div class="kanan">
            <div class="box-nav">
              <div class="heading">
                <h1>Jenis sepatu</h1>
              </div>
              <div class="jenis">
                <ul>
                  <li>
                    <i>
                      <input
                        type="search"
                        name="cari"
                        placeholder="Masukkan Pencarian..."
                        style="
                          height: 50px;
                          width: 200px;
                          text-align: center;
                          border-radius: 10px;
                        "
                        required
                      />
                    </i>
                  </li>
                  <li>
                    <i
                      ><img
                        src="{{ asset('frontend/img/icon1.png') }}"
                        alt="foto1"
                        style="height: 25px; width: 25px; border-radius: 50%"
                    /></i>
                    <a href="">Converse</a>
                  </li>
                  <li>
                    <i
                      ><img
                        src="{{ asset('frontend/img/icon2.png') }}"
                        alt="foto1"
                        style="height: 25px; width: 25px; border-radius: 50%"
                    /></i>
                    <a href="">Sneakers</a>
                  </li>
                  <li>
                    <i
                      ><img
                        src="{{ asset('frontend/img/icon3.png') }}"
                        alt="foto1"
                        style="height: 25px; width: 25px; border-radius: 50%"
                    /></i>
                    <a href="">High Heels</a>
                  </li>
                  <li>
                    <i
                      ><img
                        src="{{ asset('frontend/img/icon1.png') }}"
                        alt="foto1"
                        style="height: 25px; width: 25px; border-radius: 50%"
                    /></i>
                    <a href="">Slippers</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Konten -->
@endsection