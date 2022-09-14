<?php namespace App\Modules\Api\Controllers;
 
use asligresik\easyapi\Controllers\BaseResourceController;
class BoardDevices extends BaseResourceController
{
    protected $modelName = 'App\Modules\Api\Models\BoardDeviceModel';  

     /**
     * @OA\Get(
     *     path="/boardDevices",
     *     tags={"BoardDevice"},
     *     summary="Find list BoardDevice",
     *     description="Returns list of BoardDevice",
     *     operationId="getBoardDevice",  
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
     *            @OA\Property(property="data",type="array",@OA\Items(ref="#/components/schemas/BoardDevice")),
     *            @OA\Property(property="pagination",type="object",@OA\Property(property="currentPage", type="integer"),@OA\Property(property="totalPage", type="integer")),
     *         ),
     *         @OA\XmlContent(type="object",
     *            @OA\Property(property="data",type="array",@OA\Items(ref="#/components/schemas/BoardDevice")),
     *            @OA\Property(property="pagination",type="array",@OA\Items(ref="#/components/schemas/BoardDevice")),
     *         ),           
     *     ),     
     *     @OA\Response(
     *         response=404,
     *         description="BoardDevice not found"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     }
     * )
     *     
     */

    /**
     * @OA\Get(
     *     path="/boardDevices/{id}",
     *     tags={"BoardDevice"},
     *     summary="Find BoardDevice by ID",
     *     description="Returns a single BoardDevice",
     *     operationId="getBoardDeviceById",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="ID of BoardDevice to return",
     *         required=true,
     *         @OA\Schema(
     *             type="integer",
     *             format="int64"
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *         @OA\JsonContent(ref="#/components/schemas/BoardDevice"),
     *         @OA\XmlContent(ref="#/components/schemas/BoardDevice"),
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid ID supplier"
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="BoardDevice not found"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     }
     * )
     *     
     */

    /**
     * @OA\Post(
     *     path="/boardDevices",
     *     tags={"BoardDevice"},
     *     summary="Add a new BoardDevice to the store",
     *     operationId="addBoardDevice",
     *     @OA\Response(
     *         response=201,
     *         description="Created BoardDevice",
     *         @OA\JsonContent(ref="#/components/schemas/BoardDevice"),
     *         @OA\XmlContent(ref="#/components/schemas/BoardDevice"),
     *     ),
     *     @OA\Response(
     *         response=405,
     *         description="Invalid input"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     },     
     *     requestBody={"$ref": "#/components/requestBodies/BoardDevice"}
     * )
     */

    /**
     * @OA\Put(
     *     path="/boardDevices/{id}",
     *     tags={"BoardDevice"},
     *     summary="Update an existing BoardDevice",
     *     operationId="updateBoardDevice",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="BoardDevice id to update",
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
     *         description="BoardDevice not found"
     *     ),
     *     @OA\Response(
     *         response=405,
     *         description="Validation exception"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     },     
     *     requestBody={"$ref": "#/components/requestBodies/BoardDevice"}
     * )
     */

    /**
     * @OA\Delete(
     *     path="/boardDevices/{id}",
     *     tags={"BoardDevice"},
     *     summary="Deletes a BoardDevice",
     *     operationId="deleteBoardDevice",     
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="BoardDevice id to delete",
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