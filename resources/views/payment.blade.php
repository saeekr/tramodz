<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{csrf_token() }}">
    <script type="text/javascript" src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="{{config('midtrans.client_key')}}"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>TRAMODZ</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>

<style>
    body {
        background: #212121;
        font-family: sans-serif;
        font-family: "Montserrat", sans-serif;
        color: white;
        margin-bottom: 100px;

    }

    #snap-container {
        margin-left: 380px;
    }

    table tr {
        margin-bottom: 10px;
    }

    table td {
        padding: 10px;
    }

    table {
        line-height: 1;
    }

    .snap-modal {
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background-color: #fff;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    }
</style>

<body>
    <div class="container">
        <h4 style="text-align: center; margin-top: 50; padding: 50px">DETAIL BOOKING</h4>
        <div id="snap-container">
            <table style=" width: 30rem; border-spacing : 50px">
                <tr padding="20px">
                    <td>Nama</td>
                    <td id="payment" style="border: 0px solid #ccc; padding: 5px; border-radius: 5px; background-color: #EE99C2"> {{$booking->nama}}</td>
                </tr>
                <tr>
                    <td colspan="2" style="border-bottom: 0px solid #ccc;"></td>
                </tr>
                <tr padding="20px">
                    <td>No telp</td>
                    <td id="payment" style="border: 0px solid #ccc; padding:5px; border-radius: 5px; background-color: #EE99C2"> {{$booking->notelp}}</td>
                </tr>
                <tr>
                    <td colspan="2" style="border-bottom: 0px solid #ccc;"></td>
                </tr>
                <tr padding="20px">
                    <td>Alamat</td>
                    <td id="payment" style="border: 0px solid #ccc; padding:5px; border-radius: 5px; background-color: #EE99C2"> {{$booking->alamat}}</td>
                </tr>
                <tr>
                    <td colspan="2" style="border-bottom: 0px solid #ccc;"></td>
                </tr>
                <tr padding="20px">
                    <td>Jumlah</td>
                    <td id="payment" style="border: 0px solid #ccc; padding:5px; border-radius: 5px; background-color: #EE99C2"> {{$booking->jumlah}}</td>
                </tr>
                <tr>
                    <td colspan="2" style="border-bottom: 0px solid #ccc;"></td>
                </tr>
                <tr padding="20px">
                    <td>Total Harga</td>
                    <td id="payment" style="border: 0px solid #ccc; padding:5px; border-radius: 5px; background-color: #EE99C2"> {{$booking->total_harga}}</td>
                </tr>
            </table>
            <button class="btn btn-primary mt-3 " id="pay-button" data-bookingId="{{$booking->id}}">Bayar Sekarang</button>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

        <script type="text/javascript">
            var payButton = document.getElementById('pay-button');
            var bookingId = $("#pay-button").data("bookingid"); // Pastikan ID ini diambil dengan benar
            // var bookingId = $(this).data("bookingId");
            var token = $('meta[name="csrf-token"]').attr('content');

            payButton.addEventListener('click', function() {
                // Trigger snap popup
                window.snap.pay('{{$snapToken}}', {
                    // Remove the embedId property to prevent the popup from being embedded in the page
                    onSuccess: function(result) {
                        alert("Pembayaran Sukses!");
                        console.log(result);
                        $.ajax({
                            url: '{{route ("updateStatusPayment")}}',
                            type: 'post',
                            data: {
                                _token: token,
                                booking_id: bookingId,
                            },
                            dataType: 'json',
                            success: function(response) {

                            },
                            // error: function(xhr, status, error) {
                            //     console.error("Error response text: " + xhr.responseText);
                            //     alert("Error saat mengupdate status payment: " + xhr.statusText);
                            // }

                        });
                        window.location.href = '{{route ("home")}}';
                    },
                    onPending: function(result) {
                        alert("Menunggu Pembayaran!");
                        console.log(result);
                    },
                    onError: function(result) {
                        alert("Pembayaran Gagal!");
                        console.log(result);
                    },
                    onClose: function() {
                        alert('Pembayaran Anda belum selesai!');
                    }
                });
            });
        </script>
</body>

</html>
</body>

</html>