<?php namespace App\Modules\Api\Controllers;
 
use asligresik\easyapi\Controllers\BaseResourceController;
class Bmdonationcampaigncategories extends BaseResourceController
{
    protected $modelName = 'App\Modules\Api\Models\BmdonationcampaigncategoryModel';  

     /**
     * @OA\Get(
     *     path="/bmdonationcampaigncategories",
     *     tags={"Bmdonationcampaigncategory"},
     *     summary="Find list Bmdonationcampaigncategory",
     *     description="Returns list of Bmdonationcampaigncategory",
     *     operationId="getBmdonationcampaigncategory",  
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
     *            @OA\Property(property="data",type="array",@OA\Items(ref="#/components/schemas/Bmdonationcampaigncategory")),
     *            @OA\Property(property="pagination",type="object",@OA\Property(property="currentPage", type="integer"),@OA\Property(property="totalPage", type="integer")),
     *         ),
     *         @OA\XmlContent(type="object",
     *            @OA\Property(property="data",type="array",@OA\Items(ref="#/components/schemas/Bmdonationcampaigncategory")),
     *            @OA\Property(property="pagination",type="array",@OA\Items(ref="#/components/schemas/Bmdonationcampaigncategory")),
     *         ),           
     *     ),     
     *     @OA\Response(
     *         response=404,
     *         description="Bmdonationcampaigncategory not found"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     }
     * )
     *     
     */

    /**
     * @OA\Get(
     *     path="/bmdonationcampaigncategories/{id}",
     *     tags={"Bmdonationcampaigncategory"},
     *     summary="Find Bmdonationcampaigncategory by ID",
     *     description="Returns a single Bmdonationcampaigncategory",
     *     operationId="getBmdonationcampaigncategoryById",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="ID of Bmdonationcampaigncategory to return",
     *         required=true,
     *         @OA\Schema(
     *             type="integer",
     *             format="int64"
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *         @OA\JsonContent(ref="#/components/schemas/Bmdonationcampaigncategory"),
     *         @OA\XmlContent(ref="#/components/schemas/Bmdonationcampaigncategory"),
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid ID supplier"
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Bmdonationcampaigncategory not found"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     }
     * )
     *     
     */

    /**
     * @OA\Post(
     *     path="/bmdonationcampaigncategories",
     *     tags={"Bmdonationcampaigncategory"},
     *     summary="Add a new Bmdonationcampaigncategory to the store",
     *     operationId="addBmdonationcampaigncategory",
     *     @OA\Response(
     *         response=201,
     *         description="Created Bmdonationcampaigncategory",
     *         @OA\JsonContent(ref="#/components/schemas/Bmdonationcampaigncategory"),
     *         @OA\XmlContent(ref="#/components/schemas/Bmdonationcampaigncategory"),
     *     ),
     *     @OA\Response(
     *         response=405,
     *         description="Invalid input"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     },     
     *     requestBody={"$ref": "#/components/requestBodies/Bmdonationcampaigncategory"}
     * )
     */

    /**
     * @OA\Put(
     *     path="/bmdonationcampaigncategories/{id}",
     *     tags={"Bmdonationcampaigncategory"},
     *     summary="Update an existing Bmdonationcampaigncategory",
     *     operationId="updateBmdonationcampaigncategory",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="Bmdonationcampaigncategory id to update",
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
     *         description="Bmdonationcampaigncategory not found"
     *     ),
     *     @OA\Response(
     *         response=405,
     *         description="Validation exception"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     },     
     *     requestBody={"$ref": "#/components/requestBodies/Bmdonationcampaigncategory"}
     * )
     */

    /**
     * @OA\Delete(
     *     path="/bmdonationcampaigncategories/{id}",
     *     tags={"Bmdonationcampaigncategory"},
     *     summary="Deletes a Bmdonationcampaigncategory",
     *     operationId="deleteBmdonationcampaigncategory",     
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="Bmdonationcampaigncategory id to delete",
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