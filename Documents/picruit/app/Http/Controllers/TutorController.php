<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\media;
use App\Models\Profile_pics;

use Session;
class TutorController extends Controller
{
   
       
           public function upload_media(Request $request){

            if ($request->hasFile('mediafile')) {
                
                $image = $request->file('mediafile');
            
                $teaser_image = time().'.'.$image->getClientOriginalExtension();
                $destinationPath = public_path('/img');
                
                $image->move($destinationPath,  $teaser_image );
                    } else {
        dd('Request Has No File');
        }
        $users=session()->get('users');
        $id=$users['id'];
       
        $dialer = media::create([
            'user_id' => $id,
            'title'  => $request->get('title'),
            'category'     => $request->get('category'),
            'mediafile'   => $teaser_image,
           'about_media'      => $request->get('about_media') 
           ]);
        alert()->message('Uploaded success full');
      return redirect()->intended('my-notification/uploadmedia');;
        }

       
}
