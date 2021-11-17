<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_VigenereCipher extends CI_Controller
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
        $plaintext = strtoupper($this->input->post('text'));
        $data['Encipher'] = $this->Encipher($plaintext, $key);
        $data['Decipher'] = $this->Decipher($data['Encipher'], $key);
        $data['Key'] = $key;
        $this->load->view('Templates/header');
        $this->load->view('Templates/sidebar');
        $this->load->view('V_VigenereCipher', $data);
        $this->load->view('Templates/footer');
    }

    public function Mod($a, $b)
    {
        return ($a % $b + $b) % $b;
    }

    public function Cipher($input, $key, $encipher)
    {
        $keyLen = strlen($key);

        for ($i = 0; $i < $keyLen; ++$i)
            if (!ctype_alpha($key[$i]))
                return ""; // Error

        $output = "";
        $nonAlphaCharCount = 0;
        $inputLen = strlen($input);

        for ($i = 0; $i < $inputLen; ++$i) {
            if (ctype_alpha($input[$i])) {
                $cIsUpper = ctype_upper($input[$i]);
                $offset = ord($cIsUpper ? 'A' : 'a');
                $keyIndex = ($i - $nonAlphaCharCount) % $keyLen;
                $k = ord($cIsUpper ? strtoupper($key[$keyIndex]) : strtolower($key[$keyIndex])) - $offset;
                $k = $encipher ? $k : -$k;
                $ch = chr(($this->Mod(((ord($input[$i]) + $k) - $offset), 26)) + $offset);
                $output .= $ch;
            } else {
                $output .= $input[$i];
                ++$nonAlphaCharCount;
            }
        }

        return $output;
    }

    public function Encipher($input, $key)
    {
        return $this->Cipher($input, $key, true);
    }

    public function Decipher($input, $key)
    {
        return $this->Cipher($input, $key, false);
    }
}
