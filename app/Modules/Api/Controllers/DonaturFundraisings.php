<?php

namespace App\Modules\Api\Controllers;

use asligresik\easyapi\Controllers\BaseResourceController;

class DonaturFundraisings extends BaseResourceController
{
    protected $modelName = 'App\Modules\Api\Models\DonaturFundraisingModel';

    /**
    * @OA\Get(
    *     path="/donaturFundraisings",
    *     tags={"DonaturFundraising"},
    *     summary="Find list DonaturFundraising",
    *     description="Returns list of DonaturFundraising",
    *     operationId="getDonaturFundraising",
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
    *            @OA\Property(property="data",type="array",@OA\Items(ref="#/components/schemas/DonaturFundraising")),
    *            @OA\Property(property="pagination",type="object",@OA\Property(property="currentPage", type="integer"),@OA\Property(property="totalPage", type="integer")),
    *         ),
    *         @OA\XmlContent(type="object",
    *            @OA\Property(property="data",type="array",@OA\Items(ref="#/components/schemas/DonaturFundraising")),
    *            @OA\Property(property="pagination",type="array",@OA\Items(ref="#/components/schemas/DonaturFundraising")),
    *         ),
    *     ),
    *     @OA\Response(
    *         response=404,
    *         description="DonaturFundraising not found"
    *     ),
    *     security={
    *         {"bearer_auth": {}}
    *     }
    * )
    *
    */

    /**
     * @OA\Get(
     *     path="/donaturFundraisings/{id}",
     *     tags={"DonaturFundraising"},
     *     summary="Find DonaturFundraising by ID",
     *     description="Returns a single DonaturFundraising",
     *     operationId="getDonaturFundraisingById",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="ID of DonaturFundraising to return",
     *         required=true,
     *         @OA\Schema(
     *             type="integer",
     *             format="int64"
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *         @OA\JsonContent(ref="#/components/schemas/DonaturFundraising"),
     *         @OA\XmlContent(ref="#/components/schemas/DonaturFundraising"),
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid ID supplier"
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="DonaturFundraising not found"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     }
     * )
     *
     */

    /**
     * @OA\Post(
     *     path="/donaturFundraisings",
     *     tags={"DonaturFundraising"},
     *     summary="Add a new DonaturFundraising to the store",
     *     operationId="addDonaturFundraising",
     *     @OA\Response(
     *         response=201,
     *         description="Created DonaturFundraising",
     *         @OA\JsonContent(ref="#/components/schemas/DonaturFundraising"),
     *         @OA\XmlContent(ref="#/components/schemas/DonaturFundraising"),
     *     ),
     *     @OA\Response(
     *         response=405,
     *         description="Invalid input"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     },
     *     requestBody={"$ref": "#/components/requestBodies/DonaturFundraising"}
     * )
     */

    /**
     * @OA\Put(
     *     path="/donaturFundraisings/{id}",
     *     tags={"DonaturFundraising"},
     *     summary="Update an existing DonaturFundraising",
     *     operationId="updateDonaturFundraising",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="DonaturFundraising id to update",
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
     *         description="DonaturFundraising not found"
     *     ),
     *     @OA\Response(
     *         response=405,
     *         description="Validation exception"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     },
     *     requestBody={"$ref": "#/components/requestBodies/DonaturFundraising"}
     * )
     */

    /**
     * @OA\Delete(
     *     path="/donaturFundraisings/{id}",
     *     tags={"DonaturFundraising"},
     *     summary="Deletes a DonaturFundraising",
     *     operationId="deleteDonaturFundraising",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="DonaturFundraising id to delete",
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
