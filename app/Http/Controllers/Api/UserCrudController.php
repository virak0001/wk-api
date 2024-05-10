<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use Orion\Concerns\DisableAuthorization;
use Orion\Http\Controllers\Controller;

class UserCrudController extends Controller
{
    use DisableAuthorization;
    protected $model = User::class;

    /**
     * The attributes that are used for searching.
     *
     * @return array
     */
    public function searchableBy() : array
    {
        return ['name', 'phone', 'address'];
    }

    public function sortableBy() : array
    {
        return ['created_at'];
    }
}
