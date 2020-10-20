<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Http\Requests\CreateCarRequest;
use App\Http\Requests\UpdateCarRequest;
use Illuminate\Http\Request;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cars = Car::all();
        return response()->json($cars);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateCarRequest $request)
    {
        info('cars store');
        info($request);
        $data = $request->validated();
        $car = Car::create([
            'brand'=>$data['brand'],
            'model'=>$data['model'],
            'year'=>$data['year'],
            'maxSpeed'=>$data['maxSpeed'],
            'isAutomatic'=>$data['isAutomatic'], 
            'engine'=>$data['engine'], 
            'numberOfDoors'=>$data['numberOfDoors'],
        ]);
        return $car;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function show(Car $car)
    {
        $car = Car::findOrFail($id);
        return response()->json($car);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */

    public function update(UpdateCarRequest $request, $id)
    {
        $car = Car::findOrFail($id);
        $car->update($request->validated());
        return $car;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $car = Car::findOrFail($id);
        $car->delete();
        return $car;

    }
}
