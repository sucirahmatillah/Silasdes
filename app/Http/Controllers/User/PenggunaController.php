<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\Pengguna\StoreRequest;
use App\Http\Requests\User\Pengguna\UpdateRequest;
use App\Models\User;
use Illuminate\Http\Request;

class PenggunaController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:index-pengguna')->only('index');
        $this->middleware('permission:create-pengguna')->only(['create', 'store']);
        $this->middleware('permission:edit-pengguna')->only(['edit', 'update']);
        $this->middleware('permission:destroy-pengguna')->only('destroy');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = User::whereNotIn('id', [auth()->guard('user')->user()->id])->get();
        return view('user.pengguna.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.pengguna.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request)
    {
        $pengguna = User::create([
            'nama' => ucfirst($request->nama),
            'email' => strtolower($request->email),
            'password' => bcrypt($request->password),
        ]);

        $pengguna->assignRole($request->role);

        return redirect()->route('user.pengguna.index')->with('success', 'Pengguna berhasil ditambahkan.');
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
    public function edit(User $pengguna)
    {
        return view('user.pengguna.edit', compact('pengguna'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRequest $request, User $pengguna)
    {
        $pengguna->update([
            'nama' => ucwords($request->nama),
            'email' => strtolower($request->email),
            'password' => $request->password ? bcrypt($request->password) : $pengguna->password,
        ]);

        $pengguna->syncRoles($request->role);

        return redirect()->route('user.pengguna.index')->with('success', 'Pengguna berhasil diubah.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $pengguna)
    {
        $pengguna->delete();

        return redirect()->back()->with('success', 'Pengguna berhasil dihapus');
    }
}
