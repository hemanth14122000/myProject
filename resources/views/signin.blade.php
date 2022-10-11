@extends('FrontEnd.master')
 
@section('title', 'Admin Login')
<body>
    
	<div align="left"class="container">
		<button class="btn btn-warning"><a href="welcome" class="text-light">back</a>
		</button>
	</div>
    <div class="d-flex justify-content-center align-items-center vh-100">
    	
    	<form action="signin" class="shadow w-450 p-3"  
    	      method="POST"
			  enctype="multipart/form-data">
              @csrf

          <div class="mb-3">
		    <label class="form-label">Email-ID</label>
		    <input type="text" 
		           class="form-control"
		           name="email"
                   placeholder="Enter your email-id"
                   required>
		           
		  </div>
          <div class="mb-3">
		    <label class="form-label">Password</label>
		    <input type="password" 
		           class="form-control"
		           name="password"
				   placeholder="Enter Password">
		  </div>
          <button type="submit" onclick="test();" class="btn btn-success" name="submit">sign-in</button>

          </form>
      </div>
  </body>
  </html>