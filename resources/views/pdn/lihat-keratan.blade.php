@extends('layouts.app')

@section('content')

<main class="content">

    <div class="container-fluid">

        <div class="header">
            <h1 class="header-title">
                Pemeriksaan Dalam Negara
            </h1>
    
        </div>

     
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">

                    <div class="col-12 col-xl-12">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title">Borang Permohonan Verifikasi Import Keratan Ayam/Susu Cair</h5>
                            </div>

                            <div class="card-body">
                                <form action="/kemaskini-keratan/{{$keratan->id}}" method="POST" enctype="multipart/form-data">
                                    @method('PUT')
                                    @csrf
            
                                    <div class="mb-3">

                                        <div class="row mb-3">
                                            <div class="col-2">
                                                <label class="form-label">Premis</label>
                                            </div>
                                            <div class="col-4">
                                                <input class="form-control" type="text" name="premis" onkeyup="this.value = this.value.toUpperCase();" required
                                                oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')" readonly readonly
                                                oninput="this.setCustomValidity('')" value="{{$keratan->premis}}" />
                                            </div>
                                        </div>
            
                                        <div class="row mb-3">
                                            
            
                                            <div class="col-2 mt-3">
                                                <label class="form-label">Nombor Telefon</label>
                                            </div>
                                            <div class="col-4 mt-3">
                                                <input class="form-control" type="number" name="telefon" required value="{{$keratan->telefon}}"
                                                oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')" readonly
                                                oninput="this.setCustomValidity('')" onkeyup="this.value=this.value.replace(/(?![0-9])./gmi,'')" />
                                            </div>
            
                                            <div class="col-2 mt-3">
                                                <label class="form-label">Emel</label>
                                            </div>
                                            <div class="col-4 mt-3">
                                                <input class="form-control" type="email" name="emel" required value="{{$keratan->emel}}"
                                                oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')" readonly
                                                oninput="this.setCustomValidity('')" />
                                            </div>

                                            <div class="col-2 mt-3">
                                                <label class="form-label">Faks</label>
                                            </div>
                                            <div class="col-4 mt-3">
                                                <input class="form-control" type="number" name="faks" required value="{{$keratan->faks}}"
                                                oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')" readonly
                                                oninput="this.setCustomValidity('')" onkeyup="this.value=this.value.replace(/(?![0-9])./gmi,'')" />
                                            </div>
            
                                            <div class="col-2 mt-3">
                                                <label class="form-label">Website</label>
                                            </div>
                                            <div class="col-4 mt-3">
                                                <input class="form-control" type="text" name="web" onkeyup="this.value = this.value.toUpperCase();" required
                                                oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')" readonly value="{{$keratan->web}}"
                                                oninput="this.setCustomValidity('')" />
                                            </div>

                                        </div>

                                        
                                        <div class="row mb-3">
                                            <div class="col-2">
                                                <label class="form-label">Alamat</label>
                                            </div>
                                            <div class="col-10">
                                                <textarea class="form-control" rows=5 name="alamat" onkeyup="this.value = this.value.toUpperCase();" required
                                                oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')" readonly
                                                oninput="this.setCustomValidity('')">{{$keratan->alamat}}</textarea>
                                            </div>
                                        </div>
            
                                    </div>
            
                                   
                                    <div class="mb-3 row">
                                        <div class="col-2">
                                            <label class="form-label">Zon</label>
                                        </div>
                                        <div class="col-4">
                                            <select name="zon"  size="1" class="form-select"
                                            aria-label="Default select example" required value="{{$keratan->zon}}"
                                            oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')" readonly
                                            oninput="this.setCustomValidity('')">
                                            <option   value="{{$keratan->zon}}">{{$keratan->zon}}</option>
        
                                        </select>
                                        </div>

                                        <div class="col-2">
                                            <label class="form-label">Negeri</label>
                                        </div>
                                        <div class="col-4">
                                            <select name="negeri"  size="1" class="form-select"
                                            aria-label="Default select example" required
                                            oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')" readonly
                                            oninput="this.setCustomValidity('')">
                                            <option   value="{{$keratan->negeri}}">{{$keratan->negeri}}</option>
        
                                        </select>
                                        </div>
                                    </div>

                                    <div class="mb-3 row">
                                        <div class="col-2">
                                            <label class="form-label">Daerah</label>
                                        </div>
                                        <div class="col-4">
                                            <select name="daerah"  size="1" class="form-select"
                                            aria-label="Default select example"required
                                            oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')" readonly
                                            oninput="this.setCustomValidity('')">
                                            <option  value="{{$keratan->daerah}}">{{$keratan->daerah}}</option>
                                            </select>
                                        </div>

                                        <div class="col-2">
                                            <label class="form-label">Poskod</label>
                                        </div>
                                        <div class="col-4">
                                            <input class="form-control" type="number" name="poskod" required
                                                oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')" readonly value="{{$keratan->poskod}}"
                                                oninput="this.setCustomValidity('')" onkeyup="this.value=this.value.replace(/(?![0-9])./gmi,'')" />
                                        </div>
                                    </div>

                                    <div class="mb-3 row">
                                       
                                        <div class="col-2">
                                            <label class="form-label">Klasifikasi Premis</label>
                                        </div>
                                        <div class="col-4">
                                            <input class="form-control" type="text" name="klasifikasi" onkeyup="this.value = this.value.toUpperCase();" required
                                                oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')" readonly value="{{$keratan->klasifikasi}}"
                                                oninput="this.setCustomValidity('')" />
                                        </div>
                                        <div class="col-2">
                                            <label class="form-label">Kaedah Audit</label>
                                        </div>
                                        <div class="col-4">
                                            <select class="form-select" aria-label="Default select example" name="kaedah" required
                                            oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')" readonly
                                            oninput="this.setCustomValidity('')">
                                                <option selected value="{{$keratan->kaedah}}">{{$keratan->kaedah}}</option>
                                              
                                                
                                            </select>
                                        </div>
                                    </div>


                                       
                                    <div class="row mb-3">
                                        <div class="col-2">
                                            <label class="form-label">Jenis Produk untuk Dieksport</label>
                                        </div>
                                        <div class="col-4">
                                            <input class="form-control" type="text" name="jenis_produk" onkeyup="this.value = this.value.toUpperCase();" required
                                            oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')" readonly value="{{$keratan->jenis_produk}}"
                                            oninput="this.setCustomValidity('')" />
                                        </div>

                                        {{-- <div class="col-2">
                                            <label class="form-label">Negara Eksport</label>
                                        </div>
                                        <div class="col-4">
                                            <select class="form-select" aria-label="Default select example" name="negara_eksport" required
                                                oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')" readonly
                                                oninput="this.setCustomValidity('')">
                                                    <option selected value="{{$keratan->negara_eksport}}">{{$keratan->negara_eksport}}</option>
                                                    <option value="Afghanistan">Afghanistan</option>
                                                    <option value="Albania">Albania</option>
                                                    <option value="Algeria">Algeria</option>
                                                    <option value="American Samoa">American Samoa</option>
                                                    <option value="Andorra">Andorra</option>
                                                    <option value="Angola">Angola</option>
                                                    <option value="Anguilla">Anguilla</option>
                                                    <option value="Antartica">Antarctica</option>
                                                    <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                                    <option value="Argentina">Argentina</option>
                                                    <option value="Armenia">Armenia</option>
                                                    <option value="Aruba">Aruba</option>
                                                    <option value="Australia">Australia</option>
                                                    <option value="Austria">Austria</option>
                                                    <option value="Azerbaijan">Azerbaijan</option>
                                                    <option value="Bahamas">Bahamas</option>
                                                    <option value="Bahrain">Bahrain</option>
                                                    <option value="Bangladesh">Bangladesh</option>
                                                    <option value="Barbados">Barbados</option>
                                                    <option value="Belarus">Belarus</option>
                                                    <option value="Belgium">Belgium</option>
                                                    <option value="Belize">Belize</option>
                                                    <option value="Benin">Benin</option>
                                                    <option value="Bermuda">Bermuda</option>
                                                    <option value="Bhutan">Bhutan</option>
                                                    <option value="Bolivia">Bolivia</option>
                                                    <option value="Bosnia and Herzegowina">Bosnia and Herzegowina</option>
                                                    <option value="Botswana">Botswana</option>
                                                    <option value="Bouvet Island">Bouvet Island</option>
                                                    <option value="Brazil">Brazil</option>
                                                    <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                                                    <option value="Brunei Darussalam">Brunei Darussalam</option>
                                                    <option value="Bulgaria">Bulgaria</option>
                                                    <option value="Burkina Faso">Burkina Faso</option>
                                                    <option value="Burundi">Burundi</option>
                                                    <option value="Cambodia">Cambodia</option>
                                                    <option value="Cameroon">Cameroon</option>
                                                    <option value="Canada">Canada</option>
                                                    <option value="Cape Verde">Cape Verde</option>
                                                    <option value="Cayman Islands">Cayman Islands</option>
                                                    <option value="Central African Republic">Central African Republic</option>
                                                    <option value="Chad">Chad</option>
                                                    <option value="Chile">Chile</option>
                                                    <option value="China">China</option>
                                                    <option value="Christmas Island">Christmas Island</option>
                                                    <option value="Cocos Islands">Cocos (Keeling) Islands</option>
                                                    <option value="Colombia">Colombia</option>
                                                    <option value="Comoros">Comoros</option>
                                                    <option value="Congo">Congo</option>
                                                    <option value="Congo">Congo, the Democratic Republic of the</option>
                                                    <option value="Cook Islands">Cook Islands</option>
                                                    <option value="Costa Rica">Costa Rica</option>
                                                    <option value="Cota D'Ivoire">Cote d'Ivoire</option>
                                                    <option value="Croatia">Croatia (Hrvatska)</option>
                                                    <option value="Cuba">Cuba</option>
                                                    <option value="Cyprus">Cyprus</option>
                                                    <option value="Czech Republic">Czech Republic</option>
                                                    <option value="Denmark">Denmark</option>
                                                    <option value="Djibouti">Djibouti</option>
                                                    <option value="Dominica">Dominica</option>
                                                    <option value="Dominican Republic">Dominican Republic</option>
                                                    <option value="East Timor">East Timor</option>
                                                    <option value="Ecuador">Ecuador</option>
                                                    <option value="Egypt">Egypt</option>
                                                    <option value="El Salvador">El Salvador</option>
                                                    <option value="Equatorial Guinea">Equatorial Guinea</option>
                                                    <option value="Eritrea">Eritrea</option>
                                                    <option value="Estonia">Estonia</option>
                                                    <option value="Ethiopia">Ethiopia</option>
                                                    <option value="Falkland Islands">Falkland Islands (Malvinas)</option>
                                                    <option value="Faroe Islands">Faroe Islands</option>
                                                    <option value="Fiji">Fiji</option>
                                                    <option value="Finland">Finland</option>
                                                    <option value="France">France</option>
                                                    <option value="France Metropolitan">France, Metropolitan</option>
                                                    <option value="French Guiana">French Guiana</option>
                                                    <option value="French Polynesia">French Polynesia</option>
                                                    <option value="French Southern Territories">French Southern Territories</option>
                                                    <option value="Gabon">Gabon</option>
                                                    <option value="Gambia">Gambia</option>
                                                    <option value="Georgia">Georgia</option>
                                                    <option value="Germany">Germany</option>
                                                    <option value="Ghana">Ghana</option>
                                                    <option value="Gibraltar">Gibraltar</option>
                                                    <option value="Greece">Greece</option>
                                                    <option value="Greenland">Greenland</option>
                                                    <option value="Grenada">Grenada</option>
                                                    <option value="Guadeloupe">Guadeloupe</option>
                                                    <option value="Guam">Guam</option>
                                                    <option value="Guatemala">Guatemala</option>
                                                    <option value="Guinea">Guinea</option>
                                                    <option value="Guinea-Bissau">Guinea-Bissau</option>
                                                    <option value="Guyana">Guyana</option>
                                                    <option value="Haiti">Haiti</option>
                                                    <option value="Heard and McDonald Islands">Heard and Mc Donald Islands</option>
                                                    <option value="Holy See">Holy See (Vatican City State)</option>
                                                    <option value="Honduras">Honduras</option>
                                                    <option value="Hong Kong">Hong Kong</option>
                                                    <option value="Hungary">Hungary</option>
                                                    <option value="Iceland">Iceland</option>
                                                    <option value="India">India</option>
                                                    <option value="Indonesia">Indonesia</option>
                                                    <option value="Iran">Iran (Islamic Republic of)</option>
                                                    <option value="Iraq">Iraq</option>
                                                    <option value="Ireland">Ireland</option>
                                                    <option value="Israel">Israel</option>
                                                    <option value="Italy">Italy</option>
                                                    <option value="Jamaica">Jamaica</option>
                                                    <option value="Japan">Japan</option>
                                                    <option value="Jordan">Jordan</option>
                                                    <option value="Kazakhstan">Kazakhstan</option>
                                                    <option value="Kenya">Kenya</option>
                                                    <option value="Kiribati">Kiribati</option>
                                                    <option value="Democratic People's Republic of Korea">Korea, Democratic People's Republic of</option>
                                                    <option value="Korea">Korea, Republic of</option>
                                                    <option value="Kuwait">Kuwait</option>
                                                    <option value="Kyrgyzstan">Kyrgyzstan</option>
                                                    <option value="Lao">Lao People's Democratic Republic</option>
                                                    <option value="Latvia">Latvia</option>
                                                    <option value="Lebanon">Lebanon</option>
                                                    <option value="Lesotho">Lesotho</option>
                                                    <option value="Liberia">Liberia</option>
                                                    <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                                                    <option value="Liechtenstein">Liechtenstein</option>
                                                    <option value="Lithuania">Lithuania</option>
                                                    <option value="Luxembourg">Luxembourg</option>
                                                    <option value="Macau">Macau</option>
                                                    <option value="Macedonia">Macedonia, The Former Yugoslav Republic of</option>
                                                    <option value="Madagascar">Madagascar</option>
                                                    <option value="Malawi">Malawi</option>
                                                    <option value="Malaysia">Malaysia</option>
                                                    <option value="Maldives">Maldives</option>
                                                    <option value="Mali">Mali</option>
                                                    <option value="Malta">Malta</option>
                                                    <option value="Marshall Islands">Marshall Islands</option>
                                                    <option value="Martinique">Martinique</option>
                                                    <option value="Mauritania">Mauritania</option>
                                                    <option value="Mauritius">Mauritius</option>
                                                    <option value="Mayotte">Mayotte</option>
                                                    <option value="Mexico">Mexico</option>
                                                    <option value="Micronesia">Micronesia, Federated States of</option>
                                                    <option value="Moldova">Moldova, Republic of</option>
                                                    <option value="Monaco">Monaco</option>
                                                    <option value="Mongolia">Mongolia</option>
                                                    <option value="Montserrat">Montserrat</option>
                                                    <option value="Morocco">Morocco</option>
                                                    <option value="Mozambique">Mozambique</option>
                                                    <option value="Myanmar">Myanmar</option>
                                                    <option value="Namibia">Namibia</option>
                                                    <option value="Nauru">Nauru</option>
                                                    <option value="Nepal">Nepal</option>
                                                    <option value="Netherlands">Netherlands</option>
                                                    <option value="Netherlands Antilles">Netherlands Antilles</option>
                                                    <option value="New Caledonia">New Caledonia</option>
                                                    <option value="New Zealand">New Zealand</option>
                                                    <option value="Nicaragua">Nicaragua</option>
                                                    <option value="Niger">Niger</option>
                                                    <option value="Nigeria">Nigeria</option>
                                                    <option value="Niue">Niue</option>
                                                    <option value="Norfolk Island">Norfolk Island</option>
                                                    <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                                    <option value="Norway">Norway</option>
                                                    <option value="Oman">Oman</option>
                                                    <option value="Pakistan">Pakistan</option>
                                                    <option value="Palau">Palau</option>
                                                    <option value="Panama">Panama</option>
                                                    <option value="Papua New Guinea">Papua New Guinea</option>
                                                    <option value="Paraguay">Paraguay</option>
                                                    <option value="Peru">Peru</option>
                                                    <option value="Philippines">Philippines</option>
                                                    <option value="Pitcairn">Pitcairn</option>
                                                    <option value="Poland">Poland</option>
                                                    <option value="Portugal">Portugal</option>
                                                    <option value="Puerto Rico">Puerto Rico</option>
                                                    <option value="Qatar">Qatar</option>
                                                    <option value="Reunion">Reunion</option>
                                                    <option value="Romania">Romania</option>
                                                    <option value="Russia">Russian Federation</option>
                                                    <option value="Rwanda">Rwanda</option>
                                                    <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option> 
                                                    <option value="Saint LUCIA">Saint LUCIA</option>
                                                    <option value="Saint Vincent">Saint Vincent and the Grenadines</option>
                                                    <option value="Samoa">Samoa</option>
                                                    <option value="San Marino">San Marino</option>
                                                    <option value="Sao Tome and Principe">Sao Tome and Principe</option> 
                                                    <option value="Saudi Arabia">Saudi Arabia</option>
                                                    <option value="Senegal">Senegal</option>
                                                    <option value="Seychelles">Seychelles</option>
                                                    <option value="Sierra">Sierra Leone</option>
                                                    <option value="Singapore">Singapore</option>
                                                    <option value="Slovakia">Slovakia (Slovak Republic)</option>
                                                    <option value="Slovenia">Slovenia</option>
                                                    <option value="Solomon Islands">Solomon Islands</option>
                                                    <option value="Somalia">Somalia</option>
                                                    <option value="South Africa">South Africa</option>
                                                    <option value="South Georgia">South Georgia and the South Sandwich Islands</option>
                                                    <option value="Span">Spain</option>
                                                    <option value="SriLanka">Sri Lanka</option>
                                                    <option value="St. Helena">St. Helena</option>
                                                    <option value="St. Pierre and Miguelon">St. Pierre and Miquelon</option>
                                                    <option value="Sudan">Sudan</option>
                                                    <option value="Suriname">Suriname</option>
                                                    <option value="Svalbard">Svalbard and Jan Mayen Islands</option>
                                                    <option value="Swaziland">Swaziland</option>
                                                    <option value="Sweden">Sweden</option>
                                                    <option value="Switzerland">Switzerland</option>
                                                    <option value="Syria">Syrian Arab Republic</option>
                                                    <option value="Taiwan">Taiwan, Province of China</option>
                                                    <option value="Tajikistan">Tajikistan</option>
                                                    <option value="Tanzania">Tanzania, United Republic of</option>
                                                    <option value="Thailand">Thailand</option>
                                                    <option value="Togo">Togo</option>
                                                    <option value="Tokelau">Tokelau</option>
                                                    <option value="Tonga">Tonga</option>
                                                    <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                                    <option value="Tunisia">Tunisia</option>
                                                    <option value="Turkey">Turkey</option>
                                                    <option value="Turkmenistan">Turkmenistan</option>
                                                    <option value="Turks and Caicos">Turks and Caicos Islands</option>
                                                    <option value="Tuvalu">Tuvalu</option>
                                                    <option value="Uganda">Uganda</option>
                                                    <option value="Ukraine">Ukraine</option>
                                                    <option value="United Arab Emirates">United Arab Emirates</option>
                                                    <option value="United Kingdom">United Kingdom</option>
                                                    <option value="United States">United States</option>
                                                    <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                                                    <option value="Uruguay">Uruguay</option>
                                                    <option value="Uzbekistan">Uzbekistan</option>
                                                    <option value="Vanuatu">Vanuatu</option>
                                                    <option value="Venezuela">Venezuela</option>
                                                    <option value="Vietnam">Viet Nam</option>
                                                    <option value="Virgin Islands (British)">Virgin Islands (British)</option>
                                                    <option value="Virgin Islands (U.S)">Virgin Islands (U.S.)</option>
                                                    <option value="Wallis and Futana Islands">Wallis and Futuna Islands</option>
                                                    <option value="Western Sahara">Western Sahara</option>
                                                    <option value="Yemen">Yemen</option>
                                                    <option value="Serbia">Serbia</option>
                                                    <option value="Zambia">Zambia</option>
                                                    <option value="Zimbabwe">Zimbabwe</option>
                                            </select>
                                        </div> --}}
                                    </div>

                                    <div class="mb-3 row">
                                        <div class="col-2">
                                            <label class="form-label">Nama Pemeriksa 1</label>
                                        </div>
                                        <div class="col-4">
                                            <select class="form-select" aria-label="Default select example" name="pemeriksa_1" required
                                            oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')" readonly
                                            oninput="this.setCustomValidity('')">
                                                <option selected value="{{$keratan->pemeriksa_1}}">{{$keratan->pemeriksa_1}}</option>
                                              
                                               
                                            </select>
                                        </div>

                                        <div class="col-2">
                                            <label class="form-label">Nama Pemeriksa 2</label>
                                        </div>
                                        <div class="col-4">
                                            <select class="form-select" aria-label="Default select example" name="pemeriksa_2" required
                                            oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')" readonly
                                            oninput="this.setCustomValidity('')">
                                                <option selected value="{{$keratan->pemeriksa_2}}">{{$keratan->pemeriksa_2}}</option>
                                               
                                            </select>
                                        </div>
                                    </div>

                                    <div class="mb-3 row">
                                        <div class="col-2">
                                            <label class="form-label">Nama Pemeriksa 3</label>
                                        </div>
                                        <div class="col-4">
                                            <select class="form-select" aria-label="Default select example" name="pemeriksa_3" required
                                            oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')" readonly
                                            oninput="this.setCustomValidity('')">
                                                <option selected value="{{$keratan->pemeriksa_3}}">{{$keratan->pemeriksa_3}}</option>
                                             
                                            </select>
                                        </div>

                                        <div class="col-2">
                                            <label class="form-label">Nama Pemeriksa 4</label>
                                        </div>
                                        <div class="col-4">
                                            <select class="form-select" aria-label="Default select example" name="pemeriksa_4" required
                                            oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')" readonly
                                            oninput="this.setCustomValidity('')">
                                                <option selected value="{{$keratan->pemeriksa_4}}">{{$keratan->pemeriksa_4}}</option>
                                              
                                            </select>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <div class="col-2">
                                            <label class="form-label">Catatan</label>
                                        </div>
                                        <div class="col-10">
                                            <textarea class="form-control" rows=5 name="catatan" onkeyup="this.value = this.value.toUpperCase();" required
                                            oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')" readonly
                                            oninput="this.setCustomValidity('')">{{$keratan->catatan}}</textarea>
                                        </div>
                                    </div>
            
                            
            
                                    <!-- Button trigger modal -->
            
                                    <div class="d-grip gap-2 d-md flex justify-content-md-center mb-3 text-center">
                                        <a href="/keratan" class="btn btn-primary">Kembali</a>
                                        
                                    </div>
  
                                    
                        
                                </form>
                            </div>
   
                        </div>
                    </div>

                </div>
            </div>
        </div>



    </div>



