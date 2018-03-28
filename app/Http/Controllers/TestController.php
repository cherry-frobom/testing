<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;

class TestController extends Controller
{
	 /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
    	$users = User::orderBy('id','DESC')->paginate(5);
        return view('posts.index',compact('users'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
        // $products= Product::orderBy('id','DESC')->paginate(5);
        // return view('ProductCRUD.index',compact('products'))
        //     ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|unique:users,email',
            'password' => 'required',
            'password_confirm' => 'required|same:password',
        ]);
        Sentinel::registerAndActivate($request->all());
        // $role = Sentinel::getRoleRepository()->createModel()->create([
        //     'name' => $request->get('first_name'),
        //     'slug' => str_slug($request->get('first_name')),
        // ]);
        // $roles = Sentinel::findRoleById(1);

        // $roles->permissions = [
        //     'user.update' => true,
        //     'user.view' => true,
        // ];

        // $roles->save();
        return redirect()->route('my-theme')
            ->with('success','Product created successfully');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $input =  $request->all();
        $rememberMe = false;
        if ($request->has('remember') == true) {
             $rememberMe = true;
        }
        $credentials = [
            'login'    => $request->get('email'),
            'password' => $request->get('password'),
        ];
        if (Sentinel::authenticate($credentials, $rememberMe))
        {
            // return Session::has('cartalyst_sentinel');
             // $user = Sentinel::findByCredentials($input);
            // return $request->session()->all();
             //return $user;
            return redirect()->route('my-theme')
                ->with('success','Product created successfully');
        }
        else {
            return redirect()->back();
        }
    }
}
