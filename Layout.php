<?php

class Layout {

    public $header="header";
    public $footer="footer";
    
    public function pagina($pagina, $header, $footer) {
        $this->inc($header);
        $this->inc($pagina);
        $this->inc($footer);
    }

    public function index(){
        $this->inc("header");
        $this->inc("content");
        $this->inc("footer");
    }

    public function painelUser(){
        $this->inc("header");
        $this->inc("painelUser");
        $this->inc("footer");
    }

    public function inc($pagina){
        include $pagina."php";
    }
}