<?php

namespace App\Http\Controllers;

use App\Repositories\ClientRepository;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ClientController extends Controller
{
    protected $clients;

    public function __construct(ClientRepository $clients)
    {
        $this->clients = $clients;
    }

    public function index()
    {
        return Inertia::render('Clients/Index', [
            'clients' => $this->clients->all(),
        ]);
    }

    public function create()
    {
        return Inertia::render('Clients/Create');
    }

    public function edit($id)
    {
        return Inertia::render('Clients/Edit', [
            'client' => $this->clients->find($id),
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name'  => 'required',
            'email'      => 'required|email|unique:clients,email',
            'phone'      => 'nullable',
        ]);

        $this->clients->create($request->all());

        return redirect()->route('clients.index');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name'  => 'required',
            'email'      => 'required|email|unique:clients,email,' . $id,
            'phone'      => 'nullable',
        ]);

        $this->clients->update($id, $request->all());

        return redirect()->route('clients.index');
    }

    public function destroy($id)
    {
        $this->clients->delete($id);
        return redirect()->route('clients.index');
    }
}
