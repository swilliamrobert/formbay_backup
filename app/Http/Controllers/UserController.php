<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

/**
 * Class UserController
 *
 * @package App\Http\Controllers
 */
class UserController extends Controller
{
    /**
     * UserController constructor.
     *
     * @param Request $request
     */
    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    /**
     * Get all user and search by name
     *
     * @return string
     */
    public function index()
    {
        $name = $this->request->input('name');

        if (!empty($name)) {
            $model = new User;
            return json_encode($model->searchName($name));
        }

        return json_encode(User::all());
    }

    /**
     * Show User By ID
     *
     * @param $user
     * @return string
     */
    public function show($user)
    {
        return json_encode(User::find($user));
    }

    /**
     * Search By Name
     *
     * @param $name
     * @return string
     */
    public function searchByName($name)
    {
        $search = User::where('name', 'LIKE', '%' . $name . '%')->get();
        return json_encode($search);
    }
}
