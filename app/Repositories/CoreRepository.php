<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CoreRepository
 *
 * @package App\Repositories
 *
 * Репозиторий работы с сущностью
 * Может выдавать наборы данных.
 * Не может создавать/изменять сущности
 */

abstract class CoreRepository
{
    /**
     * @var Model
     */
    protected $model;
    abstract protected function getModelClass();

    /**
     * CoreRepository constructor
     */

    public function __construct()
    {
        $this->model = app($this->getModelClass());
    }

    /**
     * @return mixed
     */


    protected function startConditions()
    {
        return clone $this->model;
    }
}
