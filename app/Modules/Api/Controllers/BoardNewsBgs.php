<?php

namespace App\Modules\Api\Controllers;

use asligresik\easyapi\Controllers\BaseResourceController;

class BoardNewsBgs extends BaseResourceController
{
    protected $modelName = 'App\Modules\Api\Models\BoardNewsBgModel';

    /**
    * @OA\Get(
    *     path="/boardNewsBgs",
    *     tags={"BoardNewsBg"},
    *     summary="Find list BoardNewsBg",
    *     description="Returns list of BoardNewsBg",
    *     operationId="getBoardNewsBg",
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
    *            @OA\Property(property="data",type="array",@OA\Items(ref="#/components/schemas/BoardNewsBg")),
    *            @OA\Property(property="pagination",type="object",@OA\Property(property="currentPage", type="integer"),@OA\Property(property="totalPage", type="integer")),
    *         ),
    *         @OA\XmlContent(type="object",
    *            @OA\Property(property="data",type="array",@OA\Items(ref="#/components/schemas/BoardNewsBg")),
    *            @OA\Property(property="pagination",type="array",@OA\Items(ref="#/components/schemas/BoardNewsBg")),
    *         ),
    *     ),
    *     @OA\Response(
    *         response=404,
    *         description="BoardNewsBg not found"
    *     ),
    *     security={
    *         {"bearer_auth": {}}
    *     }
    * )
    *
    */

    /**
     * @OA\Get(
     *     path="/boardNewsBgs/{id}",
     *     tags={"BoardNewsBg"},
     *     summary="Find BoardNewsBg by ID",
     *     description="Returns a single BoardNewsBg",
     *     operationId="getBoardNewsBgById",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="ID of BoardNewsBg to return",
     *         required=true,
     *         @OA\Schema(
     *             type="integer",
     *             format="int64"
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *         @OA\JsonContent(ref="#/components/schemas/BoardNewsBg"),
     *         @OA\XmlContent(ref="#/components/schemas/BoardNewsBg"),
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid ID supplier"
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="BoardNewsBg not found"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     }
     * )
     *
     */

    /**
     * @OA\Post(
     *     path="/boardNewsBgs",
     *     tags={"BoardNewsBg"},
     *     summary="Add a new BoardNewsBg to the store",
     *     operationId="addBoardNewsBg",
     *     @OA\Response(
     *         response=201,
     *         description="Created BoardNewsBg",
     *         @OA\JsonContent(ref="#/components/schemas/BoardNewsBg"),
     *         @OA\XmlContent(ref="#/components/schemas/BoardNewsBg"),
     *     ),
     *     @OA\Response(
     *         response=405,
     *         description="Invalid input"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     },
     *     requestBody={"$ref": "#/components/requestBodies/BoardNewsBg"}
     * )
     */

    /**
     * @OA\Put(
     *     path="/boardNewsBgs/{id}",
     *     tags={"BoardNewsBg"},
     *     summary="Update an existing BoardNewsBg",
     *     operationId="updateBoardNewsBg",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="BoardNewsBg id to update",
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
     *         description="BoardNewsBg not found"
     *     ),
     *     @OA\Response(
     *         response=405,
     *         description="Validation exception"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     },
     *     requestBody={"$ref": "#/components/requestBodies/BoardNewsBg"}
     * )
     */

    /**
     * @OA\Delete(
     *     path="/boardNewsBgs/{id}",
     *     tags={"BoardNewsBg"},
     *     summary="Deletes a BoardNewsBg",
     *     operationId="deleteBoardNewsBg",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="BoardNewsBg id to delete",
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
