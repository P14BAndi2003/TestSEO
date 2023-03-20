<!DOCTYPE html>
<html>
<head>
	<!-- Basic Page Info -->
	<meta charset="utf-8">
	<title>DeskApp - Bootstrap Admin Dashboard HTML Template</title>

	<!-- Site favicon -->
	<link rel="apple-touch-icon" sizes="180x180" href="vendors/images/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="vendors/images/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="vendors/images/favicon-16x16.png">

	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="{{Str::slug($article->titre)}}">
	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="<?php echo asset('assets/vendors/styles/core.css')?>">
	<link rel="stylesheet" type="text/css" href="<?php echo asset('assets/vendors/styles/icon-font.min.css')?>">
	<link rel="stylesheet" type="text/css" href="<?php echo asset('assets/vendors/styles/style.css')?>">
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-119386393-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-119386393-1');
	</script>
     <script src="//cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
</head>

<body>


<div class="header">
    <div class="header-left">
        <div class="menu-icon dw dw-menu"></div>

    </div>
    <div class="header-right">
        <div class="user-info-dropdown">
            <div class="dropdown">
                <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown">

                    <span class="user-name">Une personne</span>
                </a>
                <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                    <a class="dropdown-item" href="login.html"><i class="dw dw-logout"></i> Log Out</a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="left-side-bar">
    <div class="menu-block customscroll">
        <div class="sidebar-menu">
            <ul id="accordion-menu">
                <li class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle">
                        <span class="icon-copy fa fa-newspaper-o" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;<span class="mtext">Article</span>
                    </a>
                    <ul class="submenu">
                        <li><a href="{{url('/')}}">Ajout</a></li>
                        <li><a href="{{url('/listeArticle')}}">Liste</a></li>
                    </ul>
                </li>

                <li>
                    <a href="sitemap.html" class="dropdown-toggle no-arrow">
                        <span class="icon-copy fa fa-wrench" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;<span class="mtext">Sitemap</span>
                    </a>
                </li>

            </ul>
        </div>
    </div>
</div>
<div class="mobile-menu-overlay"></div>
<div class="main-container">

<div class="row clearfix">
                    
                    <div class="col-sm-12 col-md-12 mb-12">
						<div class="card card-box">
							<div class="card-header">
                            {{ $article->categorie->nom }}
							</div>
							<div class="card-body">
								<p class="card-text">  {!!$article->contenu!!} </p>
							</div>
						</div>
					</div>
                   


</div>
</div>
    <script src="<?php echo asset('assets/vendors/scripts/core.js')?>"></script>
    <script src="<?php echo asset('assets/vendors/scripts/script.min.js')?>"></script>
    <script src="<?php echo asset('assets/vendors/scripts/process.js')?>"></script>
    <script src="<?php echo asset('assets/vendors/scripts/layout-settings.js')?>"></script>
    </body>
    </html>