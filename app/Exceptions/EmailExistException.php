<?php
/**
 * Created by PhpStorm.
 * User: servidor
 * Date: 10/10/18
 * Time: 09:40
 */

namespace App\Exceptions;


use Mockery\Exception;
use Throwable;

class EmailExistException extends Exception
{

    public function __construct(string $message = "", int $code = 0, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }

}