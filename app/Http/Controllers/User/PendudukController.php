<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\Penduduk\StoreRequest;
use App\Http\Requests\User\Penduduk\UpdateRequest;
use App\Models\KabKota;
use App\Models\Kecamatan;
use App\Models\Kelurahan;
use App\Models\Penduduk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class PendudukController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:index-penduduk')->only('index');
        $this->middleware('permission:create-penduduk')->only(['create', 'store']);
        $this->middleware('permission:show-penduduk')->only('show');
        $this->middleware('permission:edit-penduduk')->only(['edit', 'update']);
        $this->middleware('permission:destroy-penduduk')->only('destroy');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Penduduk::orderBy('created_at', 'desc')->get();
        return view('user.penduduk.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        if ($request->ajax()) {
            if ($request->id_provinsi) {
                $data = KabKota::where('id_provinsi', $request->id_provinsi)->orderBy('nama', 'asc')->get();
                return response()->json($data);
            }
            if ($request->id_kab_kota) {
                $data = Kecamatan::where('id_kab_kota', $request->id_kab_kota)->orderBy('nama', 'asc')->get();
                return response()->json($data);
            }
            if ($request->id_kecamatan) {
                $data = Kelurahan::where('id_kecamatan', $request->id_kecamatan)->orderBy('nama', 'asc')->get();
                return response()->json($data);
            }
        }

        return view('user.penduduk.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request)
    {
        $validated_data = $request->validated();
        $validated_data['nama'] = ucwords($request->nama ?? '');
        $validated_data['tempat_lahir'] = ucwords($request->tempat_lahir ?? '');
        $validated_data['alamat'] = ucwords($request->alamat ?? '');
        $validated_data['nama_ibu'] = ucwords($request->nama_ibu ?? '');
        $validated_data['nama_ayah'] = ucwords($request->nama_ayah ?? '');
        $validated_data['email'] = strtolower($request->email ?? '');

        $penduduk = Penduduk::create($validated_data);

        if ($request->hasFile('file_kk')) {

            if (!File::isDirectory(public_path('uploads'))) {
                File::makeDirectory(public_path('uploads'), 0777, true, true);
            }

            if (File::exists(public_path('uploads' . '/' . basename($penduduk->file_kk)))) {
                File::delete(public_path('uploads' . '/' . basename($penduduk->file_kk)));
            }

            $file_kk = Str::uuid() . '.' . $request->file_kk->extension();

            if ($request->file_kk->move(public_path('uploads'), $file_kk)) {
                $penduduk->update([
                    'file_kk' => asset('') . 'uploads' . '/' . $file_kk,
                ]);
            };
        }
        if ($request->hasFile('file_ktp')) {

            if (!File::isDirectory(public_path('uploads'))) {
                File::makeDirectory(public_path('uploads'), 0777, true, true);
            }

            if (File::exists(public_path('uploads' . '/' . basename($penduduk->file_ktp)))) {
                File::delete(public_path('uploads' . '/' . basename($penduduk->file_ktp)));
            }

            $file_ktp = Str::uuid() . '.' . $request->file_ktp->extension();

            if ($request->file_ktp->move(public_path('uploads'), $file_ktp)) {
                $penduduk->update([
                    'file_ktp' => asset('') . 'uploads' . '/' . $file_ktp,
                ]);
            };
        }

        return redirect()->route('user.penduduk.index')->with('success', 'Penduduk berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Penduduk $penduduk)
    {
        return view('user.penduduk.show', compact('penduduk'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Penduduk $penduduk)
    {
        if ($request->ajax()) {
            if ($request->id_provinsi) {
                $data = KabKota::where('id_provinsi', $request->id_provinsi)->orderBy('nama', 'asc')->get();
                return response()->json($data);
            }
            if ($request->id_kab_kota) {
                $data = Kecamatan::where('id_kab_kota', $request->id_kab_kota)->orderBy('nama', 'asc')->get();
                return response()->json($data);
            }
            if ($request->id_kecamatan) {
                $data = Kelurahan::where('id_kecamatan', $request->id_kecamatan)->orderBy('nama', 'asc')->get();
                return response()->json($data);
            }
        }

        return view('user.penduduk.edit', compact('penduduk'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRequest $request, Penduduk $penduduk)
    {
        $validated_data = $request->validated();
        $validated_data['nama'] = ucwords($request->nama ?? '');
        $validated_data['tempat_lahir'] = ucwords($request->tempat_lahir ?? '');
        $validated_data['alamat'] = ucwords($request->alamat ?? '');
        $validated_data['nama_ibu'] = ucwords($request->nama_ibu ?? '');
        $validated_data['nama_ayah'] = ucwords($request->nama_ayah ?? '');
        $validated_data['email'] = strtolower($request->email ?? '');

        if ($request->hasFile('file_kk')) {

            if (!File::isDirectory(public_path('uploads'))) {
                File::makeDirectory(public_path('uploads'), 0777, true, true);
            }

            if (File::exists(public_path('uploads' . '/' . basename($penduduk->file_kk)))) {
                File::delete(public_path('uploads' . '/' . basename($penduduk->file_kk)));
            }

            $file_kk = Str::uuid() . '.' . $request->file_kk->extension();

            if ($request->file_kk->move(public_path('uploads'), $file_kk)) {
                $penduduk->update([
                    'file_kk' => asset('') . 'uploads' . '/' . $file_kk,
                ]);
            };
        }

        if ($request->hasFile('file_ktp')) {

            if (!File::isDirectory(public_path('uploads'))) {
                File::makeDirectory(public_path('uploads'), 0777, true, true);
            }

            if (File::exists(public_path('uploads' . '/' . basename($penduduk->file_ktp)))) {
                File::delete(public_path('uploads' . '/' . basename($penduduk->file_ktp)));
            }

            $file_ktp = Str::uuid() . '.' . $request->file_ktp->extension();

            if ($request->file_ktp->move(public_path('uploads'), $file_ktp)) {
                $penduduk->update([
                    'file_ktp' => asset('') . 'uploads' . '/' . $file_ktp,
                ]);
            };
        }

        $penduduk->update($validated_data);

        return redirect()->route('user.penduduk.index')->with('success', 'Penduduk berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Penduduk $penduduk)
    {
        if (File::exists(public_path('uploads' . '/' . basename($penduduk->file_kk)))) {
            File::delete(public_path('uploads' . '/' . basename($penduduk->file_kk)));
        }
        if (File::exists(public_path('uploads' . '/' . basename($penduduk->file_ktp)))) {
            File::delete(public_path('uploads' . '/' . basename($penduduk->file_ktp)));
        }
        $penduduk->delete();

        return redirect()->back()->with('success', 'Penduduk berhasil dihapus');
    }
}
