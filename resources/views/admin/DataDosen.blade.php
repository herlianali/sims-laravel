@extends('template.TemplateAdmin')

@section('halaman', 'Data Dosen')

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
	    	<li class="nav-item"><a class="nav-link active" href="#tab_1" data-toggle="tab">Data Dosen</a></li>
            <li class="nav-item"><a class="nav-link" href="#tab_2" data-toggle="tab">Tambah Dosen</a></li>
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
							<th>Keilmuan</th>
							<th>Alamat</th>
							<th>nomor telepon</th>
							<th>Kuota</th>
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
							<td>X</td>
							<td>X</td>
						</tr>
						<tr>
							<td>Trident</td>
							<td>Internet
							  Explorer 5.5
							</td>
							<td>Win 95+</td>
							<td>5.5</td>
							<td>A</td>
							<td>X</td>
							<td>X</td>
						</tr>
						<tr>
							<td>Trident</td>
							<td>Internet
							  Explorer 6
							</td>
							<td>Win 98+</td>
							<td>6</td>
							<td>A</td>
							<td>X</td>
							<td>X</td>
						</tr>
						<tr>
							<td>Trident</td>
							<td>Internet Explorer 7</td>
							<td>Win XP SP2+</td>
							<td>7</td>
							<td>A</td>
							<td>X</td>
							<td>X</td>
						</tr>
						<tr>
							<td>Trident</td>
							<td>AOL browser (AOL desktop)</td>
							<td>Win XP</td>
							<td>6</td>
							<td>A</td>
							<td>X</td>
							<td>X</td>
						</tr>
						<tr>
							<td>Gecko</td>
							<td>Firefox 1.0</td>
							<td>Win 98+ / OSX.2+</td>
							<td>1.7</td>
							<td>A</td>
							<td>X</td>
							<td>X</td>
						</tr>
						<tr>
							<td>Gecko</td>
							<td>Firefox 1.5</td>
							<td>Win 98+ / OSX.2+</td>
							<td>1.8</td>
							<td>A</td>
							<td>X</td>
							<td>X</td>
						</tr>
						<tr>
							<td>Gecko</td>
							<td>Firefox 2.0</td>
							<td>Win 98+ / OSX.2+</td>
							<td>1.8</td>
							<td>A</td>
							<td>X</td>
							<td>X</td>
						</tr>
					</tbody>
					<tfoot>
						<tr>
							<th>NIK</th>
							<th>Nama</th>
							<th>Keilmuan</th>
							<th>Alamat</th>
							<th>nomor telepon</th>
							<th>Kuota</th>
							<th>Aksi</th>
						</tr>
					</tfoot>
				</table>
	  		</div>
	  		<div class="tab-pane" id="tab_2">
	  			<div class="col-8">
		  			<form class="form-horizontal">
		                <div class="card-body">
		                  <div class="form-group row">
		                    <label for="inputNik3" class="col-sm-2 col-form-label">Nik</label>
		                    <div class="col-sm-10">
		                      <input type="text" class="form-control" id="inputNik3" placeholder="NIK">
		                    </div>
		                  </div>
		                  <div class="form-group row">
		                    <label for="inputNama3" class="col-sm-2 col-form-label">Nama</label>
		                    <div class="col-sm-10">
		                      <input type="text" class="form-control" id="inputNama3" placeholder="Nama">
		                    </div>
		                  </div>
		                  <div class="form-group row">
		                    <label for="inputKeilmuan3" class="col-sm-2 col-form-label">Keilmuan</label>
		                    <div class="col-sm-10">
		                      <input type="text" class="form-control" id="inputKeilmuan3" placeholder="Keilmuan">
		                    </div>
		                  </div>
		                  <div class="form-group row">
		                    <label for="inputAlamat3" class="col-sm-2 col-form-label">Alamat</label>
		                    <div class="col-sm-10">
		                      <input type="text" class="form-control" id="inputAlamat3" placeholder="Alamat">
		                    </div>
		                  </div>
		                  <div class="form-group row">
		                    <label for="inputNoTelp3" class="col-sm-2 col-form-label">Nomer Telp</label>
		                    <div class="col-sm-10">
		                      <input type="text" class="form-control" id="inputNoTelp3" placeholder="Nomer Telp">
		                    </div>
		                  </div>
		                  <div class="form-group row">
		                    <label for="inputKuota3" class="col-sm-2 col-form-label">Kuota</label>
		                    <div class="col-sm-10">
		                      <input type="text" class="form-control" id="inputKuota3" placeholder="Kuota">
		                    </div>
		                  </div>
		                </div>
		                <!-- /.card-body -->
		                <div class="card-footer">
		                  <button type="submit" class="btn btn-info">Sign in</button>
		                  <button type="submit" class="btn btn-default float-right">Cancel</button>
		                </div>
		                <!-- /.card-footer -->
		            </form>
	  			</div>
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