<?php

namespace App\Modules\Api\Controllers;

use asligresik\easyapi\Controllers\BaseResourceController;

class Bmdonationtypes extends BaseResourceController
{
    protected $modelName = 'App\Modules\Api\Models\BmdonationtypeModel';

    /**
    * @OA\Get(
    *     path="/bmdonationtypes",
    *     tags={"Bmdonationtype"},
    *     summary="Find list Bmdonationtype",
    *     description="Returns list of Bmdonationtype",
    *     operationId="getBmdonationtype",
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
    *            @OA\Property(property="data",type="array",@OA\Items(ref="#/components/schemas/Bmdonationtype")),
    *            @OA\Property(property="pagination",type="object",@OA\Property(property="currentPage", type="integer"),@OA\Property(property="totalPage", type="integer")),
    *         ),
    *         @OA\XmlContent(type="object",
    *            @OA\Property(property="data",type="array",@OA\Items(ref="#/components/schemas/Bmdonationtype")),
    *            @OA\Property(property="pagination",type="array",@OA\Items(ref="#/components/schemas/Bmdonationtype")),
    *         ),
    *     ),
    *     @OA\Response(
    *         response=404,
    *         description="Bmdonationtype not found"
    *     ),
    *     security={
    *         {"bearer_auth": {}}
    *     }
    * )
    *
    */

    /**
     * @OA\Get(
     *     path="/bmdonationtypes/{id}",
     *     tags={"Bmdonationtype"},
     *     summary="Find Bmdonationtype by ID",
     *     description="Returns a single Bmdonationtype",
     *     operationId="getBmdonationtypeById",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="ID of Bmdonationtype to return",
     *         required=true,
     *         @OA\Schema(
     *             type="integer",
     *             format="int64"
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *         @OA\JsonContent(ref="#/components/schemas/Bmdonationtype"),
     *         @OA\XmlContent(ref="#/components/schemas/Bmdonationtype"),
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid ID supplier"
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Bmdonationtype not found"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     }
     * )
     *
     */

    /**
     * @OA\Post(
     *     path="/bmdonationtypes",
     *     tags={"Bmdonationtype"},
     *     summary="Add a new Bmdonationtype to the store",
     *     operationId="addBmdonationtype",
     *     @OA\Response(
     *         response=201,
     *         description="Created Bmdonationtype",
     *         @OA\JsonContent(ref="#/components/schemas/Bmdonationtype"),
     *         @OA\XmlContent(ref="#/components/schemas/Bmdonationtype"),
     *     ),
     *     @OA\Response(
     *         response=405,
     *         description="Invalid input"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     },
     *     requestBody={"$ref": "#/components/requestBodies/Bmdonationtype"}
     * )
     */

    /**
     * @OA\Put(
     *     path="/bmdonationtypes/{id}",
     *     tags={"Bmdonationtype"},
     *     summary="Update an existing Bmdonationtype",
     *     operationId="updateBmdonationtype",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="Bmdonationtype id to update",
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
     *         description="Bmdonationtype not found"
     *     ),
     *     @OA\Response(
     *         response=405,
     *         description="Validation exception"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     },
     *     requestBody={"$ref": "#/components/requestBodies/Bmdonationtype"}
     * )
     */

    /**
     * @OA\Delete(
     *     path="/bmdonationtypes/{id}",
     *     tags={"Bmdonationtype"},
     *     summary="Deletes a Bmdonationtype",
     *     operationId="deleteBmdonationtype",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="Bmdonationtype id to delete",
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
