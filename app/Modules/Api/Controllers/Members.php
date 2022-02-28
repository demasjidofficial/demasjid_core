<?php

namespace App\Modules\Api\Controllers;

use asligresik\easyapi\Controllers\BaseResourceController;
use RuntimeException;

class Members extends BaseResourceController
{
    protected $modelName = 'App\Modules\Api\Models\MemberModel';
    private $pathLogo;
    private $pathImage;
    private $imageFolder = 'images';
    /**
     * @OA\Get(
     *     path="/members",
     *     tags={"Member"},
     *     summary="Find list Member",
     *     description="Returns list of Member",
     *     operationId="getMember",
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
     *            @OA\Property(property="data",type="array",@OA\Items(ref="#/components/schemas/Member")),
     *            @OA\Property(property="pagination",type="object",@OA\Property(property="currentPage", type="integer"),@OA\Property(property="totalPage", type="integer")),
     *         ),
     *         @OA\XmlContent(type="object",
     *            @OA\Property(property="data",type="array",@OA\Items(ref="#/components/schemas/Member")),
     *            @OA\Property(property="pagination",type="array",@OA\Items(ref="#/components/schemas/Member")),
     *         ),
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Member not found"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     }
     * )
     */

    /**
     * @OA\Get(
     *     path="/members/{id}",
     *     tags={"Member"},
     *     summary="Find Member by ID",
     *     description="Returns a single Member",
     *     operationId="getMemberById",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="ID of Member to return",
     *         required=true,
     *         @OA\Schema(
     *             type="integer",
     *             format="int64"
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *         @OA\JsonContent(ref="#/components/schemas/Member"),
     *         @OA\XmlContent(ref="#/components/schemas/Member"),
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid ID supplier"
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Member not found"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     }
     * )
     */

    /**
     * @OA\Post(
     *     path="/members",
     *     tags={"Member"},
     *     summary="Add a new Member to the store",
     *     operationId="addMember",
     *     @OA\Response(
     *         response=201,
     *         description="Created Member",
     *         @OA\JsonContent(ref="#/components/schemas/Member"),
     *         @OA\XmlContent(ref="#/components/schemas/Member"),
     *     ),
     *     @OA\Response(
     *         response=405,
     *         description="Invalid input"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     },
     *     requestBody={"$ref": "#/components/requestBodies/Member"}
     * )
     */

    /**
     * @OA\Put(
     *     path="/members/{id}",
     *     tags={"Member"},
     *     summary="Update an existing Member",
     *     operationId="updateMember",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="Member id to update",
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
     *         description="Member not found"
     *     ),
     *     @OA\Response(
     *         response=405,
     *         description="Validation exception"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     },
     *     requestBody={"$ref": "#/components/requestBodies/Member"}
     * )
     */

    /**
     * @OA\Delete(
     *     path="/members/{id}",
     *     tags={"Member"},
     *     summary="Deletes a Member",
     *     operationId="deleteMember",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="Member id to delete",
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
    public function create()
    {        
        $wilayahId = $this->request->getPost('wilayah_id');
        $this->uploadLogo();
        $this->uploadImage();
        $this->model->set('path_logo', $this->getPathLogo());
        $this->model->set('path_image', $this->getPathImage());
        $this->model->set('code', $this->model->getCodeUnique($wilayahId));
        
        return parent::create();
    }

    private function uploadLogo(){
        $this->uploadFile('logo');
    }

    private function uploadImage(){
        $this->uploadFile('image');
    }

    private function uploadFile($name)
    {        
        $image = $this->request->getFile($name);
        
        if(empty($image)){
            throw new RuntimeException('file '.$name.' is required');
        }        

        if (! $image->isValid()) {
            throw new RuntimeException($image->getErrorString() . '(' . $image->getError() . ')');
        }
        $imageFolder = 'uploads/'.$this->imageFolder;        

        if ($image->isValid() && ! $image->hasMoved()) {
            $newName = $image->getRandomName();
            $image->move(ROOTPATH . 'public/'.$imageFolder, $newName);
            if($name == 'image'){
                $this->setPathImage($imageFolder.'/' . $image->getName());
            }else{
                $this->setPathLogo($imageFolder.'/' . $image->getName());
            }
            
        }
    }

    /**
     * Get the value of pathLogo
     */
    public function getPathLogo()
    {
        return $this->pathLogo;
    }

    /**
     * Set the value of pathLogo
     *
     * @param mixed $pathLogo
     *
     * @return self
     */
    public function setPathLogo($pathLogo)
    {
        $this->pathLogo = $pathLogo;

        return $this;
    }

    /**
     * Get the value of pathImage
     */
    public function getPathImage()
    {
        return $this->pathImage;
    }

    /**
     * Set the value of pathImage
     *
     * @param mixed $pathImage
     *
     * @return self
     */
    public function setPathImage($pathImage)
    {
        $this->pathImage = $pathImage;

        return $this;
    }    
}
