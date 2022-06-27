<?php namespace App\Modules\Api\Controllers;
 
use asligresik\easyapi\Controllers\BaseResourceController;
class Donasis extends BaseResourceController
{
    protected $modelName = 'App\Modules\Api\Models\DonasiModel';  

     /**
     * @OA\Get(
     *     path="/donasis",
     *     tags={"Donasi"},
     *     summary="Find list Donasi",
     *     description="Returns list of Donasi",
     *     operationId="getDonasi",  
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
     *            @OA\Property(property="data",type="array",@OA\Items(ref="#/components/schemas/Donasi")),
     *            @OA\Property(property="pagination",type="object",@OA\Property(property="currentPage", type="integer"),@OA\Property(property="totalPage", type="integer")),
     *         ),
     *         @OA\XmlContent(type="object",
     *            @OA\Property(property="data",type="array",@OA\Items(ref="#/components/schemas/Donasi")),
     *            @OA\Property(property="pagination",type="array",@OA\Items(ref="#/components/schemas/Donasi")),
     *         ),           
     *     ),     
     *     @OA\Response(
     *         response=404,
     *         description="Donasi not found"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     }
     * )
     *     
     */

    /**
     * @OA\Get(
     *     path="/donasis/{id}",
     *     tags={"Donasi"},
     *     summary="Find Donasi by ID",
     *     description="Returns a single Donasi",
     *     operationId="getDonasiById",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="ID of Donasi to return",
     *         required=true,
     *         @OA\Schema(
     *             type="integer",
     *             format="int64"
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *         @OA\JsonContent(ref="#/components/schemas/Donasi"),
     *         @OA\XmlContent(ref="#/components/schemas/Donasi"),
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid ID supplier"
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Donasi not found"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     }
     * )
     *     
     */

    /**
     * @OA\Post(
     *     path="/donasis",
     *     tags={"Donasi"},
     *     summary="Add a new Donasi to the store",
     *     operationId="addDonasi",
     *     @OA\Response(
     *         response=201,
     *         description="Created Donasi",
     *         @OA\JsonContent(ref="#/components/schemas/Donasi"),
     *         @OA\XmlContent(ref="#/components/schemas/Donasi"),
     *     ),
     *     @OA\Response(
     *         response=405,
     *         description="Invalid input"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     },     
     *     requestBody={"$ref": "#/components/requestBodies/Donasi"}
     * )
     */

    /**
     * @OA\Put(
     *     path="/donasis/{id}",
     *     tags={"Donasi"},
     *     summary="Update an existing Donasi",
     *     operationId="updateDonasi",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="Donasi id to update",
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
     *         description="Donasi not found"
     *     ),
     *     @OA\Response(
     *         response=405,
     *         description="Validation exception"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     },     
     *     requestBody={"$ref": "#/components/requestBodies/Donasi"}
     * )
     */

    /**
     * @OA\Delete(
     *     path="/donasis/{id}",
     *     tags={"Donasi"},
     *     summary="Deletes a Donasi",
     *     operationId="deleteDonasi",     
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="Donasi id to delete",
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