</main>

@endsection

@section('script')

<script>
    var stateObject = {
        "Zon Utara": {
            "Perak": ["Bagan Datuk", "Batang Padang", "Hulu Perak", "Hilir Perak", "Kinta", "Kampar",
                "Kuala Kangsar", "Kerian", "Muallim", "Manjung", "Larut,Matang & Selama", "Perak Tengah"
            ],
            "Pulau Pinang": ["Seberang Perai Utara", "Seberang Perai Selatan", "Seberang Perai Tengah",
                "Timur Laut Pulau Pinang", "Barat Daya Pulau Pinang", "Seberang Perai Selatan"
            ],
            "Kedah": ["Kuala Muda", "Kota Setar", "Langkawi", "Sungai Petani", "Kulim", "Kubang Pasu", "Baling",
                "Pendang", "Yan", "Sik", "Padang Terap", "Pokok Sena", "Bandar Baharu"
            ],
            "Perlis": ["Arau", "Kangar", "Padang Besar"],
        },
        "Zon Tengah": {
            "Selangor": ["Kuala Selangor", "Gombak", "Petaling", "Sepang", "Hulu Langat", "Klang", "Kuala Langat",
                "Hulu Selangor", "Sabak Bernam"
            ],
            "WP. Kuala Lumpur": ["Kuala Lumpur"],
            "WP. Putrajaya": ["Putrajaya"],
            "Melaka": ["Alor Gajah", "Jasin", "Melaka Tengah"],
            "Negeri Sembilan": ["Seremban", "Jempol", "Port Dickson", "Kuala Pilah", "Tampin", "Rembau", "Jelebu"],
        },
        "Zon Timur": {
            "Pahang": ["Cameron Highlands", "Bentong", "Kuantan", "Temerloh", "Maran", "Rompin", "Pekan", "Bera",
                "Raub", "Jerantut", "Lipis"
            ],
            "Terengganu": ["Kuala Terengganu", "Kemaman", "Dungun", "Besut", "Marang", "Hulu Terengganu", "Setiu",
                "Kuala Nerus"
            ],
            "Kelantan": ["Kota Bharu", "Pasir Mas", "Kuala Krai", "Tumpat", "Bachok", "Tanah Merah", "Pasir Puteh",
                "Machang", "Gua Musang", "Jeli"
            ],
        },
        "Zon Selatan": {
            "Johor": ["Johor Bahru", "Batu Pahat", "Kluang", "Kulai", "Muar", "Kota Tinggi", "Segamat", "Pontian",
                "Tangkak", "Mersing"
            ],
        },
        "Sabah": {
            "Sabah": ["Kota Kinabalu", "Tawau", "Sandakan", "Lahad Datu", "Keningau", "Kinabatangan", "Semporna",
                "Papar", "Penampang", "Beluran", "Tuaran", "Ranau", "Kota Belud", "Kudat", "kota Marudu",
                "Beaufort", "Kunak", "Tenom", "Putatan", "Pitas", "Tambunan", "Tongod", "Sipitang", "Nabawan",
                "Kuala Penyu"
            ],
            "Labuan": ["Labuan"],
        },
        "Sarawak": {
            "Sarawak": ["Kuching", "Miri", "Sibu", "Bintulu", "Serian", "Kota Samarahan", "Sri Aman", "Marudi",
                "Betong", "Sarikei", "Kapit", "Bau", "Limbang", "Saratok", "Mukah", "Simunjan", "Lawas",
                "Belaga", "Lundu", "Asajaya"
            ],
        },
    }
    window.onload = function() {
        var countySel = document.getElementById("countySel"),
            stateSel = document.getElementById("stateSel"),
            districtSel = document.getElementById("districtSel");
        for (var zon in stateObject) {
            countySel.options[countySel.options.length] = new Option(zon, zon);
        }
        countySel.onchange = function() {
            stateSel.length = 1; // remove all options bar first
            districtSel.length = 1; // remove all options bar first
            if (this.selectedIndex < 1) return; // done 
            for (var negeri in stateObject[this.value]) {
                stateSel.options[stateSel.options.length] = new Option(negeri, negeri);
            }
        }
        countySel.onchange(); // reset in case page is reloaded
        stateSel.onchange = function() {
            districtSel.length = 1; // remove all options bar first
            if (this.selectedIndex < 1) return; // done 
            var daerah = stateObject[countySel.value][this.value];
            for (var i = 0; i < daerah.length; i++) {
                districtSel.options[districtSel.options.length] = new Option(daerah[i], daerah[i]);
            }
        }
    }
</script>


@endsection