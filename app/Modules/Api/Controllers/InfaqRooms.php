<?php

namespace App\Modules\Api\Controllers;

use asligresik\easyapi\Controllers\BaseResourceController;

class InfaqRooms extends BaseResourceController
{
    protected $modelName = 'App\Modules\Api\Models\InfaqRoomModel';

    /**
    * @OA\Get(
    *     path="/infaqRooms",
    *     tags={"InfaqRoom"},
    *     summary="Find list InfaqRoom",
    *     description="Returns list of InfaqRoom",
    *     operationId="getInfaqRoom",
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
    *            @OA\Property(property="data",type="array",@OA\Items(ref="#/components/schemas/InfaqRoom")),
    *            @OA\Property(property="pagination",type="object",@OA\Property(property="currentPage", type="integer"),@OA\Property(property="totalPage", type="integer")),
    *         ),
    *         @OA\XmlContent(type="object",
    *            @OA\Property(property="data",type="array",@OA\Items(ref="#/components/schemas/InfaqRoom")),
    *            @OA\Property(property="pagination",type="array",@OA\Items(ref="#/components/schemas/InfaqRoom")),
    *         ),
    *     ),
    *     @OA\Response(
    *         response=404,
    *         description="InfaqRoom not found"
    *     ),
    *     security={
    *         {"bearer_auth": {}}
    *     }
    * )
    *
    */

    /**
     * @OA\Get(
     *     path="/infaqRooms/{id}",
     *     tags={"InfaqRoom"},
     *     summary="Find InfaqRoom by ID",
     *     description="Returns a single InfaqRoom",
     *     operationId="getInfaqRoomById",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="ID of InfaqRoom to return",
     *         required=true,
     *         @OA\Schema(
     *             type="integer",
     *             format="int64"
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *         @OA\JsonContent(ref="#/components/schemas/InfaqRoom"),
     *         @OA\XmlContent(ref="#/components/schemas/InfaqRoom"),
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid ID supplier"
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="InfaqRoom not found"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     }
     * )
     *
     */

    /**
     * @OA\Post(
     *     path="/infaqRooms",
     *     tags={"InfaqRoom"},
     *     summary="Add a new InfaqRoom to the store",
     *     operationId="addInfaqRoom",
     *     @OA\Response(
     *         response=201,
     *         description="Created InfaqRoom",
     *         @OA\JsonContent(ref="#/components/schemas/InfaqRoom"),
     *         @OA\XmlContent(ref="#/components/schemas/InfaqRoom"),
     *     ),
     *     @OA\Response(
     *         response=405,
     *         description="Invalid input"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     },
     *     requestBody={"$ref": "#/components/requestBodies/InfaqRoom"}
     * )
     */

    /**
     * @OA\Put(
     *     path="/infaqRooms/{id}",
     *     tags={"InfaqRoom"},
     *     summary="Update an existing InfaqRoom",
     *     operationId="updateInfaqRoom",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="InfaqRoom id to update",
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
     *         description="InfaqRoom not found"
     *     ),
     *     @OA\Response(
     *         response=405,
     *         description="Validation exception"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     },
     *     requestBody={"$ref": "#/components/requestBodies/InfaqRoom"}
     * )
     */

    /**
     * @OA\Delete(
     *     path="/infaqRooms/{id}",
     *     tags={"InfaqRoom"},
     *     summary="Deletes a InfaqRoom",
     *     operationId="deleteInfaqRoom",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="InfaqRoom id to delete",
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
