<?php namespace App\Modules\Api\Controllers;
 
use asligresik\easyapi\Controllers\BaseResourceController;
class Sitesocials extends BaseResourceController
{
    protected $modelName = 'App\Modules\Api\Models\SitesocialsModel';  

     /**
     * @OA\Get(
     *     path="/sitesocials",
     *     tags={"Sitesocials"},
     *     summary="Find list Sitesocials",
     *     description="Returns list of Sitesocials",
     *     operationId="getSitesocials",  
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
     *            @OA\Property(property="data",type="array",@OA\Items(ref="#/components/schemas/Sitesocials")),
     *            @OA\Property(property="pagination",type="object",@OA\Property(property="currentPage", type="integer"),@OA\Property(property="totalPage", type="integer")),
     *         ),
     *         @OA\XmlContent(type="object",
     *            @OA\Property(property="data",type="array",@OA\Items(ref="#/components/schemas/Sitesocials")),
     *            @OA\Property(property="pagination",type="array",@OA\Items(ref="#/components/schemas/Sitesocials")),
     *         ),           
     *     ),     
     *     @OA\Response(
     *         response=404,
     *         description="Sitesocials not found"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     }
     * )
     *     
     */

    /**
     * @OA\Get(
     *     path="/sitesocials/{id}",
     *     tags={"Sitesocials"},
     *     summary="Find Sitesocials by ID",
     *     description="Returns a single Sitesocials",
     *     operationId="getSitesocialsById",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="ID of Sitesocials to return",
     *         required=true,
     *         @OA\Schema(
     *             type="integer",
     *             format="int64"
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *         @OA\JsonContent(ref="#/components/schemas/Sitesocials"),
     *         @OA\XmlContent(ref="#/components/schemas/Sitesocials"),
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid ID supplier"
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Sitesocials not found"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     }
     * )
     *     
     */

    /**
     * @OA\Post(
     *     path="/sitesocials",
     *     tags={"Sitesocials"},
     *     summary="Add a new Sitesocials to the store",
     *     operationId="addSitesocials",
     *     @OA\Response(
     *         response=201,
     *         description="Created Sitesocials",
     *         @OA\JsonContent(ref="#/components/schemas/Sitesocials"),
     *         @OA\XmlContent(ref="#/components/schemas/Sitesocials"),
     *     ),
     *     @OA\Response(
     *         response=405,
     *         description="Invalid input"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     },     
     *     requestBody={"$ref": "#/components/requestBodies/Sitesocials"}
     * )
     */

    /**
     * @OA\Put(
     *     path="/sitesocials/{id}",
     *     tags={"Sitesocials"},
     *     summary="Update an existing Sitesocials",
     *     operationId="updateSitesocials",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="Sitesocials id to update",
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
     *         description="Sitesocials not found"
     *     ),
     *     @OA\Response(
     *         response=405,
     *         description="Validation exception"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     },     
     *     requestBody={"$ref": "#/components/requestBodies/Sitesocials"}
     * )
     */

    /**
     * @OA\Delete(
     *     path="/sitesocials/{id}",
     *     tags={"Sitesocials"},
     *     summary="Deletes a Sitesocials",
     *     operationId="deleteSitesocials",     
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="Sitesocials id to delete",
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