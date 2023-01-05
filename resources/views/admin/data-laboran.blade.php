@extends('layouts.master')
@section('content')


<section class="section">
    <div class="section-header">
        <h1>Data Account Laboran</h1>
        <div class="section-header-breadcrumb">
           
            <div class="breadcrumb-item">Data Account</div>
        </div>
    </div>
    <div class="section-body">
        <h3 class="section-title">Daftar Account Laboran<a href="{{route('createAccount')}}" title="Tambah Data"
                style="float: right; margin-right: 2%" class="btn btn-primary mr-1">Tambah Data</a></h3>
        <table id="data-admin" class="table table-striped table-bordered table-md"
            style="width: 100%; margin-top:5%; padding:2%;" cellspacing="1">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Username</th>
                    <th>Action</th>
                   
                </tr>
            </thead>
            <tbody>
                <?php $i = 1;?>
                @foreach($data as $dt)

                <tr>
                    <td>{{$i++}}</td>
                    <td>{{$dt->name}}</td>
                    <td>{{$dt->email}}</td>
                    <td>
                    <a href="{{ route('editLaboran', ['id' => $dt->id]) }}" class="btn btn-primary mr-1">Edit Data</i></a>
                    <a href="{{ route('deleteLaboranData', ['id' => $dt->id]) }}" class="btn btn-danger mr-1">Hapus Data</i></a>
                    </td>
                    
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</section>
<script src="../../assets/admin/dataTables/js/jquery.dataTables.min.js"></script>
<script src="../../assets/admin/dataTables/js/dataTables.bootstrap4.min.js"></script>
<script>
    $(document).ready(function () {
        $('#data-admin').DataTable({
            "iDisplayLength": 25
        });
    });

</script>
    

@endsection
