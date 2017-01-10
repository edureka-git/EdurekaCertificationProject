<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
<link rel="icon" href="img/favicon.ico" type="image/x-icon">
<link rel="apple-touch-icon-precomposed apple-touch-icon" href="img/apple-touch-icon-precomposed.png" type="image/x-icon">
<title>Instructor-led Online Courses with 24x7 On-Demand Support | Edureka </title>
<link href="img/favicon.ico" type="image/x-icon" rel="shortcut icon" >
<link href="/css/autoload/bootstrap.min.css" type="text/css" rel="stylesheet">
<link href="/css/autoload/Opensans-font.css" type="text/css" rel="stylesheet">
<link href="/css/autoload/Newfonts-ico.css" type="text/css" rel="stylesheet">
<link href="/css/autoload/Common-element.css" type="text/css" rel="stylesheet">
<link href="/css/widget/widget.css" type="text/css" rel="stylesheet">
<link href="/css/autoload/header.css" type="text/css" rel="stylesheet">
<link href="/css/autoload/footer-base.css" type="text/css" rel="stylesheet">
<link href="/css/autoload/CustomScrollbar.css" type="text/css" rel="stylesheet">
<link href="/css/homepage/home.css" type="text/css" rel="stylesheet">
<link href="/css/Login-Signup/login-signup.css" type="text/css" rel="stylesheet">
<link href="/css/autoload/font-awesome.min.css" type="text/css" rel="stylesheet">
<link href="/css/Common-page-specific/video-js.css" type="text/css" rel="stylesheet">
<link href="/css/Common-page-specific/owl.carousel.css" type="text/css" rel="stylesheet">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<?php
$users = $this->request->session()->read('Auth.User');

?>
<body style="margin-top:41px;" class="footer-sticky-btm">
<div class="page-wrapper">
<header id="header-II" class="headeraftersignin" <?= !empty($users) ? 'style="display:block;"' : '';?>>
        <section>
            <nav style="" role="navigation" class="navbar navbar-inverse navbar-fixed-top navbar-homepage">
                <div class="container menubar-visibility">
                    <div class="navbar-header">
                        <a href="http://www.dev-edureka.co" class="navbar-brand"> <img alt="edureka!" src="img/logo.png"> </a> 			
                    </div>
                    
                    <!-- ddl starts-->
                    <ul class="list-unstyled course-search-box-nav">
                        <li class="search-nav pull-left">
                            <div class="dropdown"> 
                                <a id="dropdownMenu1" class="select_down dropdown-toggle search-drop menu-common" aria-expanded="true" data-toggle="dropdown" href="javascript:void(0)">
                                    <i class="icon-menu"></i>
                                </a>
                                <ul role="menu" aria-labelledby="dropdownMenu1" class="dropdown-menu list-inline">
                                    <li class="active"> <a href="/search/category/Big+Data+Analytics"> Big Data Analytics </a> 
                                    	<ul class="level-2">
                                            <li> <a href="/search/category/Testing"> Big Data and Hadoop </a> </li>
                                            <li> <a href="/search/category/Testing"> Hadoop Administration </a> </li>
                                            <li> <a href="/search/category/Testing"> Apache Spark and Scala </a> </li>
                                            <li> <a href="/search/category/Testing"> Data Science </a> </li>
                                            <li> <a href="/search/category/Testing"> Mastering Python </a> </li>
                                            <li> <a href="/search/category/Testing"> Mastering Data Analytics with R </a> </li>
                                            <li> <a href="/search/category/Testing"> Data Visualization With Tableau </a> </li>
                                            <li> <a href="/search/category/Testing"> Course Icon Talend For Big Data </a> </li>
                                            <li> <a href="/search/category/Testing"> Mastering Teradata </a> </li>
                                            <li> <a href="/search/category/Testing"> Continuous Integration with Jenkins </a> </li>
                                            <li> <a href="/search/category/Testing"> Advanced Predictive Modeling in R </a> </li>
                                            <li> <a href="/search/category/Testing"> Machine Learning with Mahout - Self-Paced </a> </li>
                                            <li class="view-all"><button>View all Courses</button></li>
                                        </ul>
                                    </li>
                                    <li> <a href="/search/category/Big+Data+NoSQL"> Big Data NoSQL </a> 
                                    	<ul class="level-2">
                                            <li> <a href="/search/category/Testing"> Big Data and Hadoop </a> </li>
                                            <li> <a href="/search/category/Testing"> Hadoop Administration </a> </li>
                                            <li> <a href="/search/category/Testing"> Apache Spark and Scala </a> </li>
                                            <li> <a href="/search/category/Testing"> Course Icon Talend For Big Data </a> </li>
                                            <li> <a href="/search/category/Testing"> Mastering Teradata </a> </li>
                                            <li> <a href="/search/category/Testing"> Continuous Integration with Jenkins </a> </li>
                                            <li> <a href="/search/category/Testing"> Advanced Predictive Modeling in R </a> </li>
                                            <li> <a href="/search/category/Testing"> Machine Learning with Mahout - Self-Paced </a> </li>
                                            <li class="view-all"><button>View all Courses</button></li>
                                        </ul>
                                    </li>
                                    <li> <a href="/search/category/Testing"> Operations </a> 
                                    	<ul class="level-2">
                                            <li> <a href="/search/category/Testing"> Big Data and Hadoop </a> </li>
                                            <li> <a href="/search/category/Testing"> Hadoop Administration </a> </li>
                                            <li> <a href="/search/category/Testing"> Apache Spark and Scala </a> </li>
                                            <li> <a href="/search/category/Testing"> Data Science </a> </li>
                                            <li> <a href="/search/category/Testing"> Mastering Python </a> </li>
                                            <li> <a href="/search/category/Testing"> Mastering Teradata </a> </li>
                                            <li> <a href="/search/category/Testing"> Continuous Integration with Jenkins </a> </li>
                                            <li> <a href="/search/category/Testing"> Advanced Predictive Modeling in R </a> </li>
                                            <li> <a href="/search/category/Testing"> Machine Learning with Mahout - Self-Paced </a> </li>
                                            <li class="view-all"><button>View all Courses</button></li>
                                        </ul>
                                    </li>
                                    <li> <a href="/search/category/Testing"> Finance </a> 
                                    	<ul class="level-2">
                                            <li> <a href="/search/category/Testing"> Big Data and Hadoop </a> </li>
                                            <li> <a href="/search/category/Testing"> Hadoop Administration </a> </li>
                                            <li> <a href="/search/category/Testing"> Apache Spark and Scala </a> </li>
                                            <li> <a href="/search/category/Testing"> Data Science </a> </li>
                                            <li> <a href="/search/category/Testing"> Mastering Python </a> </li>
                                            <li> <a href="/search/category/Testing"> Mastering Data Analytics with R </a> </li>
                                            <li> <a href="/search/category/Testing"> Data Visualization With Tableau </a> </li>
                                            <li> <a href="/search/category/Testing"> Course Icon Talend For Big Data </a> </li>
                                            <li class="view-all"><button>View all Courses</button></li>
                                        </ul>
                                    </li>
                                    <li> <a href="/search/category/Testing"> Marketing </a> 
                                    	<ul class="level-2">
                                            <li> <a href="/search/category/Testing"> Big Data and Hadoop </a> </li>
                                            <li> <a href="/search/category/Testing"> Hadoop Administration </a> </li>
                                            <li> <a href="/search/category/Testing"> Apache Spark and Scala </a> </li>
                                            <li> <a href="/search/category/Testing"> Data Science </a> </li>
                                            <li> <a href="/search/category/Testing"> Mastering Python </a> </li>
                                            <li> <a href="/search/category/Testing"> Mastering Data Analytics with R </a> </li>
                                            <li> <a href="/search/category/Testing"> Data Visualization With Tableau </a> </li>
                                            <li> <a href="/search/category/Testing"> Advanced Predictive Modeling in R </a> </li>
                                            <li> <a href="/search/category/Testing"> Machine Learning with Mahout - Self-Paced </a> </li>
                                            <li class="view-all"><button>View all Courses</button></li>
                                        </ul>
                                    </li>
                                    <li> <a href="/search/category/Testing"> Engineering </a> 
                                    	<ul class="level-2">
                                            <li> <a href="/search/category/Testing"> Big Data and Hadoop </a> </li>
                                            <li> <a href="/search/category/Testing"> Mastering Teradata </a> </li>
                                            <li> <a href="/search/category/Testing"> Continuous Integration with Jenkins </a> </li>
                                            <li> <a href="/search/category/Testing"> Advanced Predictive Modeling in R </a> </li>
                                            <li> <a href="/search/category/Testing"> Machine Learning with Mahout - Self-Paced </a> </li>
                                            <li class="view-all"><button>View all Courses</button></li>
                                        </ul>
                                    </li>
                                    <li> <a href="/search/category/Testing"> Testing </a> 
                                    	<ul class="level-2">
                                            <li> <a href="/search/category/Testing"> Big Data and Hadoop </a> </li>
                                            <li> <a href="/search/category/Testing"> Hadoop Administration </a> </li>
                                            <li> <a href="/search/category/Testing"> Apache Spark and Scala </a> </li>
                                            <li> <a href="/search/category/Testing"> Data Science </a> </li>
                                            <li> <a href="/search/category/Testing"> Mastering Python </a> </li>
                                            <li> <a href="/search/category/Testing"> Mastering Data Analytics with R </a> </li>
                                            <li> <a href="/search/category/Testing"> Data Visualization With Tableau </a> </li>
                                            <li> <a href="/search/category/Testing"> Course Icon Talend For Big Data </a> </li>
                                            <li> <a href="/search/category/Testing"> Machine Learning with Mahout - Self-Paced </a> </li>
                                            <li class="view-all"><button>View all Courses</button></li>
                                        </ul>
                                    </li>
                                    <li> <a href="/search/category/Cloud+Computing"> Cloud Computing </a> 
                                    	<ul class="level-2">
                                            <li> <a href="/search/category/Testing"> Big Data and Hadoop </a> </li>
                                            <li> <a href="/search/category/Testing"> Hadoop Administration </a> </li>
                                            <li> <a href="/search/category/Testing"> Course Icon Talend For Big Data </a> </li>
                                            <li> <a href="/search/category/Testing"> Mastering Teradata </a> </li>
                                            <li> <a href="/search/category/Testing"> Continuous Integration with Jenkins </a> </li>
                                            <li> <a href="/search/category/Testing"> Advanced Predictive Modeling in R </a> </li>
                                            <li> <a href="/search/category/Testing"> Machine Learning with Mahout - Self-Paced </a> </li>
                                            <li class="view-all"><button>View all Courses</button></li>
                                        </ul>
                                    </li>
                                    <li> <a href="/search/category/Business+Intelligence"> Business Intelligence </a> 
                                    	<ul class="level-2">
                                            <li> <a href="/search/category/Testing"> Data Science </a> </li>
                                            <li> <a href="/search/category/Testing"> Mastering Python </a> </li>
                                            <li> <a href="/search/category/Testing"> Mastering Data Analytics with R </a> </li>
                                            <li> <a href="/search/category/Testing"> Data Visualization With Tableau </a> </li>
                                            <li> <a href="/search/category/Testing"> Course Icon Talend For Big Data </a> </li>
                                            <li> <a href="/search/category/Testing"> Mastering Teradata </a> </li>
                                            <li> <a href="/search/category/Testing"> Continuous Integration with Jenkins </a> </li>
                                            <li> <a href="/search/category/Testing"> Advanced Predictive Modeling in R </a> </li>
                                            <li> <a href="/search/category/Testing"> Machine Learning with Mahout - Self-Paced </a> </li>
                                            <li class="view-all"><button>View all Courses</button></li>
                                        </ul>
                                    </li>
                                    <li> <a href="/search/category/Systems+%26+Architecture"> Systems &amp; Architecture </a> 
                                    	<ul class="level-2">
                                            <li> <a href="/search/category/Testing"> Big Data and Hadoop </a> </li>
                                            <li> <a href="/search/category/Testing"> Hadoop Administration </a> </li>
                                            <li> <a href="/search/category/Testing"> Apache Spark and Scala </a> </li>
                                            <li> <a href="/search/category/Testing"> Data Science </a> </li>
                                            <li> <a href="/search/category/Testing"> Mastering Python </a> </li>
                                            <li> <a href="/search/category/Testing"> Mastering Data Analytics with R </a> </li>
                                            <li> <a href="/search/category/Testing"> Data Visualization With Tableau </a> </li>
                                            <li> <a href="/search/category/Testing"> Course Icon Talend For Big Data </a> </li>
                                            <li class="view-all"><button>View all Courses</button></li>
                                        </ul>
                                    </li>
                                    <li> <a href="/search/category/System+Engineering"> System Engineering </a> 
                                    	<ul class="level-2">
                                            <li> <a href="/search/category/Testing"> Big Data and Hadoop </a> </li>
                                            <li> <a href="/search/category/Testing"> Hadoop Administration </a> </li>
                                            <li> <a href="/search/category/Testing"> Apache Spark and Scala </a> </li>
                                            <li> <a href="/search/category/Testing"> Data Science </a> </li>
                                            <li> <a href="/search/category/Testing"> Course Icon Talend For Big Data </a> </li>
                                            <li> <a href="/search/category/Testing"> Mastering Teradata </a> </li>
                                            <li> <a href="/search/category/Testing"> Continuous Integration with Jenkins </a> </li>
                                            <li> <a href="/search/category/Testing"> Advanced Predictive Modeling in R </a> </li>
                                            <li> <a href="/search/category/Testing"> Machine Learning with Mahout - Self-Paced </a> </li>
                                            <li class="view-all"><button>View all Courses</button></li>
                                        </ul>
                                    </li>
                                    <li> <a href="/search/category/Mobile+Development"> Mobile Development </a> 
                                    	<ul class="level-2">
                                            <li> <a href="/search/category/Testing"> Big Data and Hadoop </a> </li>
                                            <li> <a href="/search/category/Testing"> Hadoop Administration </a> </li>
                                            <li> <a href="/search/category/Testing"> Apache Spark and Scala </a> </li>
                                            <li> <a href="/search/category/Testing"> Data Science </a> </li>
                                            <li> <a href="/search/category/Testing"> Mastering Python </a> </li>
                                            <li> <a href="/search/category/Testing"> Mastering Data Analytics with R </a> </li>
                                            <li> <a href="/search/category/Testing"> Advanced Predictive Modeling in R </a> </li>
                                            <li> <a href="/search/category/Testing"> Machine Learning with Mahout - Self-Paced </a> </li>
                                            <li class="view-all"><button>View all Courses</button></li>
                                        </ul>
                                    </li>
                                    <li> <a href="/search/category/Frameworks"> Frameworks </a> 
                                    	<ul class="level-2">
                                            <li> <a href="/search/category/Testing"> Data Science </a> </li>
                                            <li> <a href="/search/category/Testing"> Course Icon Talend For Big Data </a> </li>
                                            <li> <a href="/search/category/Testing"> Mastering Teradata </a> </li>
                                            <li> <a href="/search/category/Testing"> Continuous Integration with Jenkins </a> </li>
                                            <li> <a href="/search/category/Testing"> Advanced Predictive Modeling in R </a> </li>
                                            <li> <a href="/search/category/Testing"> Machine Learning with Mahout - Self-Paced </a> </li>
                                            <li class="view-all"><button>View all Courses</button></li>
                                        </ul>
                                    </li>
                                    <li> <a href="/search/category/Project+Management"> Project Management </a> 
                                    	<ul class="level-2">
                                            <li> <a href="/search/category/Testing"> Big Data and Hadoop </a> </li>
                                            <li> <a href="/search/category/Testing"> Hadoop Administration </a> </li>
                                            <li> <a href="/search/category/Testing"> Apache Spark and Scala </a> </li>
                                            <li> <a href="/search/category/Testing"> Data Science </a> </li>
                                            <li> <a href="/search/category/Testing"> Mastering Python </a> </li>
                                            <li> <a href="/search/category/Testing"> Mastering Data Analytics with R </a> </li>
                                            <li class="view-all"><button>View all Courses</button></li>
                                        </ul>
                                    </li>
                                    <li> <a href="/search/category/Programming"> Programming </a> 
                                    	<ul class="level-2">
                                            <li> <a href="/search/category/Testing"> Big Data and Hadoop </a> </li>
                                            <li> <a href="/search/category/Testing"> Hadoop Administration </a> </li>
                                            <li> <a href="/search/category/Testing"> Apache Spark and Scala </a> </li>
                                            <li> <a href="/search/category/Testing"> Data Science </a> </li>
                                            <li> <a href="/search/category/Testing"> Course Icon Talend For Big Data </a> </li>
                                            <li> <a href="/search/category/Testing"> Mastering Teradata </a> </li>
                                            <li> <a href="/search/category/Testing"> Continuous Integration with Jenkins </a> </li>
                                            <li> <a href="/search/category/Testing"> Advanced Predictive Modeling in R </a> </li>
                                            <li> <a href="/search/category/Testing"> Machine Learning with Mahout - Self-Paced </a> </li>
                                            <li class="view-all"><button>View all Courses</button></li>
                                        </ul>
                                    </li>
                                    <li><a href="KnowledgeCenter/allwebinar.html" target="_self"> All Courses</a> </li>
                                </ul>
                            </div>
                            <form id="cb_searchbox" onsubmit="return formSubmit('search-inp')" class="visible-lg visible-md">
                                <div class="ui-input-text ui-body-inherit ui-corner-all ui-shadow-inset"><input type="text" placeholder="What do you want to learn today?" class="search_inp collapse" id="search-inp" name="q"></div>
                                <i class="icon-search search_ico" onclick="formSubmit('search-inp', false)"></i>
                            </form>
                        </li>
                    </ul>
                    <div class="visible-sm visible-xs mobsearch">
                    	<form>
                            <a data-toggle="collapse" href="#mobsearch" aria-expanded="false" aria-controls="mobsearch">
                                <i onclick="formSubmit('search-inp', false)" class="icon-search visible-sm visible-xs"></i>
                            </a>
                            <div class="collapse search-course" id="mobsearch" aria-expanded="false">
                            	<span>
                                	<input type="text" name="q" id="search-ind" class="search_inp" placeholder="What do you want to learn today?">
                                	<i onclick="formSubmit('search-inp', false)" class="icon-search"></i>
                                </span>
                            </div>
                        </form>
                    </div>
                    
                    <!--ddl ends-->
                    
                    <ul class="nav navbar-nav navbar-right profile">
                        <li class="dropdown userdrop"> 
                            <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> 
                                <span class="webinar-profile-name"> <?php 

 echo !empty($users) ? $users['fname'] : "";


