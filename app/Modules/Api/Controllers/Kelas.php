<?php namespace App\Modules\Api\Controllers;
 
use asligresik\easyapi\Controllers\BaseResourceController;
class Kelas extends BaseResourceController
{
    protected $modelName = 'App\Modules\Api\Models\KelasModel';  

     /**
     * @OA\Get(
     *     path="/kelas",
     *     tags={"Kelas"},
     *     summary="Find list Kelas",
     *     description="Returns list of Kelas",
     *     operationId="getKelas",  
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
     *            @OA\Property(property="data",type="array",@OA\Items(ref="#/components/schemas/Kelas")),
     *            @OA\Property(property="pagination",type="object",@OA\Property(property="currentPage", type="integer"),@OA\Property(property="totalPage", type="integer")),
     *         ),
     *         @OA\XmlContent(type="object",
     *            @OA\Property(property="data",type="array",@OA\Items(ref="#/components/schemas/Kelas")),
     *            @OA\Property(property="pagination",type="array",@OA\Items(ref="#/components/schemas/Kelas")),
     *         ),           
     *     ),     
     *     @OA\Response(
     *         response=404,
     *         description="Kelas not found"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     }
     * )
     *     
     */

    /**
     * @OA\Get(
     *     path="/kelas/{id}",
     *     tags={"Kelas"},
     *     summary="Find Kelas by ID",
     *     description="Returns a single Kelas",
     *     operationId="getKelasById",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="ID of Kelas to return",
     *         required=true,
     *         @OA\Schema(
     *             type="integer",
     *             format="int64"
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *         @OA\JsonContent(ref="#/components/schemas/Kelas"),
     *         @OA\XmlContent(ref="#/components/schemas/Kelas"),
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid ID supplier"
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Kelas not found"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     }
     * )
     *     
     */

    /**
     * @OA\Post(
     *     path="/kelas",
     *     tags={"Kelas"},
     *     summary="Add a new Kelas to the store",
     *     operationId="addKelas",
     *     @OA\Response(
     *         response=201,
     *         description="Created Kelas",
     *         @OA\JsonContent(ref="#/components/schemas/Kelas"),
     *         @OA\XmlContent(ref="#/components/schemas/Kelas"),
     *     ),
     *     @OA\Response(
     *         response=405,
     *         description="Invalid input"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     },     
     *     requestBody={"$ref": "#/components/requestBodies/Kelas"}
     * )
     */

    /**
     * @OA\Put(
     *     path="/kelas/{id}",
     *     tags={"Kelas"},
     *     summary="Update an existing Kelas",
     *     operationId="updateKelas",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="Kelas id to update",
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
     *         description="Kelas not found"
     *     ),
     *     @OA\Response(
     *         response=405,
     *         description="Validation exception"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     },     
     *     requestBody={"$ref": "#/components/requestBodies/Kelas"}
     * )
     */

    /**
     * @OA\Delete(
     *     path="/kelas/{id}",
     *     tags={"Kelas"},
     *     summary="Deletes a Kelas",
     *     operationId="deleteKelas",     
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="Kelas id to delete",
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