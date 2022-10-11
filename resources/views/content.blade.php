<?php
    $permissionforadmin=session('isadmin');
    //echo $permissionforadmin;     
?>


@extends('FrontEnd.egmaster')
<head>
<style>
.firstDiv {
  width: 100%;
  height: 260px;
  border: 5px outset;
  background-color: lightblue;
  
}
.titleDiv {
  width: 300px;
  height: 60px;
  position : relative;
  left:16%;
  text-align: center;
  border: 5px inset;
  background-color: white;
}
.descriptionDiv {
    width: 500px;
    height: 130px;
    position : relative;
    left:16%;
    text-align: center;
    border: 5px inset;
    background-color: white;
    padding: 20px;
    overflow: auto;

}
.secdescriptionDiv {
  width: 500px;
  height: 65px;
  position : relative;
  left:16%;
  text-align: center;
  overflow: scroll;
  border: 5px inset;
  background-color: white;
}
.buttonDiv {
  width: 200px;
  height: 60px;
  position : absolute;
  right:5%;
  text-align: center;
  border: 5px inset;
  background-color: white;
}
.secondDiv {
    width: 200px;
    height: 190px;
    position : absolute;
    left:0%;
    text-align: center;
    border: 5px inset;
    background-color: white;
}
</style>
</head>
<body>
<script>
   function WordCounter (str) 
   {
	    var words = str.split(" ").length;
	    return words;
   }
</script>
    
	<button class="btn btn-warning"><a href="user_dashboard" class="text-light">back</a>
	</button>
	
    <div><br><br><br><br></div>
        @foreach($contentall as $members)
                    
                    <div class="firstDiv">
                        <div class="secondDiv">
                            <img src="storage/photos/{{$members['images']}}" width="100px" height="100px" alt="post image">
                        </div>
                        <div>
                            <div class="titleDiv">
                                <h6 style="text-align:left">Title:</h6>
                                {{$members['title']}}
                            </div>
                            
                            <div class="descriptionDiv">
                                <h6 style="text-align:left">Description:</h6>
                                {{$members['description']}}
                            </div>
                            
                              @if($permissionforadmin == 1)
                                <div class="buttonDiv">
                                    <a href="{{"editcontent/".$members['id']}}"">Edit_Content</a>
                                    <br>
                                    <a onclick="return confirm('Sure Want Delete?')" href="{{"delete/".$members['id']}}">delete</a>  
                                </div>
                              @endif
                            
                        </div>
                       
                    </div>
        @endforeach
	



</body>
</html>