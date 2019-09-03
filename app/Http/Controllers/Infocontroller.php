<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\userinfo;
class Infocontroller extends Controller
{
        public function About(Request $request)
        {
            $post= new userinfo;
            if ($request->hasfile('image'))
            {
                $file=$request->file('image');
                $filename=time().'.'.$file->getClientOriginalExtension();
                $path=$file->move('/public/about',$filename);
                $post->Profpic=$path;
            }
            else
            {
                $post->profpic=Null;
            }
              $post->Username=$request->input('username');  
        
              $post->Fname=$request->input('Fullname');  
        
              $post->Email=$request->input('email');  
        
              $post->gender=$request->input('gender');  
               
              $post->save();
        return redirect('/post');
        }


}
