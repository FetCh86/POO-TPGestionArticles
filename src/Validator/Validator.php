<?php
/**
 * Created by PhpStorm.
 * User: fchou
 * Date: 01/11/2018
 * Time: 20:03
 */

declare(strict_types=1);

namespace App\Validator;


interface Validator
{
    /**
     * @param string $value
     * @throws \LogicException
     */
    public function validate(string $value): void;
}