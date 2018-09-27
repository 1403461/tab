		<!-- 页头 -->
		<?php include("head.php"); ?>
		<div class="sui-layout">
		  <div class="sidebar">
			<!-- 左菜单 -->
			<?php include("leftmenu.php"); ?>	 	  	
		  </div>
		  <div class="content">
			<p class="sui-text-xxlarge my-padd">班级信息录入</p>
			<form class="sui-form form-horizontal sui-validate" action="banji-save.php" method="post">
			  <div class="control-group">
			    <label for="banhao" class="control-label">班号：</label>
			    <div class="controls">
			      <input type="text" id="banhao" name="banhao" class="input-large input-fat" placeholder="输入班号" data-rules="required|minlength=2|maxlength=10">
			    </div>
			  </div>
			  <div class="control-group">
			    <label for="banzhang" class="control-label">班长：</label>
			    <div class="controls">
			      <input type="text" id="banzhang" name="banzhang" class="input-large input-fat"  placeholder="输入班长姓名" data-rules="required|minlength=2|maxlength=10">
			    </div>
			  </div>
			  <div class="control-group">
			    <label for="jiaoshi" class="control-label">教室：</label>
			    <div class="controls">
			      <input type="text" id="jiaoshi" name="jiaoshi" class="input-large input-fat"  placeholder="输入教室所在位置" data-rules="required|minlength=2|maxlength=10">
			    </div>
			  </div>
			  <div class="control-group">
			    <label for="banzhuren" class="control-label">班主任：</label>
			    <div class="controls">
			      <input type="text" id="banzhuren" name="banzhuren" class="input-large input-fat"  placeholder="输入班主任姓名" data-rules="required|minlength=2|maxlength=10">
			    </div>
			  </div>
			  <div class="control-group">
			    <label for="slogan" class="control-label">班级口号：</label>
			    <div class="controls">
			      <input type="text" id="slogan" name="slogan" class="input-large input-fat"  placeholder="输入班级口号" data-rules="required|minlength=2|maxlength=20">
			    </div>
			  </div>				  
			  <div class="control-group">
			  	<label class="control-label"></label>
			  	<div class="controls">
			  		<input type="submit" value="提交" name="" class="sui-btn btn-large btn-primary">
			  	</div>
			  </div>	  
			</form>
		  </div>
		</div>	
	</div>
</body>
</html>
		<script>
			var str = document.cookie;
			console.log(str.split(";"));
			console.log(str.split(";")[0]);
			console.log(str.split(";")[0].split("="));
			console.log(str.split(";")[0].split("=")[1]);
			//用正则表达时
			function getCookie(name){
				var arr,reg=new RegExp("(^| )"+name+"=([^;]*)(;|$)");
				if(arr=document.cookie.match(reg))
				return unescape(arr[2]);
				else
				return null;
			}	
		</script>
		<!-- 页脚 -->
	<?php include("foot.php"); ?>