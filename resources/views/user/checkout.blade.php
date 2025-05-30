<!DOCTYPE html>
<html>
<head>
    <title>Checkout</title>
</head>
<body>
    <h2>Checkout</h2>
    <button id="pay-button">Bayar Sekarang</button>

    <script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="{{ config('midtrans.client_key') }}"></script>
    <script>
        var payButton = document.getElementById('pay-button');
        payButton.addEventListener('click', function () {
            snap.pay('{{ $snapToken }}', {
                onSuccess: function(result){
                    alert('Pembayaran sukses!');
                    window.location.href = '/user/dashboard'; // redirect ke halaman yang kamu mau
                },
                onPending: function(result){
                    alert('Pembayaran menunggu konfirmasi.');
                },
                onError: function(result){
                    alert('Pembayaran gagal.');
                }
            });
        });
    </script>
</body>
</html>
