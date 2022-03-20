<?php namespace App\Modules\Api\Controllers;
 
use asligresik\easyapi\Controllers\BaseResourceController;
class Profiles extends BaseResourceController
{
    protected $modelName = 'App\Modules\Api\Models\ProfileModel';  

     /**
     * @OA\Get(
     *     path="/profiles",
     *     tags={"Profile"},
     *     summary="Find list Profile",
     *     description="Returns list of Profile",
     *     operationId="getProfile",  
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
     *            @OA\Property(property="data",type="array",@OA\Items(ref="#/components/schemas/Profile")),
     *            @OA\Property(property="pagination",type="object",@OA\Property(property="currentPage", type="integer"),@OA\Property(property="totalPage", type="integer")),
     *         ),
     *         @OA\XmlContent(type="object",
     *            @OA\Property(property="data",type="array",@OA\Items(ref="#/components/schemas/Profile")),
     *            @OA\Property(property="pagination",type="array",@OA\Items(ref="#/components/schemas/Profile")),
     *         ),           
     *     ),     
     *     @OA\Response(
     *         response=404,
     *         description="Profile not found"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     }
     * )
     *     
     */

    /**
     * @OA\Get(
     *     path="/profiles/{id}",
     *     tags={"Profile"},
     *     summary="Find Profile by ID",
     *     description="Returns a single Profile",
     *     operationId="getProfileById",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="ID of Profile to return",
     *         required=true,
     *         @OA\Schema(
     *             type="integer",
     *             format="int64"
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *         @OA\JsonContent(ref="#/components/schemas/Profile"),
     *         @OA\XmlContent(ref="#/components/schemas/Profile"),
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid ID supplier"
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Profile not found"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     }
     * )
     *     
     */

    /**
     * @OA\Post(
     *     path="/profiles",
     *     tags={"Profile"},
     *     summary="Add a new Profile to the store",
     *     operationId="addProfile",
     *     @OA\Response(
     *         response=201,
     *         description="Created Profile",
     *         @OA\JsonContent(ref="#/components/schemas/Profile"),
     *         @OA\XmlContent(ref="#/components/schemas/Profile"),
     *     ),
     *     @OA\Response(
     *         response=405,
     *         description="Invalid input"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     },     
     *     requestBody={"$ref": "#/components/requestBodies/Profile"}
     * )
     */

    /**
     * @OA\Put(
     *     path="/profiles/{id}",
     *     tags={"Profile"},
     *     summary="Update an existing Profile",
     *     operationId="updateProfile",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="Profile id to update",
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
     *         description="Profile not found"
     *     ),
     *     @OA\Response(
     *         response=405,
     *         description="Validation exception"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     },     
     *     requestBody={"$ref": "#/components/requestBodies/Profile"}
     * )
     */

    /**
     * @OA\Delete(
     *     path="/profiles/{id}",
     *     tags={"Profile"},
     *     summary="Deletes a Profile",
     *     operationId="deleteProfile",     
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="Profile id to delete",
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