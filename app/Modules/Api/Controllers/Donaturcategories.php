<?php namespace App\Modules\Api\Controllers;
 
use asligresik\easyapi\Controllers\BaseResourceController;
class Donaturcategories extends BaseResourceController
{
    protected $modelName = 'App\Modules\Api\Models\DonaturcategoryModel';  

     /**
     * @OA\Get(
     *     path="/donaturcategories",
     *     tags={"Donaturcategory"},
     *     summary="Find list Donaturcategory",
     *     description="Returns list of Donaturcategory",
     *     operationId="getDonaturcategory",  
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
     *            @OA\Property(property="data",type="array",@OA\Items(ref="#/components/schemas/Donaturcategory")),
     *            @OA\Property(property="pagination",type="object",@OA\Property(property="currentPage", type="integer"),@OA\Property(property="totalPage", type="integer")),
     *         ),
     *         @OA\XmlContent(type="object",
     *            @OA\Property(property="data",type="array",@OA\Items(ref="#/components/schemas/Donaturcategory")),
     *            @OA\Property(property="pagination",type="array",@OA\Items(ref="#/components/schemas/Donaturcategory")),
     *         ),           
     *     ),     
     *     @OA\Response(
     *         response=404,
     *         description="Donaturcategory not found"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     }
     * )
     *     
     */

    /**
     * @OA\Get(
     *     path="/donaturcategories/{id}",
     *     tags={"Donaturcategory"},
     *     summary="Find Donaturcategory by ID",
     *     description="Returns a single Donaturcategory",
     *     operationId="getDonaturcategoryById",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="ID of Donaturcategory to return",
     *         required=true,
     *         @OA\Schema(
     *             type="integer",
     *             format="int64"
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *         @OA\JsonContent(ref="#/components/schemas/Donaturcategory"),
     *         @OA\XmlContent(ref="#/components/schemas/Donaturcategory"),
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid ID supplier"
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Donaturcategory not found"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     }
     * )
     *     
     */

    /**
     * @OA\Post(
     *     path="/donaturcategories",
     *     tags={"Donaturcategory"},
     *     summary="Add a new Donaturcategory to the store",
     *     operationId="addDonaturcategory",
     *     @OA\Response(
     *         response=201,
     *         description="Created Donaturcategory",
     *         @OA\JsonContent(ref="#/components/schemas/Donaturcategory"),
     *         @OA\XmlContent(ref="#/components/schemas/Donaturcategory"),
     *     ),
     *     @OA\Response(
     *         response=405,
     *         description="Invalid input"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     },     
     *     requestBody={"$ref": "#/components/requestBodies/Donaturcategory"}
     * )
     */

    /**
     * @OA\Put(
     *     path="/donaturcategories/{id}",
     *     tags={"Donaturcategory"},
     *     summary="Update an existing Donaturcategory",
     *     operationId="updateDonaturcategory",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="Donaturcategory id to update",
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
     *         description="Donaturcategory not found"
     *     ),
     *     @OA\Response(
     *         response=405,
     *         description="Validation exception"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     },     
     *     requestBody={"$ref": "#/components/requestBodies/Donaturcategory"}
     * )
     */

    /**
     * @OA\Delete(
     *     path="/donaturcategories/{id}",
     *     tags={"Donaturcategory"},
     *     summary="Deletes a Donaturcategory",
     *     operationId="deleteDonaturcategory",     
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="Donaturcategory id to delete",
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