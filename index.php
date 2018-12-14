<?php require_once('config.php') ?>
<?php require_once( ROOT_PATH . '/includes/public_functions.php') ?>
<?php $posts = getPublishedPosts(); ?>
<?php require_once( ROOT_PATH . '/includes/head_section.php') ?>
	<title>LifeBlog | Home </title>
</head>
<body>
    <div>
    	<div class="container">
	    	<?php include( ROOT_PATH . '/includes/navbar.php') ?>
		    <?php include( ROOT_PATH . '/includes/banner.php') ?>
            <div class="footer">
			<p>log sign &copy; <?php echo date('Y'); ?></p>
		</div>
	</div>
</body>
</html>