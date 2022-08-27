<?php namespace App\Modules\Api\Controllers;
 
use asligresik\easyapi\Controllers\BaseResourceController;
class Entities extends BaseResourceController
{
    protected $modelName = 'App\Modules\Api\Models\EntityModel';  

     /**
     * @OA\Get(
     *     path="/entities",
     *     tags={"Entity"},
     *     summary="Find list Entity",
     *     description="Returns list of Entity",
     *     operationId="getEntity",  
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
     *            @OA\Property(property="data",type="array",@OA\Items(ref="#/components/schemas/Entity")),
     *            @OA\Property(property="pagination",type="object",@OA\Property(property="currentPage", type="integer"),@OA\Property(property="totalPage", type="integer")),
     *         ),
     *         @OA\XmlContent(type="object",
     *            @OA\Property(property="data",type="array",@OA\Items(ref="#/components/schemas/Entity")),
     *            @OA\Property(property="pagination",type="array",@OA\Items(ref="#/components/schemas/Entity")),
     *         ),           
     *     ),     
     *     @OA\Response(
     *         response=404,
     *         description="Entity not found"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     }
     * )
     *     
     */

    /**
     * @OA\Get(
     *     path="/entities/{id}",
     *     tags={"Entity"},
     *     summary="Find Entity by ID",
     *     description="Returns a single Entity",
     *     operationId="getEntityById",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="ID of Entity to return",
     *         required=true,
     *         @OA\Schema(
     *             type="integer",
     *             format="int64"
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *         @OA\JsonContent(ref="#/components/schemas/Entity"),
     *         @OA\XmlContent(ref="#/components/schemas/Entity"),
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid ID supplier"
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Entity not found"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     }
     * )
     *     
     */

    /**
     * @OA\Post(
     *     path="/entities",
     *     tags={"Entity"},
     *     summary="Add a new Entity to the store",
     *     operationId="addEntity",
     *     @OA\Response(
     *         response=201,
     *         description="Created Entity",
     *         @OA\JsonContent(ref="#/components/schemas/Entity"),
     *         @OA\XmlContent(ref="#/components/schemas/Entity"),
     *     ),
     *     @OA\Response(
     *         response=405,
     *         description="Invalid input"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     },     
     *     requestBody={"$ref": "#/components/requestBodies/Entity"}
     * )
     */

    /**
     * @OA\Put(
     *     path="/entities/{id}",
     *     tags={"Entity"},
     *     summary="Update an existing Entity",
     *     operationId="updateEntity",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="Entity id to update",
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
     *         description="Entity not found"
     *     ),
     *     @OA\Response(
     *         response=405,
     *         description="Validation exception"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     },     
     *     requestBody={"$ref": "#/components/requestBodies/Entity"}
     * )
     */

    /**
     * @OA\Delete(
     *     path="/entities/{id}",
     *     tags={"Entity"},
     *     summary="Deletes a Entity",
     *     operationId="deleteEntity",     
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="Entity id to delete",
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