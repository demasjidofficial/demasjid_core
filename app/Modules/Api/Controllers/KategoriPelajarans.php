<?php

namespace App\Modules\Api\Controllers;

use asligresik\easyapi\Controllers\BaseResourceController;

class KategoriPelajarans extends BaseResourceController
{
    protected $modelName = 'App\Modules\Api\Models\KategoriPelajaranModel';

    /**
    * @OA\Get(
    *     path="/kategoriPelajarans",
    *     tags={"KategoriPelajaran"},
    *     summary="Find list KategoriPelajaran",
    *     description="Returns list of KategoriPelajaran",
    *     operationId="getKategoriPelajaran",
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
    *            @OA\Property(property="data",type="array",@OA\Items(ref="#/components/schemas/KategoriPelajaran")),
    *            @OA\Property(property="pagination",type="object",@OA\Property(property="currentPage", type="integer"),@OA\Property(property="totalPage", type="integer")),
    *         ),
    *         @OA\XmlContent(type="object",
    *            @OA\Property(property="data",type="array",@OA\Items(ref="#/components/schemas/KategoriPelajaran")),
    *            @OA\Property(property="pagination",type="array",@OA\Items(ref="#/components/schemas/KategoriPelajaran")),
    *         ),
    *     ),
    *     @OA\Response(
    *         response=404,
    *         description="KategoriPelajaran not found"
    *     ),
    *     security={
    *         {"bearer_auth": {}}
    *     }
    * )
    *
    */

    /**
     * @OA\Get(
     *     path="/kategoriPelajarans/{id}",
     *     tags={"KategoriPelajaran"},
     *     summary="Find KategoriPelajaran by ID",
     *     description="Returns a single KategoriPelajaran",
     *     operationId="getKategoriPelajaranById",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="ID of KategoriPelajaran to return",
     *         required=true,
     *         @OA\Schema(
     *             type="integer",
     *             format="int64"
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *         @OA\JsonContent(ref="#/components/schemas/KategoriPelajaran"),
     *         @OA\XmlContent(ref="#/components/schemas/KategoriPelajaran"),
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid ID supplier"
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="KategoriPelajaran not found"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     }
     * )
     *
     */

    /**
     * @OA\Post(
     *     path="/kategoriPelajarans",
     *     tags={"KategoriPelajaran"},
     *     summary="Add a new KategoriPelajaran to the store",
     *     operationId="addKategoriPelajaran",
     *     @OA\Response(
     *         response=201,
     *         description="Created KategoriPelajaran",
     *         @OA\JsonContent(ref="#/components/schemas/KategoriPelajaran"),
     *         @OA\XmlContent(ref="#/components/schemas/KategoriPelajaran"),
     *     ),
     *     @OA\Response(
     *         response=405,
     *         description="Invalid input"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     },
     *     requestBody={"$ref": "#/components/requestBodies/KategoriPelajaran"}
     * )
     */

    /**
     * @OA\Put(
     *     path="/kategoriPelajarans/{id}",
     *     tags={"KategoriPelajaran"},
     *     summary="Update an existing KategoriPelajaran",
     *     operationId="updateKategoriPelajaran",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="KategoriPelajaran id to update",
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
     *         description="KategoriPelajaran not found"
     *     ),
     *     @OA\Response(
     *         response=405,
     *         description="Validation exception"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     },
     *     requestBody={"$ref": "#/components/requestBodies/KategoriPelajaran"}
     * )
     */

    /**
     * @OA\Delete(
     *     path="/kategoriPelajarans/{id}",
     *     tags={"KategoriPelajaran"},
     *     summary="Deletes a KategoriPelajaran",
     *     operationId="deleteKategoriPelajaran",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="KategoriPelajaran id to delete",
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
