<div class="col-md-12">
    <div class="card" style="width: fit-content">
        <div class="card-header">
            <h5>Jadual Pensampelan {{strtoupper($pilihan)}} </h5>
        </div>

        <div class="card-body">
            <div class="col">
                <table class="table table-bordered line-table text-center" style="width: fit-content">
                    <thead class="text-black">

                        <tr>
                            <th colspan="18">PROGRAM PEMANTAUAN RESIDU(JENIS UJIAN)(JENIS SAMPEL) DI LOJI
                               {{strtoupper($pilihan)}} 2022</th>
                        </tr>
                        <tr style="vertical-align: middle">
                            <th>BIL</th>
                            <th>PREMIS</th>
                            <th>BIL SAMPEL YANG PERLU DIAMBIL</th>
                            <th>JAN</th>
                            <th>FEB</th>
                            <th>MAC</th>
                            <th>APR</th>
                            <th>MEI</th>
                            <th>JUN</th>
                            <th>JUL</th>
                            <th>AUG</th>
                            <th>SEP</th>
                            <th>OCT</th>
                            <th>NOV</th>
                            <th>DEC</th>
                            <th>JUMLAH</th>
                            <th>TINDAKAN</th>
                        </tr>
                        <tr>
                            @foreach ($sampels as $sampel)
                             <th colspan="18">{{$sampel->zon}}</th>
                        </tr>
                    </thead>
                    <tbody>

                        <tr class="text-center">
                            <td>{{$loop->iteration}}</td>
                            <td>{{$sampel->premis}}</td>
                            <td><input class="form-control" type="number" name="sampel" min="0"
                                oninput="this.setCustomValidity('')" id="total"
                                onkeyup="this.value=this.value.replace(/(?![0-9])./gmi,'')" readonly ></td>
                            <td><input class="form-control" type="number" name="qty" min="0"
                                    oninput="this.setCustomValidity('')" onblur="findSum()"
                                    onkeyup="this.value=this.value.replace(/(?![0-9])./gmi,'')" ></td>
                            <td><input class="form-control" type="number" name="qty" min="0"
                                    oninput="this.setCustomValidity('')" onblur="findSum()"
                                    onkeyup="this.value=this.value.replace(/(?![0-9])./gmi,'')" ></td>
                            <td><input class="form-control" type="number" name="qty" min="0"
                                    oninput="this.setCustomValidity('')" onblur="findSum()"
                                    onkeyup="this.value=this.value.replace(/(?![0-9])./gmi,'')"></td>
                            <td><input class="form-control" type="number" name="qty" min="0"
                                    oninput="this.setCustomValidity('')" onblur="findSum()"
                                    onkeyup="this.value=this.value.replace(/(?![0-9])./gmi,'')"></td>
                            <td><input class="form-control" type="number" name="qty" min="0"
                                    oninput="this.setCustomValidity('')" onblur="findSum()"
                                    onkeyup="this.value=this.value.replace(/(?![0-9])./gmi,'')"></td>
                            <td><input class="form-control" type="number" name="qty" min="0"
                                    oninput="this.setCustomValidity('')" onblur="findSum()"
                                    onkeyup="this.value=this.value.replace(/(?![0-9])./gmi,'')"></td>
                            <td><input class="form-control" type="number" name="qty" min="0"
                                    oninput="this.setCustomValidity('')" onblur="findSum()"
                                    onkeyup="this.value=this.value.replace(/(?![0-9])./gmi,'')"></td>
                            <td><input class="form-control" type="number" name="qty" min="0"
                                    oninput="this.setCustomValidity('')" onblur="findSum()"
                                    onkeyup="this.value=this.value.replace(/(?![0-9])./gmi,'')"></td>
                            <td><input class="form-control" type="number" name="qty" min="0"
                                    oninput="this.setCustomValidity('')" onblur="findSum()"
                                    onkeyup="this.value=this.value.replace(/(?![0-9])./gmi,'')"></td>
                            <td><input class="form-control" type="number" name="qty" min="0"
                                    oninput="this.setCustomValidity('')" onblur="findSum()"
                                    onkeyup="this.value=this.value.replace(/(?![0-9])./gmi,'')"></td>
                            <td><input class="form-control" type="number" name="qty" min="0"
                                    oninput="this.setCustomValidity('')" onblur="findSum()"
                                    onkeyup="this.value=this.value.replace(/(?![0-9])./gmi,'')"></td>
                            <td><input class="form-control" type="number" name="qty" min="0"
                                    oninput="this.setCustomValidity('')" onblur="findSum()"
                                    onkeyup="this.value=this.value.replace(/(?![0-9])./gmi,'')"></td>
                            <td><input class="form-control" type="number" name="jumlahUtara" min="0" id='total'
                                    oninput="this.setCustomValidity('')"
                                    onkeyup="this.value=this.value.replace(/(?![0-9])./gmi,'')" readonly></td>
                            <td><a href="/kemaskini-sampel/{{$sampel->id}}" class="btn btn-info" type="button" data-toggle="modal" data-target="#exampleModalCenter{{$loop->iteration}}" style="float: right">Kemaskini</a>
                                <div class="modal fade" id="exampleModalCenter{{$loop->iteration}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                      <div class="modal-content">
                                        <div class="modal-header" style="background-color: aquamarine">
                                          <h5 class="modal-title" id="exampleModalLongTitle">Kemaskini Penjadualan</h5>
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                          </button>
                                        </div>
                                        <div class="modal-body" style="width: 100%">
      
                                          <form action="#" method="POST">
                                            @method('PUT')
                                            @csrf
                                                <table class="table table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th colspan="14">PROGRAM PEMANTAUAN RESIDU(JENIS UJIAN)(JENIS SAMPEL) DI LOJI
                                                               {{strtoupper($pilihan)}} 2022</th>
                                                        </tr>
                                                        <tr style="vertical-align: middle">
                                                            <th>BIL SAMPEL</th>
                                                            <th>JAN</th>
                                                            <th>FEB</th>
                                                            <th>MAC</th>
                                                            <th>APR</th>
                                                            <th>MEI</th>
                                                            <th>JUN</th>
                                                            <th>JUL</th>
                                                            <th>AUG</th>
                                                            <th>SEP</th>
                                                            <th>OCT</th>
                                                            <th>NOV</th>
                                                            <th>DEC</th>
                                                            <th>JUMLAH</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <td><input class="form-control" type="number" name="sampel" min="0"
                                                            oninput="this.setCustomValidity('')" id="total"
                                                            onkeyup="this.value=this.value.replace(/(?![0-9])./gmi,'')" readonly ></td>
                                                        <td><input class="form-control" type="number" name="qty" min="0"
                                                                oninput="this.setCustomValidity('')" onblur="findSum()"
                                                                onkeyup="this.value=this.value.replace(/(?![0-9])./gmi,'')" ></td>
                                                        <td><input class="form-control" type="number" name="qty" min="0"
                                                                oninput="this.setCustomValidity('')" onblur="findSum()"
                                                                onkeyup="this.value=this.value.replace(/(?![0-9])./gmi,'')" ></td>
                                                        <td><input class="form-control" type="number" name="qty" min="0"
                                                                oninput="this.setCustomValidity('')" onblur="findSum()"
                                                                onkeyup="this.value=this.value.replace(/(?![0-9])./gmi,'')"></td>
                                                        <td><input class="form-control" type="number" name="qty" min="0"
                                                                oninput="this.setCustomValidity('')" onblur="findSum()"
                                                                onkeyup="this.value=this.value.replace(/(?![0-9])./gmi,'')"></td>
                                                        <td><input class="form-control" type="number" name="qty" min="0"
                                                                oninput="this.setCustomValidity('')" onblur="findSum()"
                                                                onkeyup="this.value=this.value.replace(/(?![0-9])./gmi,'')"></td>
                                                        <td><input class="form-control" type="number" name="qty" min="0"
                                                                oninput="this.setCustomValidity('')" onblur="findSum()"
                                                                onkeyup="this.value=this.value.replace(/(?![0-9])./gmi,'')"></td>
                                                        <td><input class="form-control" type="number" name="qty" min="0"
                                                                oninput="this.setCustomValidity('')" onblur="findSum()"
                                                                onkeyup="this.value=this.value.replace(/(?![0-9])./gmi,'')"></td>
                                                        <td><input class="form-control" type="number" name="qty" min="0"
                                                                oninput="this.setCustomValidity('')" onblur="findSum()"
                                                                onkeyup="this.value=this.value.replace(/(?![0-9])./gmi,'')"></td>
                                                        <td><input class="form-control" type="number" name="qty" min="0"
                                                                oninput="this.setCustomValidity('')" onblur="findSum()"
                                                                onkeyup="this.value=this.value.replace(/(?![0-9])./gmi,'')"></td>
                                                        <td><input class="form-control" type="number" name="qty" min="0"
                                                                oninput="this.setCustomValidity('')" onblur="findSum()"
                                                                onkeyup="this.value=this.value.replace(/(?![0-9])./gmi,'')"></td>
                                                        <td><input class="form-control" type="number" name="qty" min="0"
                                                                oninput="this.setCustomValidity('')" onblur="findSum()"
                                                                onkeyup="this.value=this.value.replace(/(?![0-9])./gmi,'')"></td>
                                                        <td><input class="form-control" type="number" name="qty" min="0"
                                                                oninput="this.setCustomValidity('')" onblur="findSum()"
                                                                onkeyup="this.value=this.value.replace(/(?![0-9])./gmi,'')"></td>
                                                        <td><input class="form-control" type="number" name="jumlahUtara" min="0" id='total'
                                                                oninput="this.setCustomValidity('')"
                                                                onkeyup="this.value=this.value.replace(/(?![0-9])./gmi,'')" readonly></td>
                                                    </tbody>
                                                </table>
                        
                                                <div class="modal-footer">
                                                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                                  <button type="submit" class="btn btn-primary">Simpan</button>
                                                </div>
                            
                                          </form>
                                          
                                        </div>
                                      
                                      </div>
                                    </div>
                                  </div>
                            </td>
                            
                        </tr>

                        @endforeach

                    </tbody>
                </table>

                <div class="mb-3">       
                    <button class="btn btn-success" type="submit" title="Hantar"
                        style="float: right">Hantar</button>
                    <button class="btn btn-warning mx-2" type="submit" title="Kemaskini"
                        style="float: right">Kemaskini</button>
                    <a href="/pensampelan-pilihan" class="btn btn-primary mx-2" style="float: right">Kembali</a>
                </div>
            </div>

        </div>
    </div>
</div>