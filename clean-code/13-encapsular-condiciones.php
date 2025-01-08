<?php

class Article {
    const PUBLISHED_STATE = "published";
    const UNPUBLISHED_STATE = "unpublished";


    public function isPublished (){
        return $this->state === self::PUBLISHED_STATE;
    }

}


$article = new Article();
if($article -> isPublished()){
    //leer el articulo
}