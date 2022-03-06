<?php namespace App\Modules\Api\Controllers;
 
use asligresik\easyapi\Controllers\BaseResourceController;
class AuthLogins extends BaseResourceController
{
    protected $modelName = 'App\Modules\Api\Models\AuthLoginsModel';  

     /**
     * @OA\Get(
     *     path="/authLogins",
     *     tags={"AuthLogins"},
     *     summary="Find list AuthLogins",
     *     description="Returns list of AuthLogins",
     *     operationId="getAuthLogins",  
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
     *            @OA\Property(property="data",type="array",@OA\Items(ref="#/components/schemas/AuthLogins")),
     *            @OA\Property(property="pagination",type="object",@OA\Property(property="currentPage", type="integer"),@OA\Property(property="totalPage", type="integer")),
     *         ),
     *         @OA\XmlContent(type="object",
     *            @OA\Property(property="data",type="array",@OA\Items(ref="#/components/schemas/AuthLogins")),
     *            @OA\Property(property="pagination",type="array",@OA\Items(ref="#/components/schemas/AuthLogins")),
     *         ),           
     *     ),     
     *     @OA\Response(
     *         response=404,
     *         description="AuthLogins not found"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     }
     * )
     *     
     */

    /**
     * @OA\Get(
     *     path="/authLogins/{id}",
     *     tags={"AuthLogins"},
     *     summary="Find AuthLogins by ID",
     *     description="Returns a single AuthLogins",
     *     operationId="getAuthLoginsById",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="ID of AuthLogins to return",
     *         required=true,
     *         @OA\Schema(
     *             type="integer",
     *             format="int64"
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *         @OA\JsonContent(ref="#/components/schemas/AuthLogins"),
     *         @OA\XmlContent(ref="#/components/schemas/AuthLogins"),
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid ID supplier"
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="AuthLogins not found"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     }
     * )
     *     
     */

    /**
     * @OA\Post(
     *     path="/authLogins",
     *     tags={"AuthLogins"},
     *     summary="Add a new AuthLogins to the store",
     *     operationId="addAuthLogins",
     *     @OA\Response(
     *         response=201,
     *         description="Created AuthLogins",
     *         @OA\JsonContent(ref="#/components/schemas/AuthLogins"),
     *         @OA\XmlContent(ref="#/components/schemas/AuthLogins"),
     *     ),
     *     @OA\Response(
     *         response=405,
     *         description="Invalid input"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     },     
     *     requestBody={"$ref": "#/components/requestBodies/AuthLogins"}
     * )
     */

    /**
     * @OA\Put(
     *     path="/authLogins/{id}",
     *     tags={"AuthLogins"},
     *     summary="Update an existing AuthLogins",
     *     operationId="updateAuthLogins",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="AuthLogins id to update",
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
     *         description="AuthLogins not found"
     *     ),
     *     @OA\Response(
     *         response=405,
     *         description="Validation exception"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     },     
     *     requestBody={"$ref": "#/components/requestBodies/AuthLogins"}
     * )
     */

    /**
     * @OA\Delete(
     *     path="/authLogins/{id}",
     *     tags={"AuthLogins"},
     *     summary="Deletes a AuthLogins",
     *     operationId="deleteAuthLogins",     
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="AuthLogins id to delete",
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