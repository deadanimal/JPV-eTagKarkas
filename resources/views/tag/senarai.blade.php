<div class="container mt-5">
    <div class="row d-flex justify-content-center">
            <div class="card p-3  py-4">
                <div class="row g-3 mt-2">
                    <div class="col-md-3">
                        <label for="nama_projek">Nombor Dokumen</label>
                    </div>
                    <div class="col-md-6">
                        <input type="text" id="myInput" class="form-control" placeholder="xxxxx">
                    </div>
                    <div class="col-md-3">
                        <button class="btn btn-light btn-block">Carian</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row d-flex justify-content-center">
        <table class="table table-bordered">
            <thead class="text-white ">
                <tr>
                    <th scope="col">Bil.</th>
                    <th scope="col">Nombor Dokumen</th>
                    <th scope="col">Pejabat Pengeluar</th>
                    <th scope="col">Jenis Ternakan</th>
                    <th scope="col">Bilangan Ternakan</th>
                    <th scope="col">Kategori Tag</th>
                    <th scope="col">Tarikh Rekod</th>
                    <th scope="col">Pemohon Oleh</th>
                    <th scope="col">Cetakan Kod Bar</th>
                    <th scope="col">Status</th>
                    
                </tr>
            </thead> 
            <tbody id="myTable">
               
                <tr>
                    @foreach ($tags as $tag)

                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $tag }}</td>
                    <td>{{ $tag }}</td>
                    <td>{{ $tag }}</td>
                    <td>{{ $tag }}</td>
                    <td>{{ $tag }}</td>
                    <td>{{ $tag }}</td>
                    <td>{{ $tag }}</td>
                    <td>{{ $tag }}</td>
                    <td>{{ $tag }}</td>
                    
                    {{-- Button edit & hapus --}}
                    <td>
                        <div class="col-auto">
                            <a href="#"
                                class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></a>
                        </div>
                        <div class="col-auto">
                            <form action="#" method="post">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-sm btn-outline-primary"><i class="fas fa-trash-alt"></i></button>
                            </form>
                        </div>
                    </td>
 
                </tr>
                    @endforeach
      
            </tbody>
        </table>
    </div>
    


@endforeach