?></span> <img src="img/defaultpp.png" class="img30" alt=""> 
                            </a>
                            <ul class="dropdown-menu user-menu profile-xs">
                                <li><a href="javascript:void(0);">My Profile</a></li> 
                                <li><a href="javascript:void(0);">Activity Stream</a></li>
                                <li class="dropuserlist"><a href="javascript:void(0);">My Courses</a></li>
                                <li class="dropuserlist"><a href="javascript:void(0);">All Courses</a></li>
                                <li><a href="javascript:void(0);">My Wishlist</a></li>
                                <li class="dropuserlist"><a href="javascript:void(0);">Refer</a></li>
                                <li class="dropuserlist"><a href="javascript:void(0);">Blog</a></li>
                                <li class="dropuserlist"><a href="javascript:void(0);">Forum</a></li>
                                <li><a href="javascript:void(0);">Change Password</a></li>
                                <li><a href="<?php echo $this->Url->build('/users/logout', true);?>">Logout</a></li>
                            </ul>
                        </li>                        
                    </ul>
                    <ul class="nav navbar-nav navbar-right notificationdropdown webinar-notify-panel">
                        <li class="dropdown notifydrop"> 
                            <a class="dropdown-toggle note-pos" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> 
                                <span style="position: absolute;"> <i class="icon-notification"></i> </span> 
                                <sup class="notificationcount webinar-count">10</sup> 
                            </a>
                            <ul class="dropdown-menu notify arrow notify-menu dropdown-menu-scrollbar">
                                <li>You have 9 new notification</li>
                                <li> <a href="javascript:void(0);"> <span>Your class 3 for Course Big Data Hadoop is about to start in 15 mins</span> <br>
                                    <small>1 Minute ago</small> </a> </li>
                                <li> <a href="javascript:void(0);"> <span>Big Data is trending - CTA: Home/Category/Course</span> <br>
                                    <small>9 hours ago</small> </a> </li>
                                <li> <a href="javascript:void(0);"> <span>Recommended courses for you - Angular JS</span> <br>
                                    <small>16 hours ago</small> </a> </li>
                                <li class="viewed"> <a href="javascript:void(0);"> <span></span>You have successfully paid Rs 19,000 towards course Big Data Hadoop <br>
                                    <small>20 hours ago</small> </a> </li>
                                <li class="viewed"> <a href="javascript:void(0);"> <span></span>Your account has been credited with Rs 9,750 <br>
                                    <small>1 days ago</small> </a> </li>
                                <li class="viewed"> <a href="javascript:void(0);"> <span></span>You have  successfully enrolled in course Big Data Hadoop <br>
                                    <small>2 days ago</small> </a> </li>
                                <li class="viewed"> <a href="javascript:void(0);"> <span></span>Your course material is available in LMS <br>
                                    <small>3 days ago</small> </a> </li>
                                <li class="viewed"> <a href="javascript:void(0);"> <span>Monsoon special: Extra 20% off on course Big Data Hadoop</span> <br>
                                    <small>4 days ago</small> </a> </li>
                                <li class="viewed"> <a href="javascript:void(0);"> <span>Your class 1 for Course Big Data Hadoop is in progress</span> <br>
                                    <small>5 days ago</small> </a> </li>
                            </ul>
                        </li>
                    </ul>
                    <div class="navbar-collapse collapse navbar-right" id="navbar" aria-expanded="false">
                        <ul class="nav navbar-nav home-login hidden-sm hidden-xs">
                            <li><a href="javascript:void(0)">Refer</a></li>
                            <li>
                                <div class="dropdown menu-dropdown"> 
                                	<a href="javascript:void(0)" class="dropdown-toggle" id="dropdownMenu3" data-toggle="dropdown" aria-expanded="true"> Courses <i class="fa fa-angle-down"></i> </a>
                                    <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu3">
                                        <li> <a href="/mycourses">My Courses</a> </li>
                                        <li> <a href="/all-courses">All Courses</a> </li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <div class="dropdown menu-dropdown"> 
                                    <a href="javascript:void(0)" class="dropdown-toggle" id="dropdownMenu4" data-toggle="dropdown" aria-expanded="true"> Community <i class="fa fa-angle-down"></i> </a>
                                    <ul aria-labelledby="dropdownMenu4" role="menu" class="dropdown-menu">
                                        <li> <a href="/communities">Forum</a> </li>
                                        <li><a target="_blank" href="/blog">Blog</a></li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </section>
    </header>
 <header id="header-II" class="headerbeforesignin"  <?= !empty($users) ? 'style="display:none;"' : '';?>>
        <section>
            <nav style="" role="navigation" class="navbar navbar-inverse navbar-fixed-top navbar-homepage">
                <div class="container menubar-visibility">
                    <div class="navbar-header">
                        <a href="http://www.dev-edureka.co" class="navbar-brand"> <img alt="edureka!" src="img/logo.png"> </a> 			
                    </div>
                    
                    <!-- ddl starts-->
                    <ul class="list-unstyled course-search-box-nav">
                        <li class="search-nav pull-left">
                            <div class="dropdown"> 
                                <a id="dropdownMenu1" class="select_down dropdown-toggle search-drop menu-common" aria-expanded="true" data-toggle="dropdown" href="javascript:void(0)">
                                    <i class="icon-menu"></i>
                                </a>
                                <ul role="menu" aria-labelledby="dropdownMenu1" class="dropdown-menu list-inline">
                                    <li class="active"> <a href="/search/category/Big+Data+Analytics"> Big Data Analytics </a> 
                                    	<ul class="level-2">
                                            <li> <a href="/search/category/Testing"> Big Data and Hadoop </a> </li>
                                            <li> <a href="/search/category/Testing"> Hadoop Administration </a> </li>
                                            <li> <a href="/search/category/Testing"> Apache Spark and Scala </a> </li>
                                            <li> <a href="/search/category/Testing"> Data Science </a> </li>
                                            <li> <a href="/search/category/Testing"> Mastering Python </a> </li>
                                            <li> <a href="/search/category/Testing"> Mastering Data Analytics with R </a> </li>
                                            <li> <a href="/search/category/Testing"> Data Visualization With Tableau </a> </li>
                                            <li> <a href="/search/category/Testing"> Course Icon Talend For Big Data </a> </li>
                                            <li> <a href="/search/category/Testing"> Mastering Teradata </a> </li>
                                            <li> <a href="/search/category/Testing"> Continuous Integration with Jenkins </a> </li>
                                            <li> <a href="/search/category/Testing"> Advanced Predictive Modeling in R </a> </li>
                                            <li> <a href="/search/category/Testing"> Machine Learning with Mahout - Self-Paced </a> </li>
                                            <li class="view-all"><button>View all Courses</button></li>
                                        </ul>
                                    </li>
                                    <li> <a href="/search/category/Big+Data+NoSQL"> Big Data NoSQL </a> 
                                    	<ul class="level-2">
                                            <li> <a href="/search/category/Testing"> Big Data and Hadoop </a> </li>
                                            <li> <a href="/search/category/Testing"> Hadoop Administration </a> </li>
                                            <li> <a href="/search/category/Testing"> Apache Spark and Scala </a> </li>
                                            <li> <a href="/search/category/Testing"> Course Icon Talend For Big Data </a> </li>
                                            <li> <a href="/search/category/Testing"> Mastering Teradata </a> </li>
                                            <li> <a href="/search/category/Testing"> Continuous Integration with Jenkins </a> </li>
                                            <li> <a href="/search/category/Testing"> Advanced Predictive Modeling in R </a> </li>
                                            <li> <a href="/search/category/Testing"> Machine Learning with Mahout - Self-Paced </a> </li>
                                            <li class="view-all"><button>View all Courses</button></li>
                                        </ul>
                                    </li>
                                    <li> <a href="/search/category/Testing"> Operations </a> 
                                    	<ul class="level-2">
                                            <li> <a href="/search/category/Testing"> Big Data and Hadoop </a> </li>
                                            <li> <a href="/search/category/Testing"> Hadoop Administration </a> </li>
                                            <li> <a href="/search/category/Testing"> Apache Spark and Scala </a> </li>
                                            <li> <a href="/search/category/Testing"> Data Science </a> </li>
                                            <li> <a href="/search/category/Testing"> Mastering Python </a> </li>
                                            <li> <a href="/search/category/Testing"> Mastering Teradata </a> </li>
                                            <li> <a href="/search/category/Testing"> Continuous Integration with Jenkins </a> </li>
                                            <li> <a href="/search/category/Testing"> Advanced Predictive Modeling in R </a> </li>
                                            <li> <a href="/search/category/Testing"> Machine Learning with Mahout - Self-Paced </a> </li>
                                            <li class="view-all"><button>View all Courses</button></li>
                                        </ul>
                                    </li>
                                    <li> <a href="/search/category/Testing"> Finance </a> 
                                    	<ul class="level-2">
                                            <li> <a href="/search/category/Testing"> Big Data and Hadoop </a> </li>
                                            <li> <a href="/search/category/Testing"> Hadoop Administration </a> </li>
                                            <li> <a href="/search/category/Testing"> Apache Spark and Scala </a> </li>
                                            <li> <a href="/search/category/Testing"> Data Science </a> </li>
                                            <li> <a href="/search/category/Testing"> Mastering Python </a> </li>
                                            <li> <a href="/search/category/Testing"> Mastering Data Analytics with R </a> </li>
                                            <li> <a href="/search/category/Testing"> Data Visualization With Tableau </a> </li>
                                            <li> <a href="/search/category/Testing"> Course Icon Talend For Big Data </a> </li>
                                            <li class="view-all"><button>View all Courses</button></li>
                                        </ul>
                                    </li>
                                    <li> <a href="/search/category/Testing"> Marketing </a> 
                                    	<ul class="level-2">
                                            <li> <a href="/search/category/Testing"> Big Data and Hadoop </a> </li>
                                            <li> <a href="/search/category/Testing"> Hadoop Administration </a> </li>
                                            <li> <a href="/search/category/Testing"> Apache Spark and Scala </a> </li>
                                            <li> <a href="/search/category/Testing"> Data Science </a> </li>
                                            <li> <a href="/search/category/Testing"> Mastering Python </a> </li>
                                            <li> <a href="/search/category/Testing"> Mastering Data Analytics with R </a> </li>
                                            <li> <a href="/search/category/Testing"> Data Visualization With Tableau </a> </li>
                                            <li> <a href="/search/category/Testing"> Advanced Predictive Modeling in R </a> </li>
                                            <li> <a href="/search/category/Testing"> Machine Learning with Mahout - Self-Paced </a> </li>
                                            <li class="view-all"><button>View all Courses</button></li>
                                        </ul>
                                    </li>
                                    <li> <a href="/search/category/Testing"> Engineering </a> 
                                    	<ul class="level-2">
                                            <li> <a href="/search/category/Testing"> Big Data and Hadoop </a> </li>
                                            <li> <a href="/search/category/Testing"> Mastering Teradata </a> </li>
                                            <li> <a href="/search/category/Testing"> Continuous Integration with Jenkins </a> </li>
                                            <li> <a href="/search/category/Testing"> Advanced Predictive Modeling in R </a> </li>
                                            <li> <a href="/search/category/Testing"> Machine Learning with Mahout - Self-Paced </a> </li>
                                            <li class="view-all"><button>View all Courses</button></li>
                                        </ul>
                                    </li>
                                    <li> <a href="/search/category/Testing"> Testing </a> 
                                    	<ul class="level-2">
                                            <li> <a href="/search/category/Testing"> Big Data and Hadoop </a> </li>
                                            <li> <a href="/search/category/Testing"> Hadoop Administration </a> </li>
                                            <li> <a href="/search/category/Testing"> Apache Spark and Scala </a> </li>
                                            <li> <a href="/search/category/Testing"> Data Science </a> </li>
                                            <li> <a href="/search/category/Testing"> Mastering Python </a> </li>
                                            <li> <a href="/search/category/Testing"> Mastering Data Analytics with R </a> </li>
                                            <li> <a href="/search/category/Testing"> Data Visualization With Tableau </a> </li>
                                            <li> <a href="/search/category/Testing"> Course Icon Talend For Big Data </a> </li>
                                            <li> <a href="/search/category/Testing"> Machine Learning with Mahout - Self-Paced </a> </li>
                                            <li class="view-all"><button>View all Courses</button></li>
                                        </ul>
                                    </li>
                                    <li> <a href="/search/category/Cloud+Computing"> Cloud Computing </a> 
                                    	<ul class="level-2">
                                            <li> <a href="/search/category/Testing"> Big Data and Hadoop </a> </li>
                                            <li> <a href="/search/category/Testing"> Hadoop Administration </a> </li>
                                            <li> <a href="/search/category/Testing"> Course Icon Talend For Big Data </a> </li>
                                            <li> <a href="/search/category/Testing"> Mastering Teradata </a> </li>
                                            <li> <a href="/search/category/Testing"> Continuous Integration with Jenkins </a> </li>
                                            <li> <a href="/search/category/Testing"> Advanced Predictive Modeling in R </a> </li>
                                            <li> <a href="/search/category/Testing"> Machine Learning with Mahout - Self-Paced </a> </li>
                                            <li class="view-all"><button>View all Courses</button></li>
                                        </ul>
                                    </li>
                                    <li> <a href="/search/category/Business+Intelligence"> Business Intelligence </a> 
                                    	<ul class="level-2">
                                            <li> <a href="/search/category/Testing"> Data Science </a> </li>
                                            <li> <a href="/search/category/Testing"> Mastering Python </a> </li>
                                            <li> <a href="/search/category/Testing"> Mastering Data Analytics with R </a> </li>
                                            <li> <a href="/search/category/Testing"> Data Visualization With Tableau </a> </li>
                                            <li> <a href="/search/category/Testing"> Course Icon Talend For Big Data </a> </li>
                                            <li> <a href="/search/category/Testing"> Mastering Teradata </a> </li>
                                            <li> <a href="/search/category/Testing"> Continuous Integration with Jenkins </a> </li>
                                            <li> <a href="/search/category/Testing"> Advanced Predictive Modeling in R </a> </li>
                                            <li> <a href="/search/category/Testing"> Machine Learning with Mahout - Self-Paced </a> </li>
                                            <li class="view-all"><button>View all Courses</button></li>
                                        </ul>
                                    </li>
                                    <li> <a href="/search/category/Systems+%26+Architecture"> Systems &amp; Architecture </a> 
                                    	<ul class="level-2">
                                            <li> <a href="/search/category/Testing"> Big Data and Hadoop </a> </li>
                                            <li> <a href="/search/category/Testing"> Hadoop Administration </a> </li>
                                            <li> <a href="/search/category/Testing"> Apache Spark and Scala </a> </li>
                                            <li> <a href="/search/category/Testing"> Data Science </a> </li>
                                            <li> <a href="/search/category/Testing"> Mastering Python </a> </li>
                                            <li> <a href="/search/category/Testing"> Mastering Data Analytics with R </a> </li>
                                            <li> <a href="/search/category/Testing"> Data Visualization With Tableau </a> </li>
                                            <li> <a href="/search/category/Testing"> Course Icon Talend For Big Data </a> </li>
                                            <li class="view-all"><button>View all Courses</button></li>
                                        </ul>
                                    </li>
                                    <li> <a href="/search/category/System+Engineering"> System Engineering </a> 
                                    	<ul class="level-2">
                                            <li> <a href="/search/category/Testing"> Big Data and Hadoop </a> </li>
                                            <li> <a href="/search/category/Testing"> Hadoop Administration </a> </li>
                                            <li> <a href="/search/category/Testing"> Apache Spark and Scala </a> </li>
                                            <li> <a href="/search/category/Testing"> Data Science </a> </li>
                                            <li> <a href="/search/category/Testing"> Course Icon Talend For Big Data </a> </li>
                                            <li> <a href="/search/category/Testing"> Mastering Teradata </a> </li>
                                            <li> <a href="/search/category/Testing"> Continuous Integration with Jenkins </a> </li>
                                            <li> <a href="/search/category/Testing"> Advanced Predictive Modeling in R </a> </li>
                                            <li> <a href="/search/category/Testing"> Machine Learning with Mahout - Self-Paced </a> </li>
                                            <li class="view-all"><button>View all Courses</button></li>
                                        </ul>
                                    </li>
                                    <li> <a href="/search/category/Mobile+Development"> Mobile Development </a> 
                                    	<ul class="level-2">
                                            <li> <a href="/search/category/Testing"> Big Data and Hadoop </a> </li>
                                            <li> <a href="/search/category/Testing"> Hadoop Administration </a> </li>
                                            <li> <a href="/search/category/Testing"> Apache Spark and Scala </a> </li>
                                            <li> <a href="/search/category/Testing"> Data Science </a> </li>
                                            <li> <a href="/search/category/Testing"> Mastering Python </a> </li>
                                            <li> <a href="/search/category/Testing"> Mastering Data Analytics with R </a> </li>
                                            <li> <a href="/search/category/Testing"> Advanced Predictive Modeling in R </a> </li>
                                            <li> <a href="/search/category/Testing"> Machine Learning with Mahout - Self-Paced </a> </li>
                                            <li class="view-all"><button>View all Courses</button></li>
                                        </ul>
                                    </li>
                                    <li> <a href="/search/category/Frameworks"> Frameworks </a> 
                                    	<ul class="level-2">
                                            <li> <a href="/search/category/Testing"> Data Science </a> </li>
                                            <li> <a href="/search/category/Testing"> Course Icon Talend For Big Data </a> </li>
                                            <li> <a href="/search/category/Testing"> Mastering Teradata </a> </li>
                                            <li> <a href="/search/category/Testing"> Continuous Integration with Jenkins </a> </li>
                                            <li> <a href="/search/category/Testing"> Advanced Predictive Modeling in R </a> </li>
                                            <li> <a href="/search/category/Testing"> Machine Learning with Mahout - Self-Paced </a> </li>
                                            <li class="view-all"><button>View all Courses</button></li>
                                        </ul>
                                    </li>
                                    <li> <a href="/search/category/Project+Management"> Project Management </a> 
                                    	<ul class="level-2">
                                            <li> <a href="/search/category/Testing"> Big Data and Hadoop </a> </li>
                                            <li> <a href="/search/category/Testing"> Hadoop Administration </a> </li>
                                            <li> <a href="/search/category/Testing"> Apache Spark and Scala </a> </li>
                                            <li> <a href="/search/category/Testing"> Data Science </a> </li>
                                            <li> <a href="/search/category/Testing"> Mastering Python </a> </li>
                                            <li> <a href="/search/category/Testing"> Mastering Data Analytics with R </a> </li>
                                            <li class="view-all"><button>View all Courses</button></li>
                                        </ul>
                                    </li>
                                    <li> <a href="/search/category/Programming"> Programming </a> 
                                    	<ul class="level-2">
                                            <li> <a href="/search/category/Testing"> Big Data and Hadoop </a> </li>
                                            <li> <a href="/search/category/Testing"> Hadoop Administration </a> </li>
                                            <li> <a href="/search/category/Testing"> Apache Spark and Scala </a> </li>
                                            <li> <a href="/search/category/Testing"> Data Science </a> </li>
                                            <li> <a href="/search/category/Testing"> Course Icon Talend For Big Data </a> </li>
                                            <li> <a href="/search/category/Testing"> Mastering Teradata </a> </li>
                                            <li> <a href="/search/category/Testing"> Continuous Integration with Jenkins </a> </li>
                                            <li> <a href="/search/category/Testing"> Advanced Predictive Modeling in R </a> </li>
                                            <li> <a href="/search/category/Testing"> Machine Learning with Mahout - Self-Paced </a> </li>
                                            <li class="view-all"><button>View all Courses</button></li>
                                        </ul>
                                    </li>
                                    <li><a href="KnowledgeCenter/allwebinar.html" target="_self"> All Courses</a> </li>
                                </ul>
                            </div>
                            <form id="cb_searchbox" onsubmit="return formSubmit('search-inp')" class="visible-lg visible-md">
                                <div class="ui-input-text ui-body-inherit ui-corner-all ui-shadow-inset"><input type="text" placeholder="What do you want to learn today?" class="search_inp collapse" id="search-inp" name="q"></div>
                                <i class="icon-search search_ico" onclick="formSubmit('search-inp', false)"></i>
                            </form>
                        </li>
                    </ul>
                    <div class="visible-sm visible-xs mobsearch">
                    	<form>
                            <a data-toggle="collapse" href="#mobsearch" aria-expanded="false" aria-controls="mobsearch">
                                <i onclick="formSubmit('search-inp', false)" class="fa fa-search search_ico visible-sm visible-xs"></i>
                            </a>
                            <div class="collapse search-course" id="mobsearch" aria-expanded="false">
                            	<span>
                                	<input type="text" name="q" id="search-inp" class="search_inp" placeholder="What do you want to learn today?">
                                	<i onclick="formSubmit('search-inp', false)" class="fa fa-search search_ico"></i>
                                </span>
                            </div>
                        </form>
                    </div>
                    <!--ddl ends-->
                    <a class="signin" href="javascript:void(0);" data-toggle="modal" data-target="#myModal">Sign In</a>
                    <div class="navbar-collapse collapse navbar-right" id="navbar" aria-expanded="false">
                        <ul class="nav navbar-nav home-login hidden-sm hidden-xs">
                            <li><a href="javascript:void(0)">For Instructors</a></li>
                            <li><a href="javascript:void(0)">Courses</a></li>
                            <li><a href="javascript:void(0)">Blog</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </section>
    </header>
    <!-- Login/SignUp Starts -->
   	<div class="modal modal-wide fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog newloginmodal centered-quiz" role="document">
        <div class="modal-content loginmodal">
            <button type="button" class="close modalclose" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          	<ul class="nav nav-tabs">
                <li class="active"><a class="logintab" data-toggle="tab" href="#LogIn"><span>Log In</span></a></li>
                <li class=""><a class="signuptab" data-toggle="tab" href="#SignUp"><span>Sign Up</span></a></li>
            </ul>

            <div class="tab-content">
  

		<div id="LogIn" class="tab-pane fade in active">
			<form action="/users/login" accept-charset="utf-8" method="post">
