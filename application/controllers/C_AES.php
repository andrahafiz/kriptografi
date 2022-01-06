<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_AES extends CI_Controller
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
        $this->load->library('encryption');
        $this->encryption->initialize(
            array(
                'cipher' => 'aes-256',
                'mode' => 'asf',
                'key' => 'YToxOntpOjA7czoxMjg6IheE52WCOIgKlibYk93XtX8OUISJMjv2Du+IGdKI233qtScVDYgn9teic3wCa03WXUvwxhpsAMcP9KKgrF+xdmN+SD5aQEvoellFWDPu56Qds1SeYiEQxJIh6tuNapti454UYTMY4ZwXKSzDZZoBq/F6g/Hs9pFOe7yOnCwJa4OlIjt9',
                'driver' => 'mcrypt'
            )
        );
        $plain_text = 'This is a plain-text message!';
        $ciphertext = $this->encryption->encrypt($plain_text);
        echo html_entity_decode('&ltp&gt;', ENT_QUOTES, 'UTF-8');
        // Outputs: This is a plain-text message!
        echo $this->encryption->encrypt($plain_text);
        echo $this->encryption->decrypt($ciphertext);
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

        // $data['key'] =  $this->input->post('key');
        // $data['text'] = $this->input->post('plaintext');
        // // }
        // $this->load->view('Templates/header');
        // $this->load->view('Templates/sidebar');
        // $this->load->view('V_RSA', $data);
        // $this->load->view('Templates/footer');
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
