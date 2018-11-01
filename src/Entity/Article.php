<?php
/**
 * Created by PhpStorm.
 * User: fchou
 * Date: 30/10/2018
 * Time: 16:02
 */

declare(strict_types=1);

namespace App\Entity;


class Article
{
    private $id;

    private $title;

    private $content;

    public function __construct(string $id, string $title, string $content)
    {
        $this->id = $id;

        $this->title = $title;

        $this->content = $content;
    }
}