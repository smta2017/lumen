<?php

namespace App\Http\Controllers;

class ExampleController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }


    /**
    * @OA\Get(
    *     path="/index",
    *     description="Home page",
    *     @OA\Response(response="default", description="Welcome page")
    * )
    */
    public function index()
    {
        return response()->json(["sucsess" =>1,"data"=>"info"],200);
    }
}
