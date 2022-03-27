<?php namespace App\Modules\Api\Controllers;
 
use asligresik\easyapi\Controllers\BaseResourceController;
class ChartOfAccounts extends BaseResourceController
{
    protected $modelName = 'App\Modules\Api\Models\ChartOfAccountModel';  

     /**
     * @OA\Get(
     *     path="/chartOfAccounts",
     *     tags={"ChartOfAccount"},
     *     summary="Find list ChartOfAccount",
     *     description="Returns list of ChartOfAccount",
     *     operationId="getChartOfAccount",  
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
     *            @OA\Property(property="data",type="array",@OA\Items(ref="#/components/schemas/ChartOfAccount")),
     *            @OA\Property(property="pagination",type="object",@OA\Property(property="currentPage", type="integer"),@OA\Property(property="totalPage", type="integer")),
     *         ),
     *         @OA\XmlContent(type="object",
     *            @OA\Property(property="data",type="array",@OA\Items(ref="#/components/schemas/ChartOfAccount")),
     *            @OA\Property(property="pagination",type="array",@OA\Items(ref="#/components/schemas/ChartOfAccount")),
     *         ),           
     *     ),     
     *     @OA\Response(
     *         response=404,
     *         description="ChartOfAccount not found"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     }
     * )
     *     
     */

    /**
     * @OA\Get(
     *     path="/chartOfAccounts/{id}",
     *     tags={"ChartOfAccount"},
     *     summary="Find ChartOfAccount by ID",
     *     description="Returns a single ChartOfAccount",
     *     operationId="getChartOfAccountById",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="ID of ChartOfAccount to return",
     *         required=true,
     *         @OA\Schema(
     *             type="integer",
     *             format="int64"
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *         @OA\JsonContent(ref="#/components/schemas/ChartOfAccount"),
     *         @OA\XmlContent(ref="#/components/schemas/ChartOfAccount"),
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid ID supplier"
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="ChartOfAccount not found"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     }
     * )
     *     
     */

    /**
     * @OA\Post(
     *     path="/chartOfAccounts",
     *     tags={"ChartOfAccount"},
     *     summary="Add a new ChartOfAccount to the store",
     *     operationId="addChartOfAccount",
     *     @OA\Response(
     *         response=201,
     *         description="Created ChartOfAccount",
     *         @OA\JsonContent(ref="#/components/schemas/ChartOfAccount"),
     *         @OA\XmlContent(ref="#/components/schemas/ChartOfAccount"),
     *     ),
     *     @OA\Response(
     *         response=405,
     *         description="Invalid input"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     },     
     *     requestBody={"$ref": "#/components/requestBodies/ChartOfAccount"}
     * )
     */

    /**
     * @OA\Put(
     *     path="/chartOfAccounts/{id}",
     *     tags={"ChartOfAccount"},
     *     summary="Update an existing ChartOfAccount",
     *     operationId="updateChartOfAccount",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="ChartOfAccount id to update",
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
     *         description="ChartOfAccount not found"
     *     ),
     *     @OA\Response(
     *         response=405,
     *         description="Validation exception"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     },     
     *     requestBody={"$ref": "#/components/requestBodies/ChartOfAccount"}
     * )
     */

    /**
     * @OA\Delete(
     *     path="/chartOfAccounts/{id}",
     *     tags={"ChartOfAccount"},
     *     summary="Deletes a ChartOfAccount",
     *     operationId="deleteChartOfAccount",     
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="ChartOfAccount id to delete",
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