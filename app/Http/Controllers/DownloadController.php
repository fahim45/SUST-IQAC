<?php

namespace App\Http\Controllers;

use App\Download;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DownloadController extends Controller
{
    public function addFileForm(){
        return view('admin.download.add-file');
    }
    public function saveFileInfo(Request $request){
        $this->validate($request,[
            'file_name'=>'required',
            'file_type'=>'required',
            'uploaded_file'=>'required|unique:downloads,uploaded_file|mimes:xlsx,xls,doc,docx,ppt,pptx,txt,pdf',
            'publication_status'=>'required'
        ]);
        $fileUrl='';
        if ($request->hasFile('uploaded_file')){
            $file = $request->file('uploaded_file');
            $fileName = $file->getClientOriginalName();
            $directory = 'uploaded-files/';
            $fileUrl = $directory.$fileName;
            Storage::put($fileUrl, file_get_contents($file->getRealPath()));
        }
        $uploadedFiles = new Download();
        $uploadedFiles->file_name = $request->file_name;
        $uploadedFiles->file_type = $request->file_type;
        $uploadedFiles->uploaded_file = $fileUrl;
        $uploadedFiles->publication_status = $request->publication_status;
        $uploadedFiles->save();

        return redirect('download/add-file')->with('message', 'File Uploaded Successfully');

    }
    public function manageFileInfo(){
        $files = Download::orderBy('id', 'DESC')->get();
        return view('admin.download.manage-file',['files'=>$files]);
    }
    public function publishedFileInfo($id){
        $fileById = Download::find($id);
        $fileById->publication_status=1;
        $fileById->save();
        return redirect('/download/manage-file')->with('message','File Info Published Successfully.');
    }
    public function unpublishedFileInfo($id){
        $fileById = Download::find($id);
        $fileById->publication_status=0;
        $fileById->save();
        return redirect('/download/manage-file')->with('message','File Info Unpublished Successfully.');
    }
    public function editFileInfo($id){
        $fileById = Download::find($id);
        return view('admin.download.edit-file',[
            'file'=>$fileById
        ]);
    }
    public function updateFileInfo(Request $request){
        $this->validate($request,[
            'file_name'=>'required',
            'file_type'=>'required',
            'uploaded_file'=>'unique:downloads,uploaded_file|mimes:xlsx,xls,doc,docx,ppt,pptx,txt,pdf',
            'publication_status'=>'required'
        ]);
        $fileUrl = $this->fileExistStatus($request);
        $uploadedFiles = Download::find($request->file_id);
        $uploadedFiles->file_name = $request->file_name;
        $uploadedFiles->file_type = $request->file_type;
        $uploadedFiles->uploaded_file = $fileUrl;
        $uploadedFiles->publication_status = $request->publication_status;
        $uploadedFiles->save();

        return redirect('download/manage-file')->with('message', 'File Uploaded Successfully');
    }
    private function fileExistStatus($request){
        $uploadedFiles = Download::where('id', $request->file_id)->first();
        $fileExist = $request->hasFile('uploaded_file');
        if ($fileExist){
            @unlink($uploadedFiles->uploaded_file);

            $file = $request->file('uploaded_file');
            $fileName = $file->getClientOriginalName();
            $directory = 'uploaded-files/';
            $fileUrl = $directory.$fileName;
            Storage::put($fileUrl, file_get_contents($file->getRealPath()));
        } else{
            $fileUrl = $uploadedFiles->uploaded_file;
        }
        return $fileUrl;
    }
    public function deleteFileInfo($id){
        $fileById = Download::find($id);
        @unlink($fileById->uploaded_file);
        $fileById->delete();
        return redirect('/download/manage-file')->with('message','File Info Deleted Successfully.');
    }
}
