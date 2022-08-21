<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users=User::with('city')->orderBy('id','desc')->paginate(5);
        return response()->view('cms.user.index',compact('users'));
    }
    

    
    
    public function updatePassword(Request $request){
        $guard = auth('admin')->check() ? 'admin' : 'web';
        $validator = Validator($request->all(),[

            'current_password' => 'required|string',
            'new_password' => 'required|string|confirmed',
            'new_password_confirmation' => 'required|string'
        ]);
        if(!$validator->fails()){
            $users = auth($guard)->user();
            $users->password = Hash::make($request->get('new_password'));
            $isSaved = $users->save();
            // return ['redirect' =>route('admins.index')];

            if($isSaved){
            return response()->json(['icon' => 'success' , 'title'=> 'تم تغيير كلمة المرور بنجاح'], 200 );


         } else {
            return response()->json(['icon' => 'error' , 'title' => 'فشلت عملية تغيير كلمة المرور'] , 400);
        }
    }
        else {
            return response()->json(['icon' => 'error' , 'title' => $validator->getMessageBag()->first()], 400);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    public function destroy(User $user)
    {
        // $users=User::destroy($id);
        if ($user->id == Auth::id()) {
            return redirect()->route('users.index');
        }else{
            $user->delete();
            
        }
    }
}
