@extends('templates.main')

@push('style')
@endpush

@section('content')
Home
@endsection

@section('container')
<section class="content">

  <!-- Default box -->

<!-- Tambahkan foto kantor -->

<!-- Tambahkan peta Google Maps -->

<div class="container">
  <div class="row">
    <div class="col-md-4 mb-3">
      <div class="card text-white bg-dark" style="max-width: 18rem;">
        <div class="card-body">
             <i class="bi bi-clipboard-pulse"></i>
             <p class="card-header">Jumlah Transaksi</p>
             <p class="card-title">{{ $jumlahPelanggan }}</p>
            </div>
          </div>
        </div>
<div class="col-md-4 mb-3">
  <div class="card text-white bg-dark" style="max-width: 18rem;">
    <div class="card-body">
           <i class="bi bi-cash-coin"></i>
           <p class="card-header">Jumlah Pendapatan</p>
           <p class="card-title">Rp. 855.000.00</p>
          </div>
        </div>
      </div>
<div class="col-md-4 mb-3">
            <div class="card text-white bg-dark" style="max-width: 18rem;">
                 <div class="card-body">
                 <i class="bi bi-arrow-down-up"></i>
                 <p class="card-header">Laba Rugi</p>
                 <p class="card-title">Rp. 120.000.00</p>
                </div>
            </div>
        </div>
    </div>
</div>



  </div>
</div>
<!-- Tambahkan formulir pertanyaan -->
</form>
  <!-- /.card -->

</section>
@endsection

@push('script')
@endpush