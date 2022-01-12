<?php
defined('BASEPATH') or exit('No direct script access allowed');


use phpseclib3\Crypt\TripleDES;

class C_3DES extends CI_Controller
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
     *    include 'Crypt/TripleDES.php';
     *
     *    $des = new Crypt_TripleDES();
     *
     *    $des->setKey('abcdefghijklmnopqrstuvwx');
     *
     *    $size = 10 * 1024;
     *    $plaintext = '';
     *    for ($i = 0; $i < $size; $i++) {
     *        $plaintext.= 'a';
     *    }
     *
     *    echo $des->decrypt($des->encrypt($plaintext));
     * ?>*/
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
            $tripledes = new Crypt_TripleDES(); //inisiasi objeck DES
            $tripledes->setKey($key); // ngeset key, key di ambil dari inputan

            if ($tipe == 'enkripsi') {
                $data['Encipher'] =  $tripledes->encrypt($plaintext); //proses enkripsi

                $data['Dencipher'] = null;
            } else {
                $data['Encipher'] =  null;
                $data['Dencipher'] = $tripledes->decrypt(base64_decode($plaintext)); //proses dekripsi
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
        $this->load->view('V_3DES', $data);
        $this->load->view('Templates/footer');
    }

    public function reset()
    {
        $data = null;
        $this->index();
    }
}
