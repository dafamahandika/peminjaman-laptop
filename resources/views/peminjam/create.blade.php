<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<style>
    body {
        background: -webkit-linear-gradient(left, #0072ff, #00c6ff);
    }

    .contact-form {
        background: #fff;
        margin-top: 10%;
        margin-bottom: 5%;
        width: 70%;
    }

    .contact-form .form-control {
        border-radius: 1rem;
    }

    .contact-image {
        text-align: center;
    }

    .contact-image img {
        border-radius: 6rem;
        width: 11%;
        margin-top: -3%;
        
    }

    .contact-form form {
        padding: 14%;
    }

    .contact-form form .row {
        margin-bottom: -7%;
    }

    .contact-form h3 {
        margin-bottom: 8%;
        margin-top: -10%;
        text-align: center;
        color: #0062cc;
    }

    .contact-form .btnContact {
        width: 50%;
        border: none;
        border-radius: 1rem;
        padding: 1.5%;
        background: #dc3545;
        font-weight: 600;
        color: #fff;
        cursor: pointer;
    }

    .btnContactSubmit {
        width: 50%;
        border-radius: 1rem;
        padding: 1.5%;
        color: #fff;
        background-color: #0062cc;
        border: none;
        cursor: pointer;
    }

</style>

    @if ($message = Session::get('success'))
        <div class="alert alert-success" role="alert">
            <p>{{ $message }}</p>
        </div>
    @endif
   
<div class="container contact-form">
    <div class="contact-image">
        <img src="images/rpl.jpg">
    </div>
    <a href="/" type="submit" class="btn btn-primary float-right mr-10">back</a>


    <form  action="{{route('storePeminjaman')}}" method="POST">
        @csrf
        <h3>Masukkan Data Peminjaman</h3>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="">NIS</label>
                    <input type="number" name="nisn" class="form-control @error('nisn') is-invalid @enderror" placeholder="1180****" value="" />
                    @error('nisn')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="">Nama</label>
                    <input type="text" name="nama" class="form-control" placeholder="Riska" value="" />
                </div>
                <div class="form-group">
                    <label for="">Rombel</label>
                    <select name="rombel"  class="form-control"  required>
                        <option hidden>Pilih Rombel</option>
                        <option value="PPLG XI-1">PPLG XI-1</option>
                        <option value="PPLG XI-2">PPLG XI-2</option>
                        <option value="PPLG XI-3">PPLG XI-3</option>
                        <option value="PPLG XI-4">PPLG XI-4</option>
                        <option value="PPLG XI-5">PPLG XI-5</option>
                        
                        
                    </select>
                </div>
                <div class="form-group d-flex mr-4 pr-4">
                    <input type="submit" name="btnSubmit" class="btnContact" value="Submit" />
                    
                </div>
                
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="">No Laptop</label>
                    <select name="no_laptop"  class="form-control"  required>
                    <option hidden>Pilih Laptop</option>    
                    @foreach( $data as $dt)
                        <option value="{{ $dt->no_laptop }}">{{ $dt->no_laptop }}</option>
                    @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Rayon</label>
                    <select name="rayon"  class="form-control"  required>
                        <option hidden>Pilih Rayon</option>
                        <option value="Cicurug 1">Cicurug 1</option>
                        <option value="Cisarua 2">Cisarua 2</option>
                        <option value="Cibedug 3">Cibedug 3</option>
                        <option value="Tajur 4">Tajur 4</option>
                        <option value="Ciawi 5">Ciawi 5</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Ruangan</label>
                    <select name="ruangan"  class="form-control"  required>
                        <option hidden>Pilih Ruangan</option>
                        <option value="203">203 </option>
                        <option value="206">206</option>
                        <option value="207">207</option>
                        <option value="210">210 </option>
                        <option value="134">134</option>
                        <option value="322">322</option>
                        <option value="320">320 </option>
                        <option value="323">323 </option>
                    </select>
                </div>
            </div>
        </div>
    </form>
</div>
