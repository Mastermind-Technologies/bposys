<body>
	<div id="content-container">
		<div id="page-wrapper">
			asgasga
		</div>
		<!-- /#page-wrapper -->
	</div>
	<!-- Page Content -->
</body>

<?php if($this->session->flashdata('message')): ?>
	<script>
		alert("<?= $this->session->flashdata('message'); ?>");
	</script>
<?php endif; ?>
