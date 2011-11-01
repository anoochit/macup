<div class="login-container">

<form action="" id="login_form" method="post">
<table class="round" id="logintable" >
<tr>
	<td colspan="2">		
		<label for="username">Username</label><br>
		<input type="text"  id="username" name="username" size="20" class="login-input">
	</td>
</tr>
<tr>
	<td colspan="2">
		<label for="password">Password</label><br>
		<input type="password" id="password"  name="password" size="20" class="login-input">
	</td>
</tr>
<tr>
	<td>
		<span id="msgbox" style="display:none"></span><br>	
	</td>
	<td align="right">
		<input type="submit"  id="submit" value="SignIn" class="submit">
	</td>
</tr>
</table>
</form>
<div class="copy">&copy; <?php echo date("Y")." RedLine Software, all rights reserved."?></div>
</div>
