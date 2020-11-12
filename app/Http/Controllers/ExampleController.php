<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Client\Request;
use Illuminate\Http\Request;

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
     * @OA\get(
     *   path="/aindex",
     *   summary="list products",
     *   @OA\Response(
     *     response=200,
     *     description="A list with products"
     *   ),
     *   @OA\Response(
     *         response="400",
     *         description="Invalid tag value",
     *     ),
     *   @OA\Response(
     *         response="404",
     *         description="not found",
     *     ),
     * 
     *   @OA\Parameter(
     *     name="first_name",
     *     description="Tags to filter by customer name",
     *     in="path",
     *         @OA\Schema(
     *           type="string"
     *         )
     *     ),
     * 
     *  
     *   @OA\Parameter(
     *     name="customer_id",
     *     description="Tags to filter by customer name",
     *     in="query",
     *         @OA\Schema(
     *           type="integer"
     *         ),
     *      style="form"
     *     ),
     * 
     * 
     * 
     * )
     */

 

    public function index(Request $request)
    {
        return response()->json(["sucsess" => 1, "data" => $request["first_name"]], 201);
    }



  
    /**
     * @OA\post(
     *   path="/bpach",
     *   summary="list products",
     *    @OA\Response(
     *     response=200,
     *     description="A list with products"
     *   ),
     * )
     */
    public function post()
    {
    }


 /**
     * @OA\put(
     *   path="/cpach",
     *   summary="add products",
     *    @OA\Response(
     *     response=200,
     *     description="A list with products"
     *   ),
     * )
     */
    public function put()
    {
    }


    
    /**
     * @OA\delete(
     *   path="/dindex",
     *   summary="list products",
     *    @OA\Response(
     *     response=200,
     *     description="A list with products"
     *   ),
     * )
     */
    public function delete()
    {
    }
}
