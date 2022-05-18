@extends('publik.layouts.layanan')

@section('content')
<section class="iq-feature1 overview-block-ptb-25 grey-bg" id="layanan">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12">
          <div class="heading-title-layanan text-center">
            <h2 class="title iq-tw-6">Laman Scan Code Teras Malioboro</h2>
          </div>
          <div id="reader" width="600px"></div>
        </div>
      </div>
      <script src="https://unpkg.com/html5-qrcode" type="text/javascript"></script>

      <script>
                function onScanSuccess(decodedText, decodedResult) {
          // handle the scanned code as you like, for example:
          console.log(`Code matched = ${decodedText}`, decodedResult);
        }

        function onScanFailure(error) {
          // handle scan failure, usually better to ignore and keep scanning.
          // for example:
          console.warn(`Code scan error = ${error}`);
        }

        let html5QrcodeScanner = new Html5QrcodeScanner(
          "reader",
          { fps: 10, qrbox: {width: 250, height: 250} },
          /* verbose= */ false);
        html5QrcodeScanner.render(onScanSuccess, onScanFailure);
      </script>
    </div>
    <div>
      <p></p>
      <center>
      <p>Klik Allow agar bisa izinkan akses kamera untuk scan barcode Teras Malioboro</p>
      <p> Setelah itu arahkan kamera pada barcode Teras Malioboro yang ingin di scan</p>
        </center>
    </div>
</section>
@endsection