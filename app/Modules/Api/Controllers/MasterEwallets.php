<?php namespace App\Modules\Api\Controllers;
 
use asligresik\easyapi\Controllers\BaseResourceController;
class MasterEwallets extends BaseResourceController
{
    protected $modelName = 'App\Modules\Api\Models\MasterEwalletModel';  

     /**
     * @OA\Get(
     *     path="/masterEwallets",
     *     tags={"MasterEwallet"},
     *     summary="Find list MasterEwallet",
     *     description="Returns list of MasterEwallet",
     *     operationId="getMasterEwallet",  
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
     *            @OA\Property(property="data",type="array",@OA\Items(ref="#/components/schemas/MasterEwallet")),
     *            @OA\Property(property="pagination",type="object",@OA\Property(property="currentPage", type="integer"),@OA\Property(property="totalPage", type="integer")),
     *         ),
     *         @OA\XmlContent(type="object",
     *            @OA\Property(property="data",type="array",@OA\Items(ref="#/components/schemas/MasterEwallet")),
     *            @OA\Property(property="pagination",type="array",@OA\Items(ref="#/components/schemas/MasterEwallet")),
     *         ),           
     *     ),     
     *     @OA\Response(
     *         response=404,
     *         description="MasterEwallet not found"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     }
     * )
     *     
     */

    /**
     * @OA\Get(
     *     path="/masterEwallets/{id}",
     *     tags={"MasterEwallet"},
     *     summary="Find MasterEwallet by ID",
     *     description="Returns a single MasterEwallet",
     *     operationId="getMasterEwalletById",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="ID of MasterEwallet to return",
     *         required=true,
     *         @OA\Schema(
     *             type="integer",
     *             format="int64"
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *         @OA\JsonContent(ref="#/components/schemas/MasterEwallet"),
     *         @OA\XmlContent(ref="#/components/schemas/MasterEwallet"),
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid ID supplier"
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="MasterEwallet not found"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     }
     * )
     *     
     */

    /**
     * @OA\Post(
     *     path="/masterEwallets",
     *     tags={"MasterEwallet"},
     *     summary="Add a new MasterEwallet to the store",
     *     operationId="addMasterEwallet",
     *     @OA\Response(
     *         response=201,
     *         description="Created MasterEwallet",
     *         @OA\JsonContent(ref="#/components/schemas/MasterEwallet"),
     *         @OA\XmlContent(ref="#/components/schemas/MasterEwallet"),
     *     ),
     *     @OA\Response(
     *         response=405,
     *         description="Invalid input"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     },     
     *     requestBody={"$ref": "#/components/requestBodies/MasterEwallet"}
     * )
     */

    /**
     * @OA\Put(
     *     path="/masterEwallets/{id}",
     *     tags={"MasterEwallet"},
     *     summary="Update an existing MasterEwallet",
     *     operationId="updateMasterEwallet",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="MasterEwallet id to update",
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
     *         description="MasterEwallet not found"
     *     ),
     *     @OA\Response(
     *         response=405,
     *         description="Validation exception"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     },     
     *     requestBody={"$ref": "#/components/requestBodies/MasterEwallet"}
     * )
     */

    /**
     * @OA\Delete(
     *     path="/masterEwallets/{id}",
     *     tags={"MasterEwallet"},
     *     summary="Deletes a MasterEwallet",
     *     operationId="deleteMasterEwallet",     
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="MasterEwallet id to delete",
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