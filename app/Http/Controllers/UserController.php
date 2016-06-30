<?php
/**
 * In The Name Of God
 *
 * PHP Version 5
 *
 * @category HttpController
 * @package  TMail\Http\Controllers
 * @author   Parham Alvani <parham.alvani@gmail.com>
 * @license  http://www.php.net/license/3_01.txt  PHP License 3.01
 * @link     Link
 */
namespace TMail\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

use TMail\Http\Requests;
use TMail\User as User;

class UserController extends Controller
{
    public function show(User $user)
    {
        return view('users.show')->with('user', $user);
    }

    public function index()
    {
        return view('users.index')->with('users', User::all());
    }

    public function isContact(User $user)
    {
        if (Auth::check() && Auth::user()->id != $user->id) {
            $is_contact = false;
            $base = Auth::user();
            if (isset($base['contacts'])) {
                $is_contact = in_array($user->id, $base->contacts);
            }
            return response()->json(['isContact' => $is_contact]);
        } else {
            return response()->json(['isContact' => false]);
        }
    }

    public function addContact(User $user)
    {
        if (Auth::check() && Auth::user()->id != $user->id) {
            $add_contact = true;
            $base = Auth::user();
            if (isset($base['contacts'])) {
                if (array_search($user->id, $base->contacts)) {
                    $add_contact = false;
                } else {
                    array_push($base->contacts, $user->id);
                    $base->save();
                }
            } else {
                $base->contacts = [$user->id];
                $base->save();
            }
            return response()->json(['addContact' => $add_contact]);
        } else {
            return response()->json(['addContact' => false]);
        }
    }
}
