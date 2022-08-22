<?php namespace App\Modules\Api\Controllers;
 
use asligresik\easyapi\Controllers\BaseResourceController;
class Pelajarans extends BaseResourceController
{
    protected $modelName = 'App\Modules\Api\Models\PelajaranModel';  

     /**
     * @OA\Get(
     *     path="/pelajarans",
     *     tags={"Pelajaran"},
     *     summary="Find list Pelajaran",
     *     description="Returns list of Pelajaran",
     *     operationId="getPelajaran",  
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
     *            @OA\Property(property="data",type="array",@OA\Items(ref="#/components/schemas/Pelajaran")),
     *            @OA\Property(property="pagination",type="object",@OA\Property(property="currentPage", type="integer"),@OA\Property(property="totalPage", type="integer")),
     *         ),
     *         @OA\XmlContent(type="object",
     *            @OA\Property(property="data",type="array",@OA\Items(ref="#/components/schemas/Pelajaran")),
     *            @OA\Property(property="pagination",type="array",@OA\Items(ref="#/components/schemas/Pelajaran")),
     *         ),           
     *     ),     
     *     @OA\Response(
     *         response=404,
     *         description="Pelajaran not found"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     }
     * )
     *     
     */

    /**
     * @OA\Get(
     *     path="/pelajarans/{id}",
     *     tags={"Pelajaran"},
     *     summary="Find Pelajaran by ID",
     *     description="Returns a single Pelajaran",
     *     operationId="getPelajaranById",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="ID of Pelajaran to return",
     *         required=true,
     *         @OA\Schema(
     *             type="integer",
     *             format="int64"
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *         @OA\JsonContent(ref="#/components/schemas/Pelajaran"),
     *         @OA\XmlContent(ref="#/components/schemas/Pelajaran"),
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid ID supplier"
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Pelajaran not found"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     }
     * )
     *     
     */

    /**
     * @OA\Post(
     *     path="/pelajarans",
     *     tags={"Pelajaran"},
     *     summary="Add a new Pelajaran to the store",
     *     operationId="addPelajaran",
     *     @OA\Response(
     *         response=201,
     *         description="Created Pelajaran",
     *         @OA\JsonContent(ref="#/components/schemas/Pelajaran"),
     *         @OA\XmlContent(ref="#/components/schemas/Pelajaran"),
     *     ),
     *     @OA\Response(
     *         response=405,
     *         description="Invalid input"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     },     
     *     requestBody={"$ref": "#/components/requestBodies/Pelajaran"}
     * )
     */

    /**
     * @OA\Put(
     *     path="/pelajarans/{id}",
     *     tags={"Pelajaran"},
     *     summary="Update an existing Pelajaran",
     *     operationId="updatePelajaran",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="Pelajaran id to update",
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
     *         description="Pelajaran not found"
     *     ),
     *     @OA\Response(
     *         response=405,
     *         description="Validation exception"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     },     
     *     requestBody={"$ref": "#/components/requestBodies/Pelajaran"}
     * )
     */

    /**
     * @OA\Delete(
     *     path="/pelajarans/{id}",
     *     tags={"Pelajaran"},
     *     summary="Deletes a Pelajaran",
     *     operationId="deletePelajaran",     
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="Pelajaran id to delete",
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