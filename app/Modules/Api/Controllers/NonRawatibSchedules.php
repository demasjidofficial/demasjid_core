<?php

namespace App\Modules\Api\Controllers;

use asligresik\easyapi\Controllers\BaseResourceController;

class NonRawatibSchedules extends BaseResourceController
{
    protected $modelName = 'App\Modules\Api\Models\NonRawatibScheduleModel';

    /**
    * @OA\Get(
    *     path="/nonRawatibSchedules",
    *     tags={"NonRawatibSchedule"},
    *     summary="Find list NonRawatibSchedule",
    *     description="Returns list of NonRawatibSchedule",
    *     operationId="getNonRawatibSchedule",
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
    *            @OA\Property(property="data",type="array",@OA\Items(ref="#/components/schemas/NonRawatibSchedule")),
    *            @OA\Property(property="pagination",type="object",@OA\Property(property="currentPage", type="integer"),@OA\Property(property="totalPage", type="integer")),
    *         ),
    *         @OA\XmlContent(type="object",
    *            @OA\Property(property="data",type="array",@OA\Items(ref="#/components/schemas/NonRawatibSchedule")),
    *            @OA\Property(property="pagination",type="array",@OA\Items(ref="#/components/schemas/NonRawatibSchedule")),
    *         ),
    *     ),
    *     @OA\Response(
    *         response=404,
    *         description="NonRawatibSchedule not found"
    *     ),
    *     security={
    *         {"bearer_auth": {}}
    *     }
    * )
    *
    */

    /**
     * @OA\Get(
     *     path="/nonRawatibSchedules/{id}",
     *     tags={"NonRawatibSchedule"},
     *     summary="Find NonRawatibSchedule by ID",
     *     description="Returns a single NonRawatibSchedule",
     *     operationId="getNonRawatibScheduleById",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="ID of NonRawatibSchedule to return",
     *         required=true,
     *         @OA\Schema(
     *             type="integer",
     *             format="int64"
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *         @OA\JsonContent(ref="#/components/schemas/NonRawatibSchedule"),
     *         @OA\XmlContent(ref="#/components/schemas/NonRawatibSchedule"),
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid ID supplier"
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="NonRawatibSchedule not found"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     }
     * )
     *
     */

    /**
     * @OA\Post(
     *     path="/nonRawatibSchedules",
     *     tags={"NonRawatibSchedule"},
     *     summary="Add a new NonRawatibSchedule to the store",
     *     operationId="addNonRawatibSchedule",
     *     @OA\Response(
     *         response=201,
     *         description="Created NonRawatibSchedule",
     *         @OA\JsonContent(ref="#/components/schemas/NonRawatibSchedule"),
     *         @OA\XmlContent(ref="#/components/schemas/NonRawatibSchedule"),
     *     ),
     *     @OA\Response(
     *         response=405,
     *         description="Invalid input"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     },
     *     requestBody={"$ref": "#/components/requestBodies/NonRawatibSchedule"}
     * )
     */

    /**
     * @OA\Put(
     *     path="/nonRawatibSchedules/{id}",
     *     tags={"NonRawatibSchedule"},
     *     summary="Update an existing NonRawatibSchedule",
     *     operationId="updateNonRawatibSchedule",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="NonRawatibSchedule id to update",
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
     *         description="NonRawatibSchedule not found"
     *     ),
     *     @OA\Response(
     *         response=405,
     *         description="Validation exception"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     },
     *     requestBody={"$ref": "#/components/requestBodies/NonRawatibSchedule"}
     * )
     */

    /**
     * @OA\Delete(
     *     path="/nonRawatibSchedules/{id}",
     *     tags={"NonRawatibSchedule"},
     *     summary="Deletes a NonRawatibSchedule",
     *     operationId="deleteNonRawatibSchedule",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="NonRawatibSchedule id to delete",
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
