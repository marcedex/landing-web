<?php
include_once 'functions.php';

class DataBanner {

    //declarar propiedades
    public string $title_banner;
    public array $names_solapa_banner;
    public array $images_banner;
    public string $content_banner;
    public string $name_btn_redirect_banner;

    public function __construct($title_banner, $names_solapa_banner, $images_banner, $content_banner, $name_btn_redirect_banner)
    {
        $this->title_banner = $title_banner;
        $this->names_solapa_banner = $names_solapa_banner;
        $this->images_banner = $images_banner;
        $this->content_banner = $content_banner;
        $this->name_btn_redirect_banner = $name_btn_redirect_banner;
    }

}


$test = new DataBanner('Diseño Digital', array('Test1','Test2','Test3'), array('imagege1','image2','image3'), 'text content', 'Enviar');

$tester = whatsapp_link_simple('1135003820');

echo $tester;