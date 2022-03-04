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
}