<?= $this->Flash->render('login') ?>
                	<div style="display:none;"><input type="hidden" value="POST" name="_method"></div>
		
                	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 loginsec">
                    	<div class="input-wrapper">
                              <input id="email" name="email" class="inputlogin" type="email" ><!--use class loginerror to display the red border-->
                              <label class="labellogin" for="user">Email ID</label>
                              <span class="loginerrortextemail">Please enter a valid email address</span>
                        </div>
                              
                        <div class="input-wrapper">
                              <input type="password" id="password" name="password" class="inputlogin loginerror" >
                              <label class="labellogin " for="user">Password</label><!--use class loginerror to display the red border around the input boxes-->
                              <span class="showpass hidden-xs" id="passshow1">show</span>
                              <span class="loginerrortextpass">Password should be minimum of 8 characters</span>
                        </div>
                        <div class="forgotpasssec">
                        	<span class="forgot">
                        		<a href="#" class="forgotpass">Forgot Password ?</a>
                            </span>
                            <button class="startlearningbtn" type="submit">START LEARNING</button>
                        </div>
			
	</form>
                    </div>
                    
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 forgotpasssection">
                    <div class="loginemailsuccess hidden-xs"><i class="fa fa-check-circle">&nbsp;</i><span class="successmsgnonresp">Verification Code sent to er.creator@gmail.com</span></div>
                        <div class="form-group forgotpass-wrapper"> 
                              <input class="inputforgotpassemail" type="email" id=""  placeholder="user@email.com"><!--use class loginerror to display the red border-->
                              <span class="changeemail" id="">change ?</span>
                        </div>
                              
                        <div class="form-group forgotpass-wrapper">
                              <input class="inputforgotpasspwd " type="text" id=""  placeholder="Verification Code">
                              <span class="resendcode" id="">resend ?</span>
                              <span class="loginerrortextpass">Incorrect Verification Code.</span>
                        </div>
                        <div class="form-group forgotpass-wrapper">
                              <input class="inputforgotpass " type="password" id="pwd2"  placeholder="New Password">
                              <span class="showpass2 hidden-xs" id="passshow2">show</span>
                               <span class="loginerrortextpass">Password should be minimum of 8 characters</span>
                        </div>
                        <div class="resetpasssec">
                            <button class="resetpassbtn" type="button">RESET PASSWORD</button>
                        </div>
                        <div class="forgotpass-wrapper">
                            <div class="cantfindmail">
                            * Can't find the email? Check your Spam folder OR drop an email at  <a href="mailto:support@edureka.co">support@edureka.co</a> or call us at +91 88808 62004
                            </div>
                        </div>
                    </div> 
                </div>
                <div id="SignUp" class="tab-pane fade">
                	<form action="/users/register" accept-charset="utf-8" method="post">
                	<?= $this->Flash->render('register') ?>
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 signupsecsec">
                    	<div class="input-wrapper">
                              <input class="inputsignup1 " type="text" id="fname" name="fname" ><!--use class loginerror to display the red border-->
                              <label class="labellogin" for="user">First Name<span class="aster1">*</span></label>
                              <span class="loginerrortextemail">Please enter your first name</span>
                        </div>
                        <div class="input-wrapper">
                              <input class="inputsignup3 " type="text" id="lname" name="lname"><!--use class loginerror to display the red border-->
                              <label class="labellogin" for="user">Last Name<span class="aster3">*</span></label>
                              <span class="loginerrortextemail">Please enter a valid last name</span>
                        </div>     
                    	<div class="input-wrapper">
                              <input class="inputsignup2 " type="email" id="email" name="email" ><!--use class loginerror to display the red border-->
                              <label class="labellogin" for="user">Email ID<span class="aster2">*</span></label>
                              <span class="loginerrortextemail">Please enter a valid email address</span>
                        </div>
                        <div class="input-wrapper">
                              <input class="inputsignup4 " type="password" id="pwd3" name="password"><!--use class loginerror to display the red border around the input boxes-->
                              <label class="labellogin" for="user">Password<span class="aster4">*</span></label>
                              <span class="showpass1 hidden-xs" id="passshow3">show</span>
                              <span class="loginerrortextpass">Password should be minimum of 8 characters</span>
                        </div>
                        <div class="createaccsec">
                        	<span class="termsandcond">By Signing up you agree to our <a href="#" class="terms">T&C</a> and <a href="" class="conditions">Privacy Policy.</a></span>
                            <button class="createaccbtn" type="submit">CREATE AN ACCOUNT</button>
                        </div>

	</form>
                    </div>
                </div>
          
        </div>
      </div>
    </div>
      <div class="col-xs-12 hidden-lg successfooter">
        <span class="loginemailsuccessresp"><i class="fa fa-check-circle"></i>&nbsp;<span class="successmsg"> Verification Code sent to abhijeet@gmail.com</span></span>
    </div>   
    </div>
    <!-- Login/SignUp Ends --> 
    
