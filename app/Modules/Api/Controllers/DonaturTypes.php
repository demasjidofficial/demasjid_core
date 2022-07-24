<?php namespace App\Modules\Api\Controllers;
 
use asligresik\easyapi\Controllers\BaseResourceController;
class DonaturTypes extends BaseResourceController
{
    protected $modelName = 'App\Modules\Api\Models\DonaturTypeModel';  

     /**
     * @OA\Get(
     *     path="/donaturTypes",
     *     tags={"DonaturType"},
     *     summary="Find list DonaturType",
     *     description="Returns list of DonaturType",
     *     operationId="getDonaturType",  
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
     *            @OA\Property(property="data",type="array",@OA\Items(ref="#/components/schemas/DonaturType")),
     *            @OA\Property(property="pagination",type="object",@OA\Property(property="currentPage", type="integer"),@OA\Property(property="totalPage", type="integer")),
     *         ),
     *         @OA\XmlContent(type="object",
     *            @OA\Property(property="data",type="array",@OA\Items(ref="#/components/schemas/DonaturType")),
     *            @OA\Property(property="pagination",type="array",@OA\Items(ref="#/components/schemas/DonaturType")),
     *         ),           
     *     ),     
     *     @OA\Response(
     *         response=404,
     *         description="DonaturType not found"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     }
     * )
     *     
     */

    /**
     * @OA\Get(
     *     path="/donaturTypes/{id}",
     *     tags={"DonaturType"},
     *     summary="Find DonaturType by ID",
     *     description="Returns a single DonaturType",
     *     operationId="getDonaturTypeById",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="ID of DonaturType to return",
     *         required=true,
     *         @OA\Schema(
     *             type="integer",
     *             format="int64"
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *         @OA\JsonContent(ref="#/components/schemas/DonaturType"),
     *         @OA\XmlContent(ref="#/components/schemas/DonaturType"),
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid ID supplier"
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="DonaturType not found"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     }
     * )
     *     
     */

    /**
     * @OA\Post(
     *     path="/donaturTypes",
     *     tags={"DonaturType"},
     *     summary="Add a new DonaturType to the store",
     *     operationId="addDonaturType",
     *     @OA\Response(
     *         response=201,
     *         description="Created DonaturType",
     *         @OA\JsonContent(ref="#/components/schemas/DonaturType"),
     *         @OA\XmlContent(ref="#/components/schemas/DonaturType"),
     *     ),
     *     @OA\Response(
     *         response=405,
     *         description="Invalid input"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     },     
     *     requestBody={"$ref": "#/components/requestBodies/DonaturType"}
     * )
     */

    /**
     * @OA\Put(
     *     path="/donaturTypes/{id}",
     *     tags={"DonaturType"},
     *     summary="Update an existing DonaturType",
     *     operationId="updateDonaturType",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="DonaturType id to update",
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
     *         description="DonaturType not found"
     *     ),
     *     @OA\Response(
     *         response=405,
     *         description="Validation exception"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     },     
     *     requestBody={"$ref": "#/components/requestBodies/DonaturType"}
     * )
     */

    /**
     * @OA\Delete(
     *     path="/donaturTypes/{id}",
     *     tags={"DonaturType"},
     *     summary="Deletes a DonaturType",
     *     operationId="deleteDonaturType",     
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="DonaturType id to delete",
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