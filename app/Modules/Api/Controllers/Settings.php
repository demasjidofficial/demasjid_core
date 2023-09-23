<?php

namespace App\Modules\Api\Controllers;

use asligresik\easyapi\Controllers\BaseResourceController;

class Settings extends BaseResourceController
{
    protected $modelName = 'App\Modules\Api\Models\SettingsModel';

    /**
    * @OA\Get(
    *     path="/settings",
    *     tags={"Settings"},
    *     summary="Find list Settings",
    *     description="Returns list of Settings",
    *     operationId="getSettings",
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
    *            @OA\Property(property="data",type="array",@OA\Items(ref="#/components/schemas/Settings")),
    *            @OA\Property(property="pagination",type="object",@OA\Property(property="currentPage", type="integer"),@OA\Property(property="totalPage", type="integer")),
    *         ),
    *         @OA\XmlContent(type="object",
    *            @OA\Property(property="data",type="array",@OA\Items(ref="#/components/schemas/Settings")),
    *            @OA\Property(property="pagination",type="array",@OA\Items(ref="#/components/schemas/Settings")),
    *         ),
    *     ),
    *     @OA\Response(
    *         response=404,
    *         description="Settings not found"
    *     ),
    *     security={
    *         {"bearer_auth": {}}
    *     }
    * )
    *
    */

    /**
     * @OA\Get(
     *     path="/settings/{id}",
     *     tags={"Settings"},
     *     summary="Find Settings by ID",
     *     description="Returns a single Settings",
     *     operationId="getSettingsById",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="ID of Settings to return",
     *         required=true,
     *         @OA\Schema(
     *             type="integer",
     *             format="int64"
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *         @OA\JsonContent(ref="#/components/schemas/Settings"),
     *         @OA\XmlContent(ref="#/components/schemas/Settings"),
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid ID supplier"
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Settings not found"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     }
     * )
     *
     */

    /**
     * @OA\Post(
     *     path="/settings",
     *     tags={"Settings"},
     *     summary="Add a new Settings to the store",
     *     operationId="addSettings",
     *     @OA\Response(
     *         response=201,
     *         description="Created Settings",
     *         @OA\JsonContent(ref="#/components/schemas/Settings"),
     *         @OA\XmlContent(ref="#/components/schemas/Settings"),
     *     ),
     *     @OA\Response(
     *         response=405,
     *         description="Invalid input"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     },
     *     requestBody={"$ref": "#/components/requestBodies/Settings"}
     * )
     */

    /**
     * @OA\Put(
     *     path="/settings/{id}",
     *     tags={"Settings"},
     *     summary="Update an existing Settings",
     *     operationId="updateSettings",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="Settings id to update",
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
     *         description="Settings not found"
     *     ),
     *     @OA\Response(
     *         response=405,
     *         description="Validation exception"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     },
     *     requestBody={"$ref": "#/components/requestBodies/Settings"}
     * )
     */

    /**
     * @OA\Delete(
     *     path="/settings/{id}",
     *     tags={"Settings"},
     *     summary="Deletes a Settings",
     *     operationId="deleteSettings",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="Settings id to delete",
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
