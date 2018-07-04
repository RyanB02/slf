
<div class="card card-default  mb-4" style="border-color: #CF2941; ">
	<div class="card-header bg-danger">Authentication Error - Don't try that again! </div>
	<div class="card-body" style="font-size: 20px">
		IP: <?php echo $_SERVER['REMOTE_ADDR'];?> <br> 
		If this IP is used again to try to bypass our authentication, the ip will be blocked from our site!
	</div>
</div>