<!-- Video section for homepage starts -->    
   
<div class="video-panel">
    <video muted id="example_video_1" class="video-js vjs-default-skin video-home videomain"  width="100%" height="707" poster="" data-setup='{"controls": false, "autoplay": true, "preload": "auto", "loop": true}'>
        <source id="src1" src="img/video/edureka.mp4" type='video/mp4' />
        <source id="src2" src="img/video/edureka.webm" type='video/webm' />
        <p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
    </video>
</div>

<!-- Video section for homepage ends -->

<!-- <div class="mob-imgpanel" style="display:none;">

</div> -->

	<section class="home-course-search">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="text-center">Instructor-led live online courses with<br> 24x7 on demand support</h1>

                <div class="search-for-course">
                    <table>
                        <tr>
                            <td>
                                <form id="cb_searchbox1">
                                    <div id="remote" class="typeahead-container homesearch">
                                        <div class="typeahead-field">
                                            <input maxlength="255" placeholder="Search for a Course"
                                                   id="search-inp1" autocomplete="off" name="q"
                                                   onkeyup="return submitenter('search-inp1', event)" value=""
                                                   type="text"> <span class="typeahead-button"> <i
                                                    id="search-button-bottom"
                                                    class="fa fa-search search_ico btn-link"
                                                    onclick="formSubmit('search-inp1', false)"></i>
                                                <i id="autosearchload_bottom" style="display:none;" class="fa fa-circle-o-notch fa-spin search_ico"></i>
                                            </span>
                                        </div>
                                    </div>
                            	</form>
                            </td>
                            <td class="text-center search-items">&nbsp;OR&nbsp;</td>
                            <td class="search-items">
                                <a class="ed-primary-btn" href="">Browse Courses</a>
                            </td>
                        </tr>
                    </table>
                    <p class="popular-course">
                        Jump to : <a href="">Big Data</a>,
                        <a href="">PMP Certification</a>,
                        <a href="">Angular JS</a>,
                        <a href="">Digital Marketing</a>,
                        <a href="">Mobile</a>,
                        <a href="">Apache Spark</a>,
                        <a href="">Java</a>,
                        <a href="">Analytics</a>,
                        <a href="">Data Science</a>
                    </p>
                    <ul id="search-list" class="list-inline">
                        <li>
                            <h4>333,491</h4>
                            <p>Satisfied Learners</p>
                        </li>
                        <li>
                            <h4>50,000+ Hrs</h4>
                            <p>Classes Delivered</p>
                        </li>
                        <li>
                            <h4>10000+</h4>
                            <p>Assignments</p>
                        </li>
                        <li>
                            <h4>1000+</h4>
                            <p>Projects</p>
                        </li>
                    </ul>

                </div>
            </div>
        </div>
    </div>
	</section>

<section class="allcourselist">
<!--Trending Courses Section starts-->
<section class="coursesection">
    <div class="container">
        <div class="row">
            <br>
        	<h4 class="text-center border-side"><span>Trending Courses</span></h4>
            <br>
            <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12 trendcoursearea">
                <div id="owl-demo" class="owl-carousel-course owl-theme">
                  <div class="item">
                  	<ul class="list-inline">
                            <a class="course-anchor" href="/big-data-and-hadoop">
                                <li class="course-list ">
                                    <div class="course-block-wrapper">
                                        <!-- Like Link Options  Variables-->
                                        <div style="background-image: url(./img/bdh2.png);" class="edu-course-image">
                                        </div>
                                    </div>
                                    <h4>Big Data and Hadoop </h4>
                                    	<ul class="list-inline star-rating">
	                                        <i class="fa fa-star starcolor"></i>
                                            <i class="fa fa-star starcolor"></i>
                                            <i class="fa fa-star starcolor"></i>
                                            <i class="fa fa-star starcolor"></i>
                                            <i class="fa fa-star starcolor"></i>
                                         </ul>
                                    <p class="text-muted">
                                        101170 Learners
                                    </p>
                                   <p class="view-upcomingbatch">
                                   	<span> 
                                    	<i class="fa fa-calendar"></i> 
                                        <span class="time-change-wrapper"> Aug </span>
                                        <span class="time-change-wrapper">15</span>
                                        onwards 
                                    </span>
                                   </p>
                                   <h5>
                                       <span class="course-price setprice-166"><b><i class="fa fa-inr" aria-hidden="true"></i>21,995</b><br><small class="text-muted"><i class="fa fa-inr" aria-hidden="true"></i>23,995</small></span>
                                   </h5>
                                </li>
                                <div class="course-hoveritem">
                                    <div class="img-panel-hvr">&nbsp;</div>
                                    <div class="course-list hvr-contnt-portion">
                                        <p style="margin-bottom:0;">
                                            Online Courses: 30 Hrs<br>Assignments: 40 Hrs<br>Project: 20 Hrs<br>Lifetime Access<br> 
                                         </p>
                                     </div>
                                </div>
                            </a>
                        </ul>
                  </div>
                  <div class="item">
                  	<ul class="list-inline">
                            <a class="course-anchor" href="/big-data-and-hadoop">
                                <li class="course-list ">
                                    <div class="course-block-wrapper">
                                        <!-- Like Link Options  Variables-->
                                        <div style="background-image: url(./img/Spark-&-Scala.png);" class="edu-course-image">
                                        </div>
                                    </div>
                                    <h4>Apache Spark and Scala</h4>
                                    	<ul class="list-inline star-rating">
	                                        <i class="fa fa-star starcolor"></i>
                                            <i class="fa fa-star starcolor"></i>
                                            <i class="fa fa-star starcolor"></i>
                                            <i class="fa fa-star starcolor"></i>
                                            <i class="fa fa-star starcolor"></i>
                                         </ul>
                                    <p class="text-muted">
                                        101170 Learners
                                    </p>
                                   <p class="view-upcomingbatch">
                                   	<span> 
                                    	<i class="fa fa-calendar"></i> 
                                        <span class="time-change-wrapper"> Aug </span>
                                        <span class="time-change-wrapper">15</span>
                                        onwards 
                                    </span>
                                   </p>
                                   <h5>
                                       <span class="course-price setprice-166"><b> <i class="fa fa-inr" aria-hidden="true"></i>21,995</b><br><small class="text-muted"><i class="fa fa-inr" aria-hidden="true"></i>23,995</small></span>
                                   </h5>
                                </li>
                                <div class="course-hoveritem">
                                    <div class="img-panel-hvr">&nbsp;</div>
                                    <div class="course-list hvr-contnt-portion">
                                        <p style="margin-bottom:0;">
                                            Online Courses: 30 Hrs<br>Assignments: 40 Hrs<br>Project: 20 Hrs<br>Lifetime Access<br> 
                                         </p>
                                     </div>
                                </div>
                            </a>
                        </ul>	
                  </div>
                  <div class="item">
                  	<ul class="list-inline">
                            <a class="course-anchor" href="/big-data-and-hadoop">
                                <li class="course-list ">
                                    <div class="course-block-wrapper">
                                        <!-- Like Link Options  Variables-->
                                        <div style="background-image: url(./img/Data-Science.png);" class="edu-course-image">
                                        </div>
                                    </div>
                                    <h4>Hadoop Administration</h4>
                                    	<ul class="list-inline star-rating">
	                                        <i class="fa fa-star starcolor"></i>
                                            <i class="fa fa-star starcolor"></i>
                                            <i class="fa fa-star starcolor"></i>
                                            <i class="fa fa-star starcolor"></i>
                                            <i class="fa fa-star starcolor"></i>
                                         </ul>
                                    <p class="text-muted">
                                        101170 Learners
                                    </p>
                                   <p class="view-upcomingbatch">
                                   	<span> 
                                    	<i class="fa fa-calendar"></i> 
                                        <span class="time-change-wrapper"> Aug </span>
                                        <span class="time-change-wrapper">15</span>
                                        onwards 
                                    </span>
                                   </p>
                                   <h5>
                                       <span class="course-price setprice-166"><b> <i class="fa fa-inr" aria-hidden="true"></i>21,995</b><br><small class="text-muted"><i class="fa fa-inr" aria-hidden="true"></i>23,995</small></span>
                                   </h5>
                                </li>
                                <div class="course-hoveritem">
                                    <div class="img-panel-hvr">&nbsp;</div>
                                    <div class="course-list hvr-contnt-portion">
                                        <p style="margin-bottom:0;">
                                            Online Courses: 30 Hrs<br>Assignments: 40 Hrs<br>Project: 20 Hrs<br>Lifetime Access<br> 
                                         </p>
                                     </div>
                                </div>
                            </a>
                        </ul>
                  </div>
                  <div class="item">
                  	<ul class="list-inline">
                            <a class="course-anchor" href="/big-data-and-hadoop">
                                <li class="course-list ">
                                    <div class="course-block-wrapper">
                                        <!-- Like Link Options  Variables-->
                                        <div style="background-image: url(./img/salesforcefoundationcombo.png);" class="edu-course-image">
                                        </div>
                                    </div>
                                    <h4>Data Science</h4>
                                    	<ul class="list-inline star-rating">
	                                        <i class="fa fa-star starcolor"></i>
                                            <i class="fa fa-star starcolor"></i>
                                            <i class="fa fa-star starcolor"></i>
                                            <i class="fa fa-star starcolor"></i>
                                            <i class="fa fa-star starcolor"></i>
                                         </ul>
                                    <p class="text-muted">
                                        101170 Learners
                                    </p>
                                   <p class="view-upcomingbatch">
                                   	<span> 
                                    	<i class="fa fa-calendar"></i> 
                                        <span class="time-change-wrapper"> Aug </span>
                                        <span class="time-change-wrapper">15</span>
                                        onwards 
                                    </span>
                                   </p>
                                   <h5>
                                       <span class="course-price setprice-166"><b> <i class="fa fa-inr" aria-hidden="true"></i>21,995</b><br><small class="text-muted"><i class="fa fa-inr" aria-hidden="true"></i>23,995</small></span>
                                   </h5>
                                </li>
                                <div class="course-hoveritem">
                                    <div class="img-panel-hvr">&nbsp;</div>
                                    <div class="course-list hvr-contnt-portion">
                                        <p style="margin-bottom:0;">
                                            Online Courses: 30 Hrs<br>Assignments: 40 Hrs<br>Project: 20 Hrs<br>Lifetime Access<br> 
                                         </p>
                                     </div>
                                </div>
                            </a>
                        </ul>
                  </div>
                  <div class="item">
                  	<ul class="list-inline">
                            <a class="course-anchor" href="/big-data-and-hadoop">
                                <li class="course-list ">
                                    <div class="course-block-wrapper">
                                        <!-- Like Link Options  Variables-->
                                        <div style="background-image: url(./img/Hadoop-Admin.png);" class="edu-course-image">
                                        </div>
                                    </div>
                                    <h4>Big Data and Hadoop &ndash; Instructor-Led Online Course</h4>
                                    	<ul class="list-inline star-rating">
	                                        <i class="fa fa-star starcolor"></i>
                                            <i class="fa fa-star starcolor"></i>
                                            <i class="fa fa-star starcolor"></i>
                                            <i class="fa fa-star starcolor"></i>
                                            <i class="fa fa-star starcolor"></i>
                                         </ul>
                                    <p class="text-muted">
                                        101170 Learners
                                    </p>
                                   <p class="view-upcomingbatch">
                                   	<span> 
                                    	<i class="fa fa-calendar"></i> 
                                        <span class="time-change-wrapper"> Aug </span>
                                        <span class="time-change-wrapper">15</span>
                                        onwards 
                                    </span>
                                   </p>
                                   <h5>
                                       <span class="course-price setprice-166"><b> <i class="fa fa-inr" aria-hidden="true"></i>21,995</b></span>
                                   </h5>
                                </li>
                                <div class="course-hoveritem">
                                    <div class="img-panel-hvr">&nbsp;</div>
                                    <div class="course-list hvr-contnt-portion">
                                        <p style="margin-bottom:0;">
                                            Online Courses: 30 Hrs<br>Assignments: 40 Hrs<br>Project: 20 Hrs<br>Lifetime Access<br> 
                                         </p>
                                     </div>
                                </div>
                            </a>
                        </ul>
                  </div>
                  <div class="item">
                  	<ul class="list-inline">
                            <a class="course-anchor" href="/big-data-and-hadoop">
                                <li class="course-list ">
                                    <div class="course-block-wrapper">
                                        <!-- Like Link Options  Variables-->
                                        <div style="background-image: url(./img/default.png);" class="edu-course-image">
                                        </div>
                                    </div>
                                    <h4>Big Data and Hadoop &ndash; Instructor-Led Online Course</h4>
                                    	<ul class="list-inline star-rating">
	                                        <i class="fa fa-star starcolor"></i>
                                            <i class="fa fa-star starcolor"></i>
                                            <i class="fa fa-star starcolor"></i>
                                            <i class="fa fa-star starcolor"></i>
                                            <i class="fa fa-star starcolor"></i>
                                         </ul>
                                    <p class="text-muted">
                                        101170 Learners
                                    </p>
                                   <p class="view-upcomingbatch">
                                   	<span> 
                                    	<i class="fa fa-calendar"></i> 
                                        <span class="time-change-wrapper"> Aug </span>
                                        <span class="time-change-wrapper">15</span>
                                        onwards 
                                    </span>
                                   </p>
                                   <h5>
                                       <span class="course-price setprice-166"><b> <i class="fa fa-inr" aria-hidden="true"></i>21,995</b></span>
                                   </h5>
                                </li>
                                <div class="course-hoveritem">
                                    <div class="img-panel-hvr">&nbsp;</div>
                                    <div class="course-list hvr-contnt-portion">
                                        <p style="margin-bottom:0;">
                                            Online Courses: 30 Hrs<br>Assignments: 40 Hrs<br>Project: 20 Hrs<br>Lifetime Access<br> 
                                         </p>
                                     </div>
                                </div>
                            </a>
                        </ul>
                  </div>
                  <div class="item">
                  	<ul class="list-inline">
                            <a class="course-anchor" href="/big-data-and-hadoop">
                                <li class="course-list ">
                                    <div class="course-block-wrapper">
                                        <!-- Like Link Options  Variables-->
                                        <div style="background-image: url(./img/default.png);" class="edu-course-image">
                                        </div>
                                    </div>
                                    <h4>Big Data and Hadoop &ndash; Instructor-Led Online Course</h4>
                                    	<ul class="list-inline star-rating">
	                                        <i class="fa fa-star starcolor"></i>
                                            <i class="fa fa-star starcolor"></i>
                                            <i class="fa fa-star starcolor"></i>
                                            <i class="fa fa-star starcolor"></i>
                                            <i class="fa fa-star starcolor"></i>
                                         </ul>
                                    <p class="text-muted">
                                        101170 Learners
                                    </p>
                                   <p class="view-upcomingbatch">
                                   	<span> 
                                    	<i class="fa fa-calendar"></i> 
                                        <span class="time-change-wrapper"> Aug </span>
                                        <span class="time-change-wrapper">15</span>
                                        onwards 
                                    </span>
                                   </p>
                                   <h5>
                                       <span class="course-price setprice-166"><b> <i class="fa fa-inr" aria-hidden="true"></i>21,995</b></span>
                                   </h5>
                                </li>
                                <div class="course-hoveritem">
                                    <div class="img-panel-hvr">&nbsp;</div>
                                    <div class="course-list hvr-contnt-portion">
                                        <p style="margin-bottom:0;">
                                            Online Courses: 30 Hrs<br>Assignments: 40 Hrs<br>Project: 20 Hrs<br>Lifetime Access<br> 
                                         </p>
                                     </div>
                                </div>
                            </a>
                        </ul>
                  </div>
                  <div class="item">
                  	<ul class="list-inline">
                            <a class="course-anchor" href="/big-data-and-hadoop">
                                <li class="course-list ">
                                    <div class="course-block-wrapper">
                                        <!-- Like Link Options  Variables-->
                                        <div style="background-image: url(./img/default.png);" class="edu-course-image">
                                        </div>
                                    </div>
                                    <h4>Big Data and Hadoop &ndash; Instructor-Led Online Course</h4>
                                    	<ul class="list-inline star-rating">
	                                        <i class="fa fa-star starcolor"></i>
                                            <i class="fa fa-star starcolor"></i>
                                            <i class="fa fa-star starcolor"></i>
                                            <i class="fa fa-star starcolor"></i>
                                            <i class="fa fa-star starcolor"></i>
                                         </ul>
                                    <p class="text-muted">
                                        101170 Learners
                                    </p>
                                   <p class="view-upcomingbatch">
                                   	<span> 
                                    	<i class="fa fa-calendar"></i> 
                                        <span class="time-change-wrapper"> Aug </span>
                                        <span class="time-change-wrapper">15</span>
                                        onwards 
                                    </span>
                                   </p>
                                   <h5>
                                       <span class="course-price setprice-166"><b> <i class="fa fa-inr" aria-hidden="true"></i>21,995</b></span>
                                   </h5>
                                </li>
                                <div class="course-hoveritem">
                                    <div class="img-panel-hvr">&nbsp;</div>
                                    <div class="course-list hvr-contnt-portion">
                                        <p style="margin-bottom:0;">
                                            Online Courses: 30 Hrs<br>Assignments: 40 Hrs<br>Project: 20 Hrs<br>Lifetime Access<br> 
                                         </p>
                                     </div>
                                </div>
                            </a>
                        </ul>
                  </div>
                  <div class="item">
                  	<ul class="list-inline">
                            <a class="course-anchor" href="/big-data-and-hadoop">
                                <li class="course-list ">
                                    <div class="course-block-wrapper">
                                        <!-- Like Link Options  Variables-->
                                        <div style="background-image: url(./img/default.png);" class="edu-course-image">
                                        </div>
                                    </div>
                                    <h4>9 Big Data and Hadoop &ndash; Instructor-Led Online Course</h4>
                                    	<ul class="list-inline star-rating">
	                                        <i class="fa fa-star starcolor"></i>
                                            <i class="fa fa-star starcolor"></i>
                                            <i class="fa fa-star starcolor"></i>
                                            <i class="fa fa-star starcolor"></i>
                                            <i class="fa fa-star starcolor"></i>
                                         </ul>
                                    <p class="text-muted">
                                        101170 Learners
                                    </p>
                                   <p class="view-upcomingbatch">
                                   	<span> 
                                    	<i class="fa fa-calendar"></i> 
                                        <span class="time-change-wrapper"> Aug </span>
                                        <span class="time-change-wrapper">15</span>
                                        onwards 
                                    </span>
                                   </p>
                                   <h5>
                                       <span class="course-price setprice-166"><b> <i class="fa fa-inr" aria-hidden="true"></i>21,995</b></span>
                                   </h5>
                                </li>
                                <div class="course-hoveritem">
                                    <div class="img-panel-hvr">&nbsp;</div>
                                    <div class="course-list hvr-contnt-portion">
                                        <p style="margin-bottom:0;">
                                            Online Courses: 30 Hrs<br>Assignments: 40 Hrs<br>Project: 20 Hrs<br>Lifetime Access<br> 
                                         </p>
                                     </div>
                                </div>
                            </a>
                        </ul>
                  </div>
                </div>
            </div>
        </div>
   </div>	

