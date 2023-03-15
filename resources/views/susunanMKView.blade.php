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
        <div class="float-end my-2">
            <button type="button" class="btn btn-success" data-mdb-toggle="modal" data-mdb-target="#staticBackdrop2">Tambah Mata Kuliah</button>
            <!-- Modal -->
            <div class="modal fade" id="staticBackdrop2" tabindex="-1" aria-labelledby="exampleModalLabel2" aria-hidden="true">
                <div class="modal-dialog d-flex justify-content-center">
                    <div class="modal-content w-75">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel2">Tambah Mata Kuliah</h5>
                            <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body p-4">
                            <form action="{{ route('susunanMK.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <!-- kode mk -->
                                <div class="form-outline mb-4">
                                    <input type="text" id="kodeMK" class="form-control" name="kodeMK"/>
                                    <label class="form-label" for="kodeMK">Kode MK</label>
                                </div>

                                <!-- nama mk -->
                                <div class="form-outline mb-4">
                                    <input type="text" id="namaMK" class="form-control" name="namaMK"/>
                                    <label class="form-label" for="namaMK">Nama MK</label>
                                </div>

                                <!-- bk -->
                                <div class="mb-4">
                                    <select class="selectpicker show-tick" multiple title="bk" data-size="6" name="bk[]">
                                        <option value="BK01">BK01</option>
                                        <option value="BK02">BK02</option>
                                    </select>
                                </div>

                                <!-- sks -->
                                <div class="form-outline mb-4">
                                    <input type="text" id="sks" class="form-control" name="sks"/>
                                    <label class="form-label" for="sks">SKS</label>
                                </div>

                                <!-- smt -->
                                <div class="form-outline mb-4">
                                    <input type="text" id="smt" class="form-control" name="smt"/>
                                    <label class="form-label" for="smt">Semester</label>
                                </div>

                                <!-- keterangan -->
                                <div class="mb-4">
                                    <select class="selectpicker show-tick" title="Keterangan" name="keterangan">
                                        <option value="Wajib">Wajib</option>
                                        <option value="Pilihan">Pilihan</option>
                                    </select>
                                </div>

                                <!-- Submit button -->
                                <button type="submit" class="btn btn-primary btn-block">Tambah</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal -->
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th width="100px">Kode MK</th>
                    <th width="700px">Nama MK</th>
                    <th width="180px">BK</th>
                    <th width="90px">SKS</th>
                    <th width="90px">Semester</th>
                    <th width="180px">Keterangan</th>
                    <th width="180px">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($MK as $p)
                <tr>
                    <td>{{ $p->kodeMK }}</td>
                    <td>{{ $p->namaMK }}</td>
                    <td>{{ $p->bk }}</td>
                    <td>{{ $p->smt }}</td>
                    <td>{{ $p->sks }}</td>
                    <td>{{ $p->keterangan }}</td>
                    <td>
                        <form action="{{ route('susunanMK.destroy',$p->kodeMK) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>    
</body>
</html>