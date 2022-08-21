<?php namespace App\Modules\Api\Controllers;
 
use asligresik\easyapi\Controllers\BaseResourceController;
class Bmdonationcampaigns extends BaseResourceController
{
    protected $modelName = 'App\Modules\Api\Models\BmdonationcampaignModel';  

     /**
     * @OA\Get(
     *     path="/bmdonationcampaigns",
     *     tags={"Bmdonationcampaign"},
     *     summary="Find list Bmdonationcampaign",
     *     description="Returns list of Bmdonationcampaign",
     *     operationId="getBmdonationcampaign",  
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
     *            @OA\Property(property="data",type="array",@OA\Items(ref="#/components/schemas/Bmdonationcampaign")),
     *            @OA\Property(property="pagination",type="object",@OA\Property(property="currentPage", type="integer"),@OA\Property(property="totalPage", type="integer")),
     *         ),
     *         @OA\XmlContent(type="object",
     *            @OA\Property(property="data",type="array",@OA\Items(ref="#/components/schemas/Bmdonationcampaign")),
     *            @OA\Property(property="pagination",type="array",@OA\Items(ref="#/components/schemas/Bmdonationcampaign")),
     *         ),           
     *     ),     
     *     @OA\Response(
     *         response=404,
     *         description="Bmdonationcampaign not found"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     }
     * )
     *     
     */

    /**
     * @OA\Get(
     *     path="/bmdonationcampaigns/{id}",
     *     tags={"Bmdonationcampaign"},
     *     summary="Find Bmdonationcampaign by ID",
     *     description="Returns a single Bmdonationcampaign",
     *     operationId="getBmdonationcampaignById",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="ID of Bmdonationcampaign to return",
     *         required=true,
     *         @OA\Schema(
     *             type="integer",
     *             format="int64"
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *         @OA\JsonContent(ref="#/components/schemas/Bmdonationcampaign"),
     *         @OA\XmlContent(ref="#/components/schemas/Bmdonationcampaign"),
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid ID supplier"
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Bmdonationcampaign not found"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     }
     * )
     *     
     */

    /**
     * @OA\Post(
     *     path="/bmdonationcampaigns",
     *     tags={"Bmdonationcampaign"},
     *     summary="Add a new Bmdonationcampaign to the store",
     *     operationId="addBmdonationcampaign",
     *     @OA\Response(
     *         response=201,
     *         description="Created Bmdonationcampaign",
     *         @OA\JsonContent(ref="#/components/schemas/Bmdonationcampaign"),
     *         @OA\XmlContent(ref="#/components/schemas/Bmdonationcampaign"),
     *     ),
     *     @OA\Response(
     *         response=405,
     *         description="Invalid input"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     },     
     *     requestBody={"$ref": "#/components/requestBodies/Bmdonationcampaign"}
     * )
     */

    /**
     * @OA\Put(
     *     path="/bmdonationcampaigns/{id}",
     *     tags={"Bmdonationcampaign"},
     *     summary="Update an existing Bmdonationcampaign",
     *     operationId="updateBmdonationcampaign",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="Bmdonationcampaign id to update",
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
     *         description="Bmdonationcampaign not found"
     *     ),
     *     @OA\Response(
     *         response=405,
     *         description="Validation exception"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     },     
     *     requestBody={"$ref": "#/components/requestBodies/Bmdonationcampaign"}
     * )
     */

    /**
     * @OA\Delete(
     *     path="/bmdonationcampaigns/{id}",
     *     tags={"Bmdonationcampaign"},
     *     summary="Deletes a Bmdonationcampaign",
     *     operationId="deleteBmdonationcampaign",     
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="Bmdonationcampaign id to delete",
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