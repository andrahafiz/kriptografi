<!-- Page Body Start-->
<div class="page-body">
    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-sm">
                    <h3>Simple Substitution Cipher</h3>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Kriptografi</a></li>
                        <li class="breadcrumb-item">Simple Substitution Cipher</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header pb-0">
                        <h5>Simple Substitution Cipher</h5>
                        <div class="card-body">
                            <div class="default-according" id="accordion">
                                <div class="card">
                                    <div class="card-header" id="headingOne">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Materi</button>
                                        </h5>
                                    </div>
                                    <div class="collapse show" id="collapseOne" aria-labelledby="headingOne" data-bs-parent="#accordion">
                                        <div class="card-body">
                                            <div class="starter-template" style="text-align:left;">
                                                <p><span style="font-size:16px">
                                                        <p style="vertical-align: inherit;">
                                                        <p style="vertical-align: inherit;">Berikut adalah contoh cepat untuk enkripsi dan dekripsi cipher substitusi sederhana. </p>
                                                        <p style="vertical-align: inherit;">Teks yang akan kami enkripsi adalah 'kriptografi'.</p>
                                                </p>
                                                <p><span style="font-size:16px">
                                                        <p style="vertical-align: inherit;">
                                                        <p style="vertical-align: inherit;">Kunci untuk cipher substitusi sederhana biasanya terdiri dari 26 huruf. </p>
                                                        <p style="vertical-align: inherit;">Contoh kuncinya adalah:</p>
                                                        <p style="vertical-align: inherit;">Plain Text : abcdefghijklmnopqrstuvwxyz</p>
                                                        <p style="vertical-align: inherit;">Chiper Text: yhkqgvxfoluapwmtzecjdbsnri</p>
                                                    </span></p>
                                                <table align="left" border="1" cellpadding="3" cellspacing="0" style="width:100%">
                                                    <tbody>
                                                        <tr>
                                                            <th scope="row" style="text-align:left">Plain Alphabet:</th>
                                                            <td style="text-align:center">a</td>
                                                            <td style="text-align:center">b</td>
                                                            <td style="text-align:center">c</td>
                                                            <td style="text-align:center">d</td>
                                                            <td style="text-align:center">e</td>
                                                            <td style="text-align:center">f</td>
                                                            <td style="text-align:center">g</td>
                                                            <td style="text-align:center">h</td>
                                                            <td style="text-align:center">i</td>
                                                            <td style="text-align:center">j</td>
                                                            <td style="text-align:center">k</td>
                                                            <td style="text-align:center">l</td>
                                                            <td style="text-align:center">m</td>
                                                            <td style="text-align:center">n</td>
                                                            <td style="text-align:center">o</td>
                                                            <td style="text-align:center">p</td>
                                                            <td style="text-align:center">q</td>
                                                            <td style="text-align:center">r</td>
                                                            <td style="text-align:center">s</td>
                                                            <td style="text-align:center">t</td>
                                                            <td style="text-align:center">u</td>
                                                            <td style="text-align:center">v</td>
                                                            <td style="text-align:center">w</td>
                                                            <td style="text-align:center">x</td>
                                                            <td style="text-align:center">y</td>
                                                            <td style="text-align:center">z</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row" style="text-align:left">Cipher Alphabet:</th>
                                                            <td style="text-align:center">y</td>
                                                            <td style="text-align:center">h</td>
                                                            <td style="text-align:center">k</td>
                                                            <td style="text-align:center">q</td>
                                                            <td style="text-align:center">g</td>
                                                            <td style="text-align:center">v</td>
                                                            <td style="text-align:center">x</td>
                                                            <td style="text-align:center">f</td>
                                                            <td style="text-align:center">o</td>
                                                            <td style="text-align:center">l</td>
                                                            <td style="text-align:center">u</td>
                                                            <td style="text-align:center">a</td>
                                                            <td style="text-align:center">p</td>
                                                            <td style="text-align:center">w</td>
                                                            <td style="text-align:center">m</td>
                                                            <td style="text-align:center">t</td>
                                                            <td style="text-align:center">z</td>
                                                            <td style="text-align:center">e</td>
                                                            <td style="text-align:center">c</td>
                                                            <td style="text-align:center">j</td>
                                                            <td style="text-align:center">d</td>
                                                            <td style="text-align:center">b</td>
                                                            <td style="text-align:center">s</td>
                                                            <td style="text-align:center">n</td>
                                                            <td style="text-align:center">r</td>
                                                            <td style="text-align:center">i</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <p><span style="font-size:16px">Contoh Enkripsi menggunakan key pada tabel di atas:</span></p>
                                                <table align="left" border="1" cellpadding="3" cellspacing="0" style="width:100%" class="mb-3">
                                                    <tbody>
                                                        <tr>
                                                            <th scope="row" style="text-align:left">Plain Alphabet:</th>
                                                            <td style="text-align:center">c</td>
                                                            <td style="text-align:center">r</td>
                                                            <td style="text-align:center">y</td>
                                                            <td style="text-align:center">p</td>
                                                            <td style="text-align:center">t</td>
                                                            <td style="text-align:center">o</td>
                                                            <td style="text-align:center">g</td>
                                                            <td style="text-align:center">r</td>
                                                            <td style="text-align:center">a</td>
                                                            <td style="text-align:center">p</td>
                                                            <td style="text-align:center">h</td>
                                                            <td style="text-align:center">y</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row" style="text-align:left">Cipher Alphabet:</th>
                                                            <td style="text-align:center">k</td>
                                                            <td style="text-align:center">e</td>
                                                            <td style="text-align:center">r</td>
                                                            <td style="text-align:center">t</td>
                                                            <td style="text-align:center">j</td>
                                                            <td style="text-align:center">m</td>
                                                            <td style="text-align:center">x</td>
                                                            <td style="text-align:center">e</td>
                                                            <td style="text-align:center">y</td>
                                                            <td style="text-align:center">t</td>
                                                            <td style="text-align:center">f</td>
                                                            <td style="text-align:center">r</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="headingTwo" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link collapsed" id="buttondua">Enkripsi</button>
                                            </h5>
                                        </div>
                                    </div>
                                    <form class="form theme-form" method="post">
                                        <div class="collapse" id="collapseTwo" aria-labelledby="headingTwo" data-bs-parent="#accordion">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="text">Text</label>
                                                            <input class="form-control input-air-primary" name="text" id="text" type="text" placeholder="Masukan Kata/Kalimat" min="0" style="text-transform:uppercase">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="cipheralphabet">Cipher Alphabet </label>
                                                            <input type="text" class="form-control" name="cipheralphabet" id="cipheralphabet" placeholder="Masukan Alphaber dari A-Z, tidak boleh duplikat" autocomplete="on" required style="text-transform:uppercase">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-sm-12 col-xl-12 text-center mt-3 mb-5">
                                                        <input type="submit" class="btn btn-primary" name="tombol" value="Proses" />
                                                        <input class="btn btn-light" type="reset" value="Reset">
                                                    </div>
                                                </div>
                                                <div class="row text-uppercase">
                                                    <div class="col text-center mb-5">
                                                        <h3>Cipher Alphabet</h3>
                                                        <h4><?= $cipherAlphabet ?></h4>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-12 col-xl-6">
                                                        <div class="card card-absolute">
                                                            <div class="card-header bg-primary">
                                                                <h5 class="text-white" style="margin-bottom:0px !important; padding-left:0px !important">Encipher</h5>
                                                            </div>
                                                            <div class="card-body">
                                                                <p style="text-transform:uppercase"><?= $Encipher ?></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-xl-6">
                                                        <div class="card card-absolute">
                                                            <div class="card-header bg-secondary">
                                                                <h5 class="text-white" style="margin-bottom:0px !important; padding-left:0px !important">Decipher</h5>
                                                            </div>
                                                            <div class="card-body">
                                                                <p style="text-transform:uppercase"><?= $Decipher ?></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->
</div>