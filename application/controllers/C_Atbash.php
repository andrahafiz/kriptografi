<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_Atbash extends CI_Controller
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
        $this->data['huruf'] = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
        $this->data['rev_huruf'] = strrev($this->data['huruf']);

        // $this->data can be accessed from anywhere in the controller.
    }
    public function index()
    {
        $plaintext = strtoupper($this->input->post('plaintext'));
        $data['text'] = $plaintext;
        if (!empty($plaintext)) {
            // echo $plaintext;
            $key = $this->input->post('key');
            $tipe = $this->input->post('tipe');
            $data['Encode'] = NULL;
            $data['Decode'] = NULL;
            // die();

            $data['key'] = $key;
            if ($tipe == 'enkripsi') {
                $data['Encode'] = $this->Encode($plaintext);
            } else {
                $data['Decode'] = $this->Decode($plaintext);
            }
        } else {
            $data['Encode'] = Null;
            $data['Decode'] = Null;
        }
        $this->load->view('Templates/header');
        $this->load->view('Templates/sidebar');
        $this->load->view('V_Atbash', $data);
        $this->load->view('Templates/footer');
    }

    public function Encode($input)
    {
        $data = $this->data;
        $res = '';
        foreach (str_split($input) as $char) {
            $res .= $this->switchChar($char);
        }
        return $res;
        // die();
    }
    private function switchChar($char)
    {
        $data = $this->data;
        $pos = strpos($data['huruf'], $char);
        if ($pos !== false)
            return $this->data['rev_huruf'][$pos];
        return $char;
    }
    public function Decode($input)
    {
        return $this->Encode($input);
    }
}
