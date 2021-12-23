<?php

namespace App\Controllers;

use CodeIgniter\Commands\Help;

class PageLoader extends BaseController
{

    private function public_page_loader($viewName,$data)
    {
        echo view("templates/public_header",$data);
        echo view("public_pages/".$viewName,$data);
        echo view("templates/public_footer",$data);
    }

    public function home()
    {
        $data = array(
            "title" => "Free Website for your business"
        );
        $this->public_page_loader("home",$data);
    }

    public function about()
    {
        $data = array(
            "title" => "About"
        );
        $this->public_page_loader("about",$data);
    }
    public function contact()
    {
        $data = array(
            "title" => "Contact"
        );
        $this->public_page_loader("contact",$data);
    }

    public function login()
    {
        helper("form");
        $data = array(
            "title" => "Login"
        );
        $this->public_page_loader("login",$data);
    }

}
