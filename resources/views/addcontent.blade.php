
@extends('FrontEnd.addconmaster')
 

<body>
	<div><br><br></div>

    <div class="d-flex justify-content-center align-items-center vh-100">
    	
    	<form class="shadow w-450 p-3" 
              action="add_content"
    	      method="POST"
			  enctype="multipart/form-data">
              
              @csrf
          <div class="mb-3">
		    <label class="form-label">Title</label>
		    <input type="text" 
		           class="form-control"
		           name="title"
                   placeholder="Enter Title"
				   required>
		           
		  </div>


		  <div class="mb-3">
		    <label class="form-label">Description</label>
		    <input type="text" 
		           class="form-control"
		           name="description"
				   placeholder="Enter Description"
				   required>
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
                <button type="submit" class="btn btn-primary" name="submit">Add Post</button>
				
          </div>
		  

        </form>
    </div>
	
</body>
</html>