<?php

namespace App\Traits;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

trait FileUploadTrait
{

public function uploadFile(Request $request, $fieldName, $storagePath)
{
    if ($request->hasFile($fieldName)) {
        $uploadedFile = $request->file($fieldName);
        $storedFileName = time() . '_' . $uploadedFile->getClientOriginalName();
    
        // Use the storeAs method to save the file with a custom name
        $imagePath = $uploadedFile->storeAs(
            $storagePath,
            $storedFileName,
            ['disk' => 'public']
        );
    } else {
        $imagePath = null;
    }
    
    return $imagePath;
}

public function uploadImage($request, $fieldName, $storagePath)
{
    if ($request) {
        $uploadedFile = $request["$fieldName"];
        $storedFileName = time() . '_' . $uploadedFile->getClientOriginalName();
    
        // Use the storeAs method to save the file with a custom name
        $imagePath = $uploadedFile->storeAs(
            $storagePath,
            $storedFileName,
            ['disk' => 'public']
        );
    } else {
        $imagePath = null;
    }
    
    return $imagePath;
}

}
