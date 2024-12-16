<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Issue;
use App\Models\Computer;

class IssueController extends Controller
{
    public function index()
    {
        $issues = Issue::with('computer')->paginate(10);
        return view('issue.index', compact('issues'));
    }

    public function create()
    {
        $computers = Computer::all();

        return view('issue.add', compact('computers'));
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'computer_id' => 'required|numeric',
            'reported_by' => 'required|max:255',
            'reported_date' => 'required|date',
            'description' => 'required',
            'urgency' => 'required|max:255',
            'status' => 'required|max:255',
        ]);

        Issue::create($validateData);

        return redirect()->route('tabs')
            ->with('success', 'Issue created successfully.')
            ->with('tab', 'issues');
    }

    public function show($id)
    {
        $issue = Issue::find($id);

        return view('issue.detail', compact('issue'));
    }

    public function edit($id)
    {
        $issue = Issue::findOrFail($id);
        $computers = Computer::all();

        return view('issue.edit', compact('issue', 'computers'));
    }

    public function update(Request $request, $id)
    {
        $validateData = $request->validate([
            'computer_id' => 'required|numeric',
            'reported_by' => 'required|max:255',
            'reported_date' => 'required|date',
            'description' => 'required',
            'urgency' => 'required|max:255',
            'status' => 'required|max:255',
        ]);

        Issue::where('issue_id', $id)->update($validateData);

        return redirect()->route('tabs')
            ->with('success', 'Issue updated successfully.')
            ->with('tab', 'issues');
    }

    public function destroy($id)
    {
        Issue::destroy($id);

        return redirect()->route('tabs')
            ->with('success', 'Issue deleted successfully.')
            ->with('tab', 'issues');
    }
}
