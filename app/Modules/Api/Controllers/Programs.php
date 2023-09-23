<?php

namespace App\Modules\Api\Controllers;

use asligresik\easyapi\Controllers\BaseResourceController;

class Programs extends BaseResourceController
{
    protected $modelName = 'App\Modules\Api\Models\ProgramModel';

    /**
    * @OA\Get(
    *     path="/programs",
    *     tags={"Program"},
    *     summary="Find list Program",
    *     description="Returns list of Program",
    *     operationId="getProgram",
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
    *            @OA\Property(property="data",type="array",@OA\Items(ref="#/components/schemas/Program")),
    *            @OA\Property(property="pagination",type="object",@OA\Property(property="currentPage", type="integer"),@OA\Property(property="totalPage", type="integer")),
    *         ),
    *         @OA\XmlContent(type="object",
    *            @OA\Property(property="data",type="array",@OA\Items(ref="#/components/schemas/Program")),
    *            @OA\Property(property="pagination",type="array",@OA\Items(ref="#/components/schemas/Program")),
    *         ),
    *     ),
    *     @OA\Response(
    *         response=404,
    *         description="Program not found"
    *     ),
    *     security={
    *         {"bearer_auth": {}}
    *     }
    * )
    *
    */

    /**
     * @OA\Get(
     *     path="/programs/{id}",
     *     tags={"Program"},
     *     summary="Find Program by ID",
     *     description="Returns a single Program",
     *     operationId="getProgramById",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="ID of Program to return",
     *         required=true,
     *         @OA\Schema(
     *             type="integer",
     *             format="int64"
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *         @OA\JsonContent(ref="#/components/schemas/Program"),
     *         @OA\XmlContent(ref="#/components/schemas/Program"),
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid ID supplier"
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Program not found"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     }
     * )
     *
     */

    /**
     * @OA\Post(
     *     path="/programs",
     *     tags={"Program"},
     *     summary="Add a new Program to the store",
     *     operationId="addProgram",
     *     @OA\Response(
     *         response=201,
     *         description="Created Program",
     *         @OA\JsonContent(ref="#/components/schemas/Program"),
     *         @OA\XmlContent(ref="#/components/schemas/Program"),
     *     ),
     *     @OA\Response(
     *         response=405,
     *         description="Invalid input"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     },
     *     requestBody={"$ref": "#/components/requestBodies/Program"}
     * )
     */

    /**
     * @OA\Put(
     *     path="/programs/{id}",
     *     tags={"Program"},
     *     summary="Update an existing Program",
     *     operationId="updateProgram",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="Program id to update",
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
     *         description="Program not found"
     *     ),
     *     @OA\Response(
     *         response=405,
     *         description="Validation exception"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     },
     *     requestBody={"$ref": "#/components/requestBodies/Program"}
     * )
     */

    /**
     * @OA\Delete(
     *     path="/programs/{id}",
     *     tags={"Program"},
     *     summary="Deletes a Program",
     *     operationId="deleteProgram",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="Program id to delete",
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
