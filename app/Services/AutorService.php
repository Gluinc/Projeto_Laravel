<?php

namespace App\Services;

use App\Models\Autor;
use App\Services\AutorServiceInterface;
use Illuminate\Http\Request;

class AutorService implements AutorServiceInterface {

    private $repository;
    public function __construct(Autor $autor)
    {
        $this->repository = $autor;
    }

    public function index() {
        $registros = $this->repository->paginate(10);
        return (
            ["registros" => $registros]
        );
    }
    

    public function create() {

    }

    public function store(Request $request) {

        $request->validate([
            $this->repository->rules()
        ]);

        $this->repository->create($request->all());
    }

    public function show(string $id) {
        $registro = $this->repository->find($id);

        return (
            ["registro" => $registro]
        );
    }

    public function edit(string $id) {

    }

    public function update(Request $request, string $id) {

        $request->validate([
            $registro = $request->all()
        ]);

        $autor = $this->repository->find($id);

        $autor -> update($registro);
    }

    public function delete($id) {}
    
    public function destroy(string $id) {
        $registro = $this->repository->find($id);

        $registro->delete();
    }

}