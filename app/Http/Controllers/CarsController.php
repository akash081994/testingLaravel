<?php

namespace App\Http\Controllers;

use App\Cars;
use Illuminate\Http\Request;

class CarsController extends Controller
{
    public function __construct(Cars $car){
         $this->car =$car;
    }
    

    public function insertform(){
        return view('addcar');
    }
    public function insert(Request $request)
    {
         
        $brand = $request->input('brand');
        $model = $request->input('model');
        $type = $request->input('type');
        $doors = $request->input('doors');
        $priceHour = $request->input('priceHour');
        $priceDay = $request->input('priceDay');
        $priceWeek = $request->input('priceWeek');
        $priceMonth = $request->input('priceMonth');
        $priceYear = $request->input('priceYear');



        $this->car
        ->create([
                 'brand' => $brand,
                 'model' => $model,
                 'type' => $type,
                 'doors' => $doors,
                 'priceHour' => $priceHour,
                 'priceDay' => $priceDay,
                 'priceWeek' => $priceWeek,
                 'priceMonth' => $priceMonth,
                 'priceYear' => $priceYear
            ]);

       

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cars  $cars
     * @return \Illuminate\Http\Response
     */
    public function show(Cars $cars)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cars  $cars
     * @return \Illuminate\Http\Response
     */
    public function edit(Cars $cars)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cars  $cars
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cars $cars)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cars  $cars
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cars $cars)
    {
        //
    }
}
