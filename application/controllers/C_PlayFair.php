<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_PlayFair extends CI_Controller
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
        // $key = $this->input->post('key');
        // $plaintext = strtoupper($this->input->post('plaintext'));
        // $data['Encipher'] = $this->Encipher($plaintext, $key);
        // $data['Decipher'] = $this->Decipher($data['Encipher'], $key);
        // $data['Cipher'] = $this->Decipher($data['Encipher'], $key);
        // $this->load->view('Templates/header');
        // $this->load->view('Templates/sidebar');
        // $this->load->view('V_CaesarChiper', $data);
        // $this->load->view('Templates/footer');
        $this->load->view('Templates/header');
        $this->load->view('Templates/sidebar');
        $this->load->view("V_PlayFair");
        $this->load->view('Templates/footer');
    }
}
