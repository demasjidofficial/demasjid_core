<?php namespace App\Modules\Api\Controllers;
 
use asligresik\easyapi\Controllers\BaseResourceController;
class Pendaftarans extends BaseResourceController
{
    protected $modelName = 'App\Modules\Api\Models\PendaftaranModel';  

     /**
     * @OA\Get(
     *     path="/pendaftarans",
     *     tags={"Pendaftaran"},
     *     summary="Find list Pendaftaran",
     *     description="Returns list of Pendaftaran",
     *     operationId="getPendaftaran",  
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
     *            @OA\Property(property="data",type="array",@OA\Items(ref="#/components/schemas/Pendaftaran")),
     *            @OA\Property(property="pagination",type="object",@OA\Property(property="currentPage", type="integer"),@OA\Property(property="totalPage", type="integer")),
     *         ),
     *         @OA\XmlContent(type="object",
     *            @OA\Property(property="data",type="array",@OA\Items(ref="#/components/schemas/Pendaftaran")),
     *            @OA\Property(property="pagination",type="array",@OA\Items(ref="#/components/schemas/Pendaftaran")),
     *         ),           
     *     ),     
     *     @OA\Response(
     *         response=404,
     *         description="Pendaftaran not found"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     }
     * )
     *     
     */

    /**
     * @OA\Get(
     *     path="/pendaftarans/{id}",
     *     tags={"Pendaftaran"},
     *     summary="Find Pendaftaran by ID",
     *     description="Returns a single Pendaftaran",
     *     operationId="getPendaftaranById",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="ID of Pendaftaran to return",
     *         required=true,
     *         @OA\Schema(
     *             type="integer",
     *             format="int64"
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *         @OA\JsonContent(ref="#/components/schemas/Pendaftaran"),
     *         @OA\XmlContent(ref="#/components/schemas/Pendaftaran"),
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid ID supplier"
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Pendaftaran not found"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     }
     * )
     *     
     */

    /**
     * @OA\Post(
     *     path="/pendaftarans",
     *     tags={"Pendaftaran"},
     *     summary="Add a new Pendaftaran to the store",
     *     operationId="addPendaftaran",
     *     @OA\Response(
     *         response=201,
     *         description="Created Pendaftaran",
     *         @OA\JsonContent(ref="#/components/schemas/Pendaftaran"),
     *         @OA\XmlContent(ref="#/components/schemas/Pendaftaran"),
     *     ),
     *     @OA\Response(
     *         response=405,
     *         description="Invalid input"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     },     
     *     requestBody={"$ref": "#/components/requestBodies/Pendaftaran"}
     * )
     */

    /**
     * @OA\Put(
     *     path="/pendaftarans/{id}",
     *     tags={"Pendaftaran"},
     *     summary="Update an existing Pendaftaran",
     *     operationId="updatePendaftaran",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="Pendaftaran id to update",
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
     *         description="Pendaftaran not found"
     *     ),
     *     @OA\Response(
     *         response=405,
     *         description="Validation exception"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     },     
     *     requestBody={"$ref": "#/components/requestBodies/Pendaftaran"}
     * )
     */

    /**
     * @OA\Delete(
     *     path="/pendaftarans/{id}",
     *     tags={"Pendaftaran"},
     *     summary="Deletes a Pendaftaran",
     *     operationId="deletePendaftaran",     
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="Pendaftaran id to delete",
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