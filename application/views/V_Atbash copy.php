<html>

<head>
    <title> Hill Cipher</title>
</head>

<body>
    <h1> Hill Cipher </h1>
    This site illustrates encryption and decryption via Hill Cipher.</br>
    The Encryption/Decryption Logic is implemented in python. The code is present over <a href="hill.tar.gz">here</a>.</br>
    The <a href="Readme.txt">Readme</a> file contains the salient features of this code and gives some insight into the working.
    <h2> Encryption using Hill Cipher</h2>
    <form name="enc" id="enc" method="post" action="hill.php?op=enc">
        <table border="0">
            <tr>
                <td>Plain Text :</td>
                <td><textarea name="plain" id="plain" rows="5" cols="50"><?php
                                                                            if ($_GET['op'] == "enc") {
                                                                                echo $_POST['plain'];
                                                                            }
                                                                            ?></textarea></td>
            </tr>
            <tr>
                <td></td>
                <td>Please insert the key in <i>numeric form</i> only</td>
            </tr>
            <tr>
                <td>Key :</td>
                <td>
                    <table>
                        <tr>
                            <td><input type="text" name="k1" maxlength="2" size="1" value="<?php if ($_POST['k1'] != "") {
                                                                                                echo $_POST['k1'];
                                                                                            } ?>"></td>
                            <td><input type="text" name="k2" maxlength="2" size="1" value="<?php if ($_POST['k2'] != "") {
                                                                                                echo $_POST['k2'];
                                                                                            } ?>"></td>
                            <td><input type="text" name="k3" maxlength="2" size="1" value="<?php if ($_POST['k3'] != "") {
                                                                                                echo $_POST['k3'];
                                                                                            } ?>"></td>
                        </tr>
                        <tr>
                            <td><input type="text" name="k4" maxlength="2" size="1" value="<?php if ($_POST['k4'] != "") {
                                                                                                echo $_POST['k4'];
                                                                                            } ?>"></td>
                            <td><input type="text" name="k5" maxlength="2" size="1" value="<?php if ($_POST['k5'] != "") {
                                                                                                echo $_POST['k5'];
                                                                                            } ?>"></td>
                            <td><input type="text" name="k6" maxlength="2" size="1" value="<?php if ($_POST['k6'] != "") {
                                                                                                echo $_POST['k6'];
                                                                                            } ?>"></td>
                        </tr>
                        <tr>
                            <td><input type="text" name="k7" maxlength="2" size="1" value="<?php if ($_POST['k7'] != "") {
                                                                                                echo $_POST['k7'];
                                                                                            } ?>"></td>
                            <td><input type="text" name="k8" maxlength="2" size="1" value="<?php if ($_POST['k8'] != "") {
                                                                                                echo $_POST['k8'];
                                                                                            } ?>"></td>
                            <td><input type="text" name="k9" maxlength="2" size="1" value="<?php if ($_POST['k9'] != "") {
                                                                                                echo $_POST['k9'];
                                                                                            } ?>"></td>
                        </tr>
                    </table>
                </td></br>
            </tr>
            <tr>
                <td>Command Line key: </td>
                <td><input type="text" name="cmdkey" size="65" value="<?php if ($_POST['cmdkey'] != "") {
                                                                            echo $_POST['cmdkey'];
                                                                        } else {
                                                                            echo "$k";
                                                                        } ?>"></td>
            </tr>
            <tr>
                <td></td>
                <td>For e.g: <i>50 34 23;45 43 34;34 32 42 </i>i.e. start with a number, put a <i>space</i> for separating</td>
            </tr>
            <tr>
                <td></td>
                <td>each column and a <i>semi-colon</i> for rows. You can provide any <i>n x n</i> matrix. It will be the default key.</td>
            </tr>
            <tr>
                <td>Cipher Text : </td>
                <td><textarea name="cipher" id="cipher" rows="5" cols="50"><?php
                                                                            if ($_GET['op'] == "enc") {
                                                                                $pt = $_POST['plain'];
                                                                                $k = "";
                                                                                if ($_POST['cmdkey'] != "") {
                                                                                    $k = $_POST['cmdkey'];
                                                                                } else {
                                                                                    (string)$k1 = $_POST['k1'];
                                                                                    (string)$k2 = $_POST['k2'];
                                                                                    (string)$k3 = $_POST['k3'];
                                                                                    (string)$k4 = $_POST['k4'];
                                                                                    (string)$k5 = $_POST['k5'];
                                                                                    (string)$k6 = $_POST['k6'];
                                                                                    (string)$k7 = $_POST['k7'];
                                                                                    (string)$k8 = $_POST['k8'];
                                                                                    (string)$k9 = $_POST['k9'];
                                                                                    $k = $k1 . " " . $k2 . " " . $k3 . ";" . $k4 . " " . $k5 . " " . $k6 . ";" . $k7 . " " . $k8 . " " . $k9;
                                                                                }
                                                                                $cmd = "python hill.py -e -k \"" . $k . "\" -t \"" . $pt . "\"";
                                                                                echo exec($cmd);
                                                                            }
                                                                            ?></textarea></td>
            </tr>
            <tr>
                <td><input type="submit" value="Encrypt" /></td>
            </tr>
        </table>
    </form>


    <h2> Decryption using Hill Cipher </h2>
    <form name="dec" id="dec" method="post" action="hill.php?op=dec">
        <table border="0">
            <tr>
                <td>Cipher Text :</td>
                <td><textarea name="cipher" id="cipher" rows="5" cols="50"><?php
                                                                            if ($_GET['op'] == "dec") {
                                                                                echo $_POST['cipher'];
                                                                            }
                                                                            ?></textarea></td>
            </tr>
            <tr>
                <td></td>
                <td>Please insert the key in <i>numeric form</i> only</td>
            </tr>
            <tr>
                <td>Key :</td>
                <td>
                    <table>
                        <tr>
                            <td><input type="text" name="k1" maxlength="2" size="1" value="<?php if ($_POST['k1'] != "") {
                                                                                                echo $_POST['k1'];
                                                                                            } ?>"></td>
                            <td><input type="text" name="k2" maxlength="2" size="1" value="<?php if ($_POST['k2'] != "") {
                                                                                                echo $_POST['k2'];
                                                                                            } ?>"></td>
                            <td><input type="text" name="k3" maxlength="2" size="1" value="<?php if ($_POST['k3'] != "") {
                                                                                                echo $_POST['k3'];
                                                                                            } ?>"></td>
                        </tr>
                        <tr>
                            <td><input type="text" name="k4" maxlength="2" size="1" value="<?php if ($_POST['k4'] != "") {
                                                                                                echo $_POST['k4'];
                                                                                            } ?>"></td>
                            <td><input type="text" name="k5" maxlength="2" size="1" value="<?php if ($_POST['k5'] != "") {
                                                                                                echo $_POST['k5'];
                                                                                            } ?>"></td>
                            <td><input type="text" name="k6" maxlength="2" size="1" value="<?php if ($_POST['k6'] != "") {
                                                                                                echo $_POST['k6'];
                                                                                            } ?>"></td>
                        </tr>
                        <tr>
                            <td><input type="text" name="k7" maxlength="2" size="1" value="<?php if ($_POST['k7'] != "") {
                                                                                                echo $_POST['k7'];
                                                                                            } ?>"></td>
                            <td><input type="text" name="k8" maxlength="2" size="1" value="<?php if ($_POST['k8'] != "") {
                                                                                                echo $_POST['k8'];
                                                                                            } ?>"></td>
                            <td><input type="text" name="k9" maxlength="2" size="1" value="<?php if ($_POST['k9'] != "") {
                                                                                                echo $_POST['k9'];
                                                                                            } ?>"></td>
                        </tr>
                    </table>
                </td></br>
            </tr>
            <tr>
                <td>Command Line key: </td>
                <td><input type="text" name="cmdkey" size="65" value="<?php if ($_POST['cmdkey'] != "") {
                                                                            echo $_POST['cmdkey'];
                                                                        } else {
                                                                            echo "$k";
                                                                        } ?>"></td>
            </tr>
            <tr>
                <td></td>
                <td>For e.g: <i>50 34 23;45 43 34;34 32 42 </i>i.e. start with a number, put a <i>space</i> for separating</td>
            </tr>
            <tr>
                <td></td>
                <td>each column and a <i>semi-colon</i> for rows. You can provide any <i>n x n</i> matrix. It will be the default key.</td>
            </tr>
            <tr>
                <td>Plain Text : </td>
                <td><textarea name="plain" id="plain" rows="5" cols="50"><?php
                                                                            if ($_GET['op'] == "dec") {
                                                                                $pt = $_POST['cipher'];
                                                                                $k = "";
                                                                                if ($_POST['cmdkey'] != "") {
                                                                                    $k = $_POST['cmdkey'];
                                                                                } else {
                                                                                    (string)$k1 = $_POST['k1'];
                                                                                    (string)$k2 = $_POST['k2'];
                                                                                    (string)$k3 = $_POST['k3'];
                                                                                    (string)$k4 = $_POST['k4'];
                                                                                    (string)$k5 = $_POST['k5'];
                                                                                    (string)$k6 = $_POST['k6'];
                                                                                    (string)$k7 = $_POST['k7'];
                                                                                    (string)$k8 = $_POST['k8'];
                                                                                    (string)$k9 = $_POST['k9'];
                                                                                    $k = $k1 . " " . $k2 . " " . $k3 . ";" . $k4 . " " . $k5 . " " . $k6 . ";" . $k7 . " " . $k8 . " " . $k9;
                                                                                }
                                                                                $cmd = "python hill.py -d -k \"" . $k . "\" -t \"" . $pt . "\"";
                                                                                echo exec($cmd);
                                                                            }
                                                                            ?></textarea></td>
            </tr>
            <tr>
                <td><input type="submit" value="Decrypt" /></td>
            </tr>
        </table>
    </form>
</body>

</html>