</section>  
<!--Trending Courses Section ends-->  
<!--Popular Courses Section starts-->
<section class="coursesection">
    <div class="container">
        <div class="row">
            <br>
        	<h4 class="text-center border-side"><span>Popular Courses</span></h4>
            <br>
            <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12 trendcoursearea">
                <div id="owl-demo1" class="owl-carousel-course owl-theme">
                  <div class="item">
                  	<ul class="list-inline">
                            <a class="course-anchor" href="/big-data-and-hadoop">
                                <li class="course-list ">
                                    <div class="course-block-wrapper">
                                        <!-- Like Link Options  Variables-->
                                        <div style="background-image: url(./img/bdh2.png);" class="edu-course-image">
                                        </div>
                                    </div>
                                    <h4>Big Data and Hadoop </h4>
                                    	<ul class="list-inline star-rating">
	                                        <i class="fa fa-star starcolor"></i>
                                            <i class="fa fa-star starcolor"></i>
                                            <i class="fa fa-star starcolor"></i>
                                            <i class="fa fa-star starcolor"></i>
                                            <i class="fa fa-star starcolor"></i>
                                         </ul>
                                    <p class="text-muted">
                                        101170 Learners
                                    </p>
                                   <p class="view-upcomingbatch">
                                   	<span> 
                                    	<i class="fa fa-calendar"></i> 
                                        <span class="time-change-wrapper"> Aug </span>
                                        <span class="time-change-wrapper">15</span>
                                        onwards 
                                    </span>
                                   </p>
                                   <h5>
                                       <span class="course-price setprice-166"><b> <i class="fa fa-inr" aria-hidden="true"></i>21,995</b><br><small class="text-muted"><i class="fa fa-inr" aria-hidden="true"></i>23,995</small></span>
                                   </h5>
                                </li>
                                <div class="course-hoveritem">
                                    <div class="img-panel-hvr">&nbsp;</div>
                                    <div class="course-list hvr-contnt-portion">
                                        <p style="margin-bottom:0;">
                                            Online Courses: 30 Hrs<br>Assignments: 40 Hrs<br>Project: 20 Hrs<br>Lifetime Access<br> 
                                         </p>
                                     </div>
                                </div>
                            </a>
                        </ul>
                  </div>
                  <div class="item">
                  	<ul class="list-inline">
                            <a class="course-anchor" href="/big-data-and-hadoop">
                                <li class="course-list ">
                                    <div class="course-block-wrapper">
                                        <!-- Like Link Options  Variables-->
                                        <div style="background-image: url(./img/bdh2.png);" class="edu-course-image">
                                        </div>
                                    </div>
                                    <h4>Apache Spark and Scala</h4>
                                    	<ul class="list-inline star-rating">
	                                        <i class="fa fa-star starcolor"></i>
                                            <i class="fa fa-star starcolor"></i>
                                            <i class="fa fa-star starcolor"></i>
                                            <i class="fa fa-star starcolor"></i>
                                            <i class="fa fa-star starcolor"></i>
                                         </ul>
                                    <p class="text-muted">
                                        101170 Learners
                                    </p>
                                   <p class="view-upcomingbatch">
                                   	<span> 
                                    	<i class="fa fa-calendar"></i> 
                                        <span class="time-change-wrapper"> Aug </span>
                                        <span class="time-change-wrapper">15</span>
                                        onwards 
                                    </span>
                                   </p>
                                   <h5>
                                       <span class="course-price setprice-166"><b> <i class="fa fa-inr" aria-hidden="true"></i>21,995</b><br><small class="text-muted"><i class="fa fa-inr" aria-hidden="true"></i>23,995</small></span>
                                   </h5>
                                </li>
                                <div class="course-hoveritem">
                                    <div class="img-panel-hvr">&nbsp;</div>
                                    <div class="course-list hvr-contnt-portion">
                                        <p style="margin-bottom:0;">
                                            Online Courses: 30 Hrs<br>Assignments: 40 Hrs<br>Project: 20 Hrs<br>Lifetime Access<br> 
                                         </p>
                                     </div>
                                </div>
                            </a>
                        </ul>	
                  </div>
                  <div class="item">
                  	<ul class="list-inline">
                            <a class="course-anchor" href="/big-data-and-hadoop">
                                <li class="course-list ">
                                    <div class="course-block-wrapper">
                                        <!-- Like Link Options  Variables-->
                                        <div style="background-image: url(./img/bdh2.png);" class="edu-course-image">
                                        </div>
                                    </div>
                                    <h4>Hadoop Administration</h4>
                                    	<ul class="list-inline star-rating">
	                                        <i class="fa fa-star starcolor"></i>
                                            <i class="fa fa-star starcolor"></i>
                                            <i class="fa fa-star starcolor"></i>
                                            <i class="fa fa-star starcolor"></i>
                                            <i class="fa fa-star starcolor"></i>
                                         </ul>
                                    <p class="text-muted">
                                        101170 Learners
                                    </p>
                                   <p class="view-upcomingbatch">
                                   	<span> 
                                    	<i class="fa fa-calendar"></i> 
                                        <span class="time-change-wrapper"> Aug </span>
                                        <span class="time-change-wrapper">15</span>
                                        onwards 
                                    </span>
                                   </p>
                                   <h5>
                                       <span class="course-price setprice-166"><b> <i class="fa fa-inr" aria-hidden="true"></i>21,995</b><br><small class="text-muted"><i class="fa fa-inr" aria-hidden="true"></i>23,995</small></span>
                                   </h5>
                                </li>
                                <div class="course-hoveritem">
                                    <div class="img-panel-hvr">&nbsp;</div>
                                    <div class="course-list hvr-contnt-portion">
                                        <p style="margin-bottom:0;">
                                            Online Courses: 30 Hrs<br>Assignments: 40 Hrs<br>Project: 20 Hrs<br>Lifetime Access<br> 
                                         </p>
                                     </div>
                                </div>
                            </a>
                        </ul>
                  </div>
                  <div class="item">
                  	<ul class="list-inline">
                            <a class="course-anchor" href="/big-data-and-hadoop">
                                <li class="course-list ">
                                    <div class="course-block-wrapper">
                                        <!-- Like Link Options  Variables-->
                                        <div style="background-image: url(./img/bdh2.png);" class="edu-course-image">
                                        </div>
                                    </div>
                                    <h4>Data Science</h4>
                                    	<ul class="list-inline star-rating">
	                                        <i class="fa fa-star starcolor"></i>
                                            <i class="fa fa-star starcolor"></i>
                                            <i class="fa fa-star starcolor"></i>
                                            <i class="fa fa-star starcolor"></i>
                                            <i class="fa fa-star starcolor"></i>
                                         </ul>
                                    <p class="text-muted">
                                        101170 Learners
                                    </p>
                                   <p class="view-upcomingbatch">
                                   	<span> 
                                    	<i class="fa fa-calendar"></i> 
                                        <span class="time-change-wrapper"> Aug </span>
                                        <span class="time-change-wrapper">15</span>
                                        onwards 
                                    </span>
                                   </p>
                                   <h5>
                                       <span class="course-price setprice-166"><b> <i class="fa fa-inr" aria-hidden="true"></i>21,995</b><br><small class="text-muted"><i class="fa fa-inr" aria-hidden="true"></i>23,995</small></span>
                                   </h5>
                                </li>
                                <div class="course-hoveritem">
                                    <div class="img-panel-hvr">&nbsp;</div>
                                    <div class="course-list hvr-contnt-portion">
                                        <p style="margin-bottom:0;">
                                            Online Courses: 30 Hrs<br>Assignments: 40 Hrs<br>Project: 20 Hrs<br>Lifetime Access<br> 
                                         </p>
                                     </div>
                                </div>
                            </a>
                        </ul>
                  </div>
                  <div class="item">
                  	<ul class="list-inline">
                            <a class="course-anchor" href="/big-data-and-hadoop">
                                <li class="course-list ">
                                    <div class="course-block-wrapper">
                                        <!-- Like Link Options  Variables-->
                                        <div style="background-image: url(./img/bdh2.png);" class="edu-course-image">
                                        </div>
                                    </div>
                                    <h4>Big Data and Hadoop &ndash; Instructor-Led Online Course</h4>
                                    	<ul class="list-inline star-rating">
	                                        <i class="fa fa-star starcolor"></i>
                                            <i class="fa fa-star starcolor"></i>
                                            <i class="fa fa-star starcolor"></i>
                                            <i class="fa fa-star starcolor"></i>
                                            <i class="fa fa-star starcolor"></i>
                                         </ul>
                                    <p class="text-muted">
                                        101170 Learners
                                    </p>
                                   <p class="view-upcomingbatch">
                                   	<span> 
                                    	<i class="fa fa-calendar"></i> 
                                        <span class="time-change-wrapper"> Aug </span>
                                        <span class="time-change-wrapper">15</span>
                                        onwards 
                                    </span>
                                   </p>
                                   <h5>
                                       <span class="course-price setprice-166"><b> <i class="fa fa-inr" aria-hidden="true"></i>21,995</b></span>
                                   </h5>
                                </li>
                                <div class="course-hoveritem">
                                    <div class="img-panel-hvr">&nbsp;</div>
                                    <div class="course-list hvr-contnt-portion">
                                        <p style="margin-bottom:0;">
                                            Online Courses: 30 Hrs<br>Assignments: 40 Hrs<br>Project: 20 Hrs<br>Lifetime Access<br> 
                                         </p>
                                     </div>
                                </div>
                            </a>
                        </ul>
                  </div>
                  <div class="item">
                  	<ul class="list-inline">
                            <a class="course-anchor" href="/big-data-and-hadoop">
                                <li class="course-list ">
                                    <div class="course-block-wrapper">
                                        <!-- Like Link Options  Variables-->
                                        <div style="background-image: url(./img/bdh2.png);" class="edu-course-image">
                                        </div>
                                    </div>
                                    <h4>Big Data and Hadoop &ndash; Instructor-Led Online Course</h4>
                                    	<ul class="list-inline star-rating">
	                                        <i class="fa fa-star starcolor"></i>
                                            <i class="fa fa-star starcolor"></i>
                                            <i class="fa fa-star starcolor"></i>
                                            <i class="fa fa-star starcolor"></i>
                                            <i class="fa fa-star starcolor"></i>
                                         </ul>
                                    <p class="text-muted">
                                        101170 Learners
                                    </p>
                                   <p class="view-upcomingbatch">
                                   	<span> 
                                    	<i class="fa fa-calendar"></i> 
                                        <span class="time-change-wrapper"> Aug </span>
                                        <span class="time-change-wrapper">15</span>
                                        onwards 
                                    </span>
                                   </p>
                                   <h5>
                                       <span class="course-price setprice-166"><b> <i class="fa fa-inr" aria-hidden="true"></i>21,995</b></span>
                                   </h5>
                                </li>
                                <div class="course-hoveritem">
                                    <div class="img-panel-hvr">&nbsp;</div>
                                    <div class="course-list hvr-contnt-portion">
                                        <p style="margin-bottom:0;">
                                            Online Courses: 30 Hrs<br>Assignments: 40 Hrs<br>Project: 20 Hrs<br>Lifetime Access<br> 
                                         </p>
                                     </div>
                                </div>
                            </a>
                        </ul>
                  </div>
                  <div class="item">
                  	<ul class="list-inline">
                            <a class="course-anchor" href="/big-data-and-hadoop">
                                <li class="course-list ">
                                    <div class="course-block-wrapper">
                                        <!-- Like Link Options  Variables-->
                                        <div style="background-image: url(./img/bdh2.png);" class="edu-course-image">
                                        </div>
                                    </div>
                                    <h4>1 Big Data and Hadoop &ndash; Instructor-Led Online Course</h4>
                                    	<ul class="list-inline star-rating">
	                                        <i class="fa fa-star starcolor"></i>
                                            <i class="fa fa-star starcolor"></i>
                                            <i class="fa fa-star starcolor"></i>
                                            <i class="fa fa-star starcolor"></i>
                                            <i class="fa fa-star starcolor"></i>
                                         </ul>
                                    <p class="text-muted">
                                        101170 Learners
                                    </p>
                                   <p class="view-upcomingbatch">
                                   	<span> 
                                    	<i class="fa fa-calendar"></i> 
                                        <span class="time-change-wrapper"> Aug </span>
                                        <span class="time-change-wrapper">15</span>
                                        onwards 
                                    </span>
                                   </p>
                                   <h5>
                                       <span class="course-price setprice-166"><b> <i class="fa fa-inr" aria-hidden="true"></i>21,995</b></span>
                                   </h5>
                                </li>
                                <div class="course-hoveritem">
                                    <div class="img-panel-hvr">&nbsp;</div>
                                    <div class="course-list hvr-contnt-portion">
                                        <p style="margin-bottom:0;">
                                            Online Courses: 30 Hrs<br>Assignments: 40 Hrs<br>Project: 20 Hrs<br>Lifetime Access<br> 
                                         </p>
                                     </div>
                                </div>
                            </a>
                        </ul>
                  </div>
                  <div class="item">
                  	<ul class="list-inline">
                            <a class="course-anchor" href="/big-data-and-hadoop">
                                <li class="course-list ">
                                    <div class="course-block-wrapper">
                                        <!-- Like Link Options  Variables-->
                                        <div style="background-image: url(./img/bdh2.png);" class="edu-course-image">
                                        </div>
                                    </div>
                                    <h4>1 Big Data and Hadoop &ndash; Instructor-Led Online Course</h4>
                                    	<ul class="list-inline star-rating">
	                                        <i class="fa fa-star starcolor"></i>
                                            <i class="fa fa-star starcolor"></i>
                                            <i class="fa fa-star starcolor"></i>
                                            <i class="fa fa-star starcolor"></i>
                                            <i class="fa fa-star starcolor"></i>
                                         </ul>
                                    <p class="text-muted">
                                        101170 Learners
                                    </p>
                                   <p class="view-upcomingbatch">
                                   	<span> 
                                    	<i class="fa fa-calendar"></i> 
                                        <span class="time-change-wrapper"> Aug </span>
                                        <span class="time-change-wrapper">15</span>
                                        onwards 
                                    </span>
                                   </p>
                                   <h5>
                                       <span class="course-price setprice-166"><b> <i class="fa fa-inr" aria-hidden="true"></i>21,995</b></span>
                                   </h5>
                                </li>
                                <div class="course-hoveritem">
                                    <div class="img-panel-hvr">&nbsp;</div>
                                    <div class="course-list hvr-contnt-portion">
                                        <p style="margin-bottom:0;">
                                            Online Courses: 30 Hrs<br>Assignments: 40 Hrs<br>Project: 20 Hrs<br>Lifetime Access<br> 
                                         </p>
                                     </div>
                                </div>
                            </a>
                        </ul>
                  </div>
                  <div class="item">
                  	<ul class="list-inline">
                            <a class="course-anchor" href="/big-data-and-hadoop">
                                <li class="course-list ">
                                    <div class="course-block-wrapper">
                                        <!-- Like Link Options  Variables-->
                                        <div style="background-image: url(./img/bdh2.png);" class="edu-course-image">
                                        </div>
                                    </div>
                                    <h4>9 Big Data and Hadoop &ndash; Instructor-Led Online Course</h4>
                                    	<ul class="list-inline star-rating">
	                                        <i class="fa fa-star starcolor"></i>
                                            <i class="fa fa-star starcolor"></i>
                                            <i class="fa fa-star starcolor"></i>
                                            <i class="fa fa-star starcolor"></i>
                                            <i class="fa fa-star starcolor"></i>
                                         </ul>
                                    <p class="text-muted">
                                        101170 Learners
                                    </p>
                                   <p class="view-upcomingbatch">
                                   	<span> 
                                    	<i class="fa fa-calendar"></i> 
                                        <span class="time-change-wrapper"> Aug </span>
                                        <span class="time-change-wrapper">15</span>
                                        onwards 
                                    </span>
                                   </p>
                                   <h5>
                                       <span class="course-price setprice-166"><b> <i class="fa fa-inr" aria-hidden="true"></i>21,995</b></span>
                                   </h5>
                                </li>
                                <div class="course-hoveritem">
                                    <div class="img-panel-hvr">&nbsp;</div>
                                    <div class="course-list hvr-contnt-portion">
                                        <p style="margin-bottom:0;">
                                            Online Courses: 30 Hrs<br>Assignments: 40 Hrs<br>Project: 20 Hrs<br>Lifetime Access<br> 
                                         </p>
                                     </div>
                                </div>
                            </a>
                        </ul>
                  </div>
                </div>
            </div>
        </div>
   </div>	

