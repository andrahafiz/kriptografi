<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_CaesarCipher extends CI_Controller
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
    public function index()
    {
        $key = $this->input->post('key');
        $tipe = $this->input->post('tipe');
        $data['Encipher'] = NULL;
        $data['Decipher'] = NULL;
        // die();
        $plaintext = strtoupper($this->input->post('plaintext'));
        $data['text'] = $plaintext;
        $data['key'] = $key;
        if ($tipe == 'enkripsi') {
            $data['Encipher'] = $this->Encipher($plaintext, $key);
        } else {
            $data['Decipher'] = $this->Decipher($plaintext, $key);
        }
        $this->load->view('Templates/header');
        $this->load->view('Templates/sidebar');
        $this->load->view('V_CaesarChiper', $data);
        $this->load->view('Templates/footer');
    }

    public function Cipher($ch, $key)
    {
        if (!ctype_alpha($ch))
            return $ch;

        $offset = ord(ctype_upper($ch) ? 'A' : 'a');
        return chr(fmod(((ord($ch) + $key) - $offset), 26) + $offset);
        //ord -> mengambil nilai ASCII
        //menghasilkan karakter yang spesifik berdasarkan kode ascii
    }

    public function Encipher($input, $key)
    {
        $output = "";

        $inputArr = str_split($input);
        foreach ($inputArr as $ch)
            $output .= $this->Cipher($ch, $key);

        return $output;
    }

    public function Decipher($input, $key)
    {
        return $this->Encipher($input, 26 - $key);
    }
}
