<?php

class Userop extends CI_Controller{

    public $viewFolder = "";

    public function __construct()
    {
        parent::__construct();
        $this->viewFolder = "users_v";
        $this->load->model("user_model");

    }

    public function login()
    {
        if(get_active_user()){
            redirect(base_url());
        }

        $viewData = new stdClass();

        $viewData->viewFolder  = $this->viewFolder;
        $viewData->subViewFolder = "login";

        $this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/index", $viewData);
    }

    public function do_login()
    {
        if(get_active_user()){
            redirect(base_url());
        }

        $this->load->library("form_validation");

        $this->form_validation->set_rules("user_email", "E-posta", "required|trim|valid_email");
        $this->form_validation->set_rules("user_password", "Şifre", "required|trim|min_length[6]|max_length[8]");

        $this->form_validation->set_message(
            array(
                "required"     => "<b>{field}</b> alanı doldurulmalıdır.",
                "valid_email"  => "Lütfen geçerli bir <b>{field}</b> adresi giriniz.",
                "min_length"   => "<b>{field}</b> en az 6 karekterden oluşmalıdır",
                "max_length"   => "<b>{field}</b> en fazla 8 karekterden oluşmalıdır"
            )
        );

        $validate = $this->form_validation->run();

        if($validate == FALSE){

            $viewData = new stdClass();

            $viewData->viewFolder = $this->viewFolder;
            $viewData->subViewFolder = "login";
            $viewData->form_error = true;

            $this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/index", $viewData);

        }else{

            $user = $this->user_model->get(
                    array(
                        "email"     => $this->input->post("user_email"),
                        "password"  => md5($this->input->post("user_password")),
                        "isActive"  => 1
                    )
                );

            if($user){

                $alert = array(
                  "title" => "İşlem Başarılı",
                  "text"  => "$user->full_name hoşgeldiniz",
                  "type"  => "success"
                );

                $this->session->set_userdata("user", $user);
                $this->session->set_flashdata("alert", $alert);
                redirect(base_url());

            }else{
                $alert = array(
                    "title" => "İşlem Başarısız",
                    "text"  => "Giriş bilgilerinizi kontrol ediniz.",
                    "type"  => "error"
                );

                $this->session->set_flashdata("alert", $alert);
                redirect(base_url("login"));
            }

        }

    }

    public function logout()
    {
        $this->session->unset_userdata("user");
        redirect("login");
    }

    public function send_email()
    {
        $config = array(
            "protocol"   => "smtp",
            "smtp_host"  => "mail.otosturop.site",
            "smtp_port"  => "587",
            "smtp_user"  => "mehmet.arikan@otosturop.site",
            "smtp_pass"  => "mehmET956",
            "starttls"   => true,
            "charset"    => "utf-8",
            "mailtype"   => "html",
            "wordwrap"   => true,
            "newline"    => "\r\n"
        );

        $this->load->library("email", $config);

        $this->email->from("mehmet.arikan@otosturop.site", "CMS");
        $this->email->to("nesibekaya91@gmail.com");
        $this->email->subject("NEsssibebe sevdicamm deneme mesajı");
        $this->email->message("Your Phone minee!! :D");

        $send = $this->email->send();

        if($send){
            echo "E posta başarılı bir şekildegönderilmiştir.";
        }else{
            echo $this->email->print_debugger();
        }
    }

}


