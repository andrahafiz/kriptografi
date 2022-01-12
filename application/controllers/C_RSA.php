<?php
defined('BASEPATH') or exit('No direct script access allowed');


use phpseclib3\Crypt\RSA;

class C_RSA extends CI_Controller
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
    
     * <?php
     *    include 'Crypt/RSA.php';
     *
     *    $rsa = new Crypt_RSA();
     *    extract($rsa->createKey());
     *
     *    $plaintext = 'terrafrost';
     *
     *    $rsa->loadKey($privatekey);
     *    $ciphertext = $rsa->encrypt($plaintext);
     *
     *    $rsa->loadKey($publickey);
     *    echo $rsa->decrypt($ciphertext);
     * ?>*/
    var $data;

    function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        include 'vendor/autoload.php';
        $rsa = new Crypt_RSA(); //inisiasi objeck rsa
        extract($rsa->createKey()); // ngeset key, key di ambil dari inputan
        $var_privatekey = trim(preg_replace(["/-----BEGIN RSA PRIVATE KEY-----/", "/-----END RSA PRIVATE KEY-----/"], "", $privatekey));
        $var_publickey = trim(preg_replace(["/-----BEGIN PUBLIC KEY-----/", "/-----END PUBLIC KEY-----/"], "", $publickey));

        if (isset($_POST['submit'])) {
            $key = $this->input->post('key'); //mengambil nilai inputan key
            $tipe = $this->input->post('tipe'); //mengambil inputan tipe 'enkripsi' atau 'dekripsi'
            $plaintext = $this->input->post('plaintext'); //mengambil inputan(plaintext) text yang akan di proses
            $var_privatekey_proses = $this->input->post('privatekey');
            $var_publickey_proses = $this->input->post('publickey');
            $rsa->loadKey($privatekey);
            // $data['PriveteKey'] =  $var_privatekey;
            // $data['PublicKey'] =  $var_publickey;
            $data['Encipher'] =  $rsa->encrypt($plaintext); //proses enkripsi
            $rsa->loadKey($publickey);
            $data['Dencipher'] = $rsa->decrypt($data['Encipher']);
            $data['text'] =    $plaintext;
            $data['PriveteKey'] =  $var_privatekey;
            $data['PublicKey'] =  $var_publickey;
        } else {
            $data['PriveteKey'] =  $var_privatekey;
            $data['PublicKey'] =  $var_publickey;
            $data['Encipher'] =  null;
            $data['Dencipher'] = null;
            $data['key'] =  null;
            $data['text'] =  null;
        }

        $this->load->view('Templates/header');
        $this->load->view('Templates/sidebar');
        $this->load->view('V_RSA', $data);
        $this->load->view('Templates/footer');
    }

    public function reset()
    {
        $data = null;
        $this->index();
    }
}
