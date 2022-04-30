<?php namespace App\Modules\Api\Controllers;
 
use asligresik\easyapi\Controllers\BaseResourceController;
class Imams extends BaseResourceController
{
    protected $modelName = 'App\Modules\Api\Models\ImamModel';  

     /**
     * @OA\Get(
     *     path="/imams",
     *     tags={"Imam"},
     *     summary="Find list Imam",
     *     description="Returns list of Imam",
     *     operationId="getImam",  
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
     *            @OA\Property(property="data",type="array",@OA\Items(ref="#/components/schemas/Imam")),
     *            @OA\Property(property="pagination",type="object",@OA\Property(property="currentPage", type="integer"),@OA\Property(property="totalPage", type="integer")),
     *         ),
     *         @OA\XmlContent(type="object",
     *            @OA\Property(property="data",type="array",@OA\Items(ref="#/components/schemas/Imam")),
     *            @OA\Property(property="pagination",type="array",@OA\Items(ref="#/components/schemas/Imam")),
     *         ),           
     *     ),     
     *     @OA\Response(
     *         response=404,
     *         description="Imam not found"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     }
     * )
     *     
     */

    /**
     * @OA\Get(
     *     path="/imams/{id}",
     *     tags={"Imam"},
     *     summary="Find Imam by ID",
     *     description="Returns a single Imam",
     *     operationId="getImamById",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="ID of Imam to return",
     *         required=true,
     *         @OA\Schema(
     *             type="integer",
     *             format="int64"
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *         @OA\JsonContent(ref="#/components/schemas/Imam"),
     *         @OA\XmlContent(ref="#/components/schemas/Imam"),
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid ID supplier"
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Imam not found"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     }
     * )
     *     
     */

    /**
     * @OA\Post(
     *     path="/imams",
     *     tags={"Imam"},
     *     summary="Add a new Imam to the store",
     *     operationId="addImam",
     *     @OA\Response(
     *         response=201,
     *         description="Created Imam",
     *         @OA\JsonContent(ref="#/components/schemas/Imam"),
     *         @OA\XmlContent(ref="#/components/schemas/Imam"),
     *     ),
     *     @OA\Response(
     *         response=405,
     *         description="Invalid input"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     },     
     *     requestBody={"$ref": "#/components/requestBodies/Imam"}
     * )
     */

    /**
     * @OA\Put(
     *     path="/imams/{id}",
     *     tags={"Imam"},
     *     summary="Update an existing Imam",
     *     operationId="updateImam",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="Imam id to update",
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
     *         description="Imam not found"
     *     ),
     *     @OA\Response(
     *         response=405,
     *         description="Validation exception"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     },     
     *     requestBody={"$ref": "#/components/requestBodies/Imam"}
     * )
     */

    /**
     * @OA\Delete(
     *     path="/imams/{id}",
     *     tags={"Imam"},
     *     summary="Deletes a Imam",
     *     operationId="deleteImam",     
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="Imam id to delete",
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