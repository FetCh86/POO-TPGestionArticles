<?php
/**
 * Created by PhpStorm.
 * User: fchou
 * Date: 30/10/2018
 * Time: 16:41
 */

declare(strict_types=1);

namespace App\Repository;


use App\Entity\Article as ArticleEntity;
use Psr\Log\LoggerInterface;

final class LoggedArticle implements Article
{
    private $repository;

    private $logger;

    public function __construct(Article $repository, LoggerInterface $logger)
    {
        $this->repository = $repository;
        $this->logger = $logger;
    }

    public function find(string $id): ArticleEntity
    {
        $this->logger->info('Article récupéré !');
        // TODO: Implement find() method.
    }

    public function findAll(): ArticleEntity
    {
        $this->logger->info('Tous les articles ont été récupérés !');
        // TODO: Implement findAll() method.
    }
}