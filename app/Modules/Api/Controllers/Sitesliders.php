<?php namespace App\Modules\Api\Controllers;
 
use asligresik\easyapi\Controllers\BaseResourceController;
class Sitesliders extends BaseResourceController
{
    protected $modelName = 'App\Modules\Api\Models\SiteslidersModel';  

     /**
     * @OA\Get(
     *     path="/sitesliders",
     *     tags={"Sitesliders"},
     *     summary="Find list Sitesliders",
     *     description="Returns list of Sitesliders",
     *     operationId="getSitesliders",  
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
     *            @OA\Property(property="data",type="array",@OA\Items(ref="#/components/schemas/Sitesliders")),
     *            @OA\Property(property="pagination",type="object",@OA\Property(property="currentPage", type="integer"),@OA\Property(property="totalPage", type="integer")),
     *         ),
     *         @OA\XmlContent(type="object",
     *            @OA\Property(property="data",type="array",@OA\Items(ref="#/components/schemas/Sitesliders")),
     *            @OA\Property(property="pagination",type="array",@OA\Items(ref="#/components/schemas/Sitesliders")),
     *         ),           
     *     ),     
     *     @OA\Response(
     *         response=404,
     *         description="Sitesliders not found"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     }
     * )
     *     
     */

    /**
     * @OA\Get(
     *     path="/sitesliders/{id}",
     *     tags={"Sitesliders"},
     *     summary="Find Sitesliders by ID",
     *     description="Returns a single Sitesliders",
     *     operationId="getSiteslidersById",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="ID of Sitesliders to return",
     *         required=true,
     *         @OA\Schema(
     *             type="integer",
     *             format="int64"
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *         @OA\JsonContent(ref="#/components/schemas/Sitesliders"),
     *         @OA\XmlContent(ref="#/components/schemas/Sitesliders"),
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid ID supplier"
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Sitesliders not found"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     }
     * )
     *     
     */

    /**
     * @OA\Post(
     *     path="/sitesliders",
     *     tags={"Sitesliders"},
     *     summary="Add a new Sitesliders to the store",
     *     operationId="addSitesliders",
     *     @OA\Response(
     *         response=201,
     *         description="Created Sitesliders",
     *         @OA\JsonContent(ref="#/components/schemas/Sitesliders"),
     *         @OA\XmlContent(ref="#/components/schemas/Sitesliders"),
     *     ),
     *     @OA\Response(
     *         response=405,
     *         description="Invalid input"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     },     
     *     requestBody={"$ref": "#/components/requestBodies/Sitesliders"}
     * )
     */

    /**
     * @OA\Put(
     *     path="/sitesliders/{id}",
     *     tags={"Sitesliders"},
     *     summary="Update an existing Sitesliders",
     *     operationId="updateSitesliders",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="Sitesliders id to update",
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
     *         description="Sitesliders not found"
     *     ),
     *     @OA\Response(
     *         response=405,
     *         description="Validation exception"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     },     
     *     requestBody={"$ref": "#/components/requestBodies/Sitesliders"}
     * )
     */

    /**
     * @OA\Delete(
     *     path="/sitesliders/{id}",
     *     tags={"Sitesliders"},
     *     summary="Deletes a Sitesliders",
     *     operationId="deleteSitesliders",     
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="Sitesliders id to delete",
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