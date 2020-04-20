<?php

namespace Yiisoft\Yii\Collection\Tests;

class Customer
{
    public int $id;

    public ?int $age;

    public function __construct(int $id, ?int $age = null)
    {
        $this->id = $id;
        $this->age = $age;
    }
}
