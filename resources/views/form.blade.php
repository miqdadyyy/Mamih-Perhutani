



<!DOCTYPE html>
<html>
<head>
  <title></title>
  <script type="text/javascript" src="{{asset('bootstrapCustom/js/addons/datatables.min.js')}}"></script>
  <link href="{{asset('bootstrapCustom/css/addons/datatables.min.css')}}" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>  
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">

  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>
</head>
<body>
  <div class="container">
   <div class="col-md-12">

    @if(session('sukses'))
    <div class="alert alert-success" >
      {{session('sukses')}}
    </div>
    @endif
    @if(session('gagal'))
    <div class="alert alert-success" >
      {{session('gagal')}}
    </div>
    @endif
<style type="text/css">
  .my-custom-scrollbar {
position: relative;
height: 550px;
overflow: auto;
}
.table-wrapper-scroll-y {
display: block;
}
</style>


<br>
   <form method="POST" action="{{url('/send/hitung')}}" enctype="multipart/form-data">
          {{csrf_field()}}
    
    <div class="row">
    <div class="col-md-4">
    <div class="form-group">
    <label for="exampleInputEmail1">Masukkan Keasaman</label>
    <input type="number" class="form-control" name="keasaman">
    </div>
    <div class="form-group">
    <label for="exampleInputEmail1">Masukkan Suhu</label>
    <input type="number" class="form-control" name="suhu">
    </div>
    <div class="form-group">
    <label for="exampleInputEmail1">Masukkan Kelembaban</label>
    <input type="number" class="form-control" name="kelembaban">
    </div>

  <button type="submit" class="btn btn-primary">
    Kirim Laporan Keuangan
  </button>
  </div>

<div class="col-md-6">
  <div id="postList"></div>
</div>
</div>
</form>
</div>
  </div>



<script type="text/javascript">
        $(document).ready(function(){
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            function showPost(){
            $.ajax({
                url: '/show',
                success: function(data){
                    $('#postList').html(data); 
                },
                error: function(data){
                    console.log(data);
                },
            });
        }
            showPost();
            
         
        });

    </script>

</body>
</html>