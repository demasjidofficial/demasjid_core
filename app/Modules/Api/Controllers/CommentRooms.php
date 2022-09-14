<?php namespace App\Modules\Api\Controllers;
 
use asligresik\easyapi\Controllers\BaseResourceController;
class CommentRooms extends BaseResourceController
{
    protected $modelName = 'App\Modules\Api\Models\CommentRoomModel';  

     /**
     * @OA\Get(
     *     path="/commentRooms",
     *     tags={"CommentRoom"},
     *     summary="Find list CommentRoom",
     *     description="Returns list of CommentRoom",
     *     operationId="getCommentRoom",  
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
     *            @OA\Property(property="data",type="array",@OA\Items(ref="#/components/schemas/CommentRoom")),
     *            @OA\Property(property="pagination",type="object",@OA\Property(property="currentPage", type="integer"),@OA\Property(property="totalPage", type="integer")),
     *         ),
     *         @OA\XmlContent(type="object",
     *            @OA\Property(property="data",type="array",@OA\Items(ref="#/components/schemas/CommentRoom")),
     *            @OA\Property(property="pagination",type="array",@OA\Items(ref="#/components/schemas/CommentRoom")),
     *         ),           
     *     ),     
     *     @OA\Response(
     *         response=404,
     *         description="CommentRoom not found"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     }
     * )
     *     
     */

    /**
     * @OA\Get(
     *     path="/commentRooms/{id}",
     *     tags={"CommentRoom"},
     *     summary="Find CommentRoom by ID",
     *     description="Returns a single CommentRoom",
     *     operationId="getCommentRoomById",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="ID of CommentRoom to return",
     *         required=true,
     *         @OA\Schema(
     *             type="integer",
     *             format="int64"
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *         @OA\JsonContent(ref="#/components/schemas/CommentRoom"),
     *         @OA\XmlContent(ref="#/components/schemas/CommentRoom"),
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid ID supplier"
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="CommentRoom not found"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     }
     * )
     *     
     */

    /**
     * @OA\Post(
     *     path="/commentRooms",
     *     tags={"CommentRoom"},
     *     summary="Add a new CommentRoom to the store",
     *     operationId="addCommentRoom",
     *     @OA\Response(
     *         response=201,
     *         description="Created CommentRoom",
     *         @OA\JsonContent(ref="#/components/schemas/CommentRoom"),
     *         @OA\XmlContent(ref="#/components/schemas/CommentRoom"),
     *     ),
     *     @OA\Response(
     *         response=405,
     *         description="Invalid input"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     },     
     *     requestBody={"$ref": "#/components/requestBodies/CommentRoom"}
     * )
     */

    /**
     * @OA\Put(
     *     path="/commentRooms/{id}",
     *     tags={"CommentRoom"},
     *     summary="Update an existing CommentRoom",
     *     operationId="updateCommentRoom",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="CommentRoom id to update",
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
     *         description="CommentRoom not found"
     *     ),
     *     @OA\Response(
     *         response=405,
     *         description="Validation exception"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     },     
     *     requestBody={"$ref": "#/components/requestBodies/CommentRoom"}
     * )
     */

    /**
     * @OA\Delete(
     *     path="/commentRooms/{id}",
     *     tags={"CommentRoom"},
     *     summary="Deletes a CommentRoom",
     *     operationId="deleteCommentRoom",     
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="CommentRoom id to delete",
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