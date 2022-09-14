<?php namespace App\Modules\Api\Controllers;
 
use asligresik\easyapi\Controllers\BaseResourceController;
class RoomReservs extends BaseResourceController
{
    protected $modelName = 'App\Modules\Api\Models\RoomReservModel';  

     /**
     * @OA\Get(
     *     path="/roomReservs",
     *     tags={"RoomReserv"},
     *     summary="Find list RoomReserv",
     *     description="Returns list of RoomReserv",
     *     operationId="getRoomReserv",  
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
     *            @OA\Property(property="data",type="array",@OA\Items(ref="#/components/schemas/RoomReserv")),
     *            @OA\Property(property="pagination",type="object",@OA\Property(property="currentPage", type="integer"),@OA\Property(property="totalPage", type="integer")),
     *         ),
     *         @OA\XmlContent(type="object",
     *            @OA\Property(property="data",type="array",@OA\Items(ref="#/components/schemas/RoomReserv")),
     *            @OA\Property(property="pagination",type="array",@OA\Items(ref="#/components/schemas/RoomReserv")),
     *         ),           
     *     ),     
     *     @OA\Response(
     *         response=404,
     *         description="RoomReserv not found"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     }
     * )
     *     
     */

    /**
     * @OA\Get(
     *     path="/roomReservs/{id}",
     *     tags={"RoomReserv"},
     *     summary="Find RoomReserv by ID",
     *     description="Returns a single RoomReserv",
     *     operationId="getRoomReservById",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="ID of RoomReserv to return",
     *         required=true,
     *         @OA\Schema(
     *             type="integer",
     *             format="int64"
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *         @OA\JsonContent(ref="#/components/schemas/RoomReserv"),
     *         @OA\XmlContent(ref="#/components/schemas/RoomReserv"),
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid ID supplier"
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="RoomReserv not found"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     }
     * )
     *     
     */

    /**
     * @OA\Post(
     *     path="/roomReservs",
     *     tags={"RoomReserv"},
     *     summary="Add a new RoomReserv to the store",
     *     operationId="addRoomReserv",
     *     @OA\Response(
     *         response=201,
     *         description="Created RoomReserv",
     *         @OA\JsonContent(ref="#/components/schemas/RoomReserv"),
     *         @OA\XmlContent(ref="#/components/schemas/RoomReserv"),
     *     ),
     *     @OA\Response(
     *         response=405,
     *         description="Invalid input"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     },     
     *     requestBody={"$ref": "#/components/requestBodies/RoomReserv"}
     * )
     */

    /**
     * @OA\Put(
     *     path="/roomReservs/{id}",
     *     tags={"RoomReserv"},
     *     summary="Update an existing RoomReserv",
     *     operationId="updateRoomReserv",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="RoomReserv id to update",
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
     *         description="RoomReserv not found"
     *     ),
     *     @OA\Response(
     *         response=405,
     *         description="Validation exception"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     },     
     *     requestBody={"$ref": "#/components/requestBodies/RoomReserv"}
     * )
     */

    /**
     * @OA\Delete(
     *     path="/roomReservs/{id}",
     *     tags={"RoomReserv"},
     *     summary="Deletes a RoomReserv",
     *     operationId="deleteRoomReserv",     
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="RoomReserv id to delete",
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