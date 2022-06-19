<?php namespace App\Modules\Api\Controllers;
 
use asligresik\easyapi\Controllers\BaseResourceController;
class NonRawatibScheduleClones extends BaseResourceController
{
    protected $modelName = 'App\Modules\Api\Models\NonRawatibScheduleCloneModel';  

     /**
     * @OA\Get(
     *     path="/nonRawatibScheduleClones",
     *     tags={"NonRawatibScheduleClone"},
     *     summary="Find list NonRawatibScheduleClone",
     *     description="Returns list of NonRawatibScheduleClone",
     *     operationId="getNonRawatibScheduleClone",  
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
     *            @OA\Property(property="data",type="array",@OA\Items(ref="#/components/schemas/NonRawatibScheduleClone")),
     *            @OA\Property(property="pagination",type="object",@OA\Property(property="currentPage", type="integer"),@OA\Property(property="totalPage", type="integer")),
     *         ),
     *         @OA\XmlContent(type="object",
     *            @OA\Property(property="data",type="array",@OA\Items(ref="#/components/schemas/NonRawatibScheduleClone")),
     *            @OA\Property(property="pagination",type="array",@OA\Items(ref="#/components/schemas/NonRawatibScheduleClone")),
     *         ),           
     *     ),     
     *     @OA\Response(
     *         response=404,
     *         description="NonRawatibScheduleClone not found"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     }
     * )
     *     
     */

    /**
     * @OA\Get(
     *     path="/nonRawatibScheduleClones/{id}",
     *     tags={"NonRawatibScheduleClone"},
     *     summary="Find NonRawatibScheduleClone by ID",
     *     description="Returns a single NonRawatibScheduleClone",
     *     operationId="getNonRawatibScheduleCloneById",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="ID of NonRawatibScheduleClone to return",
     *         required=true,
     *         @OA\Schema(
     *             type="integer",
     *             format="int64"
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *         @OA\JsonContent(ref="#/components/schemas/NonRawatibScheduleClone"),
     *         @OA\XmlContent(ref="#/components/schemas/NonRawatibScheduleClone"),
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid ID supplier"
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="NonRawatibScheduleClone not found"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     }
     * )
     *     
     */

    /**
     * @OA\Post(
     *     path="/nonRawatibScheduleClones",
     *     tags={"NonRawatibScheduleClone"},
     *     summary="Add a new NonRawatibScheduleClone to the store",
     *     operationId="addNonRawatibScheduleClone",
     *     @OA\Response(
     *         response=201,
     *         description="Created NonRawatibScheduleClone",
     *         @OA\JsonContent(ref="#/components/schemas/NonRawatibScheduleClone"),
     *         @OA\XmlContent(ref="#/components/schemas/NonRawatibScheduleClone"),
     *     ),
     *     @OA\Response(
     *         response=405,
     *         description="Invalid input"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     },     
     *     requestBody={"$ref": "#/components/requestBodies/NonRawatibScheduleClone"}
     * )
     */

    /**
     * @OA\Put(
     *     path="/nonRawatibScheduleClones/{id}",
     *     tags={"NonRawatibScheduleClone"},
     *     summary="Update an existing NonRawatibScheduleClone",
     *     operationId="updateNonRawatibScheduleClone",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="NonRawatibScheduleClone id to update",
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
     *         description="NonRawatibScheduleClone not found"
     *     ),
     *     @OA\Response(
     *         response=405,
     *         description="Validation exception"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     },     
     *     requestBody={"$ref": "#/components/requestBodies/NonRawatibScheduleClone"}
     * )
     */

    /**
     * @OA\Delete(
     *     path="/nonRawatibScheduleClones/{id}",
     *     tags={"NonRawatibScheduleClone"},
     *     summary="Deletes a NonRawatibScheduleClone",
     *     operationId="deleteNonRawatibScheduleClone",     
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="NonRawatibScheduleClone id to delete",
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