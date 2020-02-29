@extends('layout.mainlingkungan')
@section('title','AduanLingkungan')
@section('navbar')
@section('content')

<div class="row">
  <div class="container">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <center><h2>Layanan Aspirasi dan Pengaduan Online Rakyat</h2>
        <h5>Sampaikan laporan Anda langsung kepada instansi pemerintah berwenang</h5></center><br><br>
        <div class="tujuan">
          <h4 class="text-center">Tujuan Aduan Masyarakat Lingkungan </h4>
          <ul class="text-justify">
            <li class="text-center">Penyelenggara dapat mengelola pengaduan dari masyarakat secara sederhana, cepat, tepat, tuntas, dan terkoordinasi dengan baik</li>
            <li class="text-center" >Penyelenggara memberikan akses untuk partisipasi masyarakat dalam menyampaikan pengaduan; dan</li>
            <li class="text-center">Meningkatkan kualitas pelayanan publik</li>
          </ul>
        </div><br>
        <div class="card-deck">
      <div class="card">
        <img class="card-img-top" src="images/kdrt.jpeg"  alt="Card image cap" width="20%"/><br><br>
        <div class="card-body">
          <p class="card-text"> KDRT tindakan yang dilakukan di dalam rumah tangga baik oleh suami, istri.,</p>
          <p class="card-text"><small class="text-muted">Disekitar Jakarta</small></p>
          <a class="btn btn-primary" href="#" role="button">Laporkan sekarang!</a>
        </div>
      </div>
      <div class="card">
        <img class="card-img-top" src="images/maling.jpg" alt="Card image cap" width="20%"><br><br><br>
        <div class="card-body">
          <p class="card-text">Maling orang yg mengambil milik orang lain secara sembunyi-sembunyi.</p>
          <p class="card-text"><small class="text-muted">Disekitar Jakarta</small></p>
          <a class="btn btn-primary" href="#" role="button">Laporkan Sekarang!</a>
        </div>
      </div>
      <div class="card">
        <img class="card-img-top" src="images/banjir.png" alt="Card image cap" width="20%"><br>
        <div class="card-body">
          <p class="card-text">Banjir  peristiwa yang terjadi ketika aliran air yang berlebihan merendam daratan.</p>
          <p class="card-text"><small class="text-muted">Jl. Mangga Dua Raya No.43, Ancol</small></p>
          <a class="btn btn-primary " href="#" role="button">Laporkan Sekarang!</a>
        </div>
      </div>
    </div>
  </div>
</div>
</div><br><br>
<footer class="bg-primary ">Copyright © 2013–2020 · Aduan Lingkungan Masyarakat<br>
Hosting Service | Website Pro | Domain Registration | Email Dedicated | Cloud VPS</footer>

@endsection
