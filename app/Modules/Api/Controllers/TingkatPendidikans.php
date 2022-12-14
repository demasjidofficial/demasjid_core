<?php namespace App\Modules\Api\Controllers;
 
use asligresik\easyapi\Controllers\BaseResourceController;
class TingkatPendidikans extends BaseResourceController
{
    protected $modelName = 'App\Modules\Api\Models\TingkatPendidikanModel';  

     /**
     * @OA\Get(
     *     path="/tingkatPendidikans",
     *     tags={"TingkatPendidikan"},
     *     summary="Find list TingkatPendidikan",
     *     description="Returns list of TingkatPendidikan",
     *     operationId="getTingkatPendidikan",  
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
     *            @OA\Property(property="data",type="array",@OA\Items(ref="#/components/schemas/TingkatPendidikan")),
     *            @OA\Property(property="pagination",type="object",@OA\Property(property="currentPage", type="integer"),@OA\Property(property="totalPage", type="integer")),
     *         ),
     *         @OA\XmlContent(type="object",
     *            @OA\Property(property="data",type="array",@OA\Items(ref="#/components/schemas/TingkatPendidikan")),
     *            @OA\Property(property="pagination",type="array",@OA\Items(ref="#/components/schemas/TingkatPendidikan")),
     *         ),           
     *     ),     
     *     @OA\Response(
     *         response=404,
     *         description="TingkatPendidikan not found"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     }
     * )
     *     
     */

    /**
     * @OA\Get(
     *     path="/tingkatPendidikans/{id}",
     *     tags={"TingkatPendidikan"},
     *     summary="Find TingkatPendidikan by ID",
     *     description="Returns a single TingkatPendidikan",
     *     operationId="getTingkatPendidikanById",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="ID of TingkatPendidikan to return",
     *         required=true,
     *         @OA\Schema(
     *             type="integer",
     *             format="int64"
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *         @OA\JsonContent(ref="#/components/schemas/TingkatPendidikan"),
     *         @OA\XmlContent(ref="#/components/schemas/TingkatPendidikan"),
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid ID supplier"
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="TingkatPendidikan not found"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     }
     * )
     *     
     */

    /**
     * @OA\Post(
     *     path="/tingkatPendidikans",
     *     tags={"TingkatPendidikan"},
     *     summary="Add a new TingkatPendidikan to the store",
     *     operationId="addTingkatPendidikan",
     *     @OA\Response(
     *         response=201,
     *         description="Created TingkatPendidikan",
     *         @OA\JsonContent(ref="#/components/schemas/TingkatPendidikan"),
     *         @OA\XmlContent(ref="#/components/schemas/TingkatPendidikan"),
     *     ),
     *     @OA\Response(
     *         response=405,
     *         description="Invalid input"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     },     
     *     requestBody={"$ref": "#/components/requestBodies/TingkatPendidikan"}
     * )
     */

    /**
     * @OA\Put(
     *     path="/tingkatPendidikans/{id}",
     *     tags={"TingkatPendidikan"},
     *     summary="Update an existing TingkatPendidikan",
     *     operationId="updateTingkatPendidikan",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="TingkatPendidikan id to update",
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
     *         description="TingkatPendidikan not found"
     *     ),
     *     @OA\Response(
     *         response=405,
     *         description="Validation exception"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     },     
     *     requestBody={"$ref": "#/components/requestBodies/TingkatPendidikan"}
     * )
     */

    /**
     * @OA\Delete(
     *     path="/tingkatPendidikans/{id}",
     *     tags={"TingkatPendidikan"},
     *     summary="Deletes a TingkatPendidikan",
     *     operationId="deleteTingkatPendidikan",     
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="TingkatPendidikan id to delete",
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