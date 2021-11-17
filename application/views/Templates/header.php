<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="viho admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, viho admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="<?php echo base_url() ?>assets/images/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="<?php echo base_url() ?>assets/images/favicon.png" type="image/x-icon">
    <title>Kriptografi Klasik | Keamanan Data</title>
    <!-- Google font-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
    <!-- Font Awesome-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/fontawesome.css">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/icofont.css">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/themify.css">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/flag-icon.css">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/feather-icon.css">
    <!-- Plugins css start-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/animate.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/chartist.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/owlcarousel.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/prism.css">
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/bootstrap.css">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/style.css">
    <link id="color" rel="stylesheet" href="<?php echo base_url() ?>assets/css/color-1.css" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/responsive.css">
    <script src="<?= base_url() ?>assets/js/jquery-3.5.1.min.js"></script>
</head>
<script type="text/javascript">
    function Encrypt() {
        plaintext = document.getElementById("p").value.toLowerCase().replace(/[^a-z]/g, "");
        if (plaintext.length < 1) {
            alert("silakan masukkan beberapa  plaintext");
            return;
        }
        var key = document.getElementById("key").value.toLowerCase().replace(/[^a-z]/g, "");
        var pc = document.getElementById("pc").value.toLowerCase().replace(/[^a-z]/g, "");
        if (pc == "") pc = "x";
        while (plaintext.length % key.length != 0) plaintext += pc.charAt(0);
        var colLength = plaintext.length / key.length;
        var chars = "abcdefghijklmnopqrstuvwxyz";
        ciphertext = "";
        k = 0;
        for (i = 0; i < key.length; i++) {
            while (k < 26) {
                t = key.indexOf(chars.charAt(k));
                arrkw = key.split("");
                arrkw[t] = "_";
                key = arrkw.join("");
                if (t >= 0) break;
                else k++;
            }
            for (j = 0; j < colLength; j++) ciphertext += plaintext.charAt(j * key.length + t);
        }
        document.getElementById("c").value = ciphertext;
    }

    function Decrypt(f) {
        ciphertext = document.getElementById("c2").value.toLowerCase().replace(/[^a-z]/g, "");
        if (ciphertext.length < 1) {
            alert("silakan masukkan beberapa ciphertext (hanya huruf)");
            return;
        }
        keyword = document.getElementById("key2").value.toLowerCase().replace(/[^a-z]/g, "");
        klen = keyword.length;
        if (klen <= 1) {
            alert("kata kunci harus minimal 2 karakter");
            return;
        }
        if (ciphertext.length % klen != 0) {
            alert("ciphertext belum diisi, hasilnya mungkin salah (kata kunci salah?)");
        }
        var cols = new Array(klen);
        var colLength = ciphertext.length / klen;
        for (i = 0; i < klen; i++) cols[i] = ciphertext.substr(i * colLength, colLength);
        var newcols = new Array(klen);
        chars = "abcdefghijklmnopqrstuvwxyz";
        j = 0;
        i = 0;
        while (j < klen) {
            t = keyword.indexOf(chars.charAt(i));
            if (t >= 0) {
                newcols[t] = cols[j++];
                arrkw = keyword.split("");
                arrkw[t] = "_";
                keyword = arrkw.join("");
            } else i++;
        }
        plaintext = "";
        for (i = 0; i < colLength; i++) {
            for (j = 0; j < klen; j++) plaintext += newcols[j].charAt(i);
        }
        document.getElementById("p2").value = plaintext;
    }
</script>

<script type="text/javascript">
    function resetFields(pForm, type) {
        if (type == 0) {
            document.getElementById('playfairCipherText').value = '';
            document.getElementById('playfairCipherDiv').innerHTML = '';
        } else {
            var text = document.getElementById('playfairCipherText').value;
            pForm.reset();
            repopulateReplace2(0);
            document.getElementById('playfairCipherRandom').disabled = true;
            document.getElementById('playfairCipherKey').disabled = false;
            document.getElementById('playfairCipherText').value = text;
            document.getElementById('playfairCipherDiv').innerHTML = '';
        }
        playfairCipher();
    }
</script>

