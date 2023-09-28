<?php
// app/Helpers/ImageHelper.php

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Str;

function uploadImage(UploadedFile $file, $path, $disk = 'public')
{
    // Validate file type
    $allowedTypes = ['jpeg', 'jpg', 'png', 'gif'];
    $extension = $file->getClientOriginalExtension();

    if (!in_array($extension, $allowedTypes)) {
        throw new \Exception("Invalid file type. Allowed types: " . implode(', ', $allowedTypes));
    }

    // Validate file size (adjust this as needed)
    $maxSize = 1024 * 1024 * 5; // 5MB
    if ($file->getSize() > $maxSize) {
        throw new \Exception("File size exceeds the maximum allowed size.");
    }

    // Generate a unique filename
    $filename = Str::random(25) . '.' . $extension;

    // Store the file
    $filePath = $file->storeAs($path, $filename, $disk);

    // Return the path to the stored file
    return $filePath;
}