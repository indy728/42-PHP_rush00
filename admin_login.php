<?php include ('layout/head.php');?>
<DIV ID="page_wrap" CLASS="cf">
	<?php include('layout/header.php');?>
	<DIV ID="main_wrap" CLASS="cf">
		<DIV ID="main" CLASS="cf">
			<?php include('layout/lnav.php');?>
			<DIV ID="content_wrap">
				<DIV ID="featured" CLASS="cf">
					<FORM METHOD="post" TITLE="admin_verify.php" ACTION="action/admin_verify.php" ID="login_form">
						<DIV CLASS="account_form">
							<H2>Administrator Access</H2>
							<DIV CLASS="account_form_row cf">
								<DIV CLASS="form_l">
									<LABEL FOR="useradmin">Admin Username:</LABEL>
								</DIV>
								<DIV CLASS="form_r">
									<INPUT TYPE="text" NAME="login" VALUE MAXLENGTH="20" ID="useradmin" CLASS="login_input">
								</DIV>
							</DIV>
							<DIV CLASS="account_form_row cf">
								<DIV CLASS="form_l">
									<LABEL FOR="useradmin">Admin Password:</LABEL>
								</DIV>
								<DIV CLASS="form_r">
									<INPUT TYPE="password" NAME="passwd" VALUE MAXLENGTH="20" ID="adminpass" CLASS="login_input">
								</DIV>
							</DIV>
							<DIV CLASS="account_form_row">
								<INPUT TYPE="submit" NAME="submit" class="account_button" VALUE="submit">
							</DIV>
						</DIV>
					</FORM>
				</DIV>
			</DIV>
		</DIV>
	</DIV>
<?php include('layout/footer.php');?>
</DIV>