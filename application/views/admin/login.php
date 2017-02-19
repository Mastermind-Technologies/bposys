<style media="screen">

.main
{
	display: block;
	margin: auto;
	width: 400px;
	height: 500px;
	margin-top: 5%;
	border-radius: 8px;
	background-color: white;
	box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
  transition: all 0.3s cubic-bezier(.25,.8,.25,1);
}
.main:hover
{
box-shadow: 0 14px 28px rgba(0,0,0,0.25), 0 10px 10px rgba(0,0,0,0.22);
}

#header
{
	background-color: #3949ab;
	width: 100%;
	border-top-left-radius: 5px;
	border-top-right-radius: 5px;
	height: auto;
	box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
}

#header > h1
{
	color: white;
	font-family: Roboto;
	text-align: center;
	padding: 24px;
}
</style>

<body style="background-color: #212121">
	<div class="main">
		<div id="content-container">
			<div id="header">
				<h1>Authentication</h1>
			</div>
			<div id="content">
				<form action="<?php echo base_url(); ?>auth/login" method="post">
					<div class="controls">
	          <input class="span11" placeholder="Email" type="text" name="email">
	        </div>
					<div class="controls">
						<input class="span11" placeholder="Password" type="password" name="password">
					</div>
					<div class="form-actions">
	          <button type="submit" class="btn btn-success" name="btnLogin">Log In</button>
	        </div>
				</form>
			</div>
			<!-- /#page-wrapper -->
		</div>
		<!-- Page Content -->
	</div>
</body>

<?php if($this->session->flashdata('message')): ?>
	<script>
		alert("<?= $this->session->flashdata('message'); ?>");
	</script>
<?php endif; ?>
