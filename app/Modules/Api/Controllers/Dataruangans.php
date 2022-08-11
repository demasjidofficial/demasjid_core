<?php namespace App\Modules\Api\Controllers;
 
use asligresik\easyapi\Controllers\BaseResourceController;
class Dataruangans extends BaseResourceController
{
    protected $modelName = 'App\Modules\Api\Models\DataruanganModel';  

     /**
     * @OA\Get(
     *     path="/dataruangans",
     *     tags={"Dataruangan"},
     *     summary="Find list Dataruangan",
     *     description="Returns list of Dataruangan",
     *     operationId="getDataruangan",  
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
     *            @OA\Property(property="data",type="array",@OA\Items(ref="#/components/schemas/Dataruangan")),
     *            @OA\Property(property="pagination",type="object",@OA\Property(property="currentPage", type="integer"),@OA\Property(property="totalPage", type="integer")),
     *         ),
     *         @OA\XmlContent(type="object",
     *            @OA\Property(property="data",type="array",@OA\Items(ref="#/components/schemas/Dataruangan")),
     *            @OA\Property(property="pagination",type="array",@OA\Items(ref="#/components/schemas/Dataruangan")),
     *         ),           
     *     ),     
     *     @OA\Response(
     *         response=404,
     *         description="Dataruangan not found"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     }
     * )
     *     
     */

    /**
     * @OA\Get(
     *     path="/dataruangans/{id}",
     *     tags={"Dataruangan"},
     *     summary="Find Dataruangan by ID",
     *     description="Returns a single Dataruangan",
     *     operationId="getDataruanganById",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="ID of Dataruangan to return",
     *         required=true,
     *         @OA\Schema(
     *             type="integer",
     *             format="int64"
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *         @OA\JsonContent(ref="#/components/schemas/Dataruangan"),
     *         @OA\XmlContent(ref="#/components/schemas/Dataruangan"),
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid ID supplier"
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Dataruangan not found"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     }
     * )
     *     
     */

    /**
     * @OA\Post(
     *     path="/dataruangans",
     *     tags={"Dataruangan"},
     *     summary="Add a new Dataruangan to the store",
     *     operationId="addDataruangan",
     *     @OA\Response(
     *         response=201,
     *         description="Created Dataruangan",
     *         @OA\JsonContent(ref="#/components/schemas/Dataruangan"),
     *         @OA\XmlContent(ref="#/components/schemas/Dataruangan"),
     *     ),
     *     @OA\Response(
     *         response=405,
     *         description="Invalid input"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     },     
     *     requestBody={"$ref": "#/components/requestBodies/Dataruangan"}
     * )
     */

    /**
     * @OA\Put(
     *     path="/dataruangans/{id}",
     *     tags={"Dataruangan"},
     *     summary="Update an existing Dataruangan",
     *     operationId="updateDataruangan",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="Dataruangan id to update",
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
     *         description="Dataruangan not found"
     *     ),
     *     @OA\Response(
     *         response=405,
     *         description="Validation exception"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     },     
     *     requestBody={"$ref": "#/components/requestBodies/Dataruangan"}
     * )
     */

    /**
     * @OA\Delete(
     *     path="/dataruangans/{id}",
     *     tags={"Dataruangan"},
     *     summary="Deletes a Dataruangan",
     *     operationId="deleteDataruangan",     
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="Dataruangan id to delete",
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