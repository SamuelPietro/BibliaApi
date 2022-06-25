<?php

namespace control;
class Control
{

    public function __construct()
    {
        $this->model = new \model\Model();
    }
    
    public function error(){
        echo "<h3>Incorrect usage for this API!</h3>";
    }

    public function bwVesoes(){
        $array = $this->model->bwVesoes();
        print_r(json_encode($array, JSON_PRETTY_PRINT|JSON_UNESCAPED_UNICODE));

    }
    public function bwLivros(){
        $array = $this->model->bwLivros();
        print_r(json_encode($array, JSON_PRETTY_PRINT|JSON_UNESCAPED_UNICODE));

    }
    public function bwCapitulo(){
        $versao = filter_input(INPUT_GET, 'v', FILTER_DEFAULT);
        if (empty($versao)) {
            $versao = "ACF";
        }
        $abrev = filter_input(INPUT_GET, 'a', FILTER_DEFAULT);
        if (empty($abrev)) {
            $abrev = "Gn";
        }
        $chapters = filter_input(INPUT_GET, 'c', FILTER_DEFAULT);
        if (empty($chapters)) {
            $chapters = 1;
        }
        $array = $this->model->bwCapitulo($versao, $abrev, $chapters);
        print_r(json_encode($array, JSON_PRETTY_PRINT|JSON_UNESCAPED_UNICODE));
    }
    
}
