
<body class="content">

        <div class="container-fluid">
          <div class="card" style="border-width: 1px; border-color:black; width:105%">
    
              <div class="card-body">
                <u><h4 class="text-center">Jadual Pemeriksaan Post Mortem Ruminan </h4></u>
                  <table class="table table-responsive table-center text-center ">
                      <thead>
                        <tr>
                          <th scope="col">No</th>
                          <th scope="col">Kategori</th>
                          <th scope="col">Bahagian</th>
                          <th scope="col">Sebab Musnah</th>
                          <th scope="col">Bilangan Kes</th>
                          <th scope="col">Nombor Tag</th>
                          <th scope="col">Keputusan</th>
                          @role('pengurus-rumah-sembelih')
                          <th scope="col">Tindakan</th>
                          <th scope="col">Jana Borang</th>
                          @endrole
                          {{-- <th scope="col">Laporan</th> --}}
                        </tr>
                      </thead>
                      <tbody>
    
                        <tr>
                          @foreach ($post_mortems as $post_mortem)
    
                          <td>{{$loop->iteration}}</td>
                          <td>{{$post_mortem->kategori_post_mortem}}</td>
                          <td>{{$post_mortem->bahagian}}</td>
                          <td>{{$post_mortem->musnah}}</td>
                          <td>{{$post_mortem->kes_post_mortem}}</td>
                          <td>{{$post_mortem->nombor_tag_post}}</td>
                          <td>{{$post_mortem->keputusan}}</td>
                          @role('pengurus-rumah-sembelih')
                          <td><button class="btn btn-info" data-toggle="modal" data-target="#pmModal{{$loop->iteration}}" type="button" style="float: right">Kemaskini</button></td>
    
                              <!-- Modal -->
                              <div class="modal fade" id="pmModal{{$loop->iteration}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                  <div class="modal-content">
                                    <div class="modal-header" style="background-color: aquamarine">
                                      <h5 class="modal-title" id="exampleModalLongTitle">Kemaskini Penemuan Post Mortem</h5>
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                    </div>
                                    <div class="modal-body">
    
                                      <form action="/post-mortem/{{$post_mortem->id}}" method="POST">
                                        @method('PUT')
                                        @csrf
                        
                                        <div class="row">
          
                                                    <div class="mb-3 col-md-3">
                                                        <label for="">Kategori</label>
                                                        <select class="form-select" aria-label="Default select example" name="kategori_post_mortem" id="kPM">
                                                            <option selected >{{ $post_mortem->kategori_post_mortem }}</option>
                                                        </select>
                                                    </div>
                                
                                                    <div class="mb-3 col-md-3">
                                                        <label for="">Bahagian</label>
                                                        <select class="form-select" aria-label="Default select example" name="bahagian" id="bH">
                                                          <option selected>{{ $post_mortem->bahagian }}</option>
                                                        </select>
                                                    </div>
                                
                                                    <div class="mb-3 col-md-3">
                                                        <label for="">Sebab Musnah</label>
                                                        <select class="form-select" aria-label="Default select example" name="musnah" id="sM" >
                                                            <option selected>{{ $post_mortem->musnah }}</option>
                                                        </select>
                                                    </div>
                                
                                                    <div class="mb-3 col-md-3">
                                                        <label for="">Bilangan Kes</label>
                                                        <input class="form-control" type="number" min="0" name="kes_post_mortem" value="{{ $post_mortem->kes_post_mortem }}"
                                                        oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');">
                                                    </div>
                                
                                                    <div class="mb-3 col-md-3">
                                                        <label for="">Nombor Tag</label>
                                                        <input class="form-control" type="text" min="0" name="nombor_tag_post" value="{{ $post_mortem->nombor_tag_post }}"
                                                        onkeyup="this.value = this.value.toUpperCase();">
                                                    </div>
                                
                                                    <div class="mb-3 col-md-3">
                                                        <label for="">Keputusan</label>
                                                        <select class="form-select" aria-label="Default select example" name="keputusan">
                                                            <option selected>{{ $post_mortem->keputusan }}</option>
                                                            <option value="Kondem Keseluruhan">Kondem Keseluruhan</option>
                                                            <option value="Kondem Sebahagian">Kondem Sebahagian</option>
                                                        </select>
                                                    </div>
                                
                                                </div>
    
                                            <div class="modal-footer">
                                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                              <button type="submit" class="btn btn-primary">Simpan</button>
                                            </div>
                        
                                        </form>
                                      
                                    </div>
                                  
                                  </div>
                                </div>
                              </div> 
                              
                          <td><a href="/tunjuk-pm/{{$post_mortem->id}}"><button class="btn btn-secondary" type="button" style="float: right">Jana</button></a></td>
                          @endrole
{{--                         
                            @if ($post_mortem->status == 1)
                              <td>Hantar</td>
                            @else
                              <td>Belum Hantar</td>
                                
                            @endif --}}
                                              
                        </tr>
                          @endforeach
                        
                      </tbody>
                    </table>
              </div>
          </div>
      </div>

