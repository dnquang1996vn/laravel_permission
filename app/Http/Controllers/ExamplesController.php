<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class ExamplesController extends Controller
{
    public function show_my_roles()
    {
        /** @var User $user */
        $user = auth()->user();
        $roles = $user->getRoleNames();

        return var_export($roles, true);

// output:
/**
        Collection {
          #items: array:1 [
            0 => "writer"
          ]
        }
 */
    }
}
