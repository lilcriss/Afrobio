<?php

namespace App\Classe;

use App\Entity\Category;

class Search

{
    /**
     * @var string
     */
    public $string = '';

    /**
     * @var Category[]
     */
    public $categories = [];

    public function setString(string $string): self
    {
        $this->string = $string;

        return $this;
    }
}