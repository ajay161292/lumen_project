<?php

namespace App\Http\Controllers;
use App\Model\Car;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
// use Illuminate\Http\Response;
use Auth;


class CarController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
    	$cars = Car::all();
    	return response()->json($cars);
    }
    public function createCar(Request $request){
    	$car = Car::create($request->all());

    	// return respose()->json($car);
    	echo json_encode($car);
    }
    public function updateCar(Request $request, $id){
    	$car = Car::find($id);
    	$car->make = $request->json('make');
    	$car->model = $request->json('model');
    	$car->year = $request->json('year');
    	$car->save();
    	echo json_encode("updated successfully");
    }
    public function deleteCar($id){
    	$car = Car::find($id);
    	$car->delete();
    	// return response()->json($cars);
    	echo json_encode("removed successfully");
    }

}

