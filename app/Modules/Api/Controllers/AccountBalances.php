<?php namespace App\Modules\Api\Controllers;
 
use asligresik\easyapi\Controllers\BaseResourceController;
class AccountBalances extends BaseResourceController
{
    protected $modelName = 'App\Modules\Api\Models\AccountBalanceModel';  

     /**
     * @OA\Get(
     *     path="/accountBalances",
     *     tags={"AccountBalance"},
     *     summary="Find list AccountBalance",
     *     description="Returns list of AccountBalance",
     *     operationId="getAccountBalance",  
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
     *            @OA\Property(property="data",type="array",@OA\Items(ref="#/components/schemas/AccountBalance")),
     *            @OA\Property(property="pagination",type="object",@OA\Property(property="currentPage", type="integer"),@OA\Property(property="totalPage", type="integer")),
     *         ),
     *         @OA\XmlContent(type="object",
     *            @OA\Property(property="data",type="array",@OA\Items(ref="#/components/schemas/AccountBalance")),
     *            @OA\Property(property="pagination",type="array",@OA\Items(ref="#/components/schemas/AccountBalance")),
     *         ),           
     *     ),     
     *     @OA\Response(
     *         response=404,
     *         description="AccountBalance not found"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     }
     * )
     *     
     */

    /**
     * @OA\Get(
     *     path="/accountBalances/{id}",
     *     tags={"AccountBalance"},
     *     summary="Find AccountBalance by ID",
     *     description="Returns a single AccountBalance",
     *     operationId="getAccountBalanceById",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="ID of AccountBalance to return",
     *         required=true,
     *         @OA\Schema(
     *             type="integer",
     *             format="int64"
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *         @OA\JsonContent(ref="#/components/schemas/AccountBalance"),
     *         @OA\XmlContent(ref="#/components/schemas/AccountBalance"),
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid ID supplier"
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="AccountBalance not found"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     }
     * )
     *     
     */

    /**
     * @OA\Post(
     *     path="/accountBalances",
     *     tags={"AccountBalance"},
     *     summary="Add a new AccountBalance to the store",
     *     operationId="addAccountBalance",
     *     @OA\Response(
     *         response=201,
     *         description="Created AccountBalance",
     *         @OA\JsonContent(ref="#/components/schemas/AccountBalance"),
     *         @OA\XmlContent(ref="#/components/schemas/AccountBalance"),
     *     ),
     *     @OA\Response(
     *         response=405,
     *         description="Invalid input"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     },     
     *     requestBody={"$ref": "#/components/requestBodies/AccountBalance"}
     * )
     */

    /**
     * @OA\Put(
     *     path="/accountBalances/{id}",
     *     tags={"AccountBalance"},
     *     summary="Update an existing AccountBalance",
     *     operationId="updateAccountBalance",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="AccountBalance id to update",
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
     *         description="AccountBalance not found"
     *     ),
     *     @OA\Response(
     *         response=405,
     *         description="Validation exception"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     },     
     *     requestBody={"$ref": "#/components/requestBodies/AccountBalance"}
     * )
     */

    /**
     * @OA\Delete(
     *     path="/accountBalances/{id}",
     *     tags={"AccountBalance"},
     *     summary="Deletes a AccountBalance",
     *     operationId="deleteAccountBalance",     
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="AccountBalance id to delete",
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