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
                    </div>
                    <form class="form theme-form" method="post">
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label class="form-label" for="plaintext">Key</label>
                                        <input class="form-control input-air-primary" name="key" id="key" type="text" placeholder="masukan key" style="text-transform:uppercase">
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label class="form-label" for="text">Text</label>
                                        <input type="text" class="form-control" name="text" id="text" placeholder="Masukan kata/kalimat" autocomplete="on" required style="text-transform:uppercase">
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
                                        <h3>Key </h3>
                                        <h4?> <b><?= $Key ?></b></h5>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12 col-xl-6">
                                        <div class="card card-absolute">
                                            <div class="card-header bg-primary">
                                                <h5 class="text-white">Encipher</h5>
                                            </div>
                                            <div class="card-body">
                                                <p style="text-transform:uppercase"><?= $Encipher ?></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-xl-6">
                                        <div class="card card-absolute">
                                            <div class="card-header bg-secondary">
                                                <h5 class="text-white">Decipher</h5>
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
    <!-- Container-fluid Ends-->
</div>
</div>