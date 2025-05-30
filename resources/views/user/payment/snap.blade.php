@extends('user.layout.main')

@section('content')
<div class="container text-center mt-5">
  <h2>Proses Pembayaran</h2>
  <p>Harap tunggu, kamu akan diarahkan ke Midtrans...</p>
</div>

<script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="{{ env('MIDTRANS_CLIENT_KEY') }}"></script>
<script type="text/javascript">
  window.snap.pay('{{ $snapToken }}', {
    onSuccess: function(result) {
      window.location.href = '/user/dashboard'; // redirect setelah sukses
    },
    onPending: function(result) {
      alert("Menunggu pembayaran selesai");
    },
    onError: function(result) {
      alert("Pembayaran gagal");
    },
    onClose: function() {
      alert("Kamu menutup popup pembayaran.");
    }
  });
</script>
@endsection
