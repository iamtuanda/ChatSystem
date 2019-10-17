<style type="text/css">
.formlogin {
	padding: 14px 20px;
	margin: 8px 0;
	border: none;
	cursor: pointer;
	width: 30%;
	text-align: left;
}

.imglogin {
	text-align: center;
	margin: 24px 0 12px 0;
}

button {
	background-color: #4CAF50;
	color: white;
	padding: 14px 20px;
	margin: 8px 0;
	border: none;
	cursor: pointer;
	width: 100%;
}

.registform {
	content: "";
	clear: both;
	display: table;
}

.loginbtn, .registbtn {
	float: left;
	width: 50%;
}

.registbtn {
	padding: 14px 20px;
	background-color: #f44336;
}
</style>

<form class="formlogin" method="post" action="/hust-Tuanad/User/login">
	<div class="imglogin">
	<img src="https://achieve.lausd.net/cms/lib/CA01000043/Centricity/domain/779/welligentbuttons/login.png" width="150px" height="150px" alt="Avatar" class="avatar">
	</div>

	<fieldset>
		<legend>Login</legend>
		<label><b> E-mail : </b></label><br><input required="required" type="text" placeholder="Enter E-mail" name="email" /><br />
		<label><b> Password : </b></label><br><input required="required" type="password" placeholder="Enter Password" name="password" /><br />

		<div class="registform">
			<button class="loginbtn" type="submit"> Login </button>
			<button class="registbtn"> <a href="/hust-Tuanad/User/regist"> Regist </button>
		</div>
	</fieldset>
</form>