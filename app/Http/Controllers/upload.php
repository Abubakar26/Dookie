<?php

namespace App\Http\Controllers;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use DB;
use Illuminate\Http\Request;
use App\post;
use App\fbdata;
class upload extends Controller
{
     
    public function bhejo(Request $request )
    {
        $up=new post;
     
        if ($request->hasfile('image'))
        {
            $file=$request->file('image');
            $filename=time() . '.' . $file->getClientOriginalExtension();
            $destination=  $file->move('public\pics',$filename);
            $up->caption=$request->input('caption');
            $up->path=$destination;
            $up->save();
            
        }
        else if ($request->hasfile('image')==Null)
        {
            $up->caption=$request->input('caption');
            $up->path=Null;
            $up->save();
        }

    
        else if ($request->input('caption')==Null)
        {
            $up->caption=null;
            $up->path=$destination;
            $up->save();
        }        

        return redirect ('/post');
    }
  
    public function getdata()
    {
       $data=post::all();
       $pdata=fbdata::all();
       return view('Home',['data'=>$data,'pdata'=>$pdata]);
    }
    
    public function delete($id)
    {
        DB::table('posts')->where('id',$id)->delete();
        return redirect('/post');
    }

    // public function getar()
    // {
    //   return view('Home',['data'=>$data]);
    // } 
        public function infoupdate(Request $request)
        {
            $fbid=DB::table('userdata')->pluck('fbid');
            $update=DB::table('userdata')->where('fbid',$fbid)->update($request->only(['usertag','username','email','About']));
            if($update)
            {
                return redirect('/post');
            }
        }


}
