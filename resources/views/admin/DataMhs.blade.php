@extends('template.TemplateAdmin')

@section('halaman', 'Data Mahasiswa')

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
	    	<li class="nav-item"><a class="nav-link active" href="#tab_1" data-toggle="tab">Data Mahasiswa</a></li>
            <li class="nav-item"><a class="nav-link" href="#tab_2" data-toggle="tab">Tambah Mahasiswa</a></li>
	    </ul>
	  </div>
	  <!-- /.card-header -->
	  <div class="card-body">
	  	<div class="tab-content">
	  		<div class="tab-pane active" id="tab_1">
	  			<table id="example1" class="table table-bordered table-striped">
					<thead>
						<tr>
						<th>NIM</th>
						<th>Nama</th>
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
					</tr>
					<tr>
						<td>Trident</td>
						<td>Internet
						  Explorer 5.0
						</td>
						<td>Win 95+</td>
						<td>5</td>
						<td>C</td>
					</tr>
					<tr>
						<td>Trident</td>
						<td>Internet
						  Explorer 5.5
						</td>
						<td>Win 95+</td>
						<td>5.5</td>
						<td>A</td>
					</tr>
					<tr>
						<td>Trident</td>
						<td>Internet
						  Explorer 6
						</td>
						<td>Win 98+</td>
						<td>6</td>
						<td>A</td>
					</tr>
					<tr>
						<td>Trident</td>
						<td>Internet Explorer 7</td>
						<td>Win XP SP2+</td>
						<td>7</td>
						<td>A</td>
					</tr>
					<tr>
						<td>Trident</td>
						<td>AOL browser (AOL desktop)</td>
						<td>Win XP</td>
						<td>6</td>
						<td>A</td>
					</tr>
					<tr>
						<td>Gecko</td>
						<td>Firefox 1.0</td>
						<td>Win 98+ / OSX.2+</td>
						<td>1.7</td>
						<td>A</td>
					</tr>
					<tr>
						<td>Gecko</td>
						<td>Firefox 1.5</td>
						<td>Win 98+ / OSX.2+</td>
						<td>1.8</td>
						<td>A</td>
					</tr>
					<tr>
						<td>Gecko</td>
						<td>Firefox 2.0</td>
						<td>Win 98+ / OSX.2+</td>
						<td>1.8</td>
						<td>A</td>
					</tr>
					</tbody>
					<tfoot>
						<tr>
							<th>Rendering engine</th>
							<th>Browser</th>
							<th>Platform(s)</th>
							<th>Engine version</th>
							<th>CSS grade</th>
						</tr>
					</tfoot>
				</table>
	  		</div>
	  		<div class="tab-pane" id="tab_2">
	  			
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