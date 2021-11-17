<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_Transposisi extends CI_Controller
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

        $this->load->view('Templates/header');
        $this->load->view('Templates/sidebar');
        $this->load->view('V_Transposis');
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
