@extends('layouts.master')
@section('content')


<section class="section">
    <div class="section-header">
        <h1>Data Peminjaman</h1>
        <div class="section-header-breadcrumb">
            
        </div>
    </div>
    <div class="section-body">
        <h3 class="section-title">Daftar Peminjaman Laptop</h3>
        <table id="data-admin" class="table table-striped table-bordered table-md"
            style="width: 100%; margin-top:5%; padding:2%;" cellspacing="1">
            <thead>
                <tr>
                    <th>No</th>
                    <th>NIS</th>
                    <th>Nama</th>
                    <th>Rombel</th>
                    <th>Rayon</th>
                    <th>No Laptop</th>
                    <th>Ruangan</th>
                    <th>Validator</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1;?>
                @foreach($data as $dt)

                <tr>
                    <td>{{$i++}}</td>
                    <td>{{$dt->nisn}}</td>
                    <td>{{$dt->nama}}</td>
                    <td>{{$dt->rombel}}</td>
                    <td>{{$dt->rayon}}</td>
                    <td>{{$dt->no_laptop}}</td>
                    <td>{{$dt->ruangan}}</td>
                    @if ($dt->validator)
                    <td>{{$dt->validator}}</td>
                    @else
                    <td>-</td>
                    @endif
                    <td></td>
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
