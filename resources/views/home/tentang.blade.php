@extends('layouts.template')

@section('content')
    <div class="content-wrapper container">
    <div class="accordion" id="accordionExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingOne">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        Sejarah
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body text-black">
        Jogja Adventure Tour Didirikan pada tahun 2001, PT Sungai Elo mempunyai divisi Jogja Adventure Tour yang bertujuan menjadikan kegiatan petualangan alam bebas sebagai atraksi wisata yang dikelola secara profesional, 
      sehingga bisa dinikmati oleh masyarakat
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        Perkembangan
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
      <div class="accordion-body text-black">
      Jogja Adventure Tour mengalami perkembangan yang pesat, disamping makin lengkap layanan penjualan peralatan kami juga akan segera menambah layanan jasa perusahaan.
      Animo masyarakat yang positif turut mengembangkan perusahaan kami menjadi semakin baik dan terpercaya. kelengkapan dan kemudahan pemesanan
      akan selalu menjadi perhatian perusahaan untuk memaksimalkan pelayanan kami.
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
        layanan
      </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
      <div class="accordion-body text-black">
        Perusahaan ini menyediakan jasa/peralatan peralatan dengan standar keamanan, 
        sehingga peserta rafting saat mengarungi jalur atau lintasan di sungai merasa, fun, aman dan nyaman selama aktivitas.
        Peralatan dan perlengkapan yang digunakan sangat penting untuk meminimalis kecelakaan dan kejadian tak terduga lainnya antara lain :
        <ul type="circle">
          <li>Pelampung (life jacket)</li>
          <li>Pelindung Kepala (helm)</li>
          <li>Dayung (Paddle)</li>
          <li>Tas kedap Air (dry bag)</li>
          <li>dst</li>
       </ul>
       Nikmatilah layanan yang disediakan oleh Jogja Adventure Tour sesuai dengan hobi dan keinginan Anda. 
       Bersiaplah untuk mengalami petualangan yang tak akan terlupakan dengan Jogja Adventure Tour
        </div>
      </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingFour">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
        Partner
      </button>
    </h2>
    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
      <div class="accordion-body text-black">
        Kami telah bekerjasama dengan berbagai pihak seperti perhotelan, dengan penyedia tempat wisata dan juga dengan banyak restoran.
      </div>
    </div>
  </div>
</div>
    </div>
@endsection