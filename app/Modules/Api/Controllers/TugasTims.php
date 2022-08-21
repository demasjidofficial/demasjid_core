<?php namespace App\Modules\Api\Controllers;
 
use asligresik\easyapi\Controllers\BaseResourceController;
class TugasTims extends BaseResourceController
{
    protected $modelName = 'App\Modules\Api\Models\TugasTimModel';  

     /**
     * @OA\Get(
     *     path="/tugasTims",
     *     tags={"TugasTim"},
     *     summary="Find list TugasTim",
     *     description="Returns list of TugasTim",
     *     operationId="getTugasTim",  
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
     *            @OA\Property(property="data",type="array",@OA\Items(ref="#/components/schemas/TugasTim")),
     *            @OA\Property(property="pagination",type="object",@OA\Property(property="currentPage", type="integer"),@OA\Property(property="totalPage", type="integer")),
     *         ),
     *         @OA\XmlContent(type="object",
     *            @OA\Property(property="data",type="array",@OA\Items(ref="#/components/schemas/TugasTim")),
     *            @OA\Property(property="pagination",type="array",@OA\Items(ref="#/components/schemas/TugasTim")),
     *         ),           
     *     ),     
     *     @OA\Response(
     *         response=404,
     *         description="TugasTim not found"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     }
     * )
     *     
     */

    /**
     * @OA\Get(
     *     path="/tugasTims/{id}",
     *     tags={"TugasTim"},
     *     summary="Find TugasTim by ID",
     *     description="Returns a single TugasTim",
     *     operationId="getTugasTimById",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="ID of TugasTim to return",
     *         required=true,
     *         @OA\Schema(
     *             type="integer",
     *             format="int64"
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *         @OA\JsonContent(ref="#/components/schemas/TugasTim"),
     *         @OA\XmlContent(ref="#/components/schemas/TugasTim"),
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid ID supplier"
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="TugasTim not found"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     }
     * )
     *     
     */

    /**
     * @OA\Post(
     *     path="/tugasTims",
     *     tags={"TugasTim"},
     *     summary="Add a new TugasTim to the store",
     *     operationId="addTugasTim",
     *     @OA\Response(
     *         response=201,
     *         description="Created TugasTim",
     *         @OA\JsonContent(ref="#/components/schemas/TugasTim"),
     *         @OA\XmlContent(ref="#/components/schemas/TugasTim"),
     *     ),
     *     @OA\Response(
     *         response=405,
     *         description="Invalid input"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     },     
     *     requestBody={"$ref": "#/components/requestBodies/TugasTim"}
     * )
     */

    /**
     * @OA\Put(
     *     path="/tugasTims/{id}",
     *     tags={"TugasTim"},
     *     summary="Update an existing TugasTim",
     *     operationId="updateTugasTim",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="TugasTim id to update",
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
     *         description="TugasTim not found"
     *     ),
     *     @OA\Response(
     *         response=405,
     *         description="Validation exception"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     },     
     *     requestBody={"$ref": "#/components/requestBodies/TugasTim"}
     * )
     */

    /**
     * @OA\Delete(
     *     path="/tugasTims/{id}",
     *     tags={"TugasTim"},
     *     summary="Deletes a TugasTim",
     *     operationId="deleteTugasTim",     
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="TugasTim id to delete",
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