</section> 

<!--Popular Courses Section ends-->
<!--Recent Additions Section starts-->
<section class="coursesection">
    <div class="container">
        <div class="row">
            <br>
        	<h4 class="text-center border-side"><span>Recent Additions</span></h4>
            <br>
            <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12 trendcoursearea">
                <div id="owl-demo2" class="owl-carousel-course owl-theme">
                  <div class="item">
                  	<ul class="list-inline">
                            <a class="course-anchor" href="/big-data-and-hadoop">
                                <li class="course-list ">
                                    <div class="course-block-wrapper">
                                        <!-- Like Link Options  Variables-->
                                        <div style="background-image: url(./img/bdh2.png);" class="edu-course-image">
                                        </div>
                                    </div>
                                    <h4>Big Data and Hadoop </h4>
                                    	<ul class="list-inline star-rating">
	                                        <i class="fa fa-star starcolor"></i>
                                            <i class="fa fa-star starcolor"></i>
                                            <i class="fa fa-star starcolor"></i>
                                            <i class="fa fa-star starcolor"></i>
                                            <i class="fa fa-star starcolor"></i>
                                         </ul>
                                    <p class="text-muted">
                                        101170 Learners
                                    </p>
                                   <p class="view-upcomingbatch">
                                   	<span> 
                                    	<i class="fa fa-calendar"></i> 
                                        <span class="time-change-wrapper"> Aug </span>
                                        <span class="time-change-wrapper">15</span>
                                        onwards 
                                    </span>
                                   </p>
                                   <h5>
                                       <span class="course-price setprice-166"><b> <i class="fa fa-inr" aria-hidden="true"></i>21,995</b><br><small class="text-muted"><i class="fa fa-inr" aria-hidden="true"></i>23,995</small></span>
                                   </h5>
                                </li>
                                <div class="course-hoveritem">
                                    <div class="img-panel-hvr">&nbsp;</div>
                                    <div class="course-list hvr-contnt-portion">
                                        <p style="margin-bottom:0;">
                                            Online Courses: 30 Hrs<br>Assignments: 40 Hrs<br>Project: 20 Hrs<br>Lifetime Access<br> 
                                         </p>
                                     </div>
                                </div>
                            </a>
                        </ul>
                  </div>
                  <div class="item">
                  	<ul class="list-inline">
                            <a class="course-anchor" href="/big-data-and-hadoop">
                                <li class="course-list ">
                                    <div class="course-block-wrapper">
                                        <!-- Like Link Options  Variables-->
                                        <div style="background-image: url(./img/bdh2.png);" class="edu-course-image">
                                        </div>
                                    </div>
                                    <h4>Apache Spark and Scala</h4>
                                    	<ul class="list-inline star-rating">
	                                        <i class="fa fa-star starcolor"></i>
                                            <i class="fa fa-star starcolor"></i>
                                            <i class="fa fa-star starcolor"></i>
                                            <i class="fa fa-star starcolor"></i>
                                            <i class="fa fa-star starcolor"></i>
                                         </ul>
                                    <p class="text-muted">
                                        101170 Learners
                                    </p>
                                   <p class="view-upcomingbatch">
                                   	<span> 
                                    	<i class="fa fa-calendar"></i> 
                                        <span class="time-change-wrapper"> Aug </span>
                                        <span class="time-change-wrapper">15</span>
                                        onwards 
                                    </span>
                                   </p>
                                   <h5>
                                       <span class="course-price setprice-166"><b> <i class="fa fa-inr" aria-hidden="true"></i>21,995</b><br><small class="text-muted"><i class="fa fa-inr" aria-hidden="true"></i>23,995</small></span>
                                   </h5>
                                </li>
                                <div class="course-hoveritem">
                                    <div class="img-panel-hvr">&nbsp;</div>
                                    <div class="course-list hvr-contnt-portion">
                                        <p style="margin-bottom:0;">
                                            Online Courses: 30 Hrs<br>Assignments: 40 Hrs<br>Project: 20 Hrs<br>Lifetime Access<br> 
                                         </p>
                                     </div>
                                </div>
                            </a>
                        </ul>	
                  </div>
                  <div class="item">
                  	<ul class="list-inline">
                            <a class="course-anchor" href="/big-data-and-hadoop">
                                <li class="course-list ">
                                    <div class="course-block-wrapper">
                                        <!-- Like Link Options  Variables-->
                                        <div style="background-image: url(./img/bdh2.png);" class="edu-course-image">
                                        </div>
                                    </div>
                                    <h4>Hadoop Administration</h4>
                                    	<ul class="list-inline star-rating">
	                                        <i class="fa fa-star starcolor"></i>
                                            <i class="fa fa-star starcolor"></i>
                                            <i class="fa fa-star starcolor"></i>
                                            <i class="fa fa-star starcolor"></i>
                                            <i class="fa fa-star starcolor"></i>
                                         </ul>
                                    <p class="text-muted">
                                        101170 Learners
                                    </p>
                                   <p class="view-upcomingbatch">
                                   	<span> 
                                    	<i class="fa fa-calendar"></i> 
                                        <span class="time-change-wrapper"> Aug </span>
                                        <span class="time-change-wrapper">15</span>
                                        onwards 
                                    </span>
                                   </p>
                                   <h5>
                                       <span class="course-price setprice-166"><b> <i class="fa fa-inr" aria-hidden="true"></i>21,995</b><br><small class="text-muted"><i class="fa fa-inr" aria-hidden="true"></i>23,995</small></span>
                                   </h5>
                                </li>
                                <div class="course-hoveritem">
                                    <div class="img-panel-hvr">&nbsp;</div>
                                    <div class="course-list hvr-contnt-portion">
                                        <p style="margin-bottom:0;">
                                            Online Courses: 30 Hrs<br>Assignments: 40 Hrs<br>Project: 20 Hrs<br>Lifetime Access<br> 
                                         </p>
                                     </div>
                                </div>
                            </a>
                        </ul>
                  </div>
                  <div class="item">
                  	<ul class="list-inline">
                            <a class="course-anchor" href="/big-data-and-hadoop">
                                <li class="course-list ">
                                    <div class="course-block-wrapper">
                                        <!-- Like Link Options  Variables-->
                                        <div style="background-image: url(./img/bdh2.png);" class="edu-course-image">
                                        </div>
                                    </div>
                                    <h4>Data Science</h4>
                                    	<ul class="list-inline star-rating">
	                                        <i class="fa fa-star starcolor"></i>
                                            <i class="fa fa-star starcolor"></i>
                                            <i class="fa fa-star starcolor"></i>
                                            <i class="fa fa-star starcolor"></i>
                                            <i class="fa fa-star starcolor"></i>
                                         </ul>
                                    <p class="text-muted">
                                        101170 Learners
                                    </p>
                                   <p class="view-upcomingbatch">
                                   	<span> 
                                    	<i class="fa fa-calendar"></i> 
                                        <span class="time-change-wrapper"> Aug </span>
                                        <span class="time-change-wrapper">15</span>
                                        onwards 
                                    </span>
                                   </p>
                                   <h5>
                                       <span class="course-price setprice-166"><b> <i class="fa fa-inr" aria-hidden="true"></i>21,995</b><br><small class="text-muted"><i class="fa fa-inr" aria-hidden="true"></i>23,995</small></span>
                                   </h5>
                                </li>
                                <div class="course-hoveritem">
                                    <div class="img-panel-hvr">&nbsp;</div>
                                    <div class="course-list hvr-contnt-portion">
                                        <p style="margin-bottom:0;">
                                            Online Courses: 30 Hrs<br>Assignments: 40 Hrs<br>Project: 20 Hrs<br>Lifetime Access<br> 
                                         </p>
                                     </div>
                                </div>
                            </a>
                        </ul>
                  </div>
                  <div class="item">
                  	<ul class="list-inline">
                            <a class="course-anchor" href="/big-data-and-hadoop">
                                <li class="course-list ">
                                    <div class="course-block-wrapper">
                                        <!-- Like Link Options  Variables-->
                                        <div style="background-image: url(./img/bdh2.png);" class="edu-course-image">
                                        </div>
                                    </div>
                                    <h4>1 Big Data and Hadoop &ndash; Instructor-Led Online Course</h4>
                                    	<ul class="list-inline star-rating">
	                                        <i class="fa fa-star starcolor"></i>
                                            <i class="fa fa-star starcolor"></i>
                                            <i class="fa fa-star starcolor"></i>
                                            <i class="fa fa-star starcolor"></i>
                                            <i class="fa fa-star starcolor"></i>
                                         </ul>
                                    <p class="text-muted">
                                        101170 Learners
                                    </p>
                                   <p class="view-upcomingbatch">
                                   	<span> 
                                    	<i class="fa fa-calendar"></i> 
                                        <span class="time-change-wrapper"> Aug </span>
                                        <span class="time-change-wrapper">15</span>
                                        onwards 
                                    </span>
                                   </p>
                                   <h5>
                                       <span class="course-price setprice-166"><b> <i class="fa fa-inr" aria-hidden="true"></i>21,995</b></span>
                                   </h5>
                                </li>
                                <div class="course-hoveritem">
                                    <div class="img-panel-hvr">&nbsp;</div>
                                    <div class="course-list hvr-contnt-portion">
                                        <p style="margin-bottom:0;">
                                            Online Courses: 30 Hrs<br>Assignments: 40 Hrs<br>Project: 20 Hrs<br>Lifetime Access<br> 
                                         </p>
                                     </div>
                                </div>
                            </a>
                        </ul>
                  </div>
                  <div class="item">
                  	<ul class="list-inline">
                            <a class="course-anchor" href="/big-data-and-hadoop">
                                <li class="course-list ">
                                    <div class="course-block-wrapper">
                                        <!-- Like Link Options  Variables-->
                                        <div style="background-image: url(./img/bdh2.png);" class="edu-course-image">
                                        </div>
                                    </div>
                                    <h4>1 Big Data and Hadoop &ndash; Instructor-Led Online Course</h4>
                                    	<ul class="list-inline star-rating">
	                                        <i class="fa fa-star starcolor"></i>
                                            <i class="fa fa-star starcolor"></i>
                                            <i class="fa fa-star starcolor"></i>
                                            <i class="fa fa-star starcolor"></i>
                                            <i class="fa fa-star starcolor"></i>
                                         </ul>
                                    <p class="text-muted">
                                        101170 Learners
                                    </p>
                                   <p class="view-upcomingbatch">
                                   	<span> 
                                    	<i class="fa fa-calendar"></i> 
                                        <span class="time-change-wrapper"> Aug </span>
                                        <span class="time-change-wrapper">15</span>
                                        onwards 
                                    </span>
                                   </p>
                                   <h5>
                                       <span class="course-price setprice-166"><b> <i class="fa fa-inr" aria-hidden="true"></i>21,995</b></span>
                                   </h5>
                                </li>
                                <div class="course-hoveritem">
                                    <div class="img-panel-hvr">&nbsp;</div>
                                    <div class="course-list hvr-contnt-portion">
                                        <p style="margin-bottom:0;">
                                            Online Courses: 30 Hrs<br>Assignments: 40 Hrs<br>Project: 20 Hrs<br>Lifetime Access<br> 
                                         </p>
                                     </div>
                                </div>
                            </a>
                        </ul>
                  </div>
                  <div class="item">
                  	<ul class="list-inline">
                            <a class="course-anchor" href="/big-data-and-hadoop">
                                <li class="course-list ">
                                    <div class="course-block-wrapper">
                                        <!-- Like Link Options  Variables-->
                                        <div style="background-image: url(./img/bdh2.png);" class="edu-course-image">
                                        </div>
                                    </div>
                                    <h4>1 Big Data and Hadoop &ndash; Instructor-Led Online Course</h4>
                                    	<ul class="list-inline star-rating">
	                                        <i class="fa fa-star starcolor"></i>
                                            <i class="fa fa-star starcolor"></i>
                                            <i class="fa fa-star starcolor"></i>
                                            <i class="fa fa-star starcolor"></i>
                                            <i class="fa fa-star starcolor"></i>
                                         </ul>
                                    <p class="text-muted">
                                        101170 Learners
                                    </p>
                                   <p class="view-upcomingbatch">
                                   	<span> 
                                    	<i class="fa fa-calendar"></i> 
                                        <span class="time-change-wrapper"> Aug </span>
                                        <span class="time-change-wrapper">15</span>
                                        onwards 
                                    </span>
                                   </p>
                                   <h5>
                                       <span class="course-price setprice-166"><b> <i class="fa fa-inr" aria-hidden="true"></i>21,995</b></span>
                                   </h5>
                                </li>
                                <div class="course-hoveritem">
                                    <div class="img-panel-hvr">&nbsp;</div>
                                    <div class="course-list hvr-contnt-portion">
                                        <p style="margin-bottom:0;">
                                            Online Courses: 30 Hrs<br>Assignments: 40 Hrs<br>Project: 20 Hrs<br>Lifetime Access<br> 
                                         </p>
                                     </div>
                                </div>
                            </a>
                        </ul>
                  </div>
                  <div class="item">
                  	<ul class="list-inline">
                            <a class="course-anchor" href="/big-data-and-hadoop">
                                <li class="course-list ">
                                    <div class="course-block-wrapper">
                                        <!-- Like Link Options  Variables-->
                                        <div style="background-image: url(./img/bdh2.png);" class="edu-course-image">
                                        </div>
                                    </div>
                                    <h4>1 Big Data and Hadoop &ndash; Instructor-Led Online Course</h4>
                                    	<ul class="list-inline star-rating">
	                                        <i class="fa fa-star starcolor"></i>
                                            <i class="fa fa-star starcolor"></i>
                                            <i class="fa fa-star starcolor"></i>
                                            <i class="fa fa-star starcolor"></i>
                                            <i class="fa fa-star starcolor"></i>
                                         </ul>
                                    <p class="text-muted">
                                        101170 Learners
                                    </p>
                                   <p class="view-upcomingbatch">
                                   	<span> 
                                    	<i class="fa fa-calendar"></i> 
                                        <span class="time-change-wrapper"> Aug </span>
                                        <span class="time-change-wrapper">15</span>
                                        onwards 
                                    </span>
                                   </p>
                                   <h5>
                                       <span class="course-price setprice-166"><b> <i class="fa fa-inr" aria-hidden="true"></i>21,995</b></span>
                                   </h5>
                                </li>
                                <div class="course-hoveritem">
                                    <div class="img-panel-hvr">&nbsp;</div>
                                    <div class="course-list hvr-contnt-portion">
                                        <p style="margin-bottom:0;">
                                            Online Courses: 30 Hrs<br>Assignments: 40 Hrs<br>Project: 20 Hrs<br>Lifetime Access<br> 
                                         </p>
                                     </div>
                                </div>
                            </a>
                        </ul>
                  </div>
                  <div class="item">
                  	<ul class="list-inline">
                            <a class="course-anchor" href="/big-data-and-hadoop">
                                <li class="course-list ">
                                    <div class="course-block-wrapper">
                                        <!-- Like Link Options  Variables-->
                                        <div style="background-image: url(./img/bdh2.png);" class="edu-course-image">
                                        </div>
                                    </div>
                                    <h4>1 Big Data and Hadoop &ndash; Instructor-Led Online Course</h4>
                                    	<ul class="list-inline star-rating">
	                                        <i class="fa fa-star starcolor"></i>
                                            <i class="fa fa-star starcolor"></i>
                                            <i class="fa fa-star starcolor"></i>
                                            <i class="fa fa-star starcolor"></i>
                                            <i class="fa fa-star starcolor"></i>
                                         </ul>
                                    <p class="text-muted">
                                        101170 Learners
                                    </p>
                                   <p class="view-upcomingbatch">
                                   	<span> 
                                    	<i class="fa fa-calendar"></i> 
                                        <span class="time-change-wrapper"> Aug </span>
                                        <span class="time-change-wrapper">15</span>
                                        onwards 
                                    </span>
                                   </p>
                                   <h5>
                                       <span class="course-price setprice-166"><b> <i class="fa fa-inr" aria-hidden="true"></i>21,995</b></span>
                                   </h5>
                                </li>
                                <div class="course-hoveritem">
                                    <div class="img-panel-hvr">&nbsp;</div>
                                    <div class="course-list hvr-contnt-portion">
                                        <p style="margin-bottom:0;">
                                            Online Courses: 30 Hrs<br>Assignments: 40 Hrs<br>Project: 20 Hrs<br>Lifetime Access<br> 
                                         </p>
                                     </div>
                                </div>
                            </a>
                        </ul>
                  </div>
                </div>
            </div>
        </div>
   </div>	

