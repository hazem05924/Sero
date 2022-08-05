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
    public function edit($id)
    {
        $users=User::findOrfail($id);
        $cities=City::all();
        return response()->view('cms.user.edit' ,compact('cities','users'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validetor=validator($request->all(),[
            'first_name'=>"required|min:4",
            'last_name'=>"required|min:4",
            'email'=>"required|min:4|email",
            'password'=>"required|min:4"
        ]);
        if(!$validetor->fails()){
            $admins=User::findOrfail($id);

           
    
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
    

    /**
     * Remove the specified resource from storage.
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
