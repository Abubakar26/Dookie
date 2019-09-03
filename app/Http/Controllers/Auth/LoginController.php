<?php

namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use  App\fbdata;
use Socialite;
use File;
use DB;
class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */
        
    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */

    protected $redirectTo = '/home';
    
    public function redirectToProvider()
    {
        return Socialite::driver('facebook')->redirect();
        
    }

    /**
     * Obtain the user information from GitHub.
     *
     * @return \Illuminate\Http\Response
     */
    public function handleProviderCallback()
    {
            $data= new fbdata();
            $fbid=DB::table('userdata')->pluck('fbid');
            $id=$user->getId();
            try
        {
            $user = Socialite::driver('facebook')->stateless()->user();
            $token = $user->token;
            $refreshToken = $user->refreshToken; // not always provided
            $expiresIn = $user->expiresIn;
            if($user->getId())
                 {
                      $data->fbid=$user->getId();
                      $data->Username=$user->getName();
                      $data->Email=$user->getEmail();
                    //   $file=file_get_contents($user->getAvatar());
                    //   File::put('/public/profileimages/'.$user->getId().'.'."jpg",$file);
                    //   $picture=public_path('/public/profileimages/'.$user->getId()."jpg");
                      $data->Profpic=$user->getAvatar();
                      $data->save();    
                      return redirect('/post');
                }
                    else 
                    {
                     return redirect('/post');
                    }
        }
                
        catch(Exception $ex)
        {
            return $ex->getMessage();
        }
        // $user->token;
    }

    public function redirectToProvidergoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    /**
     * Obtain the user information from GitHub.
     *
     * @return \Illuminate\Http\Response
     */
    public function handleProviderCallbackgoogle()
    {
       try
       {
        $user = Socialite::driver('google')->user();
        return  $user->getId();
       }
       catch (Exception $ex)
       {
           echo $ex;
       }
        
        // $user->token;
    }
   /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}