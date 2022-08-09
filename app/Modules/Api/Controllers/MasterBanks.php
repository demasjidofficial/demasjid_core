<?php namespace App\Modules\Api\Controllers;
 
use asligresik\easyapi\Controllers\BaseResourceController;
class MasterBanks extends BaseResourceController
{
    protected $modelName = 'App\Modules\Api\Models\MasterBankModel';  

     /**
     * @OA\Get(
     *     path="/masterBanks",
     *     tags={"MasterBank"},
     *     summary="Find list MasterBank",
     *     description="Returns list of MasterBank",
     *     operationId="getMasterBank",  
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
     *            @OA\Property(property="data",type="array",@OA\Items(ref="#/components/schemas/MasterBank")),
     *            @OA\Property(property="pagination",type="object",@OA\Property(property="currentPage", type="integer"),@OA\Property(property="totalPage", type="integer")),
     *         ),
     *         @OA\XmlContent(type="object",
     *            @OA\Property(property="data",type="array",@OA\Items(ref="#/components/schemas/MasterBank")),
     *            @OA\Property(property="pagination",type="array",@OA\Items(ref="#/components/schemas/MasterBank")),
     *         ),           
     *     ),     
     *     @OA\Response(
     *         response=404,
     *         description="MasterBank not found"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     }
     * )
     *     
     */

    /**
     * @OA\Get(
     *     path="/masterBanks/{id}",
     *     tags={"MasterBank"},
     *     summary="Find MasterBank by ID",
     *     description="Returns a single MasterBank",
     *     operationId="getMasterBankById",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="ID of MasterBank to return",
     *         required=true,
     *         @OA\Schema(
     *             type="integer",
     *             format="int64"
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *         @OA\JsonContent(ref="#/components/schemas/MasterBank"),
     *         @OA\XmlContent(ref="#/components/schemas/MasterBank"),
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid ID supplier"
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="MasterBank not found"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     }
     * )
     *     
     */

    /**
     * @OA\Post(
     *     path="/masterBanks",
     *     tags={"MasterBank"},
     *     summary="Add a new MasterBank to the store",
     *     operationId="addMasterBank",
     *     @OA\Response(
     *         response=201,
     *         description="Created MasterBank",
     *         @OA\JsonContent(ref="#/components/schemas/MasterBank"),
     *         @OA\XmlContent(ref="#/components/schemas/MasterBank"),
     *     ),
     *     @OA\Response(
     *         response=405,
     *         description="Invalid input"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     },     
     *     requestBody={"$ref": "#/components/requestBodies/MasterBank"}
     * )
     */

    /**
     * @OA\Put(
     *     path="/masterBanks/{id}",
     *     tags={"MasterBank"},
     *     summary="Update an existing MasterBank",
     *     operationId="updateMasterBank",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="MasterBank id to update",
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
     *         description="MasterBank not found"
     *     ),
     *     @OA\Response(
     *         response=405,
     *         description="Validation exception"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     },     
     *     requestBody={"$ref": "#/components/requestBodies/MasterBank"}
     * )
     */

    /**
     * @OA\Delete(
     *     path="/masterBanks/{id}",
     *     tags={"MasterBank"},
     *     summary="Deletes a MasterBank",
     *     operationId="deleteMasterBank",     
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="MasterBank id to delete",
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