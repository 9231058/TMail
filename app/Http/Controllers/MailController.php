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
use TMail\Mail as Mail;

class MailController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            $mails = Mail::where('recipient', Auth::user()->email)
                ->orderBy('created_at', 'desc')
                ->paginate(5);

            return response()->json($mails);
        }
    }

    public function store(Request $request)
    {
        if (Auth::check()) {
            $this->validate($request, [
                'title' => 'required|max:255',
                'recipient' => 'required|email|exists:users,email',
                'content' => 'required',
            ]);

            $mail = Mail::create([
                'title' => $request['title'],
                'author' => Auth::user()->email,
                'recipient' => $request['recipient'],
                'content' => $request['content']
            ]);
            $mail->save();

            return response()->json($mail);
        }
    }
}
