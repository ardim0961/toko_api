<?php

namespace App\Controllers;

use App\Models\MProduk;

class ProdukController extends RestfulController
{
    public function index()
    {
        $model = new MProduk();

        $data = $model->findAll();

        return $this->responseHasil(
            200,
            true,
            $data
        );
    }

    public function create()
    {
        $data = [
            'kode_produk' => $this->request->getVar('kode_produk'),
            'nama_produk' => $this->request->getVar('nama_produk'),
            'harga' => $this->request->getVar('harga')
        ];

        $model = new MProduk();

        $model->save($data);

        return $this->responseHasil(
            200,
            true,
            $data
        );
    }

    public function show($id = null)
    {
        $model = new MProduk();

        $data = $model->find($id);

        return $this->responseHasil(
            200,
            true,
            $data
        );
    }

    public function update($id = null)
    {
        $data = [
            'kode_produk' => $this->request->getVar('kode_produk'),
            'nama_produk' => $this->request->getVar('nama_produk'),
            'harga' => $this->request->getVar('harga')
        ];

        $model = new MProduk();

        $model->update($id, $data);

        return $this->responseHasil(
            200,
            true,
            true
        );
    }

    public function delete($id = null)
    {
        $model = new MProduk();

        $model->delete($id);

        return $this->responseHasil(
            200,
            true,
            true
        );
    }
}