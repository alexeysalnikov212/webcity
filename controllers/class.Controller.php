<?php

/**
 * Базовый класс контролера
 */

class Controller
{
    public $model;
    public $view;
    public $allCategories;
        
        public function __construct() // при создании компании создается массив событий этой компании
    {
     $this->allCategories = Category::getAllCategory();
    }
    
}
