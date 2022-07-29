<?php namespace App\Modules\Api\Controllers;
 
use asligresik\easyapi\Controllers\BaseResourceController;
class Donaturs extends BaseResourceController
{
    protected $modelName = 'App\Modules\Api\Models\DonaturModel';  

     /**
     * @OA\Get(
     *     path="/donaturs",
     *     tags={"Donatur"},
     *     summary="Find list Donatur",
     *     description="Returns list of Donatur",
     *     operationId="getDonatur",  
     *     @OA\Parameter(
     *         name="search",
     *         in="query",
     *         description="search by column defined",     
     *         @OA\Schema(
     *             type="object"              
     *         )
     *     ),
     *     @OA\Parameter(
     *         name="order",
     *         in="query",
     *         description="order by column defined",     
     *         @OA\Schema(
     *             type="object"              
     *         )
     *     ),    
     *     @OA\Parameter(
     *         name="page",
     *         in="query",
     *         description="page to show",     
     *         @OA\Schema(
     *             type="int32"     
     *         )
     *     ),
     *     @OA\Parameter(
     *         name="limit",
     *         in="query",
     *         description="count data display per page",     
     *         @OA\Schema(
     *             type="int32"     
     *         )
     *     ),   
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",     
     *         @OA\JsonContent(type="object",
     *            @OA\Property(property="data",type="array",@OA\Items(ref="#/components/schemas/Donatur")),
     *            @OA\Property(property="pagination",type="object",@OA\Property(property="currentPage", type="integer"),@OA\Property(property="totalPage", type="integer")),
     *         ),
     *         @OA\XmlContent(type="object",
     *            @OA\Property(property="data",type="array",@OA\Items(ref="#/components/schemas/Donatur")),
     *            @OA\Property(property="pagination",type="array",@OA\Items(ref="#/components/schemas/Donatur")),
     *         ),           
     *     ),     
     *     @OA\Response(
     *         response=404,
     *         description="Donatur not found"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     }
     * )
     *     
     */

    /**
     * @OA\Get(
     *     path="/donaturs/{id}",
     *     tags={"Donatur"},
     *     summary="Find Donatur by ID",
     *     description="Returns a single Donatur",
     *     operationId="getDonaturById",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="ID of Donatur to return",
     *         required=true,
     *         @OA\Schema(
     *             type="integer",
     *             format="int64"
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *         @OA\JsonContent(ref="#/components/schemas/Donatur"),
     *         @OA\XmlContent(ref="#/components/schemas/Donatur"),
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid ID supplier"
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Donatur not found"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     }
     * )
     *     
     */

    /**
     * @OA\Post(
     *     path="/donaturs",
     *     tags={"Donatur"},
     *     summary="Add a new Donatur to the store",
     *     operationId="addDonatur",
     *     @OA\Response(
     *         response=201,
     *         description="Created Donatur",
     *         @OA\JsonContent(ref="#/components/schemas/Donatur"),
     *         @OA\XmlContent(ref="#/components/schemas/Donatur"),
     *     ),
     *     @OA\Response(
     *         response=405,
     *         description="Invalid input"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     },     
     *     requestBody={"$ref": "#/components/requestBodies/Donatur"}
     * )
     */

    /**
     * @OA\Put(
     *     path="/donaturs/{id}",
     *     tags={"Donatur"},
     *     summary="Update an existing Donatur",
     *     operationId="updateDonatur",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="Donatur id to update",
     *         required=true,
     *         @OA\Schema(
     *             type="integer",
     *             format="int64"
     *         ),
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid ID supplied"
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Donatur not found"
     *     ),
     *     @OA\Response(
     *         response=405,
     *         description="Validation exception"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     },     
     *     requestBody={"$ref": "#/components/requestBodies/Donatur"}
     * )
     */

    /**
     * @OA\Delete(
     *     path="/donaturs/{id}",
     *     tags={"Donatur"},
     *     summary="Deletes a Donatur",
     *     operationId="deleteDonatur",     
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="Donatur id to delete",
     *         required=true,
     *         @OA\Schema(
     *             type="integer",
     *             format="int64"
     *         ),
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid ID supplied",
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Pet not found",
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     },
     * )
     */
} 