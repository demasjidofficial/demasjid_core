<?php namespace App\Modules\Api\Controllers;
 
use asligresik\easyapi\Controllers\BaseResourceController;
class JadwalFundraisings extends BaseResourceController
{
    protected $modelName = 'App\Modules\Api\Models\JadwalFundraisingModel';  

     /**
     * @OA\Get(
     *     path="/jadwalFundraisings",
     *     tags={"JadwalFundraising"},
     *     summary="Find list JadwalFundraising",
     *     description="Returns list of JadwalFundraising",
     *     operationId="getJadwalFundraising",  
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
     *            @OA\Property(property="data",type="array",@OA\Items(ref="#/components/schemas/JadwalFundraising")),
     *            @OA\Property(property="pagination",type="object",@OA\Property(property="currentPage", type="integer"),@OA\Property(property="totalPage", type="integer")),
     *         ),
     *         @OA\XmlContent(type="object",
     *            @OA\Property(property="data",type="array",@OA\Items(ref="#/components/schemas/JadwalFundraising")),
     *            @OA\Property(property="pagination",type="array",@OA\Items(ref="#/components/schemas/JadwalFundraising")),
     *         ),           
     *     ),     
     *     @OA\Response(
     *         response=404,
     *         description="JadwalFundraising not found"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     }
     * )
     *     
     */

    /**
     * @OA\Get(
     *     path="/jadwalFundraisings/{id}",
     *     tags={"JadwalFundraising"},
     *     summary="Find JadwalFundraising by ID",
     *     description="Returns a single JadwalFundraising",
     *     operationId="getJadwalFundraisingById",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="ID of JadwalFundraising to return",
     *         required=true,
     *         @OA\Schema(
     *             type="integer",
     *             format="int64"
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *         @OA\JsonContent(ref="#/components/schemas/JadwalFundraising"),
     *         @OA\XmlContent(ref="#/components/schemas/JadwalFundraising"),
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid ID supplier"
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="JadwalFundraising not found"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     }
     * )
     *     
     */

    /**
     * @OA\Post(
     *     path="/jadwalFundraisings",
     *     tags={"JadwalFundraising"},
     *     summary="Add a new JadwalFundraising to the store",
     *     operationId="addJadwalFundraising",
     *     @OA\Response(
     *         response=201,
     *         description="Created JadwalFundraising",
     *         @OA\JsonContent(ref="#/components/schemas/JadwalFundraising"),
     *         @OA\XmlContent(ref="#/components/schemas/JadwalFundraising"),
     *     ),
     *     @OA\Response(
     *         response=405,
     *         description="Invalid input"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     },     
     *     requestBody={"$ref": "#/components/requestBodies/JadwalFundraising"}
     * )
     */

    /**
     * @OA\Put(
     *     path="/jadwalFundraisings/{id}",
     *     tags={"JadwalFundraising"},
     *     summary="Update an existing JadwalFundraising",
     *     operationId="updateJadwalFundraising",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="JadwalFundraising id to update",
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
     *         description="JadwalFundraising not found"
     *     ),
     *     @OA\Response(
     *         response=405,
     *         description="Validation exception"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     },     
     *     requestBody={"$ref": "#/components/requestBodies/JadwalFundraising"}
     * )
     */

    /**
     * @OA\Delete(
     *     path="/jadwalFundraisings/{id}",
     *     tags={"JadwalFundraising"},
     *     summary="Deletes a JadwalFundraising",
     *     operationId="deleteJadwalFundraising",     
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="JadwalFundraising id to delete",
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