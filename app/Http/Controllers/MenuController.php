<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use PDOException;
use App\Models\Menu;
use App\Http\Requests\MenuRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\QueryException;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\MenuExport;
use App\Imports\MenuImport;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $data['menu'] = Menu::orderBy('created_at', 'DESC')->get();

            return view('menu.index', ['title' => 'Menu'])->with($data);
        } catch (QueryException | Exception | PDOException $error) {
            // $this->failResponse($error->getMessage(), $error->getCode());
            return 'haha error' . $error->getMessage() . $error->getCode();
        }
    }

    /**--
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(MenuRequest $request)
    {
        try {
            //variable fungsinya buat nginput data
            Menu::create($request->all()); //query input ke table
            return redirect('menu')->with('success', 'Data menu berhasil!');
        } catch (QueryException | Exception | PDOException $error) {

            // $this->failResponse($error->getMessage(), $error->getCode());
            return 'haha error' . $error->getMessage() . $error->getCode();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Menu $menu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Menu $menu)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(MenuRequest $request, Menu $menu)
    {
        try {
            // Validasi data yang dikirimkan
            $validatedData = $request->validated();
    
            // Update data menu
            $menu->update($validatedData);
    
            return redirect('menu')->with('success', 'Update data berhasil!');
        } catch (Exception $error) {
            // Tangani kesalahan jika terjadi
            return 'haha error' . $error->getMessage() . $error->getCode();
        }
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Menu $menu)
    {
        try {
            $menu->delete();
            return redirect('menu')->with(
                'success',
                'Data berhasil dihapus!'
            );
        } catch (QueryException | Exception | PDOException $error) {
            $this->failResponse($error->getMessage() . $error->getCode());
        }
    }
    public function exportData()
    {
        $date = date('Y-m-d');

        return Excel::download(new MenuExport, $date. '_menu.xlsx');
    }

    // Metode untuk mengimpor data produk dari file Excel
    public function import(Request $request)
    {
        // Memvalidasi apakah file yang diunggah adalah file Excel
        $request->validate([
            'file' => 'required|file|mimes:xlsx,xls',
        ]);

        // Mengimpor data dari file Excel menggunakan kelas ProductImport
        Excel::import(new MenuImport, $request->file('file'));

        // Mengembalikan respons dengan pesan sukses
        return redirect()->back()->with('success', 'Data berhasil diimpor.');
    }
}
