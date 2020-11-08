@extends('template.TemplateAdmin')

@section('halaman', 'Data Kaprodi')

@section('cssTambahan')
  <link rel="stylesheet" href="{{ asset('public/assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('public/assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('public/assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
@endsection

@section('content')
<div class="col-12">
	<div class="card">
	  <div class="card-header">
	    <ul class="nav nav-pills ml-auto p-2">
	    	<li class="nav-item"><a class="nav-link active" href="#tab_1" data-toggle="tab">Data Kaprodi</a></li>
            <li class="nav-item"><a class="nav-link" href="#tab_2" data-toggle="tab">Tambah Kaprodi</a></li>
	    </ul>
	  </div>
	  <!-- /.card-header -->
	  <div class="card-body">
	  	<div class="tab-content">
	  		<div class="tab-pane active" id="tab_1">
	  			<table id="example1" class="table table-bordered table-striped">
					<thead>
						<tr>
							<th>NIK</th>
							<th>Nama</th>
							<th>Alamat</th>
							<th>Nomor Telefon</th>
							<th>Jurusan</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody>
					<tr>
						<td>Trident</td>
						<td>Internet
						  Explorer 4.0
						</td>
						<td>Win 95+</td>
						<td> 4</td>
						<td>X</td>
						<td>X</td>
					</tr>
					<tr>
						<td>Trident</td>
						<td>Internet
						  Explorer 5.0
						</td>
						<td>Win 95+</td>
						<td>5</td>
						<td>C</td>
						<td>C</td>
					</tr>
					</tbody>
					<tfoot>
						<tr>
							<th>NIK</th>
							<th>Nama</th>
							<th>Alamat</th>
							<th>Nomor Telefon</th>
							<th>Jurusan</th>
							<th>Aksi</th>
						</tr>
					</tfoot>
				</table>
	  		</div>
	  		<div class="tab-pane" id="tab_2">
	  			<form class="form-horizontal">
	                <div class="card-body">
	                	<div class="form-group row">
	                    	<label for="nik" class="col-sm-2 col-form-label">NIK</label>
	                    	<div class="col-sm-10">
	                    		<input type="text" class="form-control" id="nik" placeholder="NIK">
	                    	</div>
	                	</div>
		                <div class="form-group row">
		                    <label for="nama" class="col-sm-2 col-form-label">Nama</label>
		                    <div class="col-sm-10">
		                    	<input type="text" class="form-control" id="nama" placeholder="Nama">
		                    </div>
		                </div>
		                <div class="form-group row">
		                    <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
		                    <div class="col-sm-10">
		                    	<textarea class="form-control" rows="3" id="alamat" placeholder="Alamat"></textarea>
		                    </div>
		                </div>
		                <div class="form-group row">
		                    <label for="nomor" class="col-sm-2 col-form-label">Nomor Telp</label>
		                    <div class="col-sm-10">
		                    	<input type="text" class="form-control" id="nomor" placeholder="Nomor Telp">
		                    </div>
		                </div>
		                <div class="form-group row">
		                    <label for="prodi" class="col-sm-2 col-form-label">Prodi</label>
		                    <div class="col-sm-10">
		                    	<input type="text" class="form-control" id="prodi">
		                    </div>
		                </div>
	                </div>
	                <div class="card-footer">
	                	<button type="submit" class="btn btn-info float-right">Tambah</button>
	                </div>

	            </form>
	  		</div>
	  	</div>
	    
	  </div>
	  <!-- /.card-body -->
	</div>
</div>
@endsection

@section('scriptTambahan')
<script src="{{ asset('public/assets/plugins/datatables/jquery.dataTables.min.js') }} "></script>
<script src="{{ asset('public/assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }} "></script>
<script src="{{ asset('public/assets/plugins/datatables-responsive/js/dataTables.responsive.min.js') }} "></script>
<script src="{{ asset('public/assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }} "></script>
<script src="{{ asset('public/assets/plugins/datatables-buttons/js/dataTables.buttons.min.js') }} "></script>
<script src="{{ asset('public/assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }} "></script>
<script src="{{ asset('public/assets/plugins/jszip/jszip.min.js') }} "></script>
<script src="{{ asset('public/assets/plugins/pdfmake/pdfmake.min.js') }} "></script>
<script src="{{ asset('public/assets/plugins/pdfmake/vfs_fonts.js') }} "></script>
<script src="{{ asset('public/assets/plugins/datatables-buttons/js/buttons.html5.min.js') }} "></script>
<script src="{{ asset('public/assets/plugins/datatables-buttons/js/buttons.print.min.js') }} "></script>

<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false
      // ,"buttons": ["excel", "pdf", "print"]
    });
    // .buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
  });
</script>
@endsection