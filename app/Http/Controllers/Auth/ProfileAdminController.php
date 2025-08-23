<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\VerifiesEmails;

class ProfileAdminController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Email Verification Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling email verification for any
    | user that recently registered with the application. Emails may also
    | be re-sent if the user didn't receive the original email message.
    |
    */

    use VerifiesEmails;

    /**
     * Where to redirect users after verification.
     *
     * @var string
     */
    protected $redirectTo = '/admin';

    const PATH_VIEW = 'admin.profile.';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(){}

    public function index() 
    {
        
        return view(self::PATH_VIEW . __FUNCTION__);
    }

    public function updateProfile() 
    {


    }
}
