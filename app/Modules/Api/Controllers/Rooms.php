<?php namespace App\Modules\Api\Controllers;
 
use asligresik\easyapi\Controllers\BaseResourceController;
class Rooms extends BaseResourceController
{
    protected $modelName = 'App\Modules\Api\Models\RoomModel';  

     /**
     * @OA\Get(
     *     path="/rooms",
     *     tags={"Room"},
     *     summary="Find list Room",
     *     description="Returns list of Room",
     *     operationId="getRoom",  
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
     *            @OA\Property(property="data",type="array",@OA\Items(ref="#/components/schemas/Room")),
     *            @OA\Property(property="pagination",type="object",@OA\Property(property="currentPage", type="integer"),@OA\Property(property="totalPage", type="integer")),
     *         ),
     *         @OA\XmlContent(type="object",
     *            @OA\Property(property="data",type="array",@OA\Items(ref="#/components/schemas/Room")),
     *            @OA\Property(property="pagination",type="array",@OA\Items(ref="#/components/schemas/Room")),
     *         ),           
     *     ),     
     *     @OA\Response(
     *         response=404,
     *         description="Room not found"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     }
     * )
     *     
     */

    /**
     * @OA\Get(
     *     path="/rooms/{id}",
     *     tags={"Room"},
     *     summary="Find Room by ID",
     *     description="Returns a single Room",
     *     operationId="getRoomById",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="ID of Room to return",
     *         required=true,
     *         @OA\Schema(
     *             type="integer",
     *             format="int64"
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *         @OA\JsonContent(ref="#/components/schemas/Room"),
     *         @OA\XmlContent(ref="#/components/schemas/Room"),
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid ID supplier"
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Room not found"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     }
     * )
     *     
     */

    /**
     * @OA\Post(
     *     path="/rooms",
     *     tags={"Room"},
     *     summary="Add a new Room to the store",
     *     operationId="addRoom",
     *     @OA\Response(
     *         response=201,
     *         description="Created Room",
     *         @OA\JsonContent(ref="#/components/schemas/Room"),
     *         @OA\XmlContent(ref="#/components/schemas/Room"),
     *     ),
     *     @OA\Response(
     *         response=405,
     *         description="Invalid input"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     },     
     *     requestBody={"$ref": "#/components/requestBodies/Room"}
     * )
     */

    /**
     * @OA\Put(
     *     path="/rooms/{id}",
     *     tags={"Room"},
     *     summary="Update an existing Room",
     *     operationId="updateRoom",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="Room id to update",
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
     *         description="Room not found"
     *     ),
     *     @OA\Response(
     *         response=405,
     *         description="Validation exception"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     },     
     *     requestBody={"$ref": "#/components/requestBodies/Room"}
     * )
     */

    /**
     * @OA\Delete(
     *     path="/rooms/{id}",
     *     tags={"Room"},
     *     summary="Deletes a Room",
     *     operationId="deleteRoom",     
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="Room id to delete",
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