<?php

namespace App\Modules\Api\Controllers;

use asligresik\easyapi\Controllers\BaseResourceController;

class Languages extends BaseResourceController
{
    protected $modelName = 'App\Modules\Api\Models\LanguagesModel';

    /**
    * @OA\Get(
    *     path="/languages",
    *     tags={"Languages"},
    *     summary="Find list Languages",
    *     description="Returns list of Languages",
    *     operationId="getLanguages",
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
    *            @OA\Property(property="data",type="array",@OA\Items(ref="#/components/schemas/Languages")),
    *            @OA\Property(property="pagination",type="object",@OA\Property(property="currentPage", type="integer"),@OA\Property(property="totalPage", type="integer")),
    *         ),
    *         @OA\XmlContent(type="object",
    *            @OA\Property(property="data",type="array",@OA\Items(ref="#/components/schemas/Languages")),
    *            @OA\Property(property="pagination",type="array",@OA\Items(ref="#/components/schemas/Languages")),
    *         ),
    *     ),
    *     @OA\Response(
    *         response=404,
    *         description="Languages not found"
    *     ),
    *     security={
    *         {"bearer_auth": {}}
    *     }
    * )
    *
    */

    /**
     * @OA\Get(
     *     path="/languages/{id}",
     *     tags={"Languages"},
     *     summary="Find Languages by ID",
     *     description="Returns a single Languages",
     *     operationId="getLanguagesById",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="ID of Languages to return",
     *         required=true,
     *         @OA\Schema(
     *             type="integer",
     *             format="int64"
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *         @OA\JsonContent(ref="#/components/schemas/Languages"),
     *         @OA\XmlContent(ref="#/components/schemas/Languages"),
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid ID supplier"
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Languages not found"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     }
     * )
     *
     */

    /**
     * @OA\Post(
     *     path="/languages",
     *     tags={"Languages"},
     *     summary="Add a new Languages to the store",
     *     operationId="addLanguages",
     *     @OA\Response(
     *         response=201,
     *         description="Created Languages",
     *         @OA\JsonContent(ref="#/components/schemas/Languages"),
     *         @OA\XmlContent(ref="#/components/schemas/Languages"),
     *     ),
     *     @OA\Response(
     *         response=405,
     *         description="Invalid input"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     },
     *     requestBody={"$ref": "#/components/requestBodies/Languages"}
     * )
     */

    /**
     * @OA\Put(
     *     path="/languages/{id}",
     *     tags={"Languages"},
     *     summary="Update an existing Languages",
     *     operationId="updateLanguages",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="Languages id to update",
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
     *         description="Languages not found"
     *     ),
     *     @OA\Response(
     *         response=405,
     *         description="Validation exception"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     },
     *     requestBody={"$ref": "#/components/requestBodies/Languages"}
     * )
     */

    /**
     * @OA\Delete(
     *     path="/languages/{id}",
     *     tags={"Languages"},
     *     summary="Deletes a Languages",
     *     operationId="deleteLanguages",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="Languages id to delete",
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
