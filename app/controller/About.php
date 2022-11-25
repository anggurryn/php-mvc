<?php

class About extends Controller{
    public function page(){
        $this->view('template/header');
        $this->view('about/page');
        $this->view('template/footer.php');
    }
    public function index($nama = 'heri',$job = 'progamer'){
        $other['name']= $nama;
        $other['job']= $job;

        $this->view('template/header');
        $this->view('about/index',$other);
        $this->view('template/footer.php');
    }
}