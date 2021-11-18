<!-- Page Body Start-->
<div class="page-body">
    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-sm">
                    <h3>Atbash</h3>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Kriptografi</a></li>
                        <li class="breadcrumb-item">Atbash</li>
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
                        <h5>Atbash</h5>
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
                                            <p>Perancang algoritma kriptografi disebut kriptografer. Sandi Atbash adalah cipher substitusi sederhana dengan cara membalikkan alfabet sehingga setiap huruf dipetakan ke huruf di posisi yang sama kebalikan dari abjad.</p>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="headingTwo" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link collapsed" id="buttondua">Simulasi</button>
                                            </h5>
                                        </div>
                                    </div>
                                    <form class="form theme-form" method="post">
                                        <div class="collapse" id="collapseTwo" aria-labelledby="headingTwo" data-bs-parent="#accordion">
                                            <form class="form theme-form" method="post">
                                                <div class="card-body">
                                                    <div class="row" id="plaintext">
                                                        <div class="col">
                                                            <div class="mb-3">
                                                                <label class="form-label" for="plaintext" id="labeltext">Plain Text</label>
                                                                <input type="text" class="form-control" name="plaintext" id="plaintext" placeholder="Text" autocomplete="on" required style="text-transform:uppercase" onkeypress="return event.charCode < 48 || event.charCode  >57">
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="row">
                                                        <div class="col">
                                                            <div class="form-group m-t-15 m-checkbox-inline mb-0 custom-radio-ml">
                                                                <div class="radio radio-primary">
                                                                    <input id="radioinline1" type="radio" name="tipe" value="enkripsi" checked>
                                                                    <label class="mb-0" for="radioinline1">Enkripsi</label>
                                                                </div>
                                                                <div class="radio radio-primary">
                                                                    <input id="radioinline2" type="radio" name="tipe" value="dekripsi">
                                                                    <label class="mb-0" for="radioinline2">Deskripsi</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-12 col-xl-12 text-center mt-3 mb-5">
                                                            <input type="submit" class="btn btn-primary" name="tombol" value="Proses" />
                                                            <input class="btn btn-light" type="reset" value="Reset">
                                                        </div>
                                                        <div class="col-sm-12 col-xl-12 text-center mt-3 mb-5">
                                                            <!-- <input class="btn btn-primary" type="submit"></input> -->
                                                            <p class="h5 txt-primary">Text : <small class="txt-dark"><?= empty($text) ? NUll : $text ?></small></p>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-12 col-xl-6">
                                                            <div class="card card-absolute">
                                                                <div class="card-header bg-primary">
                                                                    <h5 class="text-white" style="margin-bottom:0px !important; padding-left:0px !important">Encipher</h5>
                                                                </div>
                                                                <div class="card-body">
                                                                    <p style="text-transform:uppercase"><?= $Encode ?></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-12 col-xl-6">
                                                            <div class="card card-absolute">
                                                                <div class="card-header bg-secondary">
                                                                    <h5 class="text-white" style="margin-bottom:0px !important; padding-left:0px !important">Decipher</h5>
                                                                </div>
                                                                <div class="card-body">
                                                                    <p style="text-transform:uppercase"><?= $Decode ?></p>
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
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->
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