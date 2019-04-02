<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dependientescad extends CI_Controller {

    public function index()
    {
        $this->load->library('upload');
        $this->load->view('dependientescad.php');
        $this->load->helper('url');
    }


    public function send()
    {
        $subject = 'Solicitud de evaluación documentos - ' . $this->input->post("name").' '.$this->input->post("lastname");

        $this->load->library('email');
        $config['upload_path'] = realpath(FCPATH.'uploads/');
        $config['allowed_types'] = 'pdf';
        // $config['max_size'] = '10000';
        // $config['max_width'] = '1024';
        // $config['max-height'] = '768';

        $files = $_FILES;
        $filesCount = count($files['userfile']['name']);
        for($i = 0; $i < $filesCount; $i++){
        $_FILES['userfiles']['name'] = $files['userfile']['name'][$i];
        $_FILES['userfiles']['type'] = $files['userfile']['type'][$i];
        $_FILES['userfiles']['tmp_name'] = $files['userfile']['tmp_name'][$i];
        $_FILES['userfiles']['error'] = $files['userfile']['error'][$i];
        $_FILES['userfiles']['size'] = $files['userfile']['size'][$i];


        $this->load->library('upload', $config);
        $this->upload->initialize($config);

            if($this->upload->do_upload('userfiles')){
                $file_data = $this->upload->data();
            } else{
                $this->upload->display_errors();
            }

            $this->email->attach($file_data['full_path']);
        }

        if(is_array($file_data))
        {
            $message = '
            <h4><strong>Formulario:</strong> Trabajador dependiente con aval misma condición</h4>
            <br>
            <h3 align="center">Datos del solicitante - Trabajador dependiente</h3>
            <table border="1" width="100%" cellpadding="5">
            <tr>
            <td width="30%">Propiedad a la que postula el solicitante</td>
            <td width="70%">'.$this->input->post("address").'</td>
            </tr>
            <tr>
            <td width="30%">Email</td>
            <td width="70%">'.$this->input->post("email").'</td>
            </tr>
            <tr>
            <td width="30%">Nombre</td>
            <td width="70%">'.$this->input->post("name").' '.$this->input->post("lastname").'</td>
            </tr>
            <tr>
            <td width="30%">Nacionalidad</td>
            <td width="70%">'.$this->input->post("nationality").'</td>
            </tr>
            <tr>
            <td width="30%">Documento de identificación</td>
            <td width="70%">'.$this->input->post("id").'</td>
            </tr>
            <tr>
            <td width="30%">Fecha de nacimiento</td>
            <td width="70%">'.$this->input->post("birthdate").'</td>
            </tr>
            <tr>
            <td width="30%">Número de teléfono</td>
            <td width="70%">'.$this->input->post("mobile").'</td>
            </tr>
            </table>
            <br>
            <h3 align="center">Datos del aval - Trabajador dependiente</h3>
            <table border="1" width="100%" cellpadding="5">
            <td width="30%">Nombre</td>
            <td width="70%">'.$this->input->post("name2").' '.$this->input->post("lastname2").'</td>
            </tr>
            <tr>
            <td width="30%">Nacionalidad</td>
            <td width="70%">'.$this->input->post("nationality2").'</td>
            </tr>
            <tr>
            <td width="30%">Documento de identificación</td>
            <td width="70%">'.$this->input->post("id2").'</td>
            </tr>
            <tr>
            <td width="30%">Fecha de nacimiento</td>
            <td width="70%">'.$this->input->post("birthdate2").'</td>
            </tr>
            <tr>
            <td width="30%">Número de teléfono</td>
            <td width="70%">'.$this->input->post("mobile2").'</td>
            </tr>    
            </table>
            ';
            $this->load->library('email');
            $this->email->set_newline("\r\n");
            //$this->email->from($this->input->post("email"));
            $this->email->set_mailtype("html");
            $this->email->from('contacto@karlaarrienda.com');
            $this->email->reply_to($this->input->post("email"));
            $this->email->to('karlaarrienda@gmail.com');
            $this->email->subject($subject);
            $this->email->message($message);
            // $this->email->attach($file_data['full_path']);
            if($this->email->send()){
                $this->session->set_flashdata('message', 'Su solicitud ha sido enviada exitosamente');
                redirect('index.php/seleccionarusuario');
            }else {

                $this->session->set_flashdata('message', 'No se pudo enviar su solicitud, inténtelo nuevamente');
                redirect('index.php/dependientescad');
            }
            }
            else
            {
                $this->session->set_flashdata('message', 'No se pudo enviar su solicitud, asegúrese que sus archivos estén en formato PDF');
                redirect('index.php/dependientescad');
            }
    }

}