</section> 

<!--Recent Additions Section ends-->
</section>
<!--register to learn section starts-->
<section class="register-to-learn">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h1>
                    'Tech Up' your Skills. Rediscover Learning! <a href="/all-courses" class="ed-secondary-btn" id="all-course-techup">View All Courses</a>
                </h1>

            </div>
        </div>
    </div>
</section> 
<!--register to learn section ends--> 
<!--edureka features section starts-->
<section class="edureka-features">
    <div class="container">
        <div class="row text-center">
            <div class="col-md-3 col-sm-6 col-xs-12 liveclasses">
                <img alt="Edureka live classes" src="./img/live_classes.png">                
                <h4>Live classes</h4>
                <p>
                    Live online and interactive classes <br>conducted by instructors
                </p>
            </div>

            <div class="col-md-3 col-sm-6 col-xs-12 exprtins">
                <img alt="Edureka Expert instructions" src="./img/expert_instructer.png">                
                <h4>Expert instructions</h4>
                <p>
                    Learn from our Experts and get <br>Real-Time Guidance
                </p>
            </div>

            <div class="col-md-3 col-sm-6 col-xs-12 support">
                <img alt="Edureka 24 X 7 Support" src="./img/supporthome.png">                
                <h4>24 X 7 Support</h4>
                <p>
                    Personalized Guidance from our <br>24X7 Support Team
                </p>
            </div>

            <div class="col-md-3 col-sm-6 col-xs-12 flexschedule">
                <img alt="Edureka Flexible schedule" src="./img/flexible_schedule.png">                
                <h4>Flexible schedule</h4>
                <p>
                    Reschedule your Batch/Class at<br> Your Convenience
                </p>
            </div>
        </div>
    </div>
