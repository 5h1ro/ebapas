@extends('layouts.master')
@section('content')
<section class="section gradient-banner">
	<div class="shapes-container">
		<div class="shape" data-aos="fade-down-left" data-aos-duration="1500" data-aos-delay="100"></div>
		<div class="shape" data-aos="fade-down" data-aos-duration="1000" data-aos-delay="100"></div>
		<div class="shape" data-aos="fade-up-right" data-aos-duration="1000" data-aos-delay="200"></div>
		<div class="shape" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200"></div>
		<div class="shape" data-aos="fade-down-left" data-aos-duration="1000" data-aos-delay="100"></div>
		<div class="shape" data-aos="fade-down-left" data-aos-duration="1000" data-aos-delay="100"></div>
		<div class="shape" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="300"></div>
		<div class="shape" data-aos="fade-down-right" data-aos-duration="500" data-aos-delay="200"></div>
		<div class="shape" data-aos="fade-down-right" data-aos-duration="500" data-aos-delay="100"></div>
		<div class="shape" data-aos="zoom-out" data-aos-duration="2000" data-aos-delay="500"></div>
		<div class="shape" data-aos="fade-up-right" data-aos-duration="500" data-aos-delay="200"></div>
		<div class="shape" data-aos="fade-down-left" data-aos-duration="500" data-aos-delay="100"></div>
		<div class="shape" data-aos="fade-up" data-aos-duration="500" data-aos-delay="0"></div>
		<div class="shape" data-aos="fade-down" data-aos-duration="500" data-aos-delay="0"></div>
		<div class="shape" data-aos="fade-up-right" data-aos-duration="500" data-aos-delay="100"></div>
		<div class="shape" data-aos="fade-down-left" data-aos-duration="500" data-aos-delay="0"></div>
	</div>
    <div class="container">
		<div class="row align-items-start my-5">
			<div class="col-md-6 order-1 order-md-2 text-center text-md-left w-100">
				<h1 class="text-white font-weight-bold mb-3 " >Layanan Info Status Klien</h1>
				<form action="search.html" class="searach-form-area">
					<div class="row">
						<div class="col-md-12 mb-2">
							<input class="form-control main" type="text" placeholder="Masukan Nama Terpidana" required="">
						</div>
						<div class="col-md-4 mb-2 form-cols">
							<div class="form-group">
								<select class="form-control" id="">
								  <option>Bapas Madiun</option>
								  <option>Bapas Ngawi</option>
								  <option>Bapas Pacitan</option>
								  <option>4</option>
								  <option>5</option>
								</select>
							  </div>
						</div>
						<div class="col-lg-2">
							<div class="col-12 text-right">
								<a class="hover">
								<button type="submit" class="btn btn-cari">Cari</button>
								</a>
							</div>
						</div>								
					</div>
				</form>

				<div class="table-full-width table-responsive overflow-hidden">
				  <div class="row">
					<div class="hover-zoom" width="100">
						<img class="img-fluid align-items-sm-center" width="200"  src="{{ asset('img/team/marketing-team-01.jpg') }}" alt="investor">
					</div>
					<div class="text-white ml-3">
						<table class="" width="100%" border="0" >
							<tbody><tr>
								<td valign="top">
								<table border="0" width="100%" style="padding-left: 2px; padding-right: 20px;">
								  <tbody>
									<tr>
									  <td width="25%" valign="top" class="textt">Nama</td>
										<td width="2%">:</td>
										<td class="textt" style=" font-weight:bold">xxxxxxxxxxxxx</td>
									</tr>
								  <tr>
									  <td class="textt">Kasus</td>
										<td>:</td>
										<td class="textt">xxxxx</td>
									</tr>
								  <tr>
									  <td class="textt">Petugas</td>
										<td>:</td>
										<td class="textt">xxxxxxxxxxxxxx</td>
									</tr>
								  <tr>
									  <td class="textt" width="100%">Asal Lapas</td>
										<td>:</td>
										<td class="textt">xxxxxxxxxxxxxxx</td>
									</tr>
								  <tr>
									  <td class="textt">Tipe</td>
										<td>:</td>
										<td class="textt">xxxxxxxxxx</td>
									</tr>
									<tr>
										<td class="textt">Tanggal</td>
										  <td>:</td>
										  <td class="textt">xxxxxxxxxx</td>
									  </tr>
									  <tr>
										<td class="textt">Status</td>
										  <td>:</td>
										  <td class="textt">xxxxxxxxxx</td>
									  </tr>
								</tbody></table>
								</td>
							</tr></tbody>
						</table>
					</div>
				  </div>
				</div>	
			</div>
			<div class="col-md-6 text-center order-1 order-2 d-none d-md-block ">
				<img class="img-fluid" src="{{ asset('img/bima.png') }}" alt="screenshot">
			</div>
		</div>
	</div>
</section>
@endsection
