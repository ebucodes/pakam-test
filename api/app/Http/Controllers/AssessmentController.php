<?php

namespace App\Http\Controllers;

use App\Models\Assessment;
use Illuminate\Http\Request;

class AssessmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $assessments = Assessment::all();
        return response()->json([
            'message' => 'success',
            'data' => $assessments
        ]);
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
    public function store(Request $request)
    {
        //
        $validatedData = $request->validate([
            'name' => 'bail|required',
            'description' => 'bail|required',
            'quantity' => 'bail|required|numeric|min:0'
        ]);

        $assessment = Assessment::create([
            'name' => $validatedData['name'],
            'description' => $validatedData['description'],
            'quantity' => $validatedData['quantity'],
        ]);

        return response()->json([
            'message' => 'Assessment created successfully',
            'status' => 'success',
            'data' => $assessment
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $validatedData = $request->validate([
            'name' => 'bail|required',
            'description' => 'bail|required',
            'quantity' => 'bail|required|numeric|min:0'
        ]);

        $assessment = Assessment::find($id);
        if (!$assessment) {
            return response()->json([
                'status' => 'error',
                'message' => 'ID does not exist',
            ]);
        }

        $assessment->update([
            'name' => $validatedData['name'],
            'description' => $validatedData['description'],
            'quantity' => $validatedData['quantity'],
        ]);

        return response()->json([
            'status' => 'success',
            'message' => 'Assessment updated successfully',
            'data' => $assessment
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $assessment = Assessment::find($id);
        if (!$assessment) {
            return response()->json([
                'status' => 'error',
                'message' => 'ID does not exist',
            ]);
        }
        //
        $assessment->delete();

        return response()->json([
            'status' => 'success',
            'message' => 'Assessment deleted successfully'
        ]);
    }
}
