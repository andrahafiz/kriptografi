<?php
defined('BASEPATH') or exit('No direct script access allowed');


use \phpseclib3\Net\SFTP;
use \phpseclib3\Crypt\RC4;
use \phpseclib3\Crypt\Common\SymmetricKey;

class C_Blowfish extends CI_Controller
{

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     *	- or -
     * 		http://example.com/index.php/welcome/index
     *	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    var $data;

    function __construct()

    {
        parent::__construct(); // needed when adding a constructor to a controller
        // $this->data['huruf'] = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
        // $this->data['rev_huruf'] = strrev($this->data['huruf']);

        // $this->data can be accessed from anywhere in the controller.
    }
    public function index()
    {
        include 'vendor/autoload.php';


        $blowfish = new \phpseclib3\Crypt\Crypt_Blowfish();

        $blowfish->setKey('12345678901234567890123456789012');

        $plaintext = str_repeat('a', 1024);

        echo $blowfish->decrypt($blowfish->encrypt($plaintext));
        die();


        // $size = 10 * 1024;
        // $plaintext = 'andra';
        // for ($i = 0; $i < $size; $i++) {
        //     $plaintext .= 'a';
        // }

        // echo $rc4->encrypt($plaintext);
        // echo $rc4->decrypt($rc4->encrypt($plaintext));


        // // $sftp = new SFTP();
        // // $sftp = new \phpseclib3\Net\SFTP('123.456.789.000', '22', '10');

        // // echo $sftp;
        // // include(APPPATH . 'third_party\phpseclib\Crypt\RC4.php');
        // $cipher = new RC4();
        // $cipher->setKey('asd1231asd123ad/');

        // // $size = 10 * 1024;
        // $plaintext = $text;
        // // echo base64_encode($cipher->encrypt($plaintext));
        // // echo base64_decode(base64_encode($cipher->encrypt($plaintext)));
        // echo $cipher->encrypt($plaintext);

        // echo "<br>";
        // echo $cipher->decrypt($cipher->encrypt($plaintext));
        // die();

        // $plain_text = 'This is a plain-text message!';
        // $ciphertext = $this->encryption->encrypt($plain_text);
        // echo html_entity_decode('&ltp&gt;', ENT_QUOTES, 'UTF-8');
        // // Outputs: This is a plain-text message!
        // echo $this->encryption->encrypt($plain_text);
        // echo $this->encryption->decrypt($ciphertext);
        // //$key should have been previously generated in a cryptographically safe way, like openssl_random_pseudo_bytes
        // //$key previously generated safely, ie: openssl_random_pseudo_bytes

        // echo $ciphertext;
        // echo $ivlen
        // echo '<br>';
        // echo '<br>';
        // echo $this->Encode('Andra', 1);
        // echo '<br>';
        // echo $this->Decode($this->Encode('Andra', 1), 1);
        //decrypt later....

        // // $data['text'] = $plaintext;
        // // if (!empty($plaintext)) {
        // //     // echo $plaintext;
        // //     $key = $this->input->post('key');
        // //     $tipe = $this->input->post('tipe');
        // //     $data['Encode'] = NULL;
        // //     $data['Decode'] = NULL;
        // //     // die();

        // //     $data['key'] = $key;
        // //     if ($tipe == 'enkripsi') {
        // //         $data['Encode'] = $this->Encode($plaintext);
        // //     } else {
        // //         $data['Decode'] = $this->Decode($plaintext);
        // //     }
        // // } else {
        // //     $data['Encode'] = Null;

        // $data['key'] =   $key;
        // $data['text'] =  $text;

        // // // }
        // var_dump($_POST['submit']);
        // die();

        if (isset($_POST['submit'])) {
            $key = $this->input->post('key');
            $tipe = $this->input->post('tipe');
            $plaintext = $this->input->post('plaintext');
            $rc4 = new \phpseclib3\Crypt\RC4();

            $rc4->setKey($key);
            // $key = $this->input->post('key');
            if ($tipe == 'enkripsi') {
                $data['Encipher'] =  $rc4->encrypt($plaintext);
                // echo $rc4->encrypt($plaintext);
                // die();
                // $data['Dencipher'] = $rc4->decrypt($data['Encipher']);
                $data['Dencipher'] = null;
            } else {
                $data['Encipher'] =  null;
                // echo $rc4->encrypt($plaintext);
                // die();
                $data['Dencipher'] = $rc4->decrypt(base64_decode($plaintext));
                // $rc4->decrypt($rc4->encrypt($plaintext));
            }

            $data['key'] =  $key;
            $data['text'] =  $plaintext;
            // $data['key'] =  'ASD';
        } else {
            // $data['Dencipher'] = 'Else';
            // $key = $this->input->post('key');
            // // $plaintext = $this->input->post('plaintext');
            // $plaintext = 'asd';
            // $rc4 = new \phpseclib3\Crypt\RC4();

            // $rc4->setKey('123');

            // $key = $this->input->post('key');
            $data['Encipher'] =  null;
            $data['Dencipher'] = null;
            $data['key'] =  null;
            $data['text'] =  null;
        }

        $this->load->view('Templates/header');
        $this->load->view('Templates/sidebar');
        $this->load->view('V_RC4', $data);
        $this->load->view('Templates/footer');
    }

    public function reset()
    {
        $data = null;
    }

    public function Encode($input, $key)
    {
        $plaintext = $input;
        $key = $key;
        $ivlen = openssl_cipher_iv_length($cipher = "AES-128-CBC");
        $iv = openssl_random_pseudo_bytes($ivlen);
        $ciphertext_raw = openssl_encrypt($plaintext, $cipher, $key, $options = OPENSSL_RAW_DATA, $iv);
        $hmac = hash_hmac('sha256', $ciphertext_raw, $key, $as_binary = true);
        return $ciphertext = base64_encode($iv . $hmac . $ciphertext_raw);
    }

    public function Decode($ciphertext, $key)
    {
        $c = base64_decode($ciphertext);
        $ivlen = openssl_cipher_iv_length($cipher = "AES-128-CBC");
        $iv = substr($c, 0, $ivlen);
        $hmac = substr($c, $ivlen, $sha2len = 32);
        $ciphertext_raw = substr($c, $ivlen + $sha2len);
        $original_plaintext = openssl_decrypt($ciphertext_raw, $cipher, $key, $options = OPENSSL_RAW_DATA, $iv);
        $calcmac = hash_hmac('sha256', $ciphertext_raw, $key, $as_binary = true);
        if (hash_equals($hmac, $calcmac)) // timing attack safe comparison
        {
            return $original_plaintext;
        }
    }
}
