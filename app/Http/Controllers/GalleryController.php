<?php

namespace App\Http\Controllers;

class GalleryController extends Controller
{
    public function index()
    {
        $images = [
            new Image("Pierscionek przód tył duzy Aleksandra Borkowska", "/images/gallery/image_01.jpg"),
            new Image("Pierścionek Klaudia Szczecińska", "/images/gallery/image_02.jpg"),
            new Image("Kartka świąteczna 1", "/images/gallery/image_03.jpg"),
            new Image("Kartka wielkanocna Klaudia Szczecińska", "/images/gallery/image_04.jpg"),
            new Image("kolczyki_pudełko Marta Nowacka", "/images/gallery/image_05.jpg"),
            new Image("pierścionek Natalia Szyszka", "/images/gallery/image_06.jpg"),
            new Image("Wojciech Sobkowiak pierścionek zamknięty", "/images/gallery/image_07.jpg"),
            new Image("Daniel Olszewski kolczyki pudełko2", "/images/gallery/image_08.jpg"),
            new Image("Adam Bylok - pierścionek zaręczynowy - pudełko", "/images/gallery/image_09.jpg"),
            new Image("kartka wielkanocna Kłonica Mateusz", "/images/gallery/image_10.jpg"),
        ];
        return view("gallery")->with("images", $images);
    }
}

class Image
{
    public $text;
    public $path;

    function __construct($text, $path)
    {
        $this->text = $text;
        $this->path = $path;
    }
}
