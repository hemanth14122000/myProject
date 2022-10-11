@extends('layout.default')
@section('content')
<div><br><br><br><br></div>
<div class="d-flex justify-content-center align-items-center vh-100">
         
         <form class="shadow w-450 p-3" 
               action="/editcontent"
               method="post"
               enctype="multipart/form-data">
               
               @csrf
               <input type="hidden" name="content_id" value="{{$content['id']}}">
           <div class="mb-3">
             <label class="form-label">Title</label>
             <input type="text" 
                    class="form-control"
                    name="title"
                    value="{{$content['title']}}"
                    placeholder="Enter Title"
                    required>
                    
           </div>
 
 
           <div class="mb-3">
             <label class="form-label">Description</label>
             <input type="text" 
                    class="form-control"
                    name="description"
                    value="{{$content['description']}}"
                    placeholder="Enter Description"
                    required>
           </div>  
           <div>
				<img src="../storage/photos/{{$content['images']}}" width="100px" height="100px" alt="post image">
			</div>
           
           <div class="mb-3">
             <label class="form-label">Image-1</label>
             <input type="file" 
                    class="form-control"
                    name="images"
                    id="images"
                    accept=".jpg,.jpeg,.png,.JPEG,.JPG"
                    >
 `         </div>
                 
           <br></br>
 
           <div align ="center" class="container">
                 <button type="submit" class="btn btn-primary" name="submit">EditContent</button>
                 
           </div>
           
 
         </form>
     </div>



@stop
