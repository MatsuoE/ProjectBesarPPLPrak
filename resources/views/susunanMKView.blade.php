<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Susunan MK</title>
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

    <!-- Body -->
    <div class="d-block p-5">
        <h2 class="text-center">Susunan Mata Kuliah</h2>
        <table class="table">
            <thead>
                <tr>
                    <th width="100px">Kode MK</th>
                    <th width="700px">Nama MK</th>
                    <th width="180px">BK</th>
                    <th width="90px">SKS</th>
                    <th width="90px">1</th>
                    <th width="90px">2</th>
                    <th width="90px">3</th>
                    <th width="90px">4</th>
                    <th width="90px">5</th>
                    <th width="90px">6</th>
                    <th width="90px">7</th>
                    <th width="90px">8</th>
                    <th width="180px">Keterangan</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($MK as $p)
                <tr>
                    <td>{{ $p->kodeMK }}</td>
                    <td>{{ $p->namaMK }}</td>
                    <td>{{ $p->bk }}</td>
                    <td>{{ $p->sks }}</td>
                    @for($i = 1; $i <= 8; $i++)
                        <td>
                            @if(strpos($p->smt, strval($i)) !== false)
                            <div class="form-check form-check-inline d-flex align-items-center">
                                <input class="form-check-input" type="checkbox" checked disabled style="background-color: blue !important; border-color: blue !important;">
                            </div>
                            @else
                            <div class="form-check form-check-inline d-flex align-items-center">
                                <input class="form-check-input" type="checkbox" disabled>
                            </div>
                            @endif
                        </td>
                    @endfor
                    <td>{{ $p->keterangan }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>    
</body>
</html>