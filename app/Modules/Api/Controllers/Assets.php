<?php namespace App\Modules\Api\Controllers;
 
use asligresik\easyapi\Controllers\BaseResourceController;
class Assets extends BaseResourceController
{
    protected $modelName = 'App\Modules\Api\Models\AssetModel';  

     /**
     * @OA\Get(
     *     path="/assets",
     *     tags={"Asset"},
     *     summary="Find list Asset",
     *     description="Returns list of Asset",
     *     operationId="getAsset",  
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
     *            @OA\Property(property="data",type="array",@OA\Items(ref="#/components/schemas/Asset")),
     *            @OA\Property(property="pagination",type="object",@OA\Property(property="currentPage", type="integer"),@OA\Property(property="totalPage", type="integer")),
     *         ),
     *         @OA\XmlContent(type="object",
     *            @OA\Property(property="data",type="array",@OA\Items(ref="#/components/schemas/Asset")),
     *            @OA\Property(property="pagination",type="array",@OA\Items(ref="#/components/schemas/Asset")),
     *         ),           
     *     ),     
     *     @OA\Response(
     *         response=404,
     *         description="Asset not found"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     }
     * )
     *     
     */

    /**
     * @OA\Get(
     *     path="/assets/{id}",
     *     tags={"Asset"},
     *     summary="Find Asset by ID",
     *     description="Returns a single Asset",
     *     operationId="getAssetById",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="ID of Asset to return",
     *         required=true,
     *         @OA\Schema(
     *             type="integer",
     *             format="int64"
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *         @OA\JsonContent(ref="#/components/schemas/Asset"),
     *         @OA\XmlContent(ref="#/components/schemas/Asset"),
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid ID supplier"
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Asset not found"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     }
     * )
     *     
     */

    /**
     * @OA\Post(
     *     path="/assets",
     *     tags={"Asset"},
     *     summary="Add a new Asset to the store",
     *     operationId="addAsset",
     *     @OA\Response(
     *         response=201,
     *         description="Created Asset",
     *         @OA\JsonContent(ref="#/components/schemas/Asset"),
     *         @OA\XmlContent(ref="#/components/schemas/Asset"),
     *     ),
     *     @OA\Response(
     *         response=405,
     *         description="Invalid input"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     },     
     *     requestBody={"$ref": "#/components/requestBodies/Asset"}
     * )
     */

    /**
     * @OA\Put(
     *     path="/assets/{id}",
     *     tags={"Asset"},
     *     summary="Update an existing Asset",
     *     operationId="updateAsset",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="Asset id to update",
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
     *         description="Asset not found"
     *     ),
     *     @OA\Response(
     *         response=405,
     *         description="Validation exception"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     },     
     *     requestBody={"$ref": "#/components/requestBodies/Asset"}
     * )
     */

    /**
     * @OA\Delete(
     *     path="/assets/{id}",
     *     tags={"Asset"},
     *     summary="Deletes a Asset",
     *     operationId="deleteAsset",     
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="Asset id to delete",
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