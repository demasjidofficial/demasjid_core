<?php

namespace App\Modules\Api\Controllers;

use asligresik\easyapi\Controllers\BaseResourceController;

class RawatibSchedules extends BaseResourceController
{
    protected $modelName = 'App\Modules\Api\Models\RawatibScheduleModel';

    /**
    * @OA\Get(
    *     path="/rawatibSchedules",
    *     tags={"RawatibSchedule"},
    *     summary="Find list RawatibSchedule",
    *     description="Returns list of RawatibSchedule",
    *     operationId="getRawatibSchedule",
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
    *            @OA\Property(property="data",type="array",@OA\Items(ref="#/components/schemas/RawatibSchedule")),
    *            @OA\Property(property="pagination",type="object",@OA\Property(property="currentPage", type="integer"),@OA\Property(property="totalPage", type="integer")),
    *         ),
    *         @OA\XmlContent(type="object",
    *            @OA\Property(property="data",type="array",@OA\Items(ref="#/components/schemas/RawatibSchedule")),
    *            @OA\Property(property="pagination",type="array",@OA\Items(ref="#/components/schemas/RawatibSchedule")),
    *         ),
    *     ),
    *     @OA\Response(
    *         response=404,
    *         description="RawatibSchedule not found"
    *     ),
    *     security={
    *         {"bearer_auth": {}}
    *     }
    * )
    *
    */

    /**
     * @OA\Get(
     *     path="/rawatibSchedules/{id}",
     *     tags={"RawatibSchedule"},
     *     summary="Find RawatibSchedule by ID",
     *     description="Returns a single RawatibSchedule",
     *     operationId="getRawatibScheduleById",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="ID of RawatibSchedule to return",
     *         required=true,
     *         @OA\Schema(
     *             type="integer",
     *             format="int64"
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *         @OA\JsonContent(ref="#/components/schemas/RawatibSchedule"),
     *         @OA\XmlContent(ref="#/components/schemas/RawatibSchedule"),
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid ID supplier"
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="RawatibSchedule not found"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     }
     * )
     *
     */

    /**
     * @OA\Post(
     *     path="/rawatibSchedules",
     *     tags={"RawatibSchedule"},
     *     summary="Add a new RawatibSchedule to the store",
     *     operationId="addRawatibSchedule",
     *     @OA\Response(
     *         response=201,
     *         description="Created RawatibSchedule",
     *         @OA\JsonContent(ref="#/components/schemas/RawatibSchedule"),
     *         @OA\XmlContent(ref="#/components/schemas/RawatibSchedule"),
     *     ),
     *     @OA\Response(
     *         response=405,
     *         description="Invalid input"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     },
     *     requestBody={"$ref": "#/components/requestBodies/RawatibSchedule"}
     * )
     */

    /**
     * @OA\Put(
     *     path="/rawatibSchedules/{id}",
     *     tags={"RawatibSchedule"},
     *     summary="Update an existing RawatibSchedule",
     *     operationId="updateRawatibSchedule",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="RawatibSchedule id to update",
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
     *         description="RawatibSchedule not found"
     *     ),
     *     @OA\Response(
     *         response=405,
     *         description="Validation exception"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     },
     *     requestBody={"$ref": "#/components/requestBodies/RawatibSchedule"}
     * )
     */

    /**
     * @OA\Delete(
     *     path="/rawatibSchedules/{id}",
     *     tags={"RawatibSchedule"},
     *     summary="Deletes a RawatibSchedule",
     *     operationId="deleteRawatibSchedule",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="RawatibSchedule id to delete",
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
