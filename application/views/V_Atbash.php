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
                    </div>
                    <form class="form theme-form" method="post">
                        <div class="card-body">
                            <div class="row" id="plaintext">
                                <div class="col">
                                    <div class="mb-3">
                                        <label class="form-label" for="plaintext" id="labeltext">Plain Text</label>
                                        <input type="text" class="form-control" name="plaintext" id="plaintext" placeholder="Text" autocomplete="on" required style="text-transform:uppercase">
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
                                            <h5 class="text-white">Encipher</h5>
                                        </div>
                                        <div class="card-body">
                                            <p style="text-transform:uppercase"><?= $Encode ?></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-xl-6">
                                    <div class="card card-absolute">
                                        <div class="card-header bg-secondary">
                                            <h5 class="text-white">Decipher</h5>
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