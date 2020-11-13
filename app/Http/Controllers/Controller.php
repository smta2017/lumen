<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;

class Controller extends BaseController
{
    /**
     * @OA\Server(
     *      url="{schema}://makwa.test",
     *      description="Development",
     *       @OA\ServerVariable(
     *          serverVariable="schema",
     *          enum={"https", "http"},
     *          default="http"
     *      )
     * ),
     * 
     * @OA\Server(
     *      url="{schema}://dev.makwaapp.com",
     *      description="Stage",
     *       @OA\ServerVariable(
     *          serverVariable="schema",
     *          enum={"https", "http"},
     *          default="https"
     *      )
     * ),
     * 
     *  @OA\Server(
     *      url="{schema}://makwaapp.com",
     *      description="Production",
     *       @OA\ServerVariable(
     *          serverVariable="schema",
     *          enum={"https", "http"},
     *          default="https"
     *      )
     * )
     * 
     * 
     */




    /**
     * @OA\SecurityScheme(
     *   securityScheme="petstore_auth",
     *   type="oauth2",
     *   @OA\Flow(
     *      authorizationUrl="http://petstore.swagger.io/oauth/dialog",
     *      flow="implicit",
     *      scopes={
     *         "read:pets": "read your pets",
     *         "write:pets": "modify pets in your account"
     *      }
     *   )
     * )
     */


    /**
     * @OA\Swagger(
     * host="makwaapp.com",
     * schemes={"http","https"},
     * @OA\Info(
     *   title="Makwa Modules's API",
     *  version="1.9.0",
     *  @OA\Contact(
     *    email="smta0@yahoo.com",
     *    name="sameh taha"
     *  ),
     
     *  @OA\License(
     *             name="Developed by sameh taha",
     *             url="https://www.makwaapp.com"
     *         )
     * )
     * )
     */
}
