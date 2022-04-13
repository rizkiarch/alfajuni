<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
use App\Http\Controllers\Controller;
use Symfony\Component\Console\Input\Input;
use Hash;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //  

        $users = User::orderBy('email','ASC')->latest()->paginate(5);
        // return view('dashboard.user.index')->with($users);
        return view('dashboard.user.index', compact('users'))->with('i', (request()->Input('page',1) -1) * 5); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('dashboard.user.create');
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
        $request->validate([
            'nama' => 'required',
            'email' => 'required',
            'password' => 'required',
            'role' => 'required',
        ]);
        // dd(Hash::make($request->password));
        $request->request->add([
                                'name' => $request->nama, 
                                'password' => Hash::make($request->password)
                            ]);
        $data = User::create($request->all());
        // $request->request->add(['name' => $request->nama, 'password' => Hash::make($request->password)]);
        // dd($data);

        // $data = User::create([
        //     'name' => $request->name,
        //     'password' => Hash::make($request->password),
        //     'email' => $request->email,
        //     'role' => $request->role,
        // ]);
        return redirect()->route('user.index')->with('success', 'Data Berhasil di Input');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
        return view('dashboard.user.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
        // dd($user);
        return view('dashboard.user.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'role' => 'required',
        ]);
        $user->update($request->all());
        return redirect()->route('user.index')->with('success', 'Data Berhasil di Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
        // dd('masuk gak?');
        $user->delete();
        return redirect()->route('user.index')->with('success', 'Data Berhasil di Hapus');
    }
}
