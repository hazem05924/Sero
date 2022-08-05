<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{

    public function create()
    {
        $cities=City::all();
        return response()->view('cms.auth.register' ,compact('cities'));
    }

    
    public function store(Request $request)
    {
        $validetor=validator($request->all(),[
            'first_name'=>"required|min:4",
            'last_name'=>"required|min:4",
            'email'=>"required|min:4|email",
            'password'=>"required|min:4"
        ]);
        if(!$validetor->fails()){
            $admins=new User();

           
    
                if (request()->hasFile('image')) {
    
                    $image = $request->file('image');
    
                    $imageName = time() . 'image.' . $image->getClientOriginalExtension();
    
                    $image->move('storage/images/register', $imageName);
    
                    $admins->image = $imageName;
    
                    }



            $admins->first_name=$request->get('first_name');
            $admins->last_name=$request->get('last_name');
            $admins->email=$request->get('email');
            $admins->mobile=$request->get('mobile');
            $admins->password=Hash::make($request->get('password'));
            $admins->city_id=$request->get('city_id');
            $isSaved=$admins->save();
            if ($isSaved) {
                return response()->json(['icon'=>'success','title'=>'تم اضافة المستخدم بنجاح '],200);
            }else{
                return response()->json(['icon'=>'error','title'=>'فشلت اضافة المستخدم  '],400);
            }
        }else{
            return response()->json(['icon'=>'error','title'=>$validetor->getMessageBag()->first()],400);

        }
    }
}