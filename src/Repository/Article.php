<?php
/**
 * Created by PhpStorm.
 * User: fchou
 * Date: 30/10/2018
 * Time: 16:16
 */

declare(strict_types=1);

namespace App\Repository;

use App\Entity\Article as ArticleEntity;

interface Article
{
    public function find(string $id) : ArticleEntity;

    public function findAll() : ArticleEntity;
}