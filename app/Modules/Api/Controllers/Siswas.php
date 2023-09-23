<?php

namespace App\Modules\Api\Controllers;

use asligresik\easyapi\Controllers\BaseResourceController;

class Siswas extends BaseResourceController
{
    protected $modelName = 'App\Modules\Api\Models\SiswaModel';

    /**
    * @OA\Get(
    *     path="/siswas",
    *     tags={"Siswa"},
    *     summary="Find list Siswa",
    *     description="Returns list of Siswa",
    *     operationId="getSiswa",
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
    *            @OA\Property(property="data",type="array",@OA\Items(ref="#/components/schemas/Siswa")),
    *            @OA\Property(property="pagination",type="object",@OA\Property(property="currentPage", type="integer"),@OA\Property(property="totalPage", type="integer")),
    *         ),
    *         @OA\XmlContent(type="object",
    *            @OA\Property(property="data",type="array",@OA\Items(ref="#/components/schemas/Siswa")),
    *            @OA\Property(property="pagination",type="array",@OA\Items(ref="#/components/schemas/Siswa")),
    *         ),
    *     ),
    *     @OA\Response(
    *         response=404,
    *         description="Siswa not found"
    *     ),
    *     security={
    *         {"bearer_auth": {}}
    *     }
    * )
    *
    */

    /**
     * @OA\Get(
     *     path="/siswas/{id}",
     *     tags={"Siswa"},
     *     summary="Find Siswa by ID",
     *     description="Returns a single Siswa",
     *     operationId="getSiswaById",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="ID of Siswa to return",
     *         required=true,
     *         @OA\Schema(
     *             type="integer",
     *             format="int64"
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *         @OA\JsonContent(ref="#/components/schemas/Siswa"),
     *         @OA\XmlContent(ref="#/components/schemas/Siswa"),
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid ID supplier"
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Siswa not found"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     }
     * )
     *
     */

    /**
     * @OA\Post(
     *     path="/siswas",
     *     tags={"Siswa"},
     *     summary="Add a new Siswa to the store",
     *     operationId="addSiswa",
     *     @OA\Response(
     *         response=201,
     *         description="Created Siswa",
     *         @OA\JsonContent(ref="#/components/schemas/Siswa"),
     *         @OA\XmlContent(ref="#/components/schemas/Siswa"),
     *     ),
     *     @OA\Response(
     *         response=405,
     *         description="Invalid input"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     },
     *     requestBody={"$ref": "#/components/requestBodies/Siswa"}
     * )
     */

    /**
     * @OA\Put(
     *     path="/siswas/{id}",
     *     tags={"Siswa"},
     *     summary="Update an existing Siswa",
     *     operationId="updateSiswa",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="Siswa id to update",
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
     *         description="Siswa not found"
     *     ),
     *     @OA\Response(
     *         response=405,
     *         description="Validation exception"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     },
     *     requestBody={"$ref": "#/components/requestBodies/Siswa"}
     * )
     */

    /**
     * @OA\Delete(
     *     path="/siswas/{id}",
     *     tags={"Siswa"},
     *     summary="Deletes a Siswa",
     *     operationId="deleteSiswa",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="Siswa id to delete",
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
