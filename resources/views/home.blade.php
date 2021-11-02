<link rel="shortcut icon" href="{{ asset('favicons/favicon.ico') }}" />

@extends('adminlte::page')

@section('title', 'Dashboard')

@section('css')
<link rel="stylesheet" href="/css/app.css">

@stop

@section('content_header')
<h1>Accounts Monitoring</h1>
@stop

@section('content')
<div class="container-fluid">
    <!-- Small boxes (Stat box) -->
    <div class="row">
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
                <div class="inner">
                    <h3>350</h3>

                    <p>Total Accounts</p>
                </div>
                <div class="icon">
                    <i class="fas fa-user-plus"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
                <div class="inner">
                    {{-- <h3>35<sup style="font-size: 20px">%</sup></h3> --}}
                    <h3>35</h3>
                    <p>Non-compliant</p>
                </div>
                <div class="icon">
                    <i class="fas fa-folder-minus"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
                <div class="inner">
                    <h3>50</h3>

                    <p>Active Billings</p>
                </div>
                <div class="icon">
                    <i class="fas fa-tasks"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
                <div class="inner">
                    <h3>35<sup style="font-size: 20px">%</sup></h3>

                    <p>Payroll Verification</p>
                </div>
                <div class="icon">
                    <i class="fas fa-edit"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
    </div>
    <!-- /.row -->




    <div class="row">
      <div class="col-6">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Employer Engagement</h3>
            

          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="example2" class="table table-bordered table-striped">
              <thead>
              <tr>
                <th>No.</th>
                <th>Mode</th>
                <th>PEN</th>
                <th>Employer Name</th>
                <th>Details</th>
              </tr>
              </thead>
              <tbody>
              <tr>
                <td>10002</td>
                <td>Email</td>
                <td>013030001234</td>
                <td>Some Employer Account</td>
                <td>Request Payroll for January - June 2021</td>
              </tr>
              <tr>
                <td>10004</td>
                <td>Phone Call</td>
                <td>013030001269</td>
                <td>Unattended Employer Account</td>
                <td>Phone unattended.</td>
              </tr>
              <tr>
                <td>10011</td>
                <td>Email</td>
                <td>013030001234</td>
                <td>Some Employer Account</td>
                <td>Request Payroll for January - June 2021</td>
              </tr>
              <tr>
                <td>10023</td>
                <td>Email</td>
                <td>013030001234</td>
                <td>Some Employer Account</td>
                <td>Request Payroll for January - June 2021</td>
              </tr>
              <tr>
                <td>10168</td>
                <td>Email</td>
                <td>013030001234</td>
                <td>Some Employer Account</td>
                <td>Request Payroll for January - June 2021</td>
              </tr>
              <tr>
                <td>10002</td>
                <td>Email</td>
                <td>013030001234</td>
                <td>Some Employer Account</td>
                <td>Request Payroll for January - June 2021</td>
              </tr>
              <tr>
                <td>10002</td>
                <td>Email</td>
                <td>013030001234</td>
                <td>Some Employer Account</td>
                <td>Request Payroll for January - June 2021</td>
              </tr>
              <tr>
                <td>10004</td>
                <td>Phone Call</td>
                <td>013030001269</td>
                <td>Unattended Employer Account</td>
                <td>Phone unattended.</td>
              </tr>
              <tr>
                <td>10011</td>
                <td>Email</td>
                <td>013030001234</td>
                <td>Some Employer Account</td>
                <td>Request Payroll for January - June 2021</td>
              </tr>
              <tr>
                <td>10023</td>
                <td>Email</td>
                <td>013030001234</td>
                <td>Some Employer Account</td>
                <td>Request Payroll for January - June 2021</td>
              </tr>
              <tr>
                <td>10168</td>
                <td>Email</td>
                <td>013030001234</td>
                <td>Some Employer Account</td>
                <td>Request Payroll for January - June 2021</td>
              </tr>
              <tr>
                <td>10002</td>
                <td>Email</td>
                <td>013030001234</td>
                <td>Some Employer Account</td>
                <td>Request Payroll for January - June 2021</td>
              </tr>
              </tbody>
              <tfoot>
                <tr>
                  <th>No.</th>
                  <th>Mode</th>
                  <th>PEN</th>
                  <th>Employer Name</th>
                  <th>Details</th>
                </tr>
              </tfoot>
            </table>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->




</div><!-- /.container-fluid -->
@stop



@section('js')
<script>
    console.log('Hi!');

</script>

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="plugins/jszip/jszip.min.js"></script>
<script src="plugins/pdfmake/pdfmake.min.js"></script>
<script src="plugins/pdfmake/vfs_fonts.js"></script>
<script src="plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="{{ url('/') }}/vendor/adminlte/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src={{ URL::asset('public/vendor/adminlte/dist/js/demo.js') }}></script>
<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
@stop
