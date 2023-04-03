<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Organisasi MK</title>
    <link rel="stylesheet" href="{{ asset('/css/navbar.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
    <!-- Script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg main-nav px-5">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainMenu" aria-controls="mainMenu" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar icon-bar-1"></span>
                        <span class="icon-bar icon-bar-2"></span>
                        <span class="icon-bar icon-bar-3"></span>
                    </button>
        <div class="collapse navbar-collapse" id="mainMenu">
            <ul class="navbar-nav ml-auto text-uppercase f1">
            <li>
                <a href="/">Susunan Mata Kuliah</a>
            </li>
            <li>
                <a href="/organisasimk">Organisasi Mata Kuliah</a>
            </li>
            </ul>
        </div>
    </nav>

    <div class="d-block p-5">
        <h2 class="text-center pb-3">Organisasi MK</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th width="90px">Semester</th>
                    <th width="90px">Total SKS</th>
                    <th width="90px">Total MK</th>
                    <th class="text-center">MK Wajib</th>
                    <th width="200px">MK Pilihan</th>
                </tr>
            </thead>
            <tbody>
                @foreach($MK->groupBy('smt')->sortByDesc('smt') as $smt => $MKBysmt)
                    <tr>
                        <td>{{ $smt }}</td>
                        <td>{{ $MKBysmt->sum('sks') }}</td>
                        <td>{{ $MKBysmt->count() }}</td>
                        <td>
                            @if($MKBysmt->where('keterangan', 'Wajib')->count() > 1)
                                <table class="table table-bordered border-dark">
                                    <tr>
                                        @foreach($MKBysmt->where('keterangan', 'Wajib') as $product)
                                            <td>{{ $product->kodeMK }}</td>
                                        @endforeach
                                    </tr>
                                </table>
                            @else
                                @foreach($MKBysmt->where('keterangan', 'Wajib') as $product)
                                    <table class="table table-bordered border-dark">
                                        <tr>
                                            <td>{{ $product->kodeMK }}</td>
                                        </tr>
                                    </table>
                                @endforeach
                            @endif
                        </td>
                        <td>
                            @foreach($MKBysmt->where('keterangan', 'Pilihan') as $product)
                                {{ $product->kodeMK }}
                            @endforeach
                        </td>
                    </tr>
                @endforeach
                <tr>
                    <td>Total SKS</td>
                    <td><b>{{ $MK->sum('sks') }}</b></td>
                </tr>
            </tbody>
        </table>        
    </div>
</body>
</html>