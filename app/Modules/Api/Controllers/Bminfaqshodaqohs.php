<?php namespace App\Modules\Api\Controllers;
 
use asligresik\easyapi\Controllers\BaseResourceController;
class Bminfaqshodaqohs extends BaseResourceController
{
    protected $modelName = 'App\Modules\Api\Models\BminfaqshodaqohModel';  

     /**
     * @OA\Get(
     *     path="/bminfaqshodaqohs",
     *     tags={"Bminfaqshodaqoh"},
     *     summary="Find list Bminfaqshodaqoh",
     *     description="Returns list of Bminfaqshodaqoh",
     *     operationId="getBminfaqshodaqoh",  
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
     *            @OA\Property(property="data",type="array",@OA\Items(ref="#/components/schemas/Bminfaqshodaqoh")),
     *            @OA\Property(property="pagination",type="object",@OA\Property(property="currentPage", type="integer"),@OA\Property(property="totalPage", type="integer")),
     *         ),
     *         @OA\XmlContent(type="object",
     *            @OA\Property(property="data",type="array",@OA\Items(ref="#/components/schemas/Bminfaqshodaqoh")),
     *            @OA\Property(property="pagination",type="array",@OA\Items(ref="#/components/schemas/Bminfaqshodaqoh")),
     *         ),           
     *     ),     
     *     @OA\Response(
     *         response=404,
     *         description="Bminfaqshodaqoh not found"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     }
     * )
     *     
     */

    /**
     * @OA\Get(
     *     path="/bminfaqshodaqohs/{id}",
     *     tags={"Bminfaqshodaqoh"},
     *     summary="Find Bminfaqshodaqoh by ID",
     *     description="Returns a single Bminfaqshodaqoh",
     *     operationId="getBminfaqshodaqohById",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="ID of Bminfaqshodaqoh to return",
     *         required=true,
     *         @OA\Schema(
     *             type="integer",
     *             format="int64"
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *         @OA\JsonContent(ref="#/components/schemas/Bminfaqshodaqoh"),
     *         @OA\XmlContent(ref="#/components/schemas/Bminfaqshodaqoh"),
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid ID supplier"
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Bminfaqshodaqoh not found"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     }
     * )
     *     
     */

    /**
     * @OA\Post(
     *     path="/bminfaqshodaqohs",
     *     tags={"Bminfaqshodaqoh"},
     *     summary="Add a new Bminfaqshodaqoh to the store",
     *     operationId="addBminfaqshodaqoh",
     *     @OA\Response(
     *         response=201,
     *         description="Created Bminfaqshodaqoh",
     *         @OA\JsonContent(ref="#/components/schemas/Bminfaqshodaqoh"),
     *         @OA\XmlContent(ref="#/components/schemas/Bminfaqshodaqoh"),
     *     ),
     *     @OA\Response(
     *         response=405,
     *         description="Invalid input"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     },     
     *     requestBody={"$ref": "#/components/requestBodies/Bminfaqshodaqoh"}
     * )
     */

    /**
     * @OA\Put(
     *     path="/bminfaqshodaqohs/{id}",
     *     tags={"Bminfaqshodaqoh"},
     *     summary="Update an existing Bminfaqshodaqoh",
     *     operationId="updateBminfaqshodaqoh",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="Bminfaqshodaqoh id to update",
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
     *         description="Bminfaqshodaqoh not found"
     *     ),
     *     @OA\Response(
     *         response=405,
     *         description="Validation exception"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     },     
     *     requestBody={"$ref": "#/components/requestBodies/Bminfaqshodaqoh"}
     * )
     */

    /**
     * @OA\Delete(
     *     path="/bminfaqshodaqohs/{id}",
     *     tags={"Bminfaqshodaqoh"},
     *     summary="Deletes a Bminfaqshodaqoh",
     *     operationId="deleteBminfaqshodaqoh",     
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="Bminfaqshodaqoh id to delete",
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