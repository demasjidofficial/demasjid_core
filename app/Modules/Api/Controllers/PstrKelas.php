<?php namespace App\Modules\Api\Controllers;
 
use asligresik\easyapi\Controllers\BaseResourceController;
class PstrKelas extends BaseResourceController
{
    protected $modelName = 'App\Modules\Api\Models\PstrKelasModel';  

     /**
     * @OA\Get(
     *     path="/pstrKelas",
     *     tags={"PstrKelas"},
     *     summary="Find list PstrKelas",
     *     description="Returns list of PstrKelas",
     *     operationId="getPstrKelas",  
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
     *            @OA\Property(property="data",type="array",@OA\Items(ref="#/components/schemas/PstrKelas")),
     *            @OA\Property(property="pagination",type="object",@OA\Property(property="currentPage", type="integer"),@OA\Property(property="totalPage", type="integer")),
     *         ),
     *         @OA\XmlContent(type="object",
     *            @OA\Property(property="data",type="array",@OA\Items(ref="#/components/schemas/PstrKelas")),
     *            @OA\Property(property="pagination",type="array",@OA\Items(ref="#/components/schemas/PstrKelas")),
     *         ),           
     *     ),     
     *     @OA\Response(
     *         response=404,
     *         description="PstrKelas not found"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     }
     * )
     *     
     */

    /**
     * @OA\Get(
     *     path="/pstrKelas/{id}",
     *     tags={"PstrKelas"},
     *     summary="Find PstrKelas by ID",
     *     description="Returns a single PstrKelas",
     *     operationId="getPstrKelasById",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="ID of PstrKelas to return",
     *         required=true,
     *         @OA\Schema(
     *             type="integer",
     *             format="int64"
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *         @OA\JsonContent(ref="#/components/schemas/PstrKelas"),
     *         @OA\XmlContent(ref="#/components/schemas/PstrKelas"),
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid ID supplier"
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="PstrKelas not found"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     }
     * )
     *     
     */

    /**
     * @OA\Post(
     *     path="/pstrKelas",
     *     tags={"PstrKelas"},
     *     summary="Add a new PstrKelas to the store",
     *     operationId="addPstrKelas",
     *     @OA\Response(
     *         response=201,
     *         description="Created PstrKelas",
     *         @OA\JsonContent(ref="#/components/schemas/PstrKelas"),
     *         @OA\XmlContent(ref="#/components/schemas/PstrKelas"),
     *     ),
     *     @OA\Response(
     *         response=405,
     *         description="Invalid input"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     },     
     *     requestBody={"$ref": "#/components/requestBodies/PstrKelas"}
     * )
     */

    /**
     * @OA\Put(
     *     path="/pstrKelas/{id}",
     *     tags={"PstrKelas"},
     *     summary="Update an existing PstrKelas",
     *     operationId="updatePstrKelas",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="PstrKelas id to update",
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
     *         description="PstrKelas not found"
     *     ),
     *     @OA\Response(
     *         response=405,
     *         description="Validation exception"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     },     
     *     requestBody={"$ref": "#/components/requestBodies/PstrKelas"}
     * )
     */

    /**
     * @OA\Delete(
     *     path="/pstrKelas/{id}",
     *     tags={"PstrKelas"},
     *     summary="Deletes a PstrKelas",
     *     operationId="deletePstrKelas",     
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="PstrKelas id to delete",
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