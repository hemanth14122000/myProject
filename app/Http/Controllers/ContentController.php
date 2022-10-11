<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Content;
use DB;

class ContentController extends Controller
{
    public function store(Request $request)
    {
        $requestData = $request->all();
        $file=$request->file('images');
        $fileName = time().$request->file('images')->getClientOriginalName();
        $file->move('storage/photos/',$fileName);
        //$path = $request->file('images')->storeAs( $fileName, 'public');
        $requestData["images"] = $fileName; 
        Content::create($requestData);
        return redirect('content')->with('flash_message', 'Post Added!');
         
    }

    
    public function show(){
        
        $content= Content::all();
        return view('content',['contentall'=>$content]);
    }
    public function showonly(){
        $postalone= Content::all();
        return view('read_more',['postonly'=>$postalone]);
    }
    public function delete($id){
        DB::delete("delete from contents where id=?",[$id]);
        return redirect('content');
    }
    public function editData($id){

       // $content= Content::all();
       // return view('editcontent',['contentall'=>$content]);
        $content= Content::find($id);
        return view('editcontent',['content'=>$content]);
    }
    
    function update(Request $req){
        $reqdata= Content::find($req->content_id);
        $file=$req->file('images');

        $fileName = time().$req->file('images')->getClientOriginalName();
       
        $file->move('storage/photos/',$fileName);
        $reqdata["images"] = $fileName;
        $reqdata->title=$req->title;
        $reqdata->description=$req->description;
        $reqdata->save();
        return redirect('content');
    }
	

}
