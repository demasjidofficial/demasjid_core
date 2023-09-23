<?php

namespace App\Modules\Api\Controllers;

use asligresik\easyapi\Controllers\BaseResourceController;

class RoomReservations extends BaseResourceController
{
    protected $modelName = 'App\Modules\Api\Models\RoomReservationModel';

    /**
    * @OA\Get(
    *     path="/roomReservations",
    *     tags={"RoomReservation"},
    *     summary="Find list RoomReservation",
    *     description="Returns list of RoomReservation",
    *     operationId="getRoomReservation",
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
    *            @OA\Property(property="data",type="array",@OA\Items(ref="#/components/schemas/RoomReservation")),
    *            @OA\Property(property="pagination",type="object",@OA\Property(property="currentPage", type="integer"),@OA\Property(property="totalPage", type="integer")),
    *         ),
    *         @OA\XmlContent(type="object",
    *            @OA\Property(property="data",type="array",@OA\Items(ref="#/components/schemas/RoomReservation")),
    *            @OA\Property(property="pagination",type="array",@OA\Items(ref="#/components/schemas/RoomReservation")),
    *         ),
    *     ),
    *     @OA\Response(
    *         response=404,
    *         description="RoomReservation not found"
    *     ),
    *     security={
    *         {"bearer_auth": {}}
    *     }
    * )
    *
    */

    /**
     * @OA\Get(
     *     path="/roomReservations/{id}",
     *     tags={"RoomReservation"},
     *     summary="Find RoomReservation by ID",
     *     description="Returns a single RoomReservation",
     *     operationId="getRoomReservationById",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="ID of RoomReservation to return",
     *         required=true,
     *         @OA\Schema(
     *             type="integer",
     *             format="int64"
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *         @OA\JsonContent(ref="#/components/schemas/RoomReservation"),
     *         @OA\XmlContent(ref="#/components/schemas/RoomReservation"),
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid ID supplier"
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="RoomReservation not found"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     }
     * )
     *
     */

    /**
     * @OA\Post(
     *     path="/roomReservations",
     *     tags={"RoomReservation"},
     *     summary="Add a new RoomReservation to the store",
     *     operationId="addRoomReservation",
     *     @OA\Response(
     *         response=201,
     *         description="Created RoomReservation",
     *         @OA\JsonContent(ref="#/components/schemas/RoomReservation"),
     *         @OA\XmlContent(ref="#/components/schemas/RoomReservation"),
     *     ),
     *     @OA\Response(
     *         response=405,
     *         description="Invalid input"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     },
     *     requestBody={"$ref": "#/components/requestBodies/RoomReservation"}
     * )
     */

    /**
     * @OA\Put(
     *     path="/roomReservations/{id}",
     *     tags={"RoomReservation"},
     *     summary="Update an existing RoomReservation",
     *     operationId="updateRoomReservation",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="RoomReservation id to update",
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
     *         description="RoomReservation not found"
     *     ),
     *     @OA\Response(
     *         response=405,
     *         description="Validation exception"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     },
     *     requestBody={"$ref": "#/components/requestBodies/RoomReservation"}
     * )
     */

    /**
     * @OA\Delete(
     *     path="/roomReservations/{id}",
     *     tags={"RoomReservation"},
     *     summary="Deletes a RoomReservation",
     *     operationId="deleteRoomReservation",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="RoomReservation id to delete",
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
