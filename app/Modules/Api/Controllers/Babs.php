<?php

namespace App\Modules\Api\Controllers;

use asligresik\easyapi\Controllers\BaseResourceController;

class Babs extends BaseResourceController
{
    protected $modelName = 'App\Modules\Api\Models\BabModel';

    /**
    * @OA\Get(
    *     path="/babs",
    *     tags={"Bab"},
    *     summary="Find list Bab",
    *     description="Returns list of Bab",
    *     operationId="getBab",
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
    *            @OA\Property(property="data",type="array",@OA\Items(ref="#/components/schemas/Bab")),
    *            @OA\Property(property="pagination",type="object",@OA\Property(property="currentPage", type="integer"),@OA\Property(property="totalPage", type="integer")),
    *         ),
    *         @OA\XmlContent(type="object",
    *            @OA\Property(property="data",type="array",@OA\Items(ref="#/components/schemas/Bab")),
    *            @OA\Property(property="pagination",type="array",@OA\Items(ref="#/components/schemas/Bab")),
    *         ),
    *     ),
    *     @OA\Response(
    *         response=404,
    *         description="Bab not found"
    *     ),
    *     security={
    *         {"bearer_auth": {}}
    *     }
    * )
    *
    */

    /**
     * @OA\Get(
     *     path="/babs/{id}",
     *     tags={"Bab"},
     *     summary="Find Bab by ID",
     *     description="Returns a single Bab",
     *     operationId="getBabById",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="ID of Bab to return",
     *         required=true,
     *         @OA\Schema(
     *             type="integer",
     *             format="int64"
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *         @OA\JsonContent(ref="#/components/schemas/Bab"),
     *         @OA\XmlContent(ref="#/components/schemas/Bab"),
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid ID supplier"
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Bab not found"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     }
     * )
     *
     */

    /**
     * @OA\Post(
     *     path="/babs",
     *     tags={"Bab"},
     *     summary="Add a new Bab to the store",
     *     operationId="addBab",
     *     @OA\Response(
     *         response=201,
     *         description="Created Bab",
     *         @OA\JsonContent(ref="#/components/schemas/Bab"),
     *         @OA\XmlContent(ref="#/components/schemas/Bab"),
     *     ),
     *     @OA\Response(
     *         response=405,
     *         description="Invalid input"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     },
     *     requestBody={"$ref": "#/components/requestBodies/Bab"}
     * )
     */

    /**
     * @OA\Put(
     *     path="/babs/{id}",
     *     tags={"Bab"},
     *     summary="Update an existing Bab",
     *     operationId="updateBab",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="Bab id to update",
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
     *         description="Bab not found"
     *     ),
     *     @OA\Response(
     *         response=405,
     *         description="Validation exception"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     },
     *     requestBody={"$ref": "#/components/requestBodies/Bab"}
     * )
     */

    /**
     * @OA\Delete(
     *     path="/babs/{id}",
     *     tags={"Bab"},
     *     summary="Deletes a Bab",
     *     operationId="deleteBab",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="Bab id to delete",
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
