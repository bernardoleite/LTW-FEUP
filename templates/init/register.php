<div id="register">
			<div class="form-1">

				<form action="action_register.php" method="POST" enctype="multipart/form-data">
					<p class="field">
						<label for="iuser"> Username: </label>
						<input type="text" id="iuser" name="username" required />
						<span id="msg" class="hint">Only lowercase, at least 3 characters</span>
						<br>
					</p>
					<p class="field">
						<label for="ipass"> Password: </label>
						<input type="password" id="ipass" name="password" required />
						 <span class="hint">One uppercase, 1 symbol, 1 number, at least 8 characters</span>
						<br>
					</p>
				    <p class="field">
						<label for="ipass2"> Repeat Password: </label>
						<input type="password" id="ipass2" name="passwordr" required />
						<br>
					</p>
					<p class="field">
						<label for="iname"> Name: </label>
						<input type="text" id="iname" name="name" required />
						<br>
					</p>
					<p class="field">
						<label for="iphoto"> Choose Photo: </label>
						<input type="file" id="iphoto" name="photo" required/>
						<br>
					</p>
					<div class="regBottons">
						<ul>
							<input type = "reset" value="Clear"/>
							<input type = "submit" value="Register"/>
						</ul>
					</div>
			</form>
		</div>
	</div>
</body>

</html>