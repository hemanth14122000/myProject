@extends('FrontEnd.master')
 
@section('title', 'Page Title')
<body>
<div >
		<button class="btn btn-warning"><a href="user_list" class="text-light">back</a>
		</button>
	</div>
    <div align="right" class="container">
		<button class="btn btn-danger"><a href="a_logout" class="text-light">Logout</a>
		</button>
	</div>
    <div class="d-flex justify-content-center align-items-center vh-100">
    	
    	<form class="shadow w-450 p-3"
              action ="signup"
    	      method="POST"
			  enctype="multipart/form-data">
              @csrf
          <div class="mb-3">
		    <label class="form-label">User Name</label>
		    <input type="text" 
		           class="form-control"
		           name="name"
                   placeholder="Enter your Name"
				   required>
		  </div>
          <div class="mb-3">
		    <label class="form-label">Email</label>
		    <input type="email" 
		           class="form-control"
		           name="email"
				   placeholder="Enter your email_id"
				   required>
          </div>    
		  <div class="mb-3">
		    <label class="form-label">Password</label>
		    <input type="password" 
		           class="form-control"
		           name="password"
				   placeholder="Enter your password"
				   required>
          </div> 
          <div class="mb-3">
		    <label class="form-label">Confirm Password</label>
		    <input type="password" 
		           class="form-control"
		           name="c_password"
				   placeholder="confirm your password"
				   required>
          </div>               

          <br></br>
          <div align ="center" class="container">
                <button type="submit" class="btn btn-primary" name="submit">Add User</button>
          </div>
          
        </form>
    </div>
</body>
</html>