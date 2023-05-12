<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller {

    /**
     * Kirim email dengan SMTP Gmail.
     *
     */
    public function index()
    {
            $this->load->library('PHPMailer_load'); //Load Library PHPMailer
            $mail = $this->phpmailer_load->load(); // Mendefinisikan Variabel Mail
            $mail->isSMTP();  // Mengirim menggunakan protokol SMTP
            $mail->Host = 'smtp.gmail.com'; // Host dari server SMTP
            $mail->SMTPAuth = true; // Autentikasi SMTP
            $mail->Username = 'wanda20ti@mahasiswa.pcr.ac.id';
            $mail->Password = 'hayutrisna912';
            $mail->SMTPSecure = 'tls';
            $mail->Port = 587;
            $mail->setFrom('noreply@testing.com', 'tes email'); // Sumber email
            $mail->addAddress('wanda20ti@mahasiswa.pcr.ac.id'); // Masukkan alamat email dari variabel $email
            $mail->Subject = "cuma tes"; // Subjek Email
            $mail->msgHtml("
                <h3>pokonya tes berhasil aamiin ya allah</h3><hr>
                    
                "); // Isi email dengan format HTML
            $this->sendEmail();
     
            if (!$mail->send()) {
                        echo "Mailer Error: " . $mail->ErrorInfo;
                    } else {
                        //echo "Message sent!";
                    } // Kirim email dengan cek kondisi
        }
        
    }
