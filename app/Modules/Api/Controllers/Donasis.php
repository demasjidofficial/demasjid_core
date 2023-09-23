<?php

namespace App\Modules\Api\Controllers;

use asligresik\easyapi\Controllers\BaseResourceController;
use App\Traits\UploadedFile;

class Donasis extends BaseResourceController
{
    use UploadedFile;
    public const INFO_SUCCESS = 'SUKSES KONFIRMASI';
    public const INFO_INVALID_SYSTEM = 'INVALID SYSTEM';
    public const INFO_INVALID_PICTURE = 'GAMBAR Invalid';
    public const INFO_INVALID_NO_INV = 'NO INVOICE Invalid';

    protected $modelName = 'App\Modules\Api\Models\DonasiModel';
    private $pathImage;
    private $imageFolder = 'images';

    /**
    * @OA\Get(
    *     path="/donasis",
    *     tags={"Donasi"},
    *     summary="Find list Donasi",
    *     description="Returns list of Donasi",
    *     operationId="getDonasi",
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
    *            @OA\Property(property="data",type="array",@OA\Items(ref="#/components/schemas/Donasi")),
    *            @OA\Property(property="pagination",type="object",@OA\Property(property="currentPage", type="integer"),@OA\Property(property="totalPage", type="integer")),
    *         ),
    *         @OA\XmlContent(type="object",
    *            @OA\Property(property="data",type="array",@OA\Items(ref="#/components/schemas/Donasi")),
    *            @OA\Property(property="pagination",type="array",@OA\Items(ref="#/components/schemas/Donasi")),
    *         ),
    *     ),
    *     @OA\Response(
    *         response=404,
    *         description="Donasi not found"
    *     ),
    *     security={
    *         {"bearer_auth": {}}
    *     }
    * )
    *
    */

    /**
     * @OA\Get(
     *     path="/donasis/{id}",
     *     tags={"Donasi"},
     *     summary="Find Donasi by ID",
     *     description="Returns a single Donasi",
     *     operationId="getDonasiById",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="ID of Donasi to return",
     *         required=true,
     *         @OA\Schema(
     *             type="integer",
     *             format="int64"
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *         @OA\JsonContent(ref="#/components/schemas/Donasi"),
     *         @OA\XmlContent(ref="#/components/schemas/Donasi"),
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid ID supplier"
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Donasi not found"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     }
     * )
     *
     */

    /**
     * @OA\Post(
     *     path="/donasis",
     *     tags={"Donasi"},
     *     summary="Add a new Donasi to the store",
     *     operationId="addDonasi",
     *     @OA\Response(
     *         response=201,
     *         description="Created Donasi",
     *         @OA\JsonContent(ref="#/components/schemas/Donasi"),
     *         @OA\XmlContent(ref="#/components/schemas/Donasi"),
     *     ),
     *     @OA\Response(
     *         response=405,
     *         description="Invalid input"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     },
     *     requestBody={"$ref": "#/components/requestBodies/Donasi"}
     * )
     */

    /**
     * @OA\Put(
     *     path="/donasis/{id}",
     *     tags={"Donasi"},
     *     summary="Update an existing Donasi",
     *     operationId="updateDonasi",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="Donasi id to update",
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
     *         description="Donasi not found"
     *     ),
     *     @OA\Response(
     *         response=405,
     *         description="Validation exception"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     },
     *     requestBody={"$ref": "#/components/requestBodies/Donasi"}
     * )
     */

    /**
     * @OA\Delete(
     *     path="/donasis/{id}",
     *     tags={"Donasi"},
     *     summary="Deletes a Donasi",
     *     operationId="deleteDonasi",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="Donasi id to delete",
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

    public function getDonation($id = null)
    {
        if (isset($id)) {
            $data = $this->model->findById($id);
            if(isset($data)) {
                return $this->respond($data, 200, 'data updated');
            } else {
                return json_encode([
                    'state' => false,
                    'error' => $this->model->errors()
                ]);
            }

        }
        return json_encode([
            'state' => false,
            'error' => 'id is not correctly'
        ]);
    }

    public function insertConfirmation()
    {
        $no_inv = $this->request->getPost('no_inv');
        $data = $this->model->where('no_inv', $no_inv)->find();

        if (isset($data) && count($data)) {
            $image = $this->request->getFile('image');

            if (!empty($image)) {
                if ($image->getSize() > 0) {
                    $uploaded = $this->uploadFile('image');

                    $update_donation = $this->updated($this, [
                        'id' => $data[0]->id,
                        'path_image' => $uploaded,
                        // State to confirm = 2
                        'state' => 2
                    ]);

                    if($update_donation['state']) {
                        return redirect()->back()->with('success', self::INFO_SUCCESS);
                    }
                    return redirect()->back()->with('error', self::INFO_INVALID_SYSTEM);
                }
                return redirect()->back()->with('error', self::INFO_INVALID_PICTURE);
            }
        }
        return redirect()->back()->with('error', self::INFO_INVALID_NO_INV);
    }


    public function insertDonation()
    {
        $data = $this->request->getPost();
        $seq = $this->model->where('date', $data['date'])->countAllResults();
        $no_inv = 'INV'.str_replace('-', '', substr($data['date'], 2)).str_pad($seq + 1, 3, '0', STR_PAD_LEFT);

        $data['no_inv'] = $no_inv;

        if (! $this->model->insert($data)) {
            return json_encode([
                'state' => false,
                'error' => $this->model->errors()
            ]);
        }
        $this->writeLog();
        return json_encode([
            'state' => true,
            'data' => $data,
            'id' => $this->model->insertID()
        ]);
    }

    public function updateState()
    {
        $id = $this->request->getPost('id');
        $state = $this->request->getPost('state');
        $campaign_id = $this->request->getPost('campaign_id');
        $dana_in = $this->request->getPost('dana_in');

        // update Bmdonationcampaign campaign_collected
        $campaignModel = model('App\Modules\Api\Models\BmdonationcampaignModel', false);
        $campaign = $campaignModel->find($campaign_id);
        $campaign_collected = ($state == 1) ? ((float)$campaign->campaign_collected + (float)$dana_in) : max(((float)$campaign->campaign_collected - (float)$dana_in), 0);
        $donation_count = ($state == 1) ? ((int)$campaign->donation_count + 1) : max(((float)$campaign->donation_count - 1), 0);

        if ($campaignModel->update($campaign_id, [
            'campaign_collected' => $campaign_collected,
            'donation_count' => $donation_count
        ])) {
            // update donasi_state
            $update_donation = $this->updated($this, [
                'id' => $id,
                'state' => (int)$state,
                'campaign_collected' => $campaign_collected,
                'donation_count' => $donation_count
            ]);

            if($update_donation['state']) {
                return $this->respond($update_donation['data'], 200, 'data updated');
            } else {
                $this->fail($update_donation['data']);
            }

        } else {
            $this->fail(false);
        }
    }

    private function updated($_this, $data)
    {
        if (!$_this->model->save($data)) {
            return [
                "state" => false,
                "data" => $_this->model->errors()
            ];
        }
        $_this->writeLog();
        return [
            "state" => true,
            "data" => $data
        ];
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
