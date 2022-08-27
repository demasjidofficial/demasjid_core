<?php namespace App\Modules\Api\Controllers;
 
use asligresik\easyapi\Controllers\BaseResourceController;
class Bminfaqshodaqohcategories extends BaseResourceController
{
    protected $modelName = 'App\Modules\Api\Models\BminfaqshodaqohcategoryModel';  

     /**
     * @OA\Get(
     *     path="/bminfaqshodaqohcategories",
     *     tags={"Bminfaqshodaqohcategory"},
     *     summary="Find list Bminfaqshodaqohcategory",
     *     description="Returns list of Bminfaqshodaqohcategory",
     *     operationId="getBminfaqshodaqohcategory",  
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
     *            @OA\Property(property="data",type="array",@OA\Items(ref="#/components/schemas/Bminfaqshodaqohcategory")),
     *            @OA\Property(property="pagination",type="object",@OA\Property(property="currentPage", type="integer"),@OA\Property(property="totalPage", type="integer")),
     *         ),
     *         @OA\XmlContent(type="object",
     *            @OA\Property(property="data",type="array",@OA\Items(ref="#/components/schemas/Bminfaqshodaqohcategory")),
     *            @OA\Property(property="pagination",type="array",@OA\Items(ref="#/components/schemas/Bminfaqshodaqohcategory")),
     *         ),           
     *     ),     
     *     @OA\Response(
     *         response=404,
     *         description="Bminfaqshodaqohcategory not found"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     }
     * )
     *     
     */

    /**
     * @OA\Get(
     *     path="/bminfaqshodaqohcategories/{id}",
     *     tags={"Bminfaqshodaqohcategory"},
     *     summary="Find Bminfaqshodaqohcategory by ID",
     *     description="Returns a single Bminfaqshodaqohcategory",
     *     operationId="getBminfaqshodaqohcategoryById",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="ID of Bminfaqshodaqohcategory to return",
     *         required=true,
     *         @OA\Schema(
     *             type="integer",
     *             format="int64"
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *         @OA\JsonContent(ref="#/components/schemas/Bminfaqshodaqohcategory"),
     *         @OA\XmlContent(ref="#/components/schemas/Bminfaqshodaqohcategory"),
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid ID supplier"
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Bminfaqshodaqohcategory not found"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     }
     * )
     *     
     */

    /**
     * @OA\Post(
     *     path="/bminfaqshodaqohcategories",
     *     tags={"Bminfaqshodaqohcategory"},
     *     summary="Add a new Bminfaqshodaqohcategory to the store",
     *     operationId="addBminfaqshodaqohcategory",
     *     @OA\Response(
     *         response=201,
     *         description="Created Bminfaqshodaqohcategory",
     *         @OA\JsonContent(ref="#/components/schemas/Bminfaqshodaqohcategory"),
     *         @OA\XmlContent(ref="#/components/schemas/Bminfaqshodaqohcategory"),
     *     ),
     *     @OA\Response(
     *         response=405,
     *         description="Invalid input"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     },     
     *     requestBody={"$ref": "#/components/requestBodies/Bminfaqshodaqohcategory"}
     * )
     */

    /**
     * @OA\Put(
     *     path="/bminfaqshodaqohcategories/{id}",
     *     tags={"Bminfaqshodaqohcategory"},
     *     summary="Update an existing Bminfaqshodaqohcategory",
     *     operationId="updateBminfaqshodaqohcategory",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="Bminfaqshodaqohcategory id to update",
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
     *         description="Bminfaqshodaqohcategory not found"
     *     ),
     *     @OA\Response(
     *         response=405,
     *         description="Validation exception"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     },     
     *     requestBody={"$ref": "#/components/requestBodies/Bminfaqshodaqohcategory"}
     * )
     */

    /**
     * @OA\Delete(
     *     path="/bminfaqshodaqohcategories/{id}",
     *     tags={"Bminfaqshodaqohcategory"},
     *     summary="Deletes a Bminfaqshodaqohcategory",
     *     operationId="deleteBminfaqshodaqohcategory",     
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="Bminfaqshodaqohcategory id to delete",
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