@extends('layouts/main')

@section('container')

<div class="container">
  <div class="row pb-3 border-dark">
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="https://www.perhutani.co.id/wp-content/uploads/2022/09/foto-dan-logo-PHT-copyright-2021-DIREKTUR-KEUANGAN.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="https://www.perhutani.co.id/wp-content/uploads/2022/10/foto-dan-logo-PHT-copyright-2022-MoU-PERHUTANI-DAN-KEJAKSAAN.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="https://www.perhutani.co.id/wp-content/uploads/2023/01/foto-dan-logo-PHT-copyright-2023-HUT-Sekar-18-th.-2023.jpg" class="d-block w-100" alt="...">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

    <style>
      .center {
        text-align: center;
      }

      .p {
        text-indent: 40px;

      }

      .fz {
        font-size: 16px;
      }

      .hk {
        font-size: 12px;
      }

      .justify {
        text-align: justify;
      }
    </style>
    <div class="container p-4">

      <!--Grid column-->
      <div>
        <h2 class="center">Tentang Perhutani Kendal</h2>

        <ul class="justify list-unstyled">
          <li class="p fz"> Perum Perhutani Kesatuan Pemangkuan Hutan (KPH) Kendal adalah salah satu unit manajemen di wilayah Divisi Regional Jawa Tengah. Luas wilayah kerja Perum Perhutani KPH Kendal 20.428,40 Ha meliputi kawasan hutan yang berada di Kabupaten Kendal seluas 13.251,32 Ha, Kabupaten Batang seluas 5.259,78 Ha dan Kodya Semarang seluas 1.917,30 Ha yang terbagi ke dalam tiga (3) Kelas Perusahaan (KP) Kawasan Hutan untuk Produksi seluas 16.574,63 Ha,Kawasan untuk Perlindungan seluas 2.771,20 Ha dan Kawasan Penggunaan lain seluas 1.082,57 Ha.
          </li><br />
          <li class="p fz"> Wilayah KPH Kendal termasuk dalam tipe iklim tropika basah (tipe A/Borema dengan kisaran suhu udara berkisar 22 ??? 33??C dan curah hujan rata-rata 1.786 mm. Tinggi tempat 0??? 534 mdengan topografi datar hingga bergelombang. Bahan induk batuan berupa endapan liat, tuf volkan intermedier (latosol), batuan endapan dan volkan, tuf volkan dan napal serta tuf volkan intermedier (mediteran). Tekstur tanah sedang hingga liat. Struktur tanah remah hingga bergumpal. Tanah mempunyai pH 4,5 ??? 6,5, kandungan organik top soil 3 ??? 10%, daya absorbsi 15 ??? 25 cm/dt, permeabbilitas tinggi dan kepekaan erosi rendah dengan sedimentasi kurang dari 2,5 mm/tahun kategori baik. Kawasan hutan KPH Kendal 9,04% berada pada daerah aliran sungai (DAS) dengan sungai-sungai penting antara lain Sungai Kalikuto, Kaliblukar, Kalibodri, Kaliblorong, Kalisambong, Kaliboyo, Kaliurang, Kalikreyo dan Kalibesole dengan sedimentasi kurang dari 2 - 5 mm/tahun dengan kategori baik.
          </li><br />
          <li class="p fz"> Pengelolaan kawasan hutan KPH Kendal di bagi ke dalam 6 Bagian Kesatuan Pemangkuan Hutan (BKPH) yaitu BKPH Subah, BKPH Plelen, BKPH Sojomerto, BKPH Kalibodri, BKPH Boja dan BKPH Mangkang dengan 23 Resort Pemanguan Hutan (RPH).
          </li><br />
        </ul>
        <!--Grid column-->
      </div>
      <!--Grid row-->



      <!-- conoth -->
      <div class="container p-4">
        <!--Grid row-->
        <div class="row">
          <!--Grid column-->
          <div class="row pb-3 border-dark col col-lg-5">
            {{-- <iframe width="800" height="300" src="https://www.youtube.com/embed/jf7C4p7RpXo" title="Aerofood ACS - Company Profile" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> --}}
            <iframe width="800" height="300" src="https://www.youtube.com/embed/szR9NFf4x88" title="Introduction" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class=" center col-lg-6 col-md-12 mb-4 mb-md-0">

            <h2>Visi</h2>
            <p class="fz">"Menjadi Perusahaan Pengelola Hutan Berkelanjutan dan Bermanfaat Bagi Masyarakat"</p>
            <h2>Misi</h2>
            <ul class="list-unstyled fz">
              <li>Mengelola Sumberdaya Hutan Secara Lestari.</li>
              <li>Peduli Kepada Kepentingan Masyarakat dan Lingkungan.</li>
              <li>Mengoptimalkan Bisnis Kehutanan dengan Prinsip Good Corporate Governance.</li>

            </ul>
          </div>

          <!--Grid column-->
        </div>
        <!--Grid row-->
      </div>
      <!-- contoh -->

      <!-- Grid container -->
      <div class="container p-4">
        <!--Grid row-->
        <div class="row">
          <!--Grid column-->
          <div class="col col-lg-5">
            {{-- <img src="https://learning-aic.aerofood.co.id/Elegantic/images/ALS.png" class="float-md-end my-4" alt="" width="180"> --}}
            <img src="/img/perhutani.png" class="float-md-end my-4" alt="" width="180">
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
            <h5 class="">Hubungi Kami</h5>
            <ul class="hk list-unstyled">
              <li>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                  <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z" />
                </svg>
                Jl. Soekarno Hatta No. 322 Kendal
              </li>
              <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                </svg>
                Phone: 0294 381350</li>
              <li>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-circle-fill" viewBox="0 0 16 16">
                  <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z" />
                </svg>
                https://www.perhutani.co.id/
              </li>
            </ul>
          </div>

          <!--Grid column-->
        </div>
        <!--Grid row-->
      </div>
      <!-- Grid container -->
    </div>


    {{-- <div>
      <p class="float-end">
        <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-arrow-up-short" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M8 12a.5.5 0 0 0 .5-.5V5.707l2.146 2.147a.5.5 0 0 0 .708-.708l-3-3a.5.5 0 0 0-.708 0l-3 3a.5.5 0 1 0 .708.708L7.5 5.707V11.5a.5.5 0 0 0 .5.5z" />
          </svg></a>
      </p>
    </div> --}}


  </div>
</div>
@endsection