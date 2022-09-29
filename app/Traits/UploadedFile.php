<?php

namespace App\Traits;
use RuntimeException;
trait UploadedFile {
    protected function uploadFile($name)
    {        
        $image = $this->request->getFile($name);
        
        if(empty($image)){
            throw new RuntimeException('file '.$name.' is required');
        }        

        if (! $image->isValid()) {
            throw new RuntimeException($image->getErrorString() . '(' . $image->getError() . ')');
        }
        $imageFolder = 'uploads/'.$this->imageFolder;        

        if ($image->isValid() && !$image->hasMoved()) {
            $newName = $image->getRandomName();
            $image->move(FCPATH.$imageFolder, $newName);

            return $imageFolder.'/'.$image->getName();
        }        
        return false;
    }
    protected function uploadTtd($name)
    {        
        $image = $this->request->getPost($name);
        $image = str_replace('data:image/png;base64,','', $image);
		$image = base64_decode($image);
        $imageFolder = 'signature/'.$this->ttdFolder;        

        $newName = 'image_'.time().'.png';
        file_put_contents(FCPATH.'/signature/'.$newName,$image);

        return $imageFolder.'/'.$newName;
    }
    protected function uploadCamera($name)
    {
        # code...
        $image = $this->request->getPost($name);
        $image = str_replace('data:image/jpeg;base64,','', $image);
		$image = base64_decode($image);
        $imageFolder = 'uploads/'.$this->imageFolder;        

        $newName = 'image_'.time().'.jpg';
        file_put_contents(FCPATH.'/uploads/'.$newName,$image);

        return $imageFolder.'/'.$newName;

		
        

    }
}