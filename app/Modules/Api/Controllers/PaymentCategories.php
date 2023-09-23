<?php

namespace App\Modules\Api\Controllers;

use asligresik\easyapi\Controllers\BaseResourceController;

class PaymentCategories extends BaseResourceController
{
    protected $modelName = 'App\Modules\Api\Models\PaymentCategoryModel';

    /**
    * @OA\Get(
    *     path="/paymentCategories",
    *     tags={"PaymentCategory"},
    *     summary="Find list PaymentCategory",
    *     description="Returns list of PaymentCategory",
    *     operationId="getPaymentCategory",
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
    *            @OA\Property(property="data",type="array",@OA\Items(ref="#/components/schemas/PaymentCategory")),
    *            @OA\Property(property="pagination",type="object",@OA\Property(property="currentPage", type="integer"),@OA\Property(property="totalPage", type="integer")),
    *         ),
    *         @OA\XmlContent(type="object",
    *            @OA\Property(property="data",type="array",@OA\Items(ref="#/components/schemas/PaymentCategory")),
    *            @OA\Property(property="pagination",type="array",@OA\Items(ref="#/components/schemas/PaymentCategory")),
    *         ),
    *     ),
    *     @OA\Response(
    *         response=404,
    *         description="PaymentCategory not found"
    *     ),
    *     security={
    *         {"bearer_auth": {}}
    *     }
    * )
    *
    */

    /**
     * @OA\Get(
     *     path="/paymentCategories/{id}",
     *     tags={"PaymentCategory"},
     *     summary="Find PaymentCategory by ID",
     *     description="Returns a single PaymentCategory",
     *     operationId="getPaymentCategoryById",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="ID of PaymentCategory to return",
     *         required=true,
     *         @OA\Schema(
     *             type="integer",
     *             format="int64"
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *         @OA\JsonContent(ref="#/components/schemas/PaymentCategory"),
     *         @OA\XmlContent(ref="#/components/schemas/PaymentCategory"),
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid ID supplier"
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="PaymentCategory not found"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     }
     * )
     *
     */

    /**
     * @OA\Post(
     *     path="/paymentCategories",
     *     tags={"PaymentCategory"},
     *     summary="Add a new PaymentCategory to the store",
     *     operationId="addPaymentCategory",
     *     @OA\Response(
     *         response=201,
     *         description="Created PaymentCategory",
     *         @OA\JsonContent(ref="#/components/schemas/PaymentCategory"),
     *         @OA\XmlContent(ref="#/components/schemas/PaymentCategory"),
     *     ),
     *     @OA\Response(
     *         response=405,
     *         description="Invalid input"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     },
     *     requestBody={"$ref": "#/components/requestBodies/PaymentCategory"}
     * )
     */

    /**
     * @OA\Put(
     *     path="/paymentCategories/{id}",
     *     tags={"PaymentCategory"},
     *     summary="Update an existing PaymentCategory",
     *     operationId="updatePaymentCategory",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="PaymentCategory id to update",
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
     *         description="PaymentCategory not found"
     *     ),
     *     @OA\Response(
     *         response=405,
     *         description="Validation exception"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     },
     *     requestBody={"$ref": "#/components/requestBodies/PaymentCategory"}
     * )
     */

    /**
     * @OA\Delete(
     *     path="/paymentCategories/{id}",
     *     tags={"PaymentCategory"},
     *     summary="Deletes a PaymentCategory",
     *     operationId="deletePaymentCategory",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="PaymentCategory id to delete",
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
