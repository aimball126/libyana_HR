<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function __construct()
    {
        $this->middleware('role:super_admin');
    } 
    public function index()
    {
        $users = DB::table('users')
            ->join('role_user', 'users.id', '=', 'role_user.user_id')
            ->select('users.id')
            ->where('role_user.role_id', '!=', '4')
            ->get();
        //users array
        $arrayData = array_map(function ($item) {
            return (array)$item;
        }, $users->toArray());


        $users = User::orderByDesc('id')->whereIn('id', $arrayData)->paginate(20);
      
      

        return view('Users.users', compact('users'));
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
    public function add()
    {
       
        $roles = Role::orderByDesc('id')->get();

       
        return view('Users.add', compact('roles'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      
        $validated = $request->validate([
            'name' => 'required|unique:users,name',
            'email' => 'nullable|email|unique:users,email',
            'roles' => 'required|array|min:1',
        ]);
        $input = $request->all();
       

    
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;


       
        $user->password = Hash::make($request->password);
        $user->save();
        $user->attachRoles($request->roles);
        $msg = 'تم انشاء مستخدم جديد بنجاح';
        return redirect()->route('users')->with('done', $msg);
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
        $roles = Role::orderByDesc('id')->get();
        $users = User::where('id', $id)->first();

        return view('Users.edit', compact( 'roles', 'users'));
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
    
        $validated = $request->validate([
            'name' => 'required|max:50|unique:users,name,' . $id,
            'email' => 'nullable|email|unique:users,email,' . $id,
           

        ]);
     
            User::where('id', $id)->update([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password)
            ]);
        
        $user = User::find($id);
        $user->syncRoles($request->roles);
        $msg = 'تم تعديل المستخدم بنجاح';
        return redirect()->route('users')->with('done', $msg);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::find($id)->delete();
        $msg = 'تم حذف  المستخدم بنجاح';
        return redirect()->route('users')->with('done', $msg);
    }
}
