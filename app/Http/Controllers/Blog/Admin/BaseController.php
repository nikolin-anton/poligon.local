<?php

namespace App\Http\Controllers\Blog\Admin;

use App\Http\Controllers\Blog\BaseController as GuestBaseController;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Http\Request;

/**
 * Базовый контроллер для всех контроллеров управления блогом и панели администрирования
 *
 * Должен быть родителм всех контроллеров управления блоком
 */

abstract class BaseController extends GuestBaseController
{
    public function __construct()
    {

    }
}
