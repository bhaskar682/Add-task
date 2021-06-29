<!DOCTYPE html>
<html>
<head>
	<title>Task</title>
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" /> 
 
   

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

 <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.js">
</script>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
	
	

<form id="form" action="" method="post">
    <div class="input-group">
    <div class="container">
        <label for="c-form-profession">
            <span class="label-text">Project name:</span> 
            
        </label>
        <select name="project" class="c-form-profession form-control" id="project">
            <option value="Your project...">Your project...</option>
            <option value="CI">CI</option>
            <option value="Angular">Angular</option>
            <option value="Laravel">Laravel</option>
        </select>
        <div class="container">
    <div class="row clearfix">
		<div class="col-md-12 column">
			<table class="table table-bordered table-hover" id="tab_logic">
				<thead>
					<tr >
						<th class="text-center">
							#
						</th>
						<th class="text-center" style="background-color:yellowgreen;color:white;">
							Task completed
						</th>
					</tr>
				</thead>
				<tbody>
					<tr id='addr0'>
						
					</tr>
                    <tr id='addr1'>
                    	
                    </tr>
				</tbody>
			</table>

		</div>
	</div>
	<a id='add_row' class="pull-left btn btn-warning">Add Row</a>
	
</div>
        <div class="container">
    <div class="row clearfix">
		<div class="col-md-12 column">
			<table class="table table-bordered table-hover" id="tab_logi">
				<thead>
					<tr >
						<th class="text-center">
							#
						</th>
						<th class="text-center" style="background-color:red;color:white;">
							Task incompleted
						</th>
					</tr>
				</thead>
				<tbody>
					<tr id='sub0'>

						
					</tr>
                    <tr id='sub1'>
                    	
                    </tr>
				</tbody>
			</table>

		</div>
	</div>
	<a id='add_ro' class="pull-left btn btn-warning">Add Row</a>
	
</div>

	
    
</form>
 <p id="getpreviewbutton" class="btn btn-primary">Get Preview</p>
<!-- 
<button type="submit" id="btn-add" class="btn btn-primary">Submit</button> -->

<div class="container">
     <table class="table table-striped">
    <thead>
      <tr>
        
         <th>
           Project
         </th>
        <th>Completed task</th>
        <th>Incompleted task</th>
        
       </tr>
    </thead>
    
    <tbody id="tbl_data">
    </tbody>
  </table>

   </div>
  
</body>
<script type="text/javascript">
	 $(document).ready(function(){
      var i=0;
      var s=0;
     $("#add_row").click(function(){
      $('#addr'+i).html("<td>"+ (i+1) +"</td><td><input name='taskcompleted[]' id='taskcompleted"+(i+1)+"' type='text' placeholder='Completed task' class='form-control input-md'  /> </td>");

      $('#tab_logic').append('<tr id="addr'+(i+1)+'"></tr>');
      i++; 
  });
  $("#add_ro").click(function(){
      $('#sub'+s).html("<td>"+ (s+1) +"</td><td><input name='taskincompleted[]' id='taskincompleted"+(s+1)+"' type='text' placeholder='Incompleted task' class='form-control input-md'  /> </td>");

      $('#tab_logi').append('<tr id="sub'+(s+1)+'"></tr>');
      s++; 
  });
$('#getpreviewbutton').click(function(){
   var selected = $('.project');
   
	var length = $('input[name="taskcompleted[]"]').length;
	 var length1= $('input[name="taskincompleted[]"]').length;
  var taski= [];
	var taskc = [];
	var taskp =[];
	
	for(var k=0 ; k<length;k++){
		// console.log(($('input[name="taskcompleted[]"]')[k]));

		taskc.push($($('input[name="taskcompleted[]"]')[k]).val());
			}
 
 
  for (var i=0; i<length1; i++){
  	
  	taski.push($($('input[name="taskincompleted[]"]')[i]).val());
  }

taskp.push ($('#project :selected'). text());
 var html = `<tr><td>${taskp}</td><td>${taskc.toString()}</td><td>${taski.toString()}</td></tr>`;
   $('#tbl_data').html(html);
});

  
  });

 

 //  }

</script>
</html>