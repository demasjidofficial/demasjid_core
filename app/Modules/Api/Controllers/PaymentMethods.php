<?php namespace App\Modules\Api\Controllers;
 
use asligresik\easyapi\Controllers\BaseResourceController;
class PaymentMethods extends BaseResourceController
{
    protected $modelName = 'App\Modules\Api\Models\PaymentMethodModel';  

     /**
     * @OA\Get(
     *     path="/paymentMethods",
     *     tags={"PaymentMethod"},
     *     summary="Find list PaymentMethod",
     *     description="Returns list of PaymentMethod",
     *     operationId="getPaymentMethod",  
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
     *            @OA\Property(property="data",type="array",@OA\Items(ref="#/components/schemas/PaymentMethod")),
     *            @OA\Property(property="pagination",type="object",@OA\Property(property="currentPage", type="integer"),@OA\Property(property="totalPage", type="integer")),
     *         ),
     *         @OA\XmlContent(type="object",
     *            @OA\Property(property="data",type="array",@OA\Items(ref="#/components/schemas/PaymentMethod")),
     *            @OA\Property(property="pagination",type="array",@OA\Items(ref="#/components/schemas/PaymentMethod")),
     *         ),           
     *     ),     
     *     @OA\Response(
     *         response=404,
     *         description="PaymentMethod not found"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     }
     * )
     *     
     */

    /**
     * @OA\Get(
     *     path="/paymentMethods/{id}",
     *     tags={"PaymentMethod"},
     *     summary="Find PaymentMethod by ID",
     *     description="Returns a single PaymentMethod",
     *     operationId="getPaymentMethodById",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="ID of PaymentMethod to return",
     *         required=true,
     *         @OA\Schema(
     *             type="integer",
     *             format="int64"
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *         @OA\JsonContent(ref="#/components/schemas/PaymentMethod"),
     *         @OA\XmlContent(ref="#/components/schemas/PaymentMethod"),
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid ID supplier"
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="PaymentMethod not found"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     }
     * )
     *     
     */

    /**
     * @OA\Post(
     *     path="/paymentMethods",
     *     tags={"PaymentMethod"},
     *     summary="Add a new PaymentMethod to the store",
     *     operationId="addPaymentMethod",
     *     @OA\Response(
     *         response=201,
     *         description="Created PaymentMethod",
     *         @OA\JsonContent(ref="#/components/schemas/PaymentMethod"),
     *         @OA\XmlContent(ref="#/components/schemas/PaymentMethod"),
     *     ),
     *     @OA\Response(
     *         response=405,
     *         description="Invalid input"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     },     
     *     requestBody={"$ref": "#/components/requestBodies/PaymentMethod"}
     * )
     */

    /**
     * @OA\Put(
     *     path="/paymentMethods/{id}",
     *     tags={"PaymentMethod"},
     *     summary="Update an existing PaymentMethod",
     *     operationId="updatePaymentMethod",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="PaymentMethod id to update",
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
     *         description="PaymentMethod not found"
     *     ),
     *     @OA\Response(
     *         response=405,
     *         description="Validation exception"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     },     
     *     requestBody={"$ref": "#/components/requestBodies/PaymentMethod"}
     * )
     */

    /**
     * @OA\Delete(
     *     path="/paymentMethods/{id}",
     *     tags={"PaymentMethod"},
     *     summary="Deletes a PaymentMethod",
     *     operationId="deletePaymentMethod",     
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="PaymentMethod id to delete",
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

    public function updateActived()
    {      
        $id = $this->request->getPost('id');
        return parent::update($id);
    }
} 