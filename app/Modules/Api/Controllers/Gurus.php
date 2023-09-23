<?php

namespace App\Modules\Api\Controllers;

use asligresik\easyapi\Controllers\BaseResourceController;

class Gurus extends BaseResourceController
{
    protected $modelName = 'App\Modules\Api\Models\GuruModel';

    /**
    * @OA\Get(
    *     path="/gurus",
    *     tags={"Guru"},
    *     summary="Find list Guru",
    *     description="Returns list of Guru",
    *     operationId="getGuru",
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
    *            @OA\Property(property="data",type="array",@OA\Items(ref="#/components/schemas/Guru")),
    *            @OA\Property(property="pagination",type="object",@OA\Property(property="currentPage", type="integer"),@OA\Property(property="totalPage", type="integer")),
    *         ),
    *         @OA\XmlContent(type="object",
    *            @OA\Property(property="data",type="array",@OA\Items(ref="#/components/schemas/Guru")),
    *            @OA\Property(property="pagination",type="array",@OA\Items(ref="#/components/schemas/Guru")),
    *         ),
    *     ),
    *     @OA\Response(
    *         response=404,
    *         description="Guru not found"
    *     ),
    *     security={
    *         {"bearer_auth": {}}
    *     }
    * )
    *
    */

    /**
     * @OA\Get(
     *     path="/gurus/{id}",
     *     tags={"Guru"},
     *     summary="Find Guru by ID",
     *     description="Returns a single Guru",
     *     operationId="getGuruById",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="ID of Guru to return",
     *         required=true,
     *         @OA\Schema(
     *             type="integer",
     *             format="int64"
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *         @OA\JsonContent(ref="#/components/schemas/Guru"),
     *         @OA\XmlContent(ref="#/components/schemas/Guru"),
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid ID supplier"
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Guru not found"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     }
     * )
     *
     */

    /**
     * @OA\Post(
     *     path="/gurus",
     *     tags={"Guru"},
     *     summary="Add a new Guru to the store",
     *     operationId="addGuru",
     *     @OA\Response(
     *         response=201,
     *         description="Created Guru",
     *         @OA\JsonContent(ref="#/components/schemas/Guru"),
     *         @OA\XmlContent(ref="#/components/schemas/Guru"),
     *     ),
     *     @OA\Response(
     *         response=405,
     *         description="Invalid input"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     },
     *     requestBody={"$ref": "#/components/requestBodies/Guru"}
     * )
     */

    /**
     * @OA\Put(
     *     path="/gurus/{id}",
     *     tags={"Guru"},
     *     summary="Update an existing Guru",
     *     operationId="updateGuru",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="Guru id to update",
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
     *         description="Guru not found"
     *     ),
     *     @OA\Response(
     *         response=405,
     *         description="Validation exception"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     },
     *     requestBody={"$ref": "#/components/requestBodies/Guru"}
     * )
     */

    /**
     * @OA\Delete(
     *     path="/gurus/{id}",
     *     tags={"Guru"},
     *     summary="Deletes a Guru",
     *     operationId="deleteGuru",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="Guru id to delete",
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
