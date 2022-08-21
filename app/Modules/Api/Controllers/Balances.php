<?php namespace App\Modules\Api\Controllers;
 
use asligresik\easyapi\Controllers\BaseResourceController;
class Balances extends BaseResourceController
{
    protected $modelName = 'App\Modules\Api\Models\BalanceModel';  

     /**
     * @OA\Get(
     *     path="/balances",
     *     tags={"Balance"},
     *     summary="Find list Balance",
     *     description="Returns list of Balance",
     *     operationId="getBalance",  
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
     *            @OA\Property(property="data",type="array",@OA\Items(ref="#/components/schemas/Balance")),
     *            @OA\Property(property="pagination",type="object",@OA\Property(property="currentPage", type="integer"),@OA\Property(property="totalPage", type="integer")),
     *         ),
     *         @OA\XmlContent(type="object",
     *            @OA\Property(property="data",type="array",@OA\Items(ref="#/components/schemas/Balance")),
     *            @OA\Property(property="pagination",type="array",@OA\Items(ref="#/components/schemas/Balance")),
     *         ),           
     *     ),     
     *     @OA\Response(
     *         response=404,
     *         description="Balance not found"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     }
     * )
     *     
     */

    /**
     * @OA\Get(
     *     path="/balances/{id}",
     *     tags={"Balance"},
     *     summary="Find Balance by ID",
     *     description="Returns a single Balance",
     *     operationId="getBalanceById",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="ID of Balance to return",
     *         required=true,
     *         @OA\Schema(
     *             type="integer",
     *             format="int64"
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *         @OA\JsonContent(ref="#/components/schemas/Balance"),
     *         @OA\XmlContent(ref="#/components/schemas/Balance"),
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid ID supplier"
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Balance not found"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     }
     * )
     *     
     */

    /**
     * @OA\Post(
     *     path="/balances",
     *     tags={"Balance"},
     *     summary="Add a new Balance to the store",
     *     operationId="addBalance",
     *     @OA\Response(
     *         response=201,
     *         description="Created Balance",
     *         @OA\JsonContent(ref="#/components/schemas/Balance"),
     *         @OA\XmlContent(ref="#/components/schemas/Balance"),
     *     ),
     *     @OA\Response(
     *         response=405,
     *         description="Invalid input"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     },     
     *     requestBody={"$ref": "#/components/requestBodies/Balance"}
     * )
     */

    /**
     * @OA\Put(
     *     path="/balances/{id}",
     *     tags={"Balance"},
     *     summary="Update an existing Balance",
     *     operationId="updateBalance",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="Balance id to update",
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
     *         description="Balance not found"
     *     ),
     *     @OA\Response(
     *         response=405,
     *         description="Validation exception"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     },     
     *     requestBody={"$ref": "#/components/requestBodies/Balance"}
     * )
     */

    /**
     * @OA\Delete(
     *     path="/balances/{id}",
     *     tags={"Balance"},
     *     summary="Deletes a Balance",
     *     operationId="deleteBalance",     
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="Balance id to delete",
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