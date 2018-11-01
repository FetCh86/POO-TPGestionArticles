<?php
/**
 * Created by PhpStorm.
 * User: fchou
 * Date: 01/11/2018
 * Time: 20:02
 */

declare(strict_types=1);

namespace App\Service;


use App\Entity\Article as ArticleEntity;
use App\Repository\Article;
use App\Validator\Validator;

class ArticleService
{
    private $validator;

    private $repository;

    public function __construct(Validator $validator, Article $articleRepository)
    {
        $this->validator = $validator;
        $this->repository = $articleRepository;
    }

    public function find(string $value): ArticleEntity
    {
        $this->validator->validate($value);

        $article = $this->repository->find($value);

        return $article;
    }
}