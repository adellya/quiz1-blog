// $file = $request->file('photo');

// $ogImage = Image::make($file);
// $originalPath = 'public/uploads/';
// $ogImage = $ogImage->save($originalPath . time() . $file->getClientOriginalName());
 
// // store resized image
// $thumbnailPath = 'public/uploads/';
// $ogImage->fit(600, 360);
// $thImage = $ogImage->save($thumbnailPath . time() . $file->getClientOriginalName());




$save = new Photo;

$save->original_img = $ogImage;
$save->thumb_img = $thImage;

$save->save();

return redirect()->route('photos.index')->with('status', 'Image Has been uploaded successfully with validation in laravel');
