<?php $db= new mysqli('localhost','root','','se'); ?>
<html>
   <head></head>
   <body>
    


   	<div align="center">
          
 
   	<div>
   	<div style="float: left;margin-left: 212px;">
    <script type="text/javascript">
    
</script>
<!-- right side 160 ads -->
<script type="text/javascript"
src="//pagead2.googlesyndication.com/pagead/show_ads.js">
</script>

   	</div>
    <div class="login">
	 <div class="container">
			
		
		
		<div  class="CSSTableGenerator" >
		<table width="100%">
		    <tr>
		        <td>ID</td>
		        <td>FNAME</td>
				<td>LNAME</td>
				<td>TYPE OF USER</td>
		        <td>EMAIL</td>
		        <td>ACTION</td>
		    </tr>
		    <?php $sql=$db->query("Select * from registration");
            foreach ($sql as $key => $user) :
            	?>
		    <tr>
		        <td><?php echo $user['id'] ?></td>
		        <td><?php echo $user['Fname']; ?></td>
				 <td><?php echo $user['Lname']; ?></td>
				  <td><?php echo $user['type']; ?></td>
		        <td><?php echo $user['Email']; ?></td>
		        <td><i data="<?php echo $user['id'];?>" class="status_checks btn <?php echo ($user['status'])? 'btn-success' : 'btn-danger'?>"><?php echo ($user['status'])? 'Active' : 'Inactive'?></i></td>
		    </tr>
            
            
		   <?php endforeach; ?>
		</table>
         
<script type="text/javascript"
src="//pagead2.googlesyndication.com/pagead/show_ads.js">
</script>

   	</div>
	</div>
   </body>
 
</html>

<style type="text/css">
.CSSTableGenerator {
	margin:0px;padding:0px;
	width:auto;
	
	border:1px solid #000000;
	
	-moz-border-radius-bottomleft:0px;
	-webkit-border-bottom-left-radius:0px;
	border-bottom-left-radius:0px;
	
	-moz-border-radius-bottomright:0px;
	-webkit-border-bottom-right-radius:0px;
	border-bottom-right-radius:0px;
	
	-moz-border-radius-topright:0px;
	-webkit-border-top-right-radius:0px;
	border-top-right-radius:0px;
	
	-moz-border-radius-topleft:0px;
	-webkit-border-top-left-radius:0px;
	border-top-left-radius:0px;
}.CSSTableGenerator table{
    border-collapse: collapse;
        border-spacing: 0;
	width:100%;
	height:70%;
	margin:0px;padding:0px;
}.CSSTableGenerator tr:last-child td:last-child {
	-moz-border-radius-bottomright:0px;
	-webkit-border-bottom-right-radius:0px;
	border-bottom-right-radius:0px;
}
.CSSTableGenerator table tr:first-child td:first-child {
	-moz-border-radius-topleft:0px;
	-webkit-border-top-left-radius:0px;
	border-top-left-radius:0px;
}
.CSSTableGenerator table tr:first-child td:last-child {
	-moz-border-radius-topright:0px;
	-webkit-border-top-right-radius:0px;
	border-top-right-radius:0px;
}.CSSTableGenerator tr:last-child td:first-child{
	-moz-border-radius-bottomleft:0px;
	-webkit-border-bottom-left-radius:0px;
	border-bottom-left-radius:0px;
}.CSSTableGenerator tr:hover td{
	
}
.CSSTableGenerator tr:nth-child(odd){ background-color:#aad4ff; }
.CSSTableGenerator tr:nth-child(even)    { background-color:#ffffff; }.CSSTableGenerator td{
	vertical-align:middle;
	
	
	border:1px solid #000000;
	border-width:0px 1px 1px 0px;
	text-align:left;
	padding:7px;
	font-size:15px;
	font-family:Arial;
	font-weight:normal;
	color:#000000;
}.CSSTableGenerator tr:last-child td{
	border-width:0px 1px 0px 0px;
}.CSSTableGenerator tr td:last-child{
	border-width:0px 0px 1px 0px;
}.CSSTableGenerator tr:last-child td:last-child{
	border-width:0px 0px 0px 0px;
}
.CSSTableGenerator tr:first-child td{
		background:-o-linear-gradient(bottom, #005fbf 5%, #003f7f 100%);	background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #005fbf), color-stop(1, #003f7f) );
	background:-moz-linear-gradient( center top, #005fbf 5%, #003f7f 100% );
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr="#005fbf", endColorstr="#003f7f");	background: -o-linear-gradient(top,#005fbf,003f7f);

	background-color:#005fbf;
	border:0px solid #000000;
	text-align:center;
	border-width:0px 0px 1px 1px;
	font-size:15px;
	font-family:Arial;
	font-weight:bold;
	color:#ffffff;
}
.CSSTableGenerator tr:first-child:hover td{
	background:-o-linear-gradient(bottom, #005fbf 5%, #003f7f 100%);	background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #005fbf), color-stop(1, #003f7f) );
	background:-moz-linear-gradient( center top, #005fbf 5%, #003f7f 100% );
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr="#005fbf", endColorstr="#003f7f");	background: -o-linear-gradient(top,#005fbf,003f7f);

	
}
.CSSTableGenerator tr:first-child td:first-child{
	border-width:0px 0px 1px 0px;
}
.CSSTableGenerator tr:first-child td:last-child{
	border-width:0px 0px 1px 1px;
}
   .btn-success {
   background-color: #65B688;
   border-color: #65B688;
   }
   .btn-danger {
   color: #fff;
   background-color: #d9534f;
   border-color: #d43f3a;
   }
   .btn {
   color: white;
   display: inline-block;
   margin-bottom: 0;
   font-weight: 400;
   text-align: center;
   vertical-align: middle;
   cursor: pointer;
   background-image: none;
   border: 1px solid transparent;
   white-space: nowrap;
   padding: 6px 12px;
   font-size: 14px;
   line-height: 1.42857143;
   border-radius: 4px;
   -webkit-user-select: none;
   -moz-user-select: none;
   -ms-user-select: none;
   user-select: none;
   }
</style>
<script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
<script type="text/javascript">
$(document).on('click','.status_checks',function(){
var status = ($(this).hasClass("btn-success")) ? '0' : '1';
var msg = (status=='0')? 'Deactivate' : 'Activate';
if(confirm("Are you sure to "+ msg)){
	var current_element = $(this);
	url = "ajax.php";
	$.ajax({
	type:"POST",
	url: url,
	data: {id:$(current_element).attr('data'),status:status},
	success: function(data)
		{   
			location.reload();
		}
	});
	}      
});
</script>