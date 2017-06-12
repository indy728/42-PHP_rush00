<?php include ('layout/head.php');?>
<DIV ID="page_wrap" CLASS="cf">
	<?php include('layout/header.php');?>
	<DIV ID="main_wrap" CLASS="cf">
		<DIV ID="main" CLASS="cf">
			<?php include('layout/lnav.php');?>
			<DIV ID="content_wrap">
				<DIV ID="featured" CLASS="cf">
					<FORM METHOD="post" TITLE="user_verify.php" ACTION="action/user_verify.php" ID="login_form">
						<DIV CLASS="account_form">
							<H2>User Login</H2>
							<DIV CLASS="account_form_row cf">
								<DIV CLASS="form_l">
									<LABEL FOR="userlogin">Username:</LABEL>
								</DIV>
								<DIV CLASS="form_r">
									<INPUT TYPE="text" NAME="login" VALUE MAXLENGTH="20" ID="userlogin" CLASS="login_input">
								</DIV>
							</DIV>
							<DIV CLASS="account_form_row cf">
								<DIV CLASS="form_l">
									<LABEL FOR="userpass">Password:</LABEL>
								</DIV>
								<DIV CLASS="form_r">
									<INPUT TYPE="password" NAME="passwd" VALUE MAXLENGTH="20" ID="userpass" CLASS="login_input">
								</DIV>
							</DIV>
							<DIV CLASS="account_form_row">
								<A HREF="forget_page.php" CLASS="forgot_pass">Forgot your password?</A>
							</DIV>
							<DIV CLASS="account_form_row">
								<INPUT TYPE="submit" NAME="submit" class="account_button" value="submit">
							</DIV>
						</DIV>
					</FORM>
					<FORM METHOD="post" TITLE="new_user.php" ACTION="action/new_user.php" ID="login_form">
						<DIV CLASS="account_form">
							<H2>New user? Create your login here:</H2>
							<DIV CLASS="account_form_row cf">
								<DIV CLASS="form_l">
									<LABEL FOR="newuser">Username:</LABEL>
								</DIV>
								<DIV CLASS="form_r">
									<INPUT TYPE="text" NAME="newlogin" VALUE MAXLENGTH="20" ID="newuser" CLASS="login_input">
								</DIV>
							</DIV>
							<DIV CLASS="account_form_row cf">
								<DIV CLASS="form_l">
									<LABEL FOR="newpass">Password:</LABEL>
								</DIV>
								<DIV CLASS="form_r">
									<INPUT TYPE="password" NAME="newpw" VALUE MAXLENGTH="20" ID="newpass" CLASS="login_input">
								</DIV>
							</DIV>
							<DIV CLASS="account_form_row">
								<INPUT TYPE="submit" NAME="submit" class="account_button" value="submit">
							</DIV>
						</DIV>
					</FORM>
				</DIV>
			</DIV>
		</DIV>
	</DIV>
<?php include('layout/footer.php');?>
</DIV>