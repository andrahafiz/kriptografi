<!-- Page Body Start-->
<div class="page-body">
    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-sm">
                    <h3>RSA</h3>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Kriptografi</a></li>
                        <li class="breadcrumb-item">RSA</li>
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
                    <!-- <form class="form theme-form" method="post" action="<?php echo base_url('C_CaesarCipher/test') ?>"> -->
                    <form class="form theme-form" method="post">
                        <div class="card-body">
                            <!-- <div class="alert alert-danger alert-dismissible fade show" role="alert"><strong>Holy !</strong> You can check in on some of those fields below.
                                <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close" data-bs-original-title="" title=""></button>
                            </div> -->
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label class="form-label" for="plaintext">Private Key</label>
                                        <textarea class="form-control form-control input-air-primary" id="privatekey" name="privatekey" rows="10" required style="resize:none;"><?= $PriveteKey ?></textarea>
                                        <div class="mt-3 text-center">
                                            <!-- <button class="btn btn-primary btn-sm btn-clipboard " type="button" data-clipboard-action="copy" data-clipboard-target="#privatekey"><i class="fa fa-copy"></i> Copy Private Key</button> -->
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="mb-3">
                                        <label class="form-label" for="plaintext">Public Key</label>
                                        <textarea class="form-control form-control input-air-primary" id="publickey" name="publickey" name="privatekey" rows="10" required style="resize:none;"><?= $PublicKey ?></textarea>
                                        <div class="mt-3 text-center">
                                            <!-- <button class="btn btn-primary  btn-sm btn-clipboard c" type="button" data-clipboard-action="copy" data-clipboard-target="#publickey"><i class="fa fa-copy"></i> Copy Public Key</button> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="row">
                                <div class="col mb-3">
                                    <div class="form-group m-t-5 m-checkbox-inline mb-0 custom-radio-ml">
                                        <div class="radio radio-primary">
                                            <input id="radioinline1" type="radio" name="tipe" value="enkripsi">
                                            <label class="astro mb-0" for="radioinline1">Enkripsi</label>
                                        </div>
                                        <div class="radio radio-primary">
                                            <input id="radioinline2" type="radio" name="tipe" value="dekripsi">
                                            <label class="astro mb-0" for="radioinline2">Dekripsi</label>
                                        </div>
                                    </div>
                                </div>
                            </div> -->

                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label class="form-label" id="labeltext" for="plaintext">Plain Text</label>
                                        <!-- <input type="text" class="form-control input-air-primary" name="plaintext" id="plaintext" placeholder="Text" autocomplete="on" required style="text-transform:uppercase" onkeypress="return event.charCode < 48 || event.charCode  >57"> -->
                                        <textarea class="form-control input-air-primary" id="plaintext" name="plaintext" rows="3" required placeholder="Text"></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-12 col-xl-12 text-center mt-3 mb-3">
                                    <!-- <input class="btn btn-primary" type="submit"></input> -->
                                    <input type="submit" class="btn btn-primary" name="submit" value="Proses" />
                                    <a href="<?= base_url('C_RSA/reset') ?>">
                                        <button class=" btn btn-light" type="button">Reset
                                    </a>
                                </div>
                                <div class="col-sm-12 col-xl-12 text-center mt-2 mb-5">
                                    <!-- <input class="btn btn-primary" type="submit"></input> -->
                                    <p class="h5 txt-primary">Text : <small class="txt-dark"><?php if (isset($text)) echo $text ?>
                                        </small></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 col-xl-6 text-center">

                                </div>

                            </div>
                            <div class="row">
                                <div class="col-sm-12 col-xl-6">
                                    <div class="card card-absolute">
                                        <div class="card-header bg-primary">
                                            <h5 class="text-white">Encipher</h5>
                                        </div>
                                        <div class="card-body">
                                            <?php if (isset($Encipher)) { ?>
                                                <p class="h6 txt-primary f-w-700">Chiper Text</p>
                                                <p id="hasil_encipher"><?= isset($Encipher) ? $Encipher : null ?></p>
                                                <p class="h6 txt-primary f-w-700">Hasil Encoding Base64</p>
                                                <p id="hasil_enc_base64"><?= base64_encode($Encipher) ?></p>
                                                <?= isset($Encipher) ? ' <div class="mt-3">
                                                <button class="btn btn-primary btn-clipboard" type="button" data-clipboard-action="copy" data-clipboard-target="#hasil_enc_base64"><i class="fa fa-copy"></i> Copy Enkripsi Base64</button><p class="text-muted"><br><span>Hasil Enkripsi tidak bisa langsung di baca, maka digunakan Enkripsi Base64</span>
                                            </div>' : null ?>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-xl-6">
                                    <div class="card card-absolute">
                                        <div class="card-header bg-secondary">
                                            <h5 class="text-white">Dencipher</h5>
                                        </div>
                                        <div class="card-body">

                                            <p class="h6 txt-secondary f-w-700" id="hasil_decipher"><?= isset($Dencipher) ? $Dencipher : null ?></p>
                                            <!-- <h6 class="border rounded card-body f-w-300" >
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                            </h6> -->


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