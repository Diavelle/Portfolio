<?php

class Projet {
    protected  $titre;
    protected $description;
    protected $img;
    protected $link;

    public function printTitre() {
        echo $this->titre;
    }

    public function printDescription() {
        echo $this->description;
    }

    public function printImg() {
        echo $this->img;
    }

    public function printLink() {
        echo $this->link;
    }

    public function setTitle(string $title) {
        $this->titre = $title;
    }

    public function setDescription(string $description) {
        $this->description = $description;
    }

    public function setImg(string $img) {
        $this->img = $img;
    }

    public function setLink(string $link) {
        $this->link = $link;
    }
}