@extends('publik.layouts.layanan')


@section('content')
<section class="iq-feature1 overview-block-ptb-25 grey-bg" id="layanan">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12">
          <div class="heading-title-layanan text-center">
            <h2 class="title iq-tw-6">Agenda Teras</h2>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12">
          <div class="heading-title text-center">
            <p><h4>Halaman Agenda untuk menampilkan list kegiatan Teras Malioboro</h4></p>
          </div>
        </div>
      </div>
    </div>
    <div class="container table-responsive">
    <table class="table table-bordered table-striped table-hover">
    <caption>Agenda Teras Malioboro</caption>
			<thead>
				<tr>
					<th>Waktu</th>
					<th>Nama</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>23 Agustus 2022</td>
					<td>Pukul orang gabut</td>	
				</tr>
				<tr>
					<td>25 Oktober 2022</td>
					<td>Makan-Makan Di wedangan</td>
			</tbody>
		</table>
 
	</div>
</section>
@endsection