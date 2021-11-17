<!-- Page Body Start-->
<div class="page-body">
    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-sm">
                    <h3>Transposisi Cipher</h3>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Kriptografi</a></li>
                        <li class="breadcrumb-item">Transposisi Cipher</li>
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
                                <div class="card-header" id="headingOne" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link">Materi</button>
                                    </h5>
                                </div>
                                <div class="collapse show" id="collapseOne" aria-labelledby="headingOne" data-bs-parent="#accordion">
                                    <div class="card-body">
                                        <div class="starter-template" style="text-align:left;">
                                            <h2><b>Pendahuluan</b></h2>
                                            <p>Cipher transposisi mengatur ulang huruf-huruf dari plaintext tanpa menggantinya. Sebagai contoh, transposition cipher yang sangat sederhana adalah rail fence, di mana plaintext ditulis per huruf dalam dua baris dan kemudian dibacakan per baris untuk dijadikan ciphertext</p>
                                            <p>Meskipun lemah sendiri, dapat dikombinasikan dengan cipher lain, seperti substitusi
                                                cipher, kombinasi yang lebih sulit untuk dipecahkan daripada cipher itu sendiri. NS
                                                <a href="/ciphers/adfgvx-cipher/">sandi ADFGVX</a> menggunakan transposisi kolumnar untuk meningkatkan keamanannya.
                                            </p>

                                            <h2><b>Contoh</b></h2>
                                            <p>Kunci untuk sandi transposisi kolumnar adalah kata kunci mis. <tt><i class="fas fa-gingerbread-man"></i></tt>. Panjang baris yang digunakan adalah
                                                sama dengan panjang kata kunci. Untuk mengenkripsi sepotong teks, mis.</p>

                                            <pre>mempertahankan tembok timur kastil</pre>
                                            <p>kami menuliskannya dengan cara khusus dalam beberapa baris (kata kuncinya di sini adalah <tt>GERMAN</tt>):</p>

                                            <pre><span style="text-decoration: underline;">G E R M A N</span>
d e f e n d
t h e e a s
t w a l l o
f t h e c a
s t l e x x</pre>

                                            <p>Pada contoh di atas, plainteks telah dipadatkan sehingga pas dalam persegi panjang. Ini dikenal sebagai transposisi kolumnar reguler.
                                                Transposisi kolumnar yang tidak teratur membuat karakter ini kosong, meskipun ini membuat dekripsi sedikit lebih sulit. Kolom sekarang disusun ulang
                                                sehingga huruf-huruf dalam kata kunci diurutkan menurut abjad.</p>

                                            <pre><span style="text-decoration: underline;">A E G M N R</span>
n e d e d f
a h t e s e
l w t l o a
c t f e a h
x t s e x l</pre>

                                            <p>Teks sandi dibacakan di sepanjang kolom:</p>

                                            <pre>nalcxehwttdttfseeleedsoaxfeahl</pre>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingTwo" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link collapsed" id="buttondua">Enkripsi</button>
                                        </h5>
                                    </div>
                                    <div class="collapse" id="collapseTwo" aria-labelledby="headingTwo" data-bs-parent="#accordion">
                                        <div class="card-body">
                                            <form class="form theme-form">
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="text">Plain Text</label>
                                                            <input class="form-control input-air-primary" name="p" id="p" type="text" placeholder="Masukan Kata/Kalimat" min="0" style="text-transform:uppercase">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col">
                                                            <div class="mb-3">
                                                                <label class="form-label" for="cipheralphabet">Key </label>
                                                                <input type="text" class="form-control" id="key" placeholder="Keyword" name="key" autocomplete="on" required style="text-transform:uppercase">
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-sm-12 col-xl-12 text-center mt-3 mb-5">
                                                                <input id="pc" name="pc" size="1" value="x" type="hidden">
                                                                <input name="btnEn" class="btn btn-primary" value="Encrypt" onclick="Encrypt()" type="button">
                                                                <input class="btn btn-light" type="reset" value="Reset">
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-sm-12 col-xl-12">
                                                                <div class="card card-absolute">
                                                                    <div class="card-header bg-primary">
                                                                        <h5 class="text-white" style="margin-bottom:0px !important; padding-left:0px !important">Enkripsi</h5>
                                                                    </div>
                                                                    <div class="card-body">
                                                                        <!-- <p id="c" style="text-transform:uppercase"></p> -->
                                                                        <textarea id="c" class="form-control m-t-25" name="c" rows="4" cols="50" placeholder="Hasil CipherText"></textarea>
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
                            <div class="card">
                                <div class="card-header" id="headingThree" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed " id="buttontiga">Dekripsi</button>
                                    </h5>
                                </div>
                                <div class="collapse" id="collapseThree" aria-labelledby="headingThree" data-bs-parent="#accordion">
                                    <div class="card-body">
                                        <form class="form theme-form">
                                            <div class="row">
                                                <div class="col">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="text">Chiper Text</label>
                                                        <input class="form-control input-air-primary" name="c2" id="c2" type="text" placeholder="Masukan Kata/Kalimat" min="0" style="text-transform:uppercase">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="cipheralphabet">Key </label>
                                                            <input type="text" class="form-control" id="key2" placeholder="Keyword" name="key" autocomplete="on" required style="text-transform:uppercase">
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-sm-12 col-xl-12 text-center mt-3 mb-5">
                                                            <input id="pc" name="pc" size="1" value="x" type="hidden">
                                                            <input name="btnDe" class="btn btn-primary" value="Decrypt" onclick="Decrypt()" type="button">
                                                            <input class="btn btn-light" type="reset" value="Reset">
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-sm-12 col-xl-12">
                                                            <div class="card card-absolute">
                                                                <div class="card-header bg-secondary">
                                                                    <h5 class="text-white" style="margin-bottom:0px !important; padding-left:0px !important">Dekripsi</h5>
                                                                </div>
                                                                <div class="card-body">
                                                                    <!-- <p id="c" style="text-transform:uppercase"></p> -->
                                                                    <textarea id="p2" class="form-control m-t-25" name="p" rows="4" cols="50" placeholder="Hasil CipherText"></textarea>
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
</div>
</div>
<!-- Container-fluid Ends-->
</div>