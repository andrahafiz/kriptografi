<?php
defined('BASEPATH') or exit('No direct script access allowed');


use phpseclib3\Crypt\AES;

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
    //     <?php
    //  *    include 'Crypt/Blowfish.php';
    //  *
    //  *    $blowfish = new Crypt_Blowfish();
    //  *
    //  *    $blowfish->setKey('12345678901234567890123456789012');
    //  *
    //  *    $plaintext = str_repeat('a', 1024);
    //  *
    //  *    echo $blowfish->decrypt($blowfish->encrypt($plaintext));
    //  
    var $data;

    function __construct()

    {
        parent::__construct();
    }
    public function index()
    {
        include 'vendor/autoload.php';
        if (isset($_POST['submit'])) {
            $key = $this->input->post('key'); //mengambil nilai inputan key
            $tipe = $this->input->post('tipe'); //mengambil inputan tipe 'enkripsi' atau 'dekripsi'
            $plaintext = $this->input->post('plaintext'); //mengambil inputan(plaintext) text yang akan di proses
            $aes = new Crypt_AES(); //inisiasi objeck AES
            $aes->setKey($key); // ngeset key, key di ambil dari inputan

            if ($tipe == 'enkripsi') {
                $data['Encipher'] =  $aes->encrypt($plaintext); //proses enkripsi

                $data['Dencipher'] = null;
            } else {
                $data['Encipher'] =  null;
                $data['Dencipher'] = $aes->decrypt(base64_decode($plaintext)); //proses dekripsi
            }

            $data['key'] =  $key;
            $data['text'] =  $plaintext;
        } else {
            $data['Encipher'] =  null;
            $data['Dencipher'] = null;
            $data['key'] =  null;
            $data['text'] =  null;
        }

        $this->load->view('Templates/header');
        $this->load->view('Templates/sidebar');
        $this->load->view('V_AES', $data);
        $this->load->view('Templates/footer');
    }

    public function reset()
    {
        $data = null;
        $this->index();
    }
}