{{-- @section('script')    
      <script>
          var stateObject = {
              "Karkass(Carcass)": {
                  "Generalized": ["Abnormal odours", "Abscess", "Bruising", "Cysts", "Discolored carcass(e.g. PSE,DFD)", "Emaciated carcass",
                      "Generalized congestion", "Generalized lymph node enlargement", "Hemorrhages", "Jaundice", "Pigmentation", "Polyarthritis",
                      "Serous athropy of fat", "Skin lessions", "Others(e.g. physical contamination due to negligence,hairy carcass,machine damage)",
                  ],
                  "Head": ["Lumps", "Lymph node enlargement", "Swelling",
                  ],
                  "Tongue": ["Abscess", "Cysts", "Discoloration", "Loss of texture", "Nodules", "Ulceration", "Vesicle lesions",
                      "Wounds",
                  ],
                  "Thoracic Cavity": ["Abscess(Cysts)", "Adhesions", "Blood splashing", "Bruising","Cysts", "Fracture(rib,cage,spinal)", "Hemorrhages",
                  "Hydrothorax", "Nodules(abnormal growth)", "Pleurisy","Tumors","Wounds","Others"
                  ],
                  "Abdominal Cavity": ["Abscess(Cysts)", "Adhesions", "Blood splashing","Cysts", "Fracture(rib,cage,spinal)", "Hemorrhages",
                  "Hernia", "Nodules(abnormal growth)", "Peritonitis","Wounds","Others"
                  ],
                  "Pelvic Cavity": ["Abscess", "Adhesions","Cysts", "Fracture(rib,cage,spinal)", "Hemorrhages",
                  "Nodules(abnormal growth)","Wounds(e.g. tail sore","Others"
                  ],
              },
              "Esofagus(Esophagus)": {
                  "Esofagus(Esophagus)": ["Abscess", "Blood splashing", "Nodules(abnormal growth)", "Parasites(e.g. Trichinella Spiralis)", "Others"
                  ],
                  
              },
              "Jantung(Heart)": {
                  "Jantung(Heart)": ["Abscess", "Congestion", "Endocarditis", "Hemorrhages", "Hydropericardium",
                  "Hypertrophy myocardium", "Infarction/necrosis", "Parasitic cysts","Pericarditis","Others"
                  ],
              },
              "Peparu(Lungs) & Trachea(Trakea)": {
                  "Peparu(Lungs) & Trachea(Trakea)": ["Abscess", "Atelactasis", "Blood splashing", "Congestion", "Discoloration",
                  "Emphysema", "Infarction/necrosis","Nodules(abnormal growth)", "Parasites(e.g. Lungworms)","Pleurisy","Pneumonia",
                  "Pulmonary edema", "Others"
                  ],
              },
              "Hati(Liver)": {
                  "Hati(Liver)": ["Abscess", "Adhesions", "Cirrhosis", "Congestion", "Cysts","Discoloration",
                  "Fatty liver", "Hepatitis","Hepatomegaly", "Infarction/necrosis","Jaundice","Lymph node enlarged/congested",
                  "Milkspots","Nodules(abnormal growth)","Parasites(e.g. Taenia solium)","Telangiectasis", "Others"
                  ],
              },
              "Buah Pinggang(Kidney)": {
                  "Buah Pinggang(Kidney)": ["Abscess", "Congestion", "Cysts","Discoloration", "Hemorrhages", "Hydronephrosis",
                 "Infarction/necrosis", "Nephritis","Nephromegaly","Nodules(abnormal growth)","Parasites(e.g. Kidney worms)","Others"
                  ],
              },
              "Limpa(Spleen)": {
                  "Limpa(Spleen)": ["Abscess","Adhesions", "Congestion","Discoloration","Haematoma", "Hemorrhages",
                 "Infarction/necrosis","Nodules(abnormal growth)","Splenomegaly","Others"
                  ],
              },
              "Perut,usus kecil,Usus Besar(Guts-stomach,Small & Large intestines": {
                  "Perut,usus kecil,Usus Besar(Guts-stomach,Small & Large intestines": ["Abscess","Adhesions","Button ulceration","Congestion","Cysts","Discoloration","Enteritis", "Gastroenteritis",
                  "Hemorrhages","Jaundice","Lymph node enlarged/congested","Nodules(abnormal growth)","Oedema","Parasites(e.g. Taenia solium)",
                  "Peritonitis","Pimply guts","Traumatic wounds","Others"
                  ],
              },
              "Sistem Pembiakan Betina": {
                  "Sistem Pembiakan Betina": ["Abscess", "Congestion", "Cysts","Foetus", "Metritis", "Mummified Foetus",
                  "Nodules(abnormal growth)","Pyometra","Others"
                  ],
              },
              "Udder": {
                  "Udder": ["Abscess", "Mastitis", "Wounds","Others"
                  ],
              },
              "Sistem Pembiakan Jantan": {
                  "Sistem Pembiakan Jantan": ["Abscess", "Congestion", "Cysts","Nodules", "Orchitis", "Testicular enlargement",
                  "Wounds","Others"
                  ],
              },
          }
          window.onload = function() {
              var kPM = document.getElementById("kPM"),
                  bH = document.getElementById("bH"),
                  sM = document.getElementById("sM");
              for (var kategori_post_mortem in stateObject) {
                  kPM.options[kPM.options.length] = new Option(kategori_post_mortem, kategori_post_mortem);
              }
              kPM.onchange = function() {
                  bH.length = 1; // remove all options bar first
                  sM.length = 1; // remove all options bar first
                  if (this.selectedIndex < 1) return; // done 
                  for (var bahagian in stateObject[this.value]) {
                      bH.options[bH.options.length] = new Option(bahagian, bahagian);
                  }
              }
              kPM.onchange(); // reset in case page is reloaded
              bH.onchange = function() {
                  sM.length = 1; // remove all options bar first
                  if (this.selectedIndex < 1) return; // done 
                  var musnah = stateObject[kPM.value][this.value];
                  for (var i = 0; i < musnah.length; i++) {
                      sM.options[sM.options.length] = new Option(musnah[i], musnah[i]);
                  }
              }
          }
      </script>
@endsection --}}
        
</body>

