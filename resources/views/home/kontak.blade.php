@extends('layouts.template')

@section('content')
    <div class="content-wrapper container">
    <div class="accordion" id="accordionExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingOne">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        Kontak Pemilik
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body text-black">
        Hubungi : 085643626150 ( Paulus Endarto )
      </div>
      <div class="accordion-body text-black">
        Email : Paulusendarto@gmial.com
      </div>
      <div class="accordion-body text-black">
        Maps : Jl. Laksda Adisucipto Km. 7%2C5 No. 5 Catur Tunggal Depok Sleman Daerah Istimewa Yogyakarta, Ambarukmo, Caturtunggal, Kec. Depok, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55281
      </div>
    </div>
  </div>
@endsection
