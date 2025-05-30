@extends('user.layout.main')

@section('content')
<div class="container text-center" style="padding: 100px 0;">
  <h2>Konfirmasi Pembayaran</h2>
  <p>Tekan tombol di bawah untuk melanjutkan pembayaran.</p>

  <button id="pay-button" class="btn btn-primary mt-3" style="background-color: #7a6ad8; border-radius: 30px; padding: 10px 25px;">
    Bayar Sekarang
  </button>
</div>

<!-- Snap.js Midtrans -->
<script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="{{ config('midtrans.client_key') }}"></script>

<script type="text/javascript">
  document.getElementById('pay-button').onclick = function () {
    snap.pay('{{ $snapToken }}');
  };
</script>
@endsection
