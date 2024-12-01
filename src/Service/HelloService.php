<?php

namespace App\Service;

class HelloService
{
    public function generateLuckyNumber(): string
    {
        return rand(1, 6);
    }
}