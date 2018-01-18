<html>
    <head>
        <meta charset="utf-8">
        <title>..:: UJIAN ONLINE SMA NEGERI AMBULU ::..</title>
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
    </head>
    <body>
        <div class="container">
            <h2>Penambahan Data Siswa</h2><br/>
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div><br />
            @endif
            @if (\Session::has('success'))
            <div class="alert alert-success">
                <p>{{ \Session::get('success') }}</p>
            </div><br />
            @endif
            <form method="post" action="{{url('siswa')}}">
                {{csrf_field()}}
                <div class="row">
                    <div class="col-md-4"></div>
                    <div class="form-group col-md-4">
                        <label for="nis">NIS:</label>
                        <input type="text" class="form-control" name="nis">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4"></div>
                    <div class="form-group col-md-4">
                        <label for="nama_siswa">Nama:</label>
                        <input type="text" class="form-control" name="nama_siswa">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4"></div>
                    <div class="form-group col-md-4">
                        <label for="kelas">Kelas:</label>
                        <select name="id_kelas" id="" class="form-control">
                            @foreach ($kelas as $klas)
                            <option value="{{$klas->id}}"> {{ $klas->nama_kelas}}
                            </option>
                            @endforeach
                        </select>
                    </div>
                </div>
                 <div class="row">
                    <div class="col-md-4"></div>
                    <div class="form-group col-md-4">
                        <label for="jekel">Jenis Kelamin:</label>
                        <input type="text" class="form-control" name="jekel">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4"></div>
                    <div class="form-group col-md-4">
                        <label for="kemampuan">Kemampuan:</label>
                        <input type="text" class="form-control" name="kemampuan">
                    </div>
                </div>
            <div class="row">
                <div class="col-md-4"></div>
                <div class="form-group col-md-4">
                    <button type="submit" class="btn btn-success" style="margin-left:38px">Tambah</button>
                </div>
            </div>
            </form>
        </div>
    </body>
</html>