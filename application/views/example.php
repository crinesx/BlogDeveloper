<?php if(($this->session->userdata('nivel')>='1') &&   ($this->session->userdata('nivel')<='3')){?>

<?php
foreach($css_files as $file): ?>
	<link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
<?php endforeach; ?>
<?php foreach($js_files as $file): ?>
	<script src="<?php echo $file; ?>"></script>
<?php endforeach; ?>
</head>
<body>
	<div style='height:20px;' class="container"></div>
    <div>
		<?php echo $output; ?>
    </div>

	<?php } else
 redirect('/Welcome/index/', 'refresh');
?>
</body>
</html>
