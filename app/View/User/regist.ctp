<style type="text/css">
.formregist {
	padding: 14px 20px;
	margin: 8px 0;
	border: none;
	cursor: pointer;
	width: 30%;
	text-align: left;
}
.tree {
	padding: 16px;
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
</style>
<form class="formregist" method="post" action="/hust-Tuanad/User/regist">
	<div class="tree">
		<h1>Regist:</h1>
		<p>Please fill in this form to create an account.</p>
		<label><b> Name : </b></label><br><input  placeholder="Enter Name" type="text" name="name" required/><br />
		<label><b> E-mail : </b></label><br><input placeholder="Enter E-mail "type="email" name="email" required/><br />
		<label><b> Password : </b></label><br><input placeholder="Enter Password" type="password" name="password" required/><br />
		<button type="submit"> Regist </button>
	</div>
</form>
