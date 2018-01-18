<html>
    <head>
        <meta charset="utf-8">
        <title>..::Ujian Online SMA NEGERI AMBULU::..</title>
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
    </head>
    <body>
        <div class="container">
            <h2>Penambahan Data Siswa</h2><br/>
            <br/>
            @if (\Session::has('success'))
            <div class="alert alert-success">
                <p>
                {{ \Session::get('success')}}
                </p>
            </div><br/>
            @endif
            <table class="table table-striped">
            <thead>
                <tr>
                    <th>NIS</th>
                    <th>Nama Siswa</th>
                    <th>Kelas</th>
                    <th>Jenis Kelamin</th>
                    <th>Kemampuan</th>
                    <th colspan="2">Action</th>
                </tr>    
            </thead>
            <tbody>
                @foreach($siswa as $sswa)
                <tr>
                    <td>{{$sswa['nis']}}</td>
                    <td>{{$sswa['nama_siswa']}}</td>
                    <td>{{$sswa['id_kelas']}}</td>
                    <td>{{$sswa['jekel']}}</td>
                    <td>{{$sswa['kemampuan']}}</td>
                    <td>
                    <a href="{{action('siswacontroller@edit', $sswa['nis'])}}" class="btn btn-warning">Ubah</a>
                    </td>
                    <td>
                    <form method="post" action="{{action('siswacontroller@destroy', $sswa['nis'])}}">
                    {{csrf_field()}}
                    <input name="_method" type="hidden" value="DELETE">
                    <button  class="btn btn-danger" type="submit">Hapus</button>
        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
            </table>
        </div>
    </body>
</html>