<script type="text/javascript">
    var inChars = new Array('a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z');

    function repopulateReplace2(id) {
        if (id == 1) {
            var r1 = document.getElementById('playfairCipherReplace1').value;
            var r2 = document.getElementById('playfairCipherReplace2').value;
            if (r2 == r1 && r1 == 'I') {
                r2 = 'A';
            } else if (r2 == r1) {
                r2 = 'I';
            }
        } else {
            r2 = 'I'
        }
        document.getElementById('playfairCipherReplace2').options.length = 0;
        var j = 0;
        for (var i = 0; i < inChars.length; i++) {
            if (r1 != inChars[i].toUpperCase()) {
                if (i == 9) {
                    defSel = true;
                } else {
                    defSel = false;
                }
                if (r2 == inChars[i].toUpperCase()) {
                    sel = true;
                } else {
                    sel = false;
                }
                document.getElementById('playfairCipherReplace2').options[j] = new Option(inChars[i].toUpperCase(), inChars[i].toUpperCase(), defSel, sel);
                j++;
            }
        }
    }

    function populateSquare(action) {
        //Action = 0 => empty
        //Action = 1 => random
        //Action = 2 => standard with key
        //Action = 3 => get random or standard from document

        if (action == 3) {
            if (document.getElementById('playfairCipherManualCheck').checked) {
                action = 1;
            } else {
                action = 2;
            }
        }

        if (document.getElementById('playfairCipherReplaceCheck').checked) {
            var omit = '';
            var subs = [document.getElementById('playfairCipherReplace1').value, document.getElementById('playfairCipherReplace2').value];
        } else {
            var omit = document.getElementById('playfairCipherOmit').value;
            var subs = ['', ''];
        }

        var charList = new Array();
        for (var i = 0; i < inChars.length; i++) {
            if (inChars[i] != subs[0].toLowerCase() && inChars[i] != omit.toLowerCase()) {
                charList.push(inChars[i]);
            }
        }
        if (action == 0) {
            for (i = 0; i < 25; i++) {
                document.getElementById(i).value = '';
            }
        }
        if (action == 1) {
            for (var i = 0; i < 25; i++) {
                var pos = Math.floor((Math.random() * (25 - i)) + 1) - 1;
                if (pos >= charList.length) {
                    pos = (charList.length - 1);
                }
                if (pos < 0) {
                    pos = 0;
                }
                document.getElementById(i).value = charList[pos].toUpperCase();
                charList.splice(pos, 1);
            }
        }
        if (action == 2) {
            var key = document.getElementById('playfairCipherKey').value;
            var elID = 0;
            for (var i = 0; i < key.length; i++) {
                if (key.charAt(i).toUpperCase() == subs[0].toUpperCase()) {
                    var keyChar = subs[1].toUpperCase();
                } else {
                    var keyChar = key.charAt(i);
                }
                if (charList.indexOf(keyChar.toLowerCase()) > -1) {
                    document.getElementById(elID).value = keyChar.toUpperCase();
                    charList.splice(charList.indexOf(keyChar.toLowerCase()), 1);
                    elID++;
                }
            }
            var keyLength = 25 - charList.length;
            for (var i = 0; i < charList.length; i++) {
                document.getElementById(i + keyLength).value = charList[i].toUpperCase();
            }
        }
        playfairCipher();
    }

    function setEnabled(id) {
        if (id == 1) {
            if (document.getElementById('playfairCipherManualCheck').checked) {
                document.getElementById('playfairCipherRandom').disabled = false;
                document.getElementById('playfairCipherKey').disabled = true;
                populateSquare(0);
            } else {
                document.getElementById('playfairCipherRandom').disabled = true;
                document.getElementById('playfairCipherKey').disabled = false;
                populateSquare(2);
            }
        } else if (id == 2) {
            if (document.getElementById('playfairCipherReplaceCheck').checked) {
                document.getElementById('playfairCipherReplace1').disabled = false;
                document.getElementById('playfairCipherReplace2').disabled = false;
                document.getElementById('playfairCipherOmit').disabled = true;
                populateSquare(3);
            } else {
                document.getElementById('playfairCipherReplace1').disabled = true;
                document.getElementById('playfairCipherReplace2').disabled = true;
                document.getElementById('playfairCipherOmit').disabled = false;
                populateSquare(3);
            }
        } else if (id == 3) {
            if (document.getElementById('playfairCipherBreakCheck').checked) {
                document.getElementById('playfairCipherDoubleChar').disabled = false;
                document.getElementById('playfairCipherBreakMethod').disabled = false;
            } else {
                document.getElementById('playfairCipherDoubleChar').disabled = true;
                document.getElementById('playfairCipherBreakMethod').disabled = true;
            }
        }

        playfairCipher();
    }

    function checkValues(num) {
        if (document.getElementById('playfairCipherReplaceCheck').checked) {
            var omit = '';
            var subs = [document.getElementById('playfairCipherReplace1').value, document.getElementById('playfairCipherReplace2').value];
        } else {
            var omit = document.getElementById('playfairCipherOmit').value;
            var subs = ['', ''];
        }

        var charList = new Array();
        for (var i = 0; i < inChars.length; i++) {
            if (inChars[i] != subs[0].toLowerCase() && inChars[i] != omit.toLowerCase()) {
                charList.push(inChars[i]);
            }
        }

        var newVal = document.getElementById(num).value;
        if (newVal.toUpperCase() == subs[0]) {
            document.getElementById(num).value = subs[1];
            newVal = subs[1];
        }
        var newValIndex = charList.indexOf(newVal.toLowerCase());
        if (newValIndex > -1) {
            var charCounts = new Array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
            for (i = 0; i < 25; i++) {
                if (i != parseInt(num)) {
                    var oldValIndex = charList.indexOf(document.getElementById(i).value.toLowerCase());
                    charCounts[oldValIndex] = 1;
                }
            }
            if (charCounts[newValIndex] == 0) {
                document.getElementById(num).value = newVal.toUpperCase();
            } else {
                document.getElementById(num).value = '';
            }
        } else {
            document.getElementById(num).value = '';
        }
        playfairCipher();
    }

    function playfairCipher() {
        var chars = document.getElementById('playfairCipherText').value;
        if (chars.length == 0) {
            document.getElementById('playfairCipherDiv').innerHTML = '';
            return;
        }

        var keySquare = new Array();
        var emptyFound = 0;
        for (var i = 0; i < 25; i++) {
            keySquare.push(document.getElementById(i).value);
            if (document.getElementById(i).value == '') {
                emptyFound = 1;
            }
        }

        if (emptyFound == 1) {
            newDiv = '<b>Hasil :</b><br>Key square is incomplete';
            document.getElementById('playfairCipherDiv').innerHTML = newDiv;
            return;
        }

        var dropDownMethod = document.getElementById("playfairCipherMethod");
        var method = dropDownMethod.options[dropDownMethod.selectedIndex].value;

        var newDiv = '<b>CipherText :</b><br>';

        newDiv += '<div class="form-group"><div class="form-line"><textarea class="form-control no-resize" id="playfairCipherResult" rows="4">';

        if (document.getElementById('playfairCipherReplaceCheck').checked) {
            var omit = '';
            var subs = [document.getElementById('playfairCipherReplace1').value, document.getElementById('playfairCipherReplace2').value];
        } else {
            var omit = document.getElementById('playfairCipherOmit').value;
            var subs = ['', ''];
        }

        if (document.getElementById('playfairCipherBreakCheck').checked) {
            var doublesMethod = document.getElementById('playfairCipherBreakMethod').value;
            var replace = document.getElementById('playfairCipherDoubleChar').value;
        } else {
            var doublesMethod = 'breakNone';
            var replace = document.getElementById('playfairCipherDoubleChar').value;
        }

        var charList = new Array();
        for (var i = 0; i < inChars.length; i++) {
            if (inChars[i] != subs[0].toLowerCase() && inChars[i] != omit.toLowerCase()) {
                charList.push(inChars[i]);
            }
        }

        var charCount = new Array('', 0);
        var tempChars = '';
        if (doublesMethod != 'breakNone') {
            var c1 = '';
            var c2 = '';
            for (var i = 0; i < chars.length; i++) {
                if (c1 == '') {
                    if (omit == '' && chars.charAt(i).toUpperCase() == subs[0].toUpperCase()) {
                        if (chars.charAt(i) == chars.charAt(i).toUpperCase()) {
                            c1 = subs[1].toUpperCase();
                        } else {
                            c1 = subs[1].toLowerCase();
                        }
                        charCount[0] = c1;
                        charCount[1]++;
                    } else if (charList.indexOf(chars.charAt(i).toLowerCase()) > -1) {
                        c1 = chars.charAt(i);
                        charCount[0] = c1;
                        charCount[1]++;
                    }
                } else {
                    if (omit == '' && chars.charAt(i).toUpperCase() == subs[0].toUpperCase()) {
                        if (chars.charAt(i) == chars.charAt(i).toUpperCase()) {
                            c2 = subs[1].toUpperCase();
                        } else {
                            c2 = subs[1].toLowerCase();
                        }
                        charCount[0] = c2;
                        charCount[1]++;
                    } else if (charList.indexOf(chars.charAt(i).toLowerCase()) > -1) {
                        c2 = chars.charAt(i);
                        charCount[0] = c2;
                        charCount[1]++;
                    }
                }
                if (c1 != '' && c2 != '') {
                    if (c1.toLowerCase() == c2.toLowerCase()) {
                        if (c1 == c1.toUpperCase()) {
                            tempChars += replace.toUpperCase();
                            charCount[0] = replace.toUpperCase();
                        } else {
                            tempChars += replace.toLowerCase();
                            charCount[0] = replace.toLowerCase();
                        }
                        charCount[1]++;
                    }
                    if (doublesMethod == 'breakAll') {
                        c1 = c2;
                        c2 = '';
                    } else {
                        c1 = '';
                        c2 = '';
                    }
                }

                if (omit == '' && chars.charAt(i).toUpperCase() == subs[0].toUpperCase()) {
                    if (chars.charAt(i) == chars.charAt(i).toUpperCase()) {
                        tempChars += subs[1].toUpperCase();
                    } else {
                        tempChars += subs[1].toLowerCase();
                    }
                } else {
                    tempChars += chars.charAt(i);
                }

            }
            chars = tempChars;
        } else {
            for (var i = 0; i < chars.length; i++) {
                if (omit == '' && chars.charAt(i).toUpperCase() == subs[0].toUpperCase()) {
                    if (chars.charAt(i) == chars.charAt(i).toUpperCase()) {
                        charCount[0] = subs[1].toUpperCase();
                        tempChars += subs[1].toUpperCase();
                    } else {
                        charCount[0] = subs[1].toLowerCase();
                        tempChars += subs[1].toLowerCase();
                    }
                    charCount[1]++;
                } else if (charList.indexOf(chars.charAt(i).toLowerCase()) > -1) {
                    charCount[0] = chars.charAt(i);
                    charCount[1]++;
                    tempChars += chars.charAt(i);
                } else {
                    tempChars += chars.charAt(i);
                }
            }
            chars = tempChars;
        }

        if (charCount[1] % 2 != 0) {
            if (charCount[0] == charCount[0].toUpperCase()) {
                chars += replace.toUpperCase();
            } else {
                chars += replace.toLowerCase();
            }
        }

        //newDiv+=tempChars+'\n';
        //newDiv+=chars+'\n';
        //newDiv+=charCount[0]+' - '+charCount[1]+'\n\n';

        var i = 0;
        var firstChar = '';
        var secondChar = '';
        var newChars = '';
        while (i < chars.length) {
            if (firstChar == '') {
                if (charList.indexOf(chars.charAt(i).toLowerCase()) > -1) {
                    firstChar = chars.charAt(i);
                }
            } else {
                if (charList.indexOf(chars.charAt(i).toLowerCase()) > -1) {
                    secondChar = chars.charAt(i);
                }
            }
            if (firstChar != '' && secondChar != '') {
                var keyLocFirst = keySquare.indexOf(firstChar.toUpperCase());
                var rowNmbFirst = Math.floor(keyLocFirst / 5);
                var columnNmbFirst = (keyLocFirst % 5);
                var keyLocSecond = keySquare.indexOf(secondChar.toUpperCase());
                var rowNmbSecond = Math.floor(keyLocSecond / 5);
                var columnNmbSecond = (keyLocSecond % 5);
                if (method == 'Encrypt') {
                    var shift = 1;
                } else {
                    var shift = 4;
                }
                if (firstChar == secondChar && doublesMethod == 'breakNone') {
                    if (firstChar == firstChar.toUpperCase()) {
                        newChars += keySquare[((rowNmbFirst + shift) % 5) * 5 + ((columnNmbFirst + shift) % 5)].toUpperCase();
                    } else {
                        newChars += keySquare[((rowNmbFirst + shift) % 5) * 5 + ((columnNmbFirst + shift) % 5)].toLowerCase();
                    }
                    if (secondChar == secondChar.toUpperCase()) {
                        newChars += keySquare[((rowNmbSecond + shift) % 5) * 5 + ((columnNmbSecond + shift) % 5)].toUpperCase();
                    } else {
                        newChars += keySquare[((rowNmbSecond + shift) % 5) * 5 + ((columnNmbSecond + shift) % 5)].toLowerCase();
                    }
                } else if (rowNmbFirst == rowNmbSecond) { // Same row
                    if (firstChar == firstChar.toUpperCase()) {
                        newChars += keySquare[rowNmbFirst * 5 + ((columnNmbFirst + shift) % 5)].toUpperCase();
                    } else {
                        newChars += keySquare[rowNmbFirst * 5 + ((columnNmbFirst + shift) % 5)].toLowerCase();
                    }
                    if (secondChar == secondChar.toUpperCase()) {
                        newChars += keySquare[rowNmbSecond * 5 + ((columnNmbSecond + shift) % 5)].toUpperCase();
                    } else {
                        newChars += keySquare[rowNmbSecond * 5 + ((columnNmbSecond + shift) % 5)].toLowerCase();
                    }
                } else if (columnNmbFirst == columnNmbSecond) { //Same column
                    if (firstChar == firstChar.toUpperCase()) {
                        newChars += keySquare[((rowNmbFirst + shift) % 5) * 5 + columnNmbFirst].toUpperCase();
                    } else {
                        newChars += keySquare[((rowNmbFirst + shift) % 5) * 5 + columnNmbFirst].toLowerCase();
                    }
                    if (secondChar == secondChar.toUpperCase()) {
                        newChars += keySquare[((rowNmbSecond + shift) % 5) * 5 + columnNmbSecond].toUpperCase();
                    } else {
                        newChars += keySquare[((rowNmbSecond + shift) % 5) * 5 + columnNmbSecond].toLowerCase();
                    }
                } else { //Rectangle
                    if (firstChar == firstChar.toUpperCase()) {
                        newChars += keySquare[rowNmbFirst * 5 + columnNmbSecond].toUpperCase();
                    } else {
                        newChars += keySquare[rowNmbFirst * 5 + columnNmbSecond].toLowerCase();
                    }
                    if (secondChar == secondChar.toUpperCase()) {
                        newChars += keySquare[rowNmbSecond * 5 + columnNmbFirst].toUpperCase();
                    } else {
                        newChars += keySquare[rowNmbSecond * 5 + columnNmbFirst].toLowerCase();
                    }
                }

                firstChar = '';
                secondChar = '';
            }
            i++;
        }

        newCharsLoc = 0;
        for (var i = 0; i < chars.length; i++) {
            var currentChar = chars.charAt(i);
            if (currentChar.toUpperCase() == subs[0].toUpperCase()) {
                currentChar = subs[1];
            }
            var keyLoc = keySquare.indexOf(currentChar.toUpperCase());
            if (keyLoc > -1) {
                newDiv += newChars.charAt(newCharsLoc);
                newCharsLoc++;
            } else {
                newDiv += chars.charAt(i);
            }
        }
        while (newCharsLoc < newChars.length) {
            newDiv += newChars.charAt(newCharsLoc);
            newCharsLoc++;
        }

        newDiv += '</textarea>';
        document.getElementById('playfairCipherDiv').innerHTML = newDiv;
    }
</script>


<body>
    <!-- Loader starts-->
    <div class="loader-wrapper">
        <div class="theme-loader">
            <div class="loader-p"></div>
        </div>
    </div>
    <!-- Loader ends-->
    <!-- page-wrapper Start-->
    <div class="page-wrapper compact-wrapper" id="pageWrapper">
        <!-- Page Header Start-->
        <div class="page-main-header">
            <div class="main-header-right row m-0">
                <div class="main-header-left">
                    <div class="logo-wrapper">
                        <!-- <a href="index.html"><img class="img-fluid" src="<?= base_url() ?>assets/images/logo/logo.png" alt=""></a> -->
                    </div>
                    <div class="dark-logo-wrapper">
                        <!-- <a href="index.html"><img class="img-fluid" src="<?= base_url() ?>assets/images/logo/dark-logo.png" alt=""></a> -->
                    </div>
                    <div class="toggle-sidebar"><i class="status_toggle middle" data-feather="align-center" id="sidebar-toggle"></i></div>
                </div>
                <div class="nav-right col pull-right right-menu p-0">
                    <ul class="nav-menus">
                        <li><a class="text-dark" href="#!" onclick="javascript:toggleFullScreen()"><i data-feather="maximize"></i></a></li>
                        <li>
                            <div class="mode"><i class="fa fa-moon-o"></i></div>
                        </li>

                        <li class="onhover-dropdown p-0">
                            <button class="btn btn-primary-light" type="button"><a href="login_two.html"><i data-feather="log-out"></i>Log out</a></button>
                        </li>
                    </ul>
                </div>
                <div class="d-lg-none mobile-toggle pull-right w-auto"><i data-feather="more-horizontal"></i></div>
            </div>
        </div>
        <!-- Page Header Ends                              -->