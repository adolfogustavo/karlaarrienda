<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sendemail extends CI_Controller {

    public function index()
    {
        $this->load->library('upload');
        $this->load->view('sendemail');
    }


    public function send()
    {
        $subject = 'Application for Programmer Registration By - ' . $this->input->post("name");
        $programming_languages = implode(", ", $this->input->post("programming_languages"));

        $this->load->library('email');
        $config['upload_path'] = realpath(FCPATH.'uploads/');
        $config['allowed_types'] = 'doc|docx|pdf';
        $config['max_size'] = '10000';
        $config['max_width'] = '1024';
        $config['max-height'] = '768';

        $files = $_FILES;
        $filesCount = count($files['userfile']['name']);
        for($i = 0; $i < $filesCount; $i++){
        $_FILES['userfiles']['name'] = $files['userfile']['name'][$i];
        $_FILES['userfiles']['type'] = $files['userfile']['type'][$i];
        $_FILES['userfiles']['tmp_name'] = $files['userfile']['tmp_name'][$i];
        $_FILES['userfiles']['error'] = $files['userfile']['error'][$i];
        $_FILES['userfiles']['size'] = $files['userfile']['size'][$i];


        // $this->email->attach($upload_data['full_path']);
        $this->load->library('upload', $config);
        $this->upload->initialize($config);

        if($this->upload->do_upload('userfiles')){
        $file_data = $this->upload->data();
        } else{
        $this->upload->display_errors();
        }
        $this->email->attach($file_data['full_path']);
        }

        // echo_list($file_data);
        // echo_list(count($file_data));

        if(is_array($file_data))
        {
            $message = '
            <h3 align="center">Programmer Details</h3>
            <table border="1" width="100%" cellpadding="5">
            <tr>
            <td width="30%">Name</td>
            <td width="70%">'.$this->input->post("name").'</td>
            </tr>
            <tr>
            <td width="30%">Address</td>
            <td width="70%">'.$this->input->post("address").'</td>
            </tr>
            <tr>
            <td width="30%">Email Address</td>
            <td width="70%">'.$this->input->post("email").'</td>
            </tr>
            <tr>
            <td width="30%">Progamming Language Knowledge</td>
            <td width="70%">'.$programming_languages.'</td>
            </tr>
            <tr>
            <td width="30%">Experience Year</td>
            <td width="70%">'.$this->input->post("experience").'</td>
            </tr>
            <tr>
            <td width="30%">Phone Number</td>
            <td width="70%">'.$this->input->post("mobile").'</td>
            </tr>
            <tr>
            <td width="30%">Additional Information</td>
            <td width="70%">'.$this->input->post("additional_information").'</td>
            </tr>
            </table>
            ';
            // $config = Array(
            // 'protocol' => 'smtp',
            // 'smtp_host' => 'ssl://smtp.gmail.com',
            // 'smtp_port' => 465,
            // 'smtp_user' => 'gustavodominguez230@gmail.com',
            // 'smtp_pass' => 'rbhawr23',
            // 'mailtype' => 'html',
            // 'charset' => 'iso-8859-1',
            // 'wordwrap' => TRUE
            // );
            //$file_path = 'uploads/' . $file_name;
            // $this->load->library('email', $config);
            $this->load->library('email');
            $this->email->set_newline("\r\n");
            //$this->email->from($this->input->post("email"));
            $this->email->set_mailtype("html");
            $this->email->from('contacto@karlaarrienda.com');
            $this->email->reply_to($this->input->post("email"));
            $this->email->to('gustavodominguez230@gmail.com');
            //$this->email->to('karlaarrienda@gmail.com');
            $this->email->subject($subject);
            $this->email->message($message);
            // $this->email->attach($file_data['full_path']);
            if($this->email->send()){
                $this->session->set_flashdata('message', 'Application Sended');
                redirect('sendemail');
            }else {
                $this->session->set_flashdata('message', 'There is an error in email send');
                redirect('sendemail');
            }
            }
            else
            {
                $this->session->set_flashdata('message', 'There is an error in attach file');
                redirect('sendemail');
            }
    }

    function upload_file()
    {
        $config['upload_path'] = realpath(FCPATH.'uploads/');
        $config['allowed_types'] = 'doc|docx|pdf';
        $config['overwrite'] = TRUE;
        $config['encrypt_name'] = TRUE;
        $config['max_size'] = '100';
        $config['max_width'] = '1024';
        $config['max-height'] = '768';

        $files = $_FILES;
        $filesCount = count($_FILES['file']['name']);
        // echo_list($filesCount);
        for($i = 0; $i < $filesCount; $i++){
            $_FILES['file']['name'] = $files['file']['name'][$i];
            $_FILES['file']['type'] = $files['file']['name'][$i];
            $_FILES['file']['tmp_name'] = $files['file']['tmp_name'][$i];
            $_FILES['file']['error'] = $files['file']['error'][$i];
            $_FILES['file']['size'] = $files['file']['size'][$i];
            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            // echo_list($_FILES['file']['name'][$i]);
            if($this->upload->do_upload('file')){
                return $this->upload->data();
            } else{
                return $this->upload->display_errors();
            }
        }
    }

}