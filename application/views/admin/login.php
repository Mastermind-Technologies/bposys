<link href="<?php echo base_url(); ?>assets/landing-page/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

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

#content
{
	text-align: center;
}

.group
{
	padding: 25 40 25 40;
}

input 				{
  font-size:18px;
  padding:10px 10px 10px 5px;
  display:block;
  width:300px;
  border:none;
  border-bottom:1px solid #757575;
}
input:focus 		{ outline:none; }

/* LABEL ======================================= */
label 				 {
  color:#999;
  font-size:18px;
  font-weight:normal;
  position:absolute;
  pointer-events:none;
  left:5px;
  top:10px;
  transition:0.2s ease all;
  -moz-transition:0.2s ease all;
  -webkit-transition:0.2s ease all;
}

/* active state */
input:focus ~ label, input:valid ~ label 		{
  top:-20px;
  font-size:14px;
  color:#5264AE;
}

/* BOTTOM BARS ================================= */
.bar 	{ position:relative; display:block; width:300px; }
.bar:before, .bar:after 	{
  content:'';
  height:2px;
  width:0;
  bottom:1px;
  position:absolute;
  background:#5264AE;
  transition:0.2s ease all;
  -moz-transition:0.2s ease all;
  -webkit-transition:0.2s ease all;
}
.bar:before {
  left:50%;
}
.bar:after {
  right:50%;
}

/* active state */
input:focus ~ .bar:before, input:focus ~ .bar:after {
  width:50%;
}

/* HIGHLIGHTER ================================== */
.highlight {
  position:absolute;
  height:60%;
  width:100px;
  top:25%;
  left:0;
  pointer-events:none;
  opacity:0.5;
}

/* active state */
input:focus ~ .highlight {
  -webkit-animation:inputHighlighter 0.3s ease;
  -moz-animation:inputHighlighter 0.3s ease;
  animation:inputHighlighter 0.3s ease;
}

.btn {
  position: relative;

  display: block;
  margin: 30px auto;
  padding: 10px;

  overflow: hidden;

  border-width: 0;
  outline: none;
  border-radius: 2px;
  box-shadow: 0 1px 4px rgba(0, 0, 0, .6);

  background-color: #2ecc71;
  color: #ecf0f1;

  transition: background-color .3s;
}

.btn:hover, .btn:focus {
  background-color: #27ae60;
}

.btn > * {
  position: relative;
}

.btn span {
  display: block;
  padding: 12px 24px;
}

.btn:before {
  content: "";

  position: absolute;
  top: 50%;
  left: 50%;

  display: block;
  width: 0;
  padding-top: 0;

  border-radius: 100%;

  background-color: rgba(236, 240, 241, .3);

  -webkit-transform: translate(-50%, -50%);
  -moz-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  -o-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
}

.btn:active:before {
  width: 120%;
  padding-top: 120%;

  transition: width .2s ease-out, padding-top .2s ease-out;
}

/* Styles, not important */
*, *:before, *:after {
  box-sizing: border-box;
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
					<div class="group">
			      <input placeholder="Email" type="text" name="email">
			      <span class="highlight"></span>
			      <span class="bar"></span>
			      <label>Email</label>
			    </div>
					<div class="group">
						<input placeholder="Password" type="password" name="password">
						<span class="highlight"></span>
						<span class="bar"></span>
						<label>Email</label>
					</div>

					<div class="form-actions">
	          <button type="submit" class="btn" name="btnLogin"><i class="fa fa-sign-in" aria-hidden="true"></i> Log In</button>
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
