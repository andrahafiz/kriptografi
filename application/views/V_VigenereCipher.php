<!-- Page Body Start-->
<div class="page-body">
    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-sm">
                    <h3>Vigenere Cipher</h3>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Kriptografi</a></li>
                        <li class="breadcrumb-item">Vigenere Cipher</li>
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
                        <h5>Vigenere Cipher</h5>
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
                                            <p><span>Dalam kriptografi, sandi Vigenére adalah metode enkripsi teks alfabet dengan menggunakan serangkaian sandi Caesar</a> yang berbeda berdasarkan huruf dari kata kunci. Ini adalah bentuk sederhana dari substitusi polialfabetik.</span></p>

                                            <p><span>Sandi Vigenére telah diciptakan kembali berkali-kali. Metode ini awalnya dijelaskan oleh Giovan Battista Bellaso dalam bukunya tahun 1553 La cifra del. Tanda tangan. Giovan Battista Bellaso; namun, skema itu kemudian disalahartikan sebagai Blaise de Vigenére pada abad ke-19, dan sekarang dikenal luas sebagai sandi Vigené.</span></p>

                                            <p><span>Skema cipher ini menggunakan string teks (katakanlah, sebuah kata) sebagai kunci, yang kemudian digunakan untuk melakukan sejumlah pergeseran pada plaintext.</span></p>

                                            <p><span>Misalnya, anggap kuncinya adalah &#39;sandi&#39;. Setiap alfabet kunci dikonversi ke nilai numeriknya masing-masing: Dalam hal ini,</span></p>

                                            <p><span>c &rarr; 2, i &rarr; 8, p &rarr; 15, h &rarr; 7, e &rarr; 4, r &rarr; 17.</span></p>

                                            <p><span>Kunyi nya adalah : 2 8 15 7 4 17.</span></p>

                                            <p>&nbsp;</p>

                                            <p><strong><span style="font-size:22px">Algoritma</span></strong></p>

                                            <ul>
                                                <li><span>Pengirim dan penerima memutuskan sebuah kunci. Ucapkan &#39;sandi&#39; adalah kuncinya. Representasi numerik dari kunci ini adalah &#39;2 8 15 7 4 17&#39;</span></li>
                                                <li><span>Pengirim ingin mengenkripsi pesan, katakan &#39;kriptografi&#39;. Dia akan mengatur plaintext dan kunci numerik sebagai berikut</span></li>
                                            </ul>

                                            <table align="left" border="1" cellpadding="3" cellspacing="0" style="width:100%">
                                                <tbody>
                                                    <tr>
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
                                                        <td style="text-align:center">2</td>
                                                        <td style="text-align:center">8</td>
                                                        <td style="text-align:center">15</td>
                                                        <td style="text-align:center">7</td>
                                                        <td style="text-align:center">4</td>
                                                        <td style="text-align:center">17</td>
                                                        <td style="text-align:center">2</td>
                                                        <td style="text-align:center">8</td>
                                                        <td style="text-align:center">15</td>
                                                        <td style="text-align:center">7</td>
                                                        <td style="text-align:center">4</td>
                                                        <td style="text-align:center">17</td>
                                                    </tr>
                                                </tbody>
                                            </table>

                                            <p>&nbsp;</p>

                                            <ul>
                                                <li><span>Pengirim ingin mengenkripsi pesan, katakan &#39;kriptografi&#39;. Dia akan mengatur plaintext dan kunci numerik sebagai berikut &minus;</span><span>​</span></li>
                                            </ul>

                                            <table align="left" border="1" cellpadding="3" cellspacing="0" style="width:100%">
                                                <tbody>
                                                    <tr>
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
                                                        <td style="text-align:center">2</td>
                                                        <td style="text-align:center">8</td>
                                                        <td style="text-align:center">15</td>
                                                        <td style="text-align:center">7</td>
                                                        <td style="text-align:center">4</td>
                                                        <td style="text-align:center">17</td>
                                                        <td style="text-align:center">2</td>
                                                        <td style="text-align:center">8</td>
                                                        <td style="text-align:center">15</td>
                                                        <td style="text-align:center">7</td>
                                                        <td style="text-align:center">4</td>
                                                        <td style="text-align:center">17</td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align:center">e</td>
                                                        <td style="text-align:center">z</td>
                                                        <td style="text-align:center">n</td>
                                                        <td style="text-align:center">w</td>
                                                        <td style="text-align:center">x</td>
                                                        <td style="text-align:center">f</td>
                                                        <td style="text-align:center">i</td>
                                                        <td style="text-align:center">z</td>
                                                        <td style="text-align:center">p</td>
                                                        <td style="text-align:center">w</td>
                                                        <td style="text-align:center">l</td>
                                                        <td style="text-align:center">p</td>
                                                    </tr>
                                                </tbody>
                                            </table>

                                            <p>&nbsp;</p>

                                            <ul>
                                                <li><span>Di sini, setiap karakter teks biasa telah digeser dengan jumlah yang berbeda &ndash; dan jumlah itu ditentukan oleh kuncinya. Kunci harus kurang dari atau sama dengan ukuran pesan.</span></li>
                                                <li><span>Untuk dekripsi, penerima menggunakan kunci yang sama dan menggeser ciphertext yang diterima dalam urutan terbalik untuk mendapatkan plaintext.</span></li>
                                            </ul>

                                            <table align="left" border="1" cellpadding="3" cellspacing="0" style="width:100%">
                                                <tbody border="1">
                                                    <tr>
                                                        <td style="text-align:center">e</td>
                                                        <td style="text-align:center">z</td>
                                                        <td style="text-align:center">n</td>
                                                        <td style="text-align:center">w</td>
                                                        <td style="text-align:center">x</td>
                                                        <td style="text-align:center">f</td>
                                                        <td style="text-align:center">i</td>
                                                        <td style="text-align:center">z</td>
                                                        <td style="text-align:center">p</td>
                                                        <td style="text-align:center">w</td>
                                                        <td style="text-align:center">l</td>
                                                        <td style="text-align:center">p</td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align:center">2</td>
                                                        <td style="text-align:center">8</td>
                                                        <td style="text-align:center">15</td>
                                                        <td style="text-align:center">7</td>
                                                        <td style="text-align:center">4</td>
                                                        <td style="text-align:center">17</td>
                                                        <td style="text-align:center">2</td>
                                                        <td style="text-align:center">8</td>
                                                        <td style="text-align:center">15</td>
                                                        <td style="text-align:center">7</td>
                                                        <td style="text-align:center">4</td>
                                                        <td style="text-align:center">17</td>
                                                    </tr>
                                                    <tr>
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
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="headingTwo" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link collapsed" id="buttondua">Simulasi</button>
                                            </h5>
                                        </div>
                                    </div>
                                    <div class="collapse" id="collapseTwo" aria-labelledby="headingTwo" data-bs-parent="#accordion">
                                        <div class="card-body">
                                            <form class="form theme-form" method="post">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col">
                                                            <div class="mb-3">
                                                                <label class="form-label" for="plaintext">Key</label>
                                                                <input class="form-control input-air-primary" name="key" id="key" type="text" placeholder="masukan key" style="text-transform:uppercase" onkeypress="return event.charCode < 48 || event.charCode  >57">
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="row">
                                                        <div class="col">
                                                            <div class="mb-3">
                                                                <label class="form-label" for="text" id="labeltext">Plain Text</label>
                                                                <input type="text" class="form-control" name="text" id="text" placeholder="Masukan kata/kalimat" autocomplete="on" required style="text-transform:uppercase" onkeypress="return event.charCode < 48 || event.charCode  >57">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col">
                                                            <div class="form-group m-t-15 m-checkbox-inline mb-0 custom-radio-ml">
                                                                <div class="radio radio-primary">
                                                                    <input id="radioinline1" type="radio" name="tipe" value="enkripsi" checked>
                                                                    <label class="astro mb-0" for="radioinline1">Enkripsi</label>
                                                                </div>
                                                                <div class="radio radio-primary">
                                                                    <input id="radioinline2" type="radio" name="tipe" value="dekripsi">
                                                                    <label class="astro mb-0" for="radioinline2">Dekripsi</label>
                                                                </div>

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
                                                        <div class="col text-center">
                                                            <div class="mb-5">
                                                                <p class="h5 txt-primary">Text : <small class="txt-dark"><?= $text ?></small></p>
                                                                <p class="h5 txt-primary">Key : <small class="txt-dark"><?= $key ?></small></p>
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
                                            </form>
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

    </div>
    <!-- Container-fluid Ends-->
</div>
</div>
<script type="text/javascript">
    $('input[name="tipe"]').on("click", function() {
        var tipe = $('input[name="tipe"]:checked').val();
        if (tipe == "dekripsi") {
            // alert(tipe);
            $("#labeltext").text("Chiper Text");
            // $("#plaintext").attr("Masukan Text Anda", "Type a Location")
        } else {
            $("#labeltext").text("Plain Text");
        }

    });
</script>