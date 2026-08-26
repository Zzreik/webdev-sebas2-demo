<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    }

    /**
     * Display the specified resource.
     */
    public function show($weight, $height)
    {
        $bmi = round($weight / ($height * $height));

        if($bmi < 19){
            $category = "Underweight";
        }elseif($bmi <= 20 && $bmi <= 25){
            $category = "Normal weight";
        }elseif($bmi >= 26 && $bmi <= 30){
            $category = "Overweight";

        }else{
            $category = "Obesity";
        }

        return view("bmi", compact('bmi', 'category'));
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
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
