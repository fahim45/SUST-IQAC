<?php

namespace App\Http\Controllers;

use App\Gallery;
use Image;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function addGalleryFileForm(){
        return view('admin.gallery.add-gallery-file');
    }

    public function saveGalleryFileInfo(Request $request){
        $this->validate($request,[
            'image_title'=>'required',
            'image_type'=>'required',
            'uploaded_image'=>'required|image',
            'publication_status'=>'required'
        ]);
        $galleryImage = $request->file('uploaded_image');
        $imageExtension = $galleryImage->getClientOriginalExtension();
        $imageName = time().'.'.$imageExtension;
        $directory = 'gallery-images/';
        $imageUrl = $directory.$imageName;
        Image::make($galleryImage)->resize(1280, 1024)->save($imageUrl);

        $galleries = new Gallery();
        $galleries->image_title = $request->image_title;
        $galleries->image_type = $request->image_type;
        $galleries->uploaded_image = $imageUrl;
        $galleries->publication_status = $request->publication_status;
        $galleries->save();

        return redirect('/gallery/add-gallery-file')->with('message', 'Gallery Image Added Successfully');
    }
    public function manageGalleryFileInfo(){
        $images = Gallery::orderBy('id', 'DESC')->get();
        return view('admin.gallery.manage-gallery-file',['images'=>$images]);
    }
    public function publishedGalleryFileInfo($id){
        $galleryById = Gallery::find($id);
        $galleryById->publication_status=1;
        $galleryById->save();
        return redirect('/gallery/manage-gallery-file')->with('message','Image Info Published Successfully.');
    }
    public function unpublishedGalleryFileInfo($id){
        $galleryById = Gallery::find($id);
        $galleryById->publication_status=0;
        $galleryById->save();
        return redirect('/gallery/manage-gallery-file')->with('message','Image Info Unpublished Successfully.');
    }
    public function editGalleryFileInfo($id){
        $galleryById = Gallery::find($id);
        return view('admin.gallery.edit-gallery-file',['galleryById'=>$galleryById]);
    }
    public function updateGalleryFileInfo(Request $request){
        $this->validate($request,[
            'image_title'=>'required',
            'image_type'=>'required',
            'uploaded_image'=>'image',
            'publication_status'=>'required'
        ]);

        $imageUrl = $this->imageExistStatus($request);

        $galleries= Gallery::find($request->image_id);
        $galleries->image_title = $request->image_title;
        $galleries->image_type = $request->image_type;
        $galleries->uploaded_image = $imageUrl;
        $galleries->publication_status = $request->publication_status;
        $galleries->save();

        return redirect('/gallery/manage-gallery-file')->with('message', 'Gallery Image Updated Successfully');

    }
    private function imageExistStatus($request){
        $gallery = Gallery::where('id', $request->image_id)->first();
        $galleryImage = $request->file('uploaded_image');
        if ($galleryImage){
            @unlink($gallery->uploaded_image);

            $imageExtension = $galleryImage->getClientOriginalExtension();
            $imageName = time().'.'.$imageExtension;
            $directory= 'gallery-images/';
            $imageUrl= $directory.$imageName;
            Image::make($galleryImage)->resize(1280, 1024)->save($imageUrl);

        } else {
            $imageUrl = $gallery->uploaded_image;
        }
        return $imageUrl;

    }
    public function deleteGalleryFileInfo($id){
        $galleryById = Gallery::find($id);
        @unlink($galleryById->uploaded_image);
        $galleryById->delete();
        return redirect('/gallery/manage-gallery-file')->with('message', 'Gallery Image Deleted Successfully.');
    }
}
