<?php

	// check authentication
	$obmc->isAuthen();

?>
<form id="coupon" method="post" action="/coupon/add">
<table id="dashboard-body" border="0">
<tr>
	<td>First Name</td>
	<td><input type="text" id="fname" name="fname" size="30" class="required"> </td> 
	<td>Last Name</td>
	<td><input type="text" id="lname" name="lname" size="30" class="required"></td>
</tr>
<tr>
	<td>Gender</td>
	<td colspan="3">
		<select name="sex" id="sex" class="required">
			<option value="m">Male</option>
			<option value="f">Female</option>
		</select>
	</td>
</tr>
<tr>
	<td>Address</td>
	<td colspan="3"><input type="text" id="address" name="address" size="80"  class="required"></td>
</tr>
<tr>
	<td>Province</td>
	<td><?=$obmc->getStateOption(); ?></td>
	<td>Postcode</td>
	<td><input type="text" id="postcode" name="postcode" size="10" maxlength="5" class="required number"></td>
</tr>
<tr>
	<td>Tel</td>
	<td><input type="text" id="tel" name="tel" size="10" maxlength="13" class="required number" ></td>
	<td>Email</td>
	<td><input type="text" id="email" name="email" size="30" class="required email"></td>
</tr>
<tr>
	<td> </td>
	<td><input type="submit" id="add" name="add" value="Add Record"></td>
	<td><div id="result"></div></td>
</tr>
</table>
</form>
