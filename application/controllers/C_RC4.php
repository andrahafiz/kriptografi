<?php
defined('BASEPATH') or exit('No direct script access allowed');

use \phpseclib\Net\SFTP;
use \phpseclib\Crypt\RC4;

class C_RC4 extends CI_Controller
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
        parent::__construct();
    }
    public function index()
    {
        include 'vendor/autoload.php';
        if (isset($_POST['submit'])) {
            $key = $this->input->post('key');
            $tipe = $this->input->post('tipe');
            $plaintext = $this->input->post('plaintext');
            $rc4 = new Crypt_RC4();

            $rc4->setKey($key);
            if ($tipe == 'enkripsi') {
                $data['Encipher'] =  $rc4->encrypt($plaintext);

                $data['Dencipher'] = null;
            } else {
                $data['Encipher'] =  null;
                $data['Dencipher'] = $rc4->decrypt(base64_decode($plaintext));
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
        $this->load->view('V_RC4', $data);
        $this->load->view('Templates/footer');
    }

    public function reset()
    {
        $data = null;
        $this->index();
    }
}
