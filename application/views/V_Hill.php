<!-- Page Body Start-->
<div class="page-body">
    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-sm">
                    <h3>Playfair</h3>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Kriptografi</a></li>
                        <li class="breadcrumb-item">Playfair </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 col-lg-12">
                <div class="card">

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
                                            <h2><b>Pendahuluan</b></h2>
                                            <p>Algoritma Playfair cipher adalah salah satu bagian dari kriptografi klasik yaitu salah satu algoritma kunci simetri yang merupakan metode polygram cipher. Algoritma Playfair cipher menggunakan papan kunci yang berbentuk bujur sangkar dalam melakukan penyandian.</p>

                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingTwo">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link collapsed" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Enkripsi</button>
                                        </h5>
                                    </div>
                                    <div class="collapse" id="collapseTwo" aria-labelledby="headingTwo" data-bs-parent="#accordion">
                                        <div class="card-body">
                                            <form method="post" name="formEncryptAtbash" onsubmit="encryptPlayfair(document.getElementById('plaintextin').value, document.getElementById('cipherin').value); return false;">
                                                <input type="text" id="cipherin" style="text-transform: uppercase" pattern="[a-zA-Z /s]*" placeholder="key" required="">
                                                <input type="text" id="plaintextin" style="text-transform: uppercase" pattern="[a-zA-Z /s]*" placeholder="plaintext" required="">
                                                <button type="submit" class="button">Encrypt</button>
                                            </form>
                                            <div>Hasil enkripsi Playfair : <span id="playfairEncryptResult"></span></div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingThree">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Dekripsi</button>
                                    </h5>
                                </div>
                                <div class="collapse" id="collapseThree" aria-labelledby="headingThree" data-bs-parent="#accordion">
                                    <div class="card-body">
                                        <form method="post" name="formDecryptAtbash" onsubmit="decryptPlayfair(document.getElementById('textDPlayfair').value, document.getElementById('keyDPlayfair').value); return false;">
                                            <input type="text" id="keyDPlayfair" style="text-transform: uppercase" pattern="[a-zA-Z /s]*" placeholder="key" required="">
                                            <input type="text" id="textDPlayfair" style="text-transform: uppercase" pattern="[a-zA-Z /s]*" placeholder="ciphertext" required=""> -
                                            <button type="submit" class="button">Decrypt</button>
                                        </form>
                                        <div>Hasil dekripsi Playfair : <span id="playfairDecryptResult"></span></div>
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
</div>
<!-- Container-fluid Ends-->
</div>