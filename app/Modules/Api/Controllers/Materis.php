<?php namespace App\Modules\Api\Controllers;
 
use asligresik\easyapi\Controllers\BaseResourceController;
class Materis extends BaseResourceController
{
    protected $modelName = 'App\Modules\Api\Models\MateriModel';  

     /**
     * @OA\Get(
     *     path="/materis",
     *     tags={"Materi"},
     *     summary="Find list Materi",
     *     description="Returns list of Materi",
     *     operationId="getMateri",  
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
     *            @OA\Property(property="data",type="array",@OA\Items(ref="#/components/schemas/Materi")),
     *            @OA\Property(property="pagination",type="object",@OA\Property(property="currentPage", type="integer"),@OA\Property(property="totalPage", type="integer")),
     *         ),
     *         @OA\XmlContent(type="object",
     *            @OA\Property(property="data",type="array",@OA\Items(ref="#/components/schemas/Materi")),
     *            @OA\Property(property="pagination",type="array",@OA\Items(ref="#/components/schemas/Materi")),
     *         ),           
     *     ),     
     *     @OA\Response(
     *         response=404,
     *         description="Materi not found"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     }
     * )
     *     
     */

    /**
     * @OA\Get(
     *     path="/materis/{id}",
     *     tags={"Materi"},
     *     summary="Find Materi by ID",
     *     description="Returns a single Materi",
     *     operationId="getMateriById",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="ID of Materi to return",
     *         required=true,
     *         @OA\Schema(
     *             type="integer",
     *             format="int64"
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *         @OA\JsonContent(ref="#/components/schemas/Materi"),
     *         @OA\XmlContent(ref="#/components/schemas/Materi"),
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid ID supplier"
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Materi not found"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     }
     * )
     *     
     */

    /**
     * @OA\Post(
     *     path="/materis",
     *     tags={"Materi"},
     *     summary="Add a new Materi to the store",
     *     operationId="addMateri",
     *     @OA\Response(
     *         response=201,
     *         description="Created Materi",
     *         @OA\JsonContent(ref="#/components/schemas/Materi"),
     *         @OA\XmlContent(ref="#/components/schemas/Materi"),
     *     ),
     *     @OA\Response(
     *         response=405,
     *         description="Invalid input"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     },     
     *     requestBody={"$ref": "#/components/requestBodies/Materi"}
     * )
     */

    /**
     * @OA\Put(
     *     path="/materis/{id}",
     *     tags={"Materi"},
     *     summary="Update an existing Materi",
     *     operationId="updateMateri",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="Materi id to update",
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
     *         description="Materi not found"
     *     ),
     *     @OA\Response(
     *         response=405,
     *         description="Validation exception"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     },     
     *     requestBody={"$ref": "#/components/requestBodies/Materi"}
     * )
     */

    /**
     * @OA\Delete(
     *     path="/materis/{id}",
     *     tags={"Materi"},
     *     summary="Deletes a Materi",
     *     operationId="deleteMateri",     
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="Materi id to delete",
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