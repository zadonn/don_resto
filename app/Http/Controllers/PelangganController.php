<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use App\Http\Requests\PelangganRequest;
use Illuminate\Database\QueryException;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\PelangganExport;
use App\Imports\PelangganImport;

class PelangganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $data['pelanggan'] = Pelanggan::orderBy('created_at', 'DESC')->get();

            return view('pelanggan.index', ['title' => 'Pelanggan'])->with($data);
        } catch (QueryException | Exception | PDOException $error) {
            // $this->failResponse($error->getMessage(), $error->getCode());
            return 'haha error' . $error->getMessage() . $error->getCode();
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PelangganRequest $request)
    {
        try {

            Pelanggan::create($request->all()); //query input ke table
            return redirect('pelanggan')->with('success', 'Data member berhasil ditambahkan!');
        } catch (QueryException | Exception | PDOException $error) {

            // $this->failResponse($error->getMessage(), $error->getCode());
            return 'haha error' . $error->getMessage() . $error->getCode();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Pelanggan $member)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pelanggan $member)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PelangganRequest  $request, Pelanggan $pelanggan)
    {
        try {
            // Validasi data yang dikirimkan
            $validatedData = $request->validated();
    
            // Update data member
            $pelanggan->update($validatedData);
    
            return redirect('pelanggan')->with('success', 'Update data berhasil!');
        } catch (\Exception $error) {
            // Tangani kesalahan jika terjadi
            return 'haha error' . $error->getMessage() . $error->getCode();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pelanggan $pelanggan)
    {
        try {
            $pelanggan->delete();
            return redirect('pelanggan')->with(
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

        return Excel::download(new PelangganExport, $date. '_pelanggan.xlsx');
    }

    public function importData()
    {
        try {
            Excel::import(new PelangganImport, request()->file('import'));
        
            return redirect('pelanggan')->with('success', 'Import Data berhasil!');
        } catch (\Exception $e) {
            // Tangani kesalahan jika terjadi
            return redirect('pelanggan')->with('error', 'Terjadi kesalahan saat mengimpor data: ' . $e->getMessage());
        }
    }
}