</section> 
<!--edureka features section ends-->  
<!--edureka testimonials section starts-->
<section class="edureka-testimonials">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="text-center border-side"><span class="borderbg-class">Customer Reviews</span></h1>
                <div id="owl-testimonials" class="owl-carousel owl-theme">
                    <div class="item">
                        <div class="user-info">
                            <img width="69" height="69" alt="User pic" src="./img/testimonials/testimonials_1390293995.jpg">
                                <div class="">
                                    <h5>Vikas Ranjan</h5>
                                    <p>ETL Developer at Kaiser Permanente IT, S...</p>
                                    <ul class="list-inline star-rating">
                                        <i class="fa fa-star starcolor"></i>
                                        <i class="fa fa-star starcolor"></i>
                                        <i class="fa fa-star starcolor"></i>
                                        <i class="fa fa-star starcolor"></i>
                                        <i class="fa fa-star starcolor"></i>
                                    </ul>
                                </div>
                        </div>
                        <p>Instructor has a good hold on the subject and has lot of patience to take all possible questions from 
                            <span class="extra-reading">the participant. Appreciate all the analogies presented to explain the subject in a laymanâ€&trade;s language. It became really easy to correlate and make you remember and relate to the concept in a very easy way.</span>
                            <a href="#read-more" class="read-more less ga-event-handler">Read More</a>
                        </p>                            
                   </div>
                   <div class="item">
                        <div class="user-info">
                            <img width="69" height="69" alt="User pic" src="./img/testimonials/testimonials_1390293995.jpg">
                                <div class="">
                                    <h5>Vikas Ranjan</h5>
                                    <p>ETL Developer at Kaiser Permanente IT, S...</p>
                                    <ul class="list-inline star-rating">
                                        <i class="fa fa-star starcolor"></i>
                                        <i class="fa fa-star starcolor"></i>
                                        <i class="fa fa-star starcolor"></i>
                                        <i class="fa fa-star starcolor"></i>
                                        <i class="fa fa-star starcolor"></i>
                                    </ul>
                                </div>
                        </div>
                        <p>Instructor has a good hold on the subject and has lot of patience to take all possible questions from
                            <span class="extra-reading">the participant. Appreciate all the analogies presented to explain the subject in a laymanâ€&trade;s language. It became really easy to correlate and make you remember and relate to the concept in a very easy way.</span>
                            <a href="#read-more" class="read-more less ga-event-handler">Read More</a>
                        </p>                            
                   </div>
                   <div class="item">
                        <div class="user-info">
                            <img width="69" height="69" alt="User pic" src="./img/testimonials/testimonials_1390293995.jpg">
                                <div class="">
                                    <h5>Vikas Ranjan</h5>
                                    <p>ETL Developer at Kaiser Permanente IT, S...</p>
                                    <ul class="list-inline star-rating">
                                        <i class="fa fa-star starcolor"></i>
                                        <i class="fa fa-star starcolor"></i>
                                        <i class="fa fa-star starcolor"></i>
                                        <i class="fa fa-star starcolor"></i>
                                        <i class="fa fa-star starcolor"></i>
                                    </ul>
                                </div>
                        </div>
                        <p>Instructor has a good hold on the subject and has lot of patience to take all possible questions from
                            <span class="extra-reading">the participant. Appreciate all the analogies presented to explain the subject in a laymanâ€&trade;s language. It became really easy to correlate and make you remember and relate to the concept in a very easy way.</span>
                            <a href="#read-more" class="read-more less ga-event-handler">Read More</a>
                        </p>                            
                   </div>
                </div>
                <p class="text-center">
                    <br>
                    <a href="/reviews" class="btn btn-link readmorebtn" id="read_all_rvws_ga">Read all</a>
                </p>
            </div>
        </div>
    </div>
</section>
<!--edureka testimonials section ends-->

<!--edureka for organizations section starts-->

<section class="edureka-for-organisations">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h1>Train your employees with exclusive batches and offers</h1>
                <a href="javascript:void(0)" class="ed-primary-btn">Edureka for organisations</a>
            </div>
        </div>
    </div>
</section>

<!--edureka for organizations section ends-->

<!--edureka featured on section starts-->

<section class="edureka-featured-on">

    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <h1 class="text-center">
                    <i class="fa fa-quote-left"></i>
                </h1>
                <span class="text-center edu-newstext1">
                    <h2>Edureka ranked No.1 in Deloitte Technology Fast 50 India 2014!</h2>
                    <h4>Edureka helps individuals and organizations in mitigating theirskill gap and staying relevant.&nbsp;&nbsp;
                        <a class="" href="allmedia" data-articlename="Edureka ranked No.1 in Deloitte Technology Fast 50 India 2014!">Read more</a>
                    </h4>
                </span>
                <span class="text-center edu-newstext2 hidden-xs">
                    <h2>India needs to rethink the brick-and-mortar classroom model</h2>
                    <h4>and build an alternative platform, more accessible, engaging and supporting lifelong learning.&nbsp;&nbsp;
                        <a class="" href="allmedia" data-articlename="India needs to rethink the brick-and-mortar classroom model">Read more</a>
                    </h4>
                </span> 
                <span class="text-center edu-newstext3 hidden-xs">
                    <h2>Yawning gap between theory and practice in the education space</h2>
                    <h4>Edureka is bridging this gap with its unique learning methodology.&nbsp;&nbsp;
                        <a class="" href="allmedia" data-articlename="Yawning gap between theory and practice in the education space">Read more</a>
                    </h4>
                </span>
            </div>
        </div>
    </div>
    <div class="media-icon-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <ul class="list-inline text-center edu-in-news">
                        <li><a class="edu-news1 active-news" href="javascript:void(0)" ><i class="fa fa-caret-down edu-newsfa1" ></i>&nbsp;</a></li>
                        <li><a class="edu-news2 hidden-xs" href="javascript:void(0)"><i class="fa fa-caret-down edu-newsfa2"></i>&nbsp;</a></li>
                        <li><a class="edu-news3 hidden-xs" href="javascript:void(0)"><i class="fa fa-caret-down edu-newsfa3"></i>&nbsp;</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!--edureka featured on section ends-->


 <div class="footer-push"><!--//--></div>
</div>
<footer class="footer-v3">
   <div class="container">
    <div class="row">
     <div class="padding-xs-only clearfix">
       <div class="panel-group no-margin" id="footer-accordion" role="tablist" aria-multiselectable="true">
        <div class="panel">
         <div class="col-md-12 visible-xs accordion-head">
          
            <a data-parent="#accordion" data-toggle="collapse" data-target="#collapse1" aria-expanded="false" aria-controls="collapse1" href="javascript:void(0);">
             <h3 class="no-margin footer-new-hd-lineht"><img src="img/edureka-logo.png" alt="edureka logo" class="footer-v3_logo"></h3>
             <p class=" margin-vr5 grey-txt marg-btm-0-xs">&copy; 2014 Brain4ce Education Solutions Pvt. Ltd.</p>
             <i class="icon-down-arrow pull-right"></i>
             <i class="icon-up-arrow pull-right"></i>
            </a>

		  </div>
         <div id="collapse1" class="div-collapse collapse in clearfix">
      <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12 item-padding">
       <h4>Edureka</h4>
        <ul class="list-unstyled footer-menu wid-50-left">
         <li><a href="#">About us</a></li>
         <li><a href="#">News & Media</a></li>
         <li><a href="#">Contact us</a></li>
         <li><a href="#">Careers</a></li>
        </ul>
        <ul class="list-unstyled footer-menu wid-50-left">
         <li><a href="#">Blog</a></li>
         <li><a href="#">Reviews</a></li>
         <li><a href="#">Terms & conditions</a></li>
         <li><a href="#">Privacy policy</a></li>
        </ul>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 item-padding">
       <h4>Work with us </h4>
        <ul class="list-unstyled footer-menu">
         <li><a href="#">Become  an Instructor</a></li>
         <li><a href="#">Hire from Edureka</a></li>
        </ul>
      </div>
      <div class="col-lg-3  col-md-3 col-sm-3 col-xs-6 item-padding">
       <h4>Follow us on </h4>
        <ul class="list-unstyled footer-social-icon">
         <li><a href="#" class="fb"><i class="icon-facebook"></i></a></li>
         <li><a href="#" class="tw"><i class="icon-twitter"></i></a></li>
         <li><a href="#" class="in"><i class="icon-linkedin"></i></a></li>
         <li><a href="#" class="ut"><i class="icon-youtube"></i></a></li>
        </ul>
      </div>
      <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 item-padding padding-lft-25 text-center-xs">
       <h4>Learn on the GO!</h4>
        <ul class="list-unstyled footer-menu-store">
         <li><a href="#"><img src="img/applestorebtn.png" alt="appleplaystore" class="img-responsive"></a></li>
         <li><a href="#"><img src="img/googleplaybtn.png" alt="googleplaystore" class="img-responsive"></a></li>
        </ul>
      </div>
     <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-padding border-top-half">
      <div class="padding-vr20 clearfix padding-btm-50-query pad-btm-none">
       <div class="col-lg-5 col-md-6 col-sm-5 col-xs-12 no-padding">
        <h3 class="no-margin footer-new-hd-lineht"><a href="#"><img src="img/edureka-logo.png" alt="edureka logo" class="footer-v3_logo"></a></h3>
        <p class=" margin-vr5 grey-txt">&copy; 2014 Brain4ce Education Solutions Pvt. Ltd. All rights Reserved.</p>
       </div>
       <div class="col-lg-7 col-md-6 col-sm-7 col-xs-12 no-padding txt-marg-top text-xs-left">
        <p class="grey-txt">"PMP®","PMI®", "PMI-ACP®" and "PMBOK®" are registered marks of the Project Management Institute, Inc. <br>
MongoDB®, Mongo and the leaf logo are the registered trademarks of MongoDB, Inc.</p>
       </div>
      </div>
     </div>
     </div>
     </div>
     </div>
     </div>              
    </div>
   </div>
   
  </footer> 

<script src="/js/autoload/jquery-1.11.1.min.js" type="text/javascript"></script> 
<script src="/js/autoload/bootstrap.min.js" type="text/javascript"></script> 
<script src="/js/autoload/CustomScrollbar.min.js" type="text/javascript"></script>
<script src="/js/autoload/footer-static.js" type="text/javascript"></script>
<script src="/js/homepage/home.js" type="text/javascript"></script>
<script src="/js/Login-Signup/login-signup.js" type="text/javascript"></script>
<script src="/js/Common-page-specific/video.js" type="text/javascript"></script>
<script src="/js/Common-page-specific/owl.carousel.min.js" type="text/javascript"></script>
<script>
    $(document).ready(function (e) {
        $('.course-anchor').mouseover(function (e) {
            $(this).children('.course-hoveritem').show();
        });
        $('.course-anchor').mouseleave(function (e) {
            $(this).children('.course-hoveritem').hide();
        });
    });
</script>
<script>
	$('.owl-carousel-course').owlCarousel({
    loop:true,
    margin:10,
	nav: true,
    navText: [
      "<img src='img/left.png'>",
      "<img src='img/right.png'>"
      ],
    responsiveClass:true,
    responsive:{
        0:{
            items:1,
            nav:true,
			loop:true
        },
        600:{
            items:2,
            nav:true,
			loop:true
        },
		768:{
            items:3,
            nav:true,
			loop:true
        },
        1000:{
            items:4,
            nav:true,
			loop:true
        },
		1200:{
            items:5,
            nav:true,
			loop:true
        }
    }
})



</script>
<script>
	$('#owl-testimonials').owlCarousel({
    loop:true,
    margin:10,
	nav: true,
    navText: [
      "<img src='img/left.png'>",
      "<img src='img/right.png'>"
      ],
    responsiveClass:true,
    responsive:{
        0:{
            items:1,
            nav:true,
			loop:true
        },
        600:{
            items:2,
            nav:true,
			loop:true
        },
		1000:{
            items:3,
            nav:true,
			loop:true
        }
    }
})

</script>
<script>
    if (/Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent)) {
        $('.video-panel').hide();
        $('.mob-imgpanel').show();
    }

    if ($(window).width() <= 1300) {
        $('#example_video_1').attr('poster', '<?php echo $params['imgURL'] . "posterv2.jpg"; ?>');
    }
    $(function () {
        setTimeout(function () {
            if ($('#example_video_1').length == 1) {
                var video = document.getElementById('example_video_1');
                if (typeof video.load !== 'undefined') {
                    video.load();
                    video.play();
                }
            }
        }, 10);

    });
</script>
<!--script for displaying the featured section-->
<script>
	$('.edu-newstext2, .edu-newstext3,.edu-newsfa2, .edu-newsfa3').hide();
    $('.edu-news1').mouseenter(function (e) {
        $('.edu-newstext1, .edu-newsfa1').show();
        $('.edu-newstext2, .edu-newstext3,.edu-newsfa2, .edu-newsfa3').hide();
        $(this).css({"background-position": "0px -50px"});
        $('.edu-news2').css({"background-position": "-143px 0"});
        $('.edu-news3').css({"background-position": "-399px 0"});
        $('.edu-in-news li .fa').css('margin-left', '-19px');
    });
    $('.edu-news2').mouseenter(function (e) {
        $('.edu-news1').removeClass("active-news");
        $('.edu-newstext2, .edu-newsfa2').show();
        $('.edu-newstext1, .edu-newstext3, .edu-newsfa1, .edu-newsfa3').hide();
        $(this).css({"background-position": "-143px -47px"});
        $('.edu-news1').css({"background-position": "0 0"});
        $('.edu-news3').css({"background-position": "-399px 0"});
        $('.edu-in-news li .fa').css('margin-left', '25px');
    });
    $('.edu-news3').mouseenter(function (e) {
        $('.edu-news1').removeClass("active-news");
        $('.edu-newstext3, .edu-newsfa3').show();
        $('.edu-newstext1, .edu-newstext2, .edu-newsfa2, .edu-newsfa1').hide();
        $(this).css({"background-position": "-399px -49px"});
        $('.edu-news1').css({"background-position": "0 0"});
        $('.edu-news2').css({"background-position": "-143px 0"});
        $('.edu-in-news li .fa').css('margin-left', '35px');
    });
</script>
<!--script for displaying the featured section-->
<script>

    (function ($) {
        $(window).load(function () {

            $(".dropdown-menu-scrollbar").mCustomScrollbar({
                theme: "minimal-dark",
                mouseWheel: {preventDefault: true}
            });



            $(".dropdown-menu-scrollbar, html").on("mouseup pointerup", function (e) {
                $(".dropdown-menu-scrollbar .mCSB_scrollTools").removeClass("mCSB_scrollTools_onDrag");
            }).on("click", function (e) {
                if ($(e.target).parents(".mCSB_scrollTools").length || $(".dropdown-menu-scrollbar .mCSB_scrollTools").hasClass("mCSB_scrollTools_onDrag")) {
                    e.stopPropagation();
                }
            });

        });

<?php if(!empty($login)){
	echo "$('#myModal').modal('show');";
	if($login=="signin"){
		echo "$('.logintab').trigger('click');";
	}else if($login == "signup"){
		echo "$('.signuptab').trigger('click');";
	}
}?>
    })(jQuery);
//alert('<?php echo  !empty($login) ? $login :''?>');
</script>

</body>
</html>
