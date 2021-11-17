<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_SimpleSubCipher extends CI_Controller
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
        $cipherAlphabet = strtoupper($this->input->post('cipheralphabet'));
        $text = strtoupper($this->input->post('text'));
        $data['Encipher'] = $this->Encipher($text, $cipherAlphabet, $cipherText);
        $data['Decipher'] = $this->Decipher($cipherText, $cipherAlphabet, $plainText);
        $data['cipherAlphabet'] = $cipherAlphabet;
        $this->load->view('Templates/header');
        $this->load->view('Templates/sidebar');
        $this->load->view('V_SubstitutionChiper', $data);
        $this->load->view('Templates/footer');
    }

    function Cipher($input, $oldAlphabet, $newAlphabet, &$output)
    {
        $output = "";
        $inputLen = strlen($input);

        if (strlen($oldAlphabet) != strlen($newAlphabet))
            return false;

        for ($i = 0; $i < $inputLen; ++$i) {
            $oldCharIndex = strpos($oldAlphabet, strtolower($input[$i]));

            if ($oldCharIndex !== false)
                $output .= ctype_upper($input[$i]) ? strtoupper($newAlphabet[$oldCharIndex]) : $newAlphabet[$oldCharIndex];
            else
                $output .= $input[$i];
        }

        return $output;
    }

    function Encipher($input, $cipherAlphabet, &$output)
    {
        $plainAlphabet = "abcdefghijklmnopqrstuvwxyz";
        return $this->Cipher($input, $plainAlphabet, $cipherAlphabet, $output);
    }

    function Decipher($input, $cipherAlphabet, &$output)
    {
        $plainAlphabet = "abcdefghijklmnopqrstuvwxyz";
        return $this->Cipher($input, $cipherAlphabet, $plainAlphabet, $output);
    }
}
