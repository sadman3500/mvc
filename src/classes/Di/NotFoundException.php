<?php

use Core\Di\NotFoundExceptionInterface;
namespace Core\Di;

class NotFoundException extends Exception implements NotFoundExceptionInterface
{
    /**
     * Creates a new NotFoundException.
     *
     * @param string $id The ID of the entry that was not found.
     *
     * @return \Yuloh\Container\NotFoundException
     */
    public static function create($id)
    {
        return new self(sprintf('No container definition was found for "%s"', $id));
    }
}