<?php

namespace App\Modules\Api\Controllers;

use asligresik\easyapi\Controllers\BaseResourceController;

class TimStaffs extends BaseResourceController
{
    protected $modelName = 'App\Modules\Api\Models\TimStaffModel';

    /**
    * @OA\Get(
    *     path="/timStaffs",
    *     tags={"TimStaff"},
    *     summary="Find list TimStaff",
    *     description="Returns list of TimStaff",
    *     operationId="getTimStaff",
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
    *            @OA\Property(property="data",type="array",@OA\Items(ref="#/components/schemas/TimStaff")),
    *            @OA\Property(property="pagination",type="object",@OA\Property(property="currentPage", type="integer"),@OA\Property(property="totalPage", type="integer")),
    *         ),
    *         @OA\XmlContent(type="object",
    *            @OA\Property(property="data",type="array",@OA\Items(ref="#/components/schemas/TimStaff")),
    *            @OA\Property(property="pagination",type="array",@OA\Items(ref="#/components/schemas/TimStaff")),
    *         ),
    *     ),
    *     @OA\Response(
    *         response=404,
    *         description="TimStaff not found"
    *     ),
    *     security={
    *         {"bearer_auth": {}}
    *     }
    * )
    *
    */

    /**
     * @OA\Get(
     *     path="/timStaffs/{id}",
     *     tags={"TimStaff"},
     *     summary="Find TimStaff by ID",
     *     description="Returns a single TimStaff",
     *     operationId="getTimStaffById",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="ID of TimStaff to return",
     *         required=true,
     *         @OA\Schema(
     *             type="integer",
     *             format="int64"
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *         @OA\JsonContent(ref="#/components/schemas/TimStaff"),
     *         @OA\XmlContent(ref="#/components/schemas/TimStaff"),
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid ID supplier"
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="TimStaff not found"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     }
     * )
     *
     */

    /**
     * @OA\Post(
     *     path="/timStaffs",
     *     tags={"TimStaff"},
     *     summary="Add a new TimStaff to the store",
     *     operationId="addTimStaff",
     *     @OA\Response(
     *         response=201,
     *         description="Created TimStaff",
     *         @OA\JsonContent(ref="#/components/schemas/TimStaff"),
     *         @OA\XmlContent(ref="#/components/schemas/TimStaff"),
     *     ),
     *     @OA\Response(
     *         response=405,
     *         description="Invalid input"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     },
     *     requestBody={"$ref": "#/components/requestBodies/TimStaff"}
     * )
     */

    /**
     * @OA\Put(
     *     path="/timStaffs/{id}",
     *     tags={"TimStaff"},
     *     summary="Update an existing TimStaff",
     *     operationId="updateTimStaff",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="TimStaff id to update",
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
     *         description="TimStaff not found"
     *     ),
     *     @OA\Response(
     *         response=405,
     *         description="Validation exception"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     },
     *     requestBody={"$ref": "#/components/requestBodies/TimStaff"}
     * )
     */

    /**
     * @OA\Delete(
     *     path="/timStaffs/{id}",
     *     tags={"TimStaff"},
     *     summary="Deletes a TimStaff",
     *     operationId="deleteTimStaff",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="TimStaff id to delete",
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
