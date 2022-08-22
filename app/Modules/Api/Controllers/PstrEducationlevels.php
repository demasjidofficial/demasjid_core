<?php namespace App\Modules\Api\Controllers;
 
use asligresik\easyapi\Controllers\BaseResourceController;
class PstrEducationlevels extends BaseResourceController
{
    protected $modelName = 'App\Modules\Api\Models\PstrEducationlevelModel';  

     /**
     * @OA\Get(
     *     path="/pstrEducationlevels",
     *     tags={"PstrEducationlevel"},
     *     summary="Find list PstrEducationlevel",
     *     description="Returns list of PstrEducationlevel",
     *     operationId="getPstrEducationlevel",  
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
     *            @OA\Property(property="data",type="array",@OA\Items(ref="#/components/schemas/PstrEducationlevel")),
     *            @OA\Property(property="pagination",type="object",@OA\Property(property="currentPage", type="integer"),@OA\Property(property="totalPage", type="integer")),
     *         ),
     *         @OA\XmlContent(type="object",
     *            @OA\Property(property="data",type="array",@OA\Items(ref="#/components/schemas/PstrEducationlevel")),
     *            @OA\Property(property="pagination",type="array",@OA\Items(ref="#/components/schemas/PstrEducationlevel")),
     *         ),           
     *     ),     
     *     @OA\Response(
     *         response=404,
     *         description="PstrEducationlevel not found"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     }
     * )
     *     
     */

    /**
     * @OA\Get(
     *     path="/pstrEducationlevels/{id}",
     *     tags={"PstrEducationlevel"},
     *     summary="Find PstrEducationlevel by ID",
     *     description="Returns a single PstrEducationlevel",
     *     operationId="getPstrEducationlevelById",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="ID of PstrEducationlevel to return",
     *         required=true,
     *         @OA\Schema(
     *             type="integer",
     *             format="int64"
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *         @OA\JsonContent(ref="#/components/schemas/PstrEducationlevel"),
     *         @OA\XmlContent(ref="#/components/schemas/PstrEducationlevel"),
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid ID supplier"
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="PstrEducationlevel not found"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     }
     * )
     *     
     */

    /**
     * @OA\Post(
     *     path="/pstrEducationlevels",
     *     tags={"PstrEducationlevel"},
     *     summary="Add a new PstrEducationlevel to the store",
     *     operationId="addPstrEducationlevel",
     *     @OA\Response(
     *         response=201,
     *         description="Created PstrEducationlevel",
     *         @OA\JsonContent(ref="#/components/schemas/PstrEducationlevel"),
     *         @OA\XmlContent(ref="#/components/schemas/PstrEducationlevel"),
     *     ),
     *     @OA\Response(
     *         response=405,
     *         description="Invalid input"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     },     
     *     requestBody={"$ref": "#/components/requestBodies/PstrEducationlevel"}
     * )
     */

    /**
     * @OA\Put(
     *     path="/pstrEducationlevels/{id}",
     *     tags={"PstrEducationlevel"},
     *     summary="Update an existing PstrEducationlevel",
     *     operationId="updatePstrEducationlevel",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="PstrEducationlevel id to update",
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
     *         description="PstrEducationlevel not found"
     *     ),
     *     @OA\Response(
     *         response=405,
     *         description="Validation exception"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     },     
     *     requestBody={"$ref": "#/components/requestBodies/PstrEducationlevel"}
     * )
     */

    /**
     * @OA\Delete(
     *     path="/pstrEducationlevels/{id}",
     *     tags={"PstrEducationlevel"},
     *     summary="Deletes a PstrEducationlevel",
     *     operationId="deletePstrEducationlevel",     
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="PstrEducationlevel id to delete",
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