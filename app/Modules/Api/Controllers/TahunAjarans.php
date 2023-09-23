<?php

namespace App\Modules\Api\Controllers;

use asligresik\easyapi\Controllers\BaseResourceController;

class TahunAjarans extends BaseResourceController
{
    protected $modelName = 'App\Modules\Api\Models\TahunAjaranModel';

    /**
    * @OA\Get(
    *     path="/tahunAjarans",
    *     tags={"TahunAjaran"},
    *     summary="Find list TahunAjaran",
    *     description="Returns list of TahunAjaran",
    *     operationId="getTahunAjaran",
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
    *            @OA\Property(property="data",type="array",@OA\Items(ref="#/components/schemas/TahunAjaran")),
    *            @OA\Property(property="pagination",type="object",@OA\Property(property="currentPage", type="integer"),@OA\Property(property="totalPage", type="integer")),
    *         ),
    *         @OA\XmlContent(type="object",
    *            @OA\Property(property="data",type="array",@OA\Items(ref="#/components/schemas/TahunAjaran")),
    *            @OA\Property(property="pagination",type="array",@OA\Items(ref="#/components/schemas/TahunAjaran")),
    *         ),
    *     ),
    *     @OA\Response(
    *         response=404,
    *         description="TahunAjaran not found"
    *     ),
    *     security={
    *         {"bearer_auth": {}}
    *     }
    * )
    *
    */

    /**
     * @OA\Get(
     *     path="/tahunAjarans/{id}",
     *     tags={"TahunAjaran"},
     *     summary="Find TahunAjaran by ID",
     *     description="Returns a single TahunAjaran",
     *     operationId="getTahunAjaranById",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="ID of TahunAjaran to return",
     *         required=true,
     *         @OA\Schema(
     *             type="integer",
     *             format="int64"
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *         @OA\JsonContent(ref="#/components/schemas/TahunAjaran"),
     *         @OA\XmlContent(ref="#/components/schemas/TahunAjaran"),
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid ID supplier"
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="TahunAjaran not found"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     }
     * )
     *
     */

    /**
     * @OA\Post(
     *     path="/tahunAjarans",
     *     tags={"TahunAjaran"},
     *     summary="Add a new TahunAjaran to the store",
     *     operationId="addTahunAjaran",
     *     @OA\Response(
     *         response=201,
     *         description="Created TahunAjaran",
     *         @OA\JsonContent(ref="#/components/schemas/TahunAjaran"),
     *         @OA\XmlContent(ref="#/components/schemas/TahunAjaran"),
     *     ),
     *     @OA\Response(
     *         response=405,
     *         description="Invalid input"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     },
     *     requestBody={"$ref": "#/components/requestBodies/TahunAjaran"}
     * )
     */

    /**
     * @OA\Put(
     *     path="/tahunAjarans/{id}",
     *     tags={"TahunAjaran"},
     *     summary="Update an existing TahunAjaran",
     *     operationId="updateTahunAjaran",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="TahunAjaran id to update",
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
     *         description="TahunAjaran not found"
     *     ),
     *     @OA\Response(
     *         response=405,
     *         description="Validation exception"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     },
     *     requestBody={"$ref": "#/components/requestBodies/TahunAjaran"}
     * )
     */

    /**
     * @OA\Delete(
     *     path="/tahunAjarans/{id}",
     *     tags={"TahunAjaran"},
     *     summary="Deletes a TahunAjaran",
     *     operationId="deleteTahunAjaran",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="TahunAjaran id to delete",
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
