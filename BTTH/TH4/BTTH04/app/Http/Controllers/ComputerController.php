<?php

namespace App\Http\Controllers;

use App\Models\Computer;
use Illuminate\Http\Request;
use App\Models\Issue;

class ComputerController extends Controller
{
    public function index()
    {
        $computers = Computer::paginate(10);
        return view('computer.index', compact('computers', ));
    }

    public function create()
    {
        return view('computer.add');
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'computer_name' => 'required|max:255',
            'model' => 'required|max:255',
            'operating_system' => 'required|max:255',
            'processor' => 'required|max:255',
            'memory' => 'required|numeric',
            'available' => 'required|boolean',
        ]);

        Computer::create($validateData);

        return redirect()->route('computers.index')
            ->with('success', 'Computer created successfully.')
            ->with('tab', 'computers');
    }

    public function show($id)
    {
        $computer = Computer::find($id);

        return view('computer.detail', compact('computer'));
    }

    public function edit($id)
    {
        $computer = Computer::findOrFail($id);

        return view('computer.edit', compact('computer'));
    }

    public function update(Request $request, $id)
    {
        $validateData = $request->validate([
            'computer_name' => 'required|max:255',
            'model' => 'required|max:255',
            'operating_system' => 'required|max:255',
            'processor' => 'required|max:255',
            'memory' => 'required|numeric',
            'available' => 'required|boolean',
        ]);

        Computer::where('computer_id', $id)->update($validateData);

        return redirect()->route('computers.index')
            ->with('success', 'Computer updated successfully.')
            ->with('tab', 'computers');
    }

    public function destroy($id)
    {
        Computer::destroy($id);

        return redirect()->route('computers.index')
            ->with('success', 'Computer deleted successfully.')
            ->with('tab', 'computers');
    }
}
