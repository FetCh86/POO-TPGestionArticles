<?php
/**
 * Created by PhpStorm.
 * User: fchou
 * Date: 01/11/2018
 * Time: 18:12
 */

declare(strict_types=1);

namespace App\Repository;


use App\Entity\Article as ArticleEntity;
use Ramsey\Uuid\Uuid;

final class InMemoryArticle_bad implements Article
{

    private $articles = [
        [
            id => 1,
            title => "Les Français massivement opposés à la hausse des taxes sur les carburants",
            content => "Les Français massivement opposés à la hausse des taxes sur les carburants",
        ],
        [

        ]

    ];

    public function find(string $id): ArticleEntity
    {

        //Très mauvais : on utilise un else alors qu'en formulant la condition contraire, on peut s'en passer !
        if (isset($this->articles[$id])){
            return $this->articles[$id];
        }
        else {
            throw new \LogicException();
        }
    }

    public function findAll(): ArticleEntity
    {
        for ($i=0; $i<articles.length; $i++){
            return $this->articles[$i];
        }
        // TODO: Implement findAll() method.
    }
}