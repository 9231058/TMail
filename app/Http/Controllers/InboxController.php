<?php
/**
 * In The Name Of God
 *
 * PHP Version 5
 *
 * @category HttpController
 * @package  App\Http\Controllers
 * @author   Parham Alvani <parham.alvani@gmail.com>
 * @license  http://www.php.net/license/3_01.txt  PHP License 3.01
 * @link     Link
 */
namespace App\Http\Controllers;

use Auth;

class InboxController extends Controller
{
    /**
     * Show the inbox for the authenticated user.
     *
     * @return Response
     */
    public function showInbox()
    {
        $user = Auth::user();
        if ($user == null) {
            return redirect()->route('index');
        }
        return view('inbox');
    }
}
