<?php error_reporting(0); ?>
<head>
	<meta charset="utf-8">
    <title><?php echo $page_items->meta_title; ?></title>
    <meta name="title" content="<?php echo $page_items->meta_title; ?>"/>
    <meta name="keywords" content="<?php echo $page_items->meta_keywords; ?>"/>
    <meta name="description" content="<?php echo $page_items->meta_description; ?>"/>
    <base href="<?php echo base_url(); ?>"/>
    <?php $parts = $this->uri->segment(1); ?>
    <?php if (!empty($page_url) && $page_url > 1) {
        ?>   <link rel="canonical" href="<?php echo base_url() . $parts . '/' . $page_url; ?>"/>
    <?php } else if (!empty($page_items->canonical_url)) { ?>
        <link rel="canonical" href="<?php echo $page_items->canonical_url; ?>"/>
        <?php
    } if (!empty($page_items->redirection_link)) {
        header('Location:' . $page_items->redirection_link);
    }
    ?>
    <?php echo $page_items->other_meta_tags; ?>
    <?php
    $robots = array();
    if (!empty($page_items->nofollow_ind)) {
        $robots[] = 'NOINDEX';
    }
    if (!empty($page_items->noindex_ind)) {
        $robots[] = 'NOFOLLOW';
    }
    if (count($robots) > 0):
        ?>
        <META NAME="ROBOTS" CONTENT="<?php echo implode(', ', $robots); ?>" />
    <?php endif ?>

    <meta name="author" content="Sathish-Kumar">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

	<!--<link rel="shortcut icon" href="<?php echo $settings->FAVICON_IMAGE ?>" type="image/x-icon">-->
	<link rel="icon" href="<?php echo SETTINGS_UPLOAD_PATH.$settings->FAVICON_IMAGE ?>" type="image/png">
	<!-- Stylesheets -->
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
    <!-- Stylesheet -->
        
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/jquery-ui.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/animate.css" rel="stylesheet" type="text/css">
    <link href="assets/css/css-plugin-collections.css" rel="stylesheet"/>
    <!-- CSS | menuzord megamenu skins -->
    <link id="menuzord-menu-skins" href="assets/css/menuzord-skins/menuzord-rounded-boxed.css" rel="stylesheet"/>
    <!-- CSS | Main style file -->
    <link href="assets/css/style-main.css" rel="stylesheet" type="text/css">
    <!-- CSS | Preloader Styles -->
    <link href="assets/css/preloader.css" rel="stylesheet" type="text/css">
    <!-- CSS | Custom Margin Padding Collection -->
    <link href="assets/css/custom-bootstrap-margin-padding.css" rel="stylesheet" type="text/css">
    <!-- CSS | Responsive media queries -->
    <link href="assets/css/responsive.css" rel="stylesheet" type="text/css">
    <!-- CSS | Style css. This is the file where you can place your own custom css code. Just uncomment it and use it. -->
    <!-- <link href="assets/css/style.css" rel="stylesheet" type="text/css"> -->

    <!-- Revolution Slider 5.x CSS settings -->
    <link  href="assets/js/revolution-slider/css/settings.css" rel="stylesheet" type="text/css"/>
    <link  href="assets/js/revolution-slider/css/layers.css" rel="stylesheet" type="text/css"/>
    <link  href="assets/js/revolution-slider/css/navigation.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="assets/css/glightbox.css" />
    <!-- CSS | Theme Color -->
    <link href="assets/css/colors/theme-skin-orange.css" rel="stylesheet" type="text/css">
    
    <script src="assets/js/jquery-2.2.4.min.js"></script>
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link href="https://cdn.rawgit.com/sachinchoolur/lightgallery.js/master/dist/css/lightgallery.css" rel="stylesheet">
        <link href="assets/css/light_gallery.css" rel="stylesheet">
</head>

