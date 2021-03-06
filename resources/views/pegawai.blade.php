<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Data Pegawai</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Data Pegawai
                </div>

                <div class="container">
                    <div class="float-right">
                        <button class="btn btn-primary" id="btn-refresh">REFRESH</button>
                        <button class="btn btn-success" id="btn-save">SAVE</button>
                    </div>
                </div>
                <div class="clearfix"></div>

                <div class="container pt-3">
                    <table class="table" id="tabel-pegawai">
                        <thead class="thead-dark">
                            <tr>
                            <th scope="col">No</th>
                            <th scope="col">ID Peg</th>
                            <th scope="col">Nama Pegawai</th>
                            <th scope="col">Gaji</th>
                            <th scope="col">Usia</th>
                            <th scope="col">Foto</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </body>
    <script type="text/javascript">
        console.log('ksajsak');

        getDataPegawai();

        function getDataPegawai(){
            $('#tabel-pegawai').find('tbody').empty();
            $.ajax({
                type: 'get',
                "url": "/data",
                success: function(data) {
                    dataPegawai = JSON.parse(data).data;
                    dataPegawai.sort(function (a, b) {
                        return a.employee_age - b.employee_age;
                    });
                    console.log(dataPegawai);
                    // console.log(dataPegawai);
                    for (i = 0; i < dataPegawai.length; i++) {
                        $('#tabel-pegawai').find('tbody').append('<tr>'+
                        '<th scope=\'row\'>'+(i+1)+'</th>'+
                        '<td>'+dataPegawai[i].id+'</td>'+
                        '<td>'+dataPegawai[i].employee_name+'</td>'+
                        '<td>'+dataPegawai[i].employee_salary+'</td>'+
                        '<td>'+dataPegawai[i].employee_age+'</td>'+
                        '<td>'+dataPegawai[i].profile_image+'</td>'+
                        '</tr>')
                    }
                }, 
            });
        }

        $("#btn-refresh").on('click', function(event) {
            getDataPegawai();
        });

        $("#btn-save").on('click', function(event) {
            $.ajax({
                type: 'get',
                "url": "/saveData",
                success: function(data) {
                    console.log('Save Data');
                }, 
            });
        });
    </script>
</html>
