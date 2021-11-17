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
                    </div>
                    <form class="form theme-form" method="post">
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