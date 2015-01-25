<?php

use yii\helpers\Url;
use yii\helpers\Html;
use yii\widgets\Breadcrumbs;
?>

<div id="top">

    <!-- .navbar -->
    <nav class="navbar navbar-inverse navbar-static-top">
        <div class="container-fluid">

            <!-- Brand and toggle get grouped for better mobile display -->
            <header class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span> 
                    <span class="icon-bar"></span> 
                    <span class="icon-bar"></span> 
                    <span class="icon-bar"></span> 
                </button>
                <a href="<?= Url::to('/site/index'); ?>" class="navbar-brand">
                    <h5 class="logo"><span class="red">Kot</span>monstr</h5>
                </a> 
            </header>
           
            <div class="collapse navbar-collapse navbar-ex1-collapse">

                <!-- .nav -->
                <ul class="nav navbar-nav">
                    <li> <a href="dashboard.html">Dashboard</a>  </li>
                    <li> <a href="table.html">Tables</a>  </li>
                    <li> <a href="file.html">File Manager</a>  </li>
                    <li class='dropdown '>
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            Form Elements
                            <b class="caret"></b>
                        </a> 
                        <ul class="dropdown-menu">
                            <li> <a href="form-general.html">General</a>  </li>
                            <li> <a href="form-validation.html">Validation</a>  </li>
                            <li> <a href="form-wysiwyg.html">WYSIWYG</a>  </li>
                            <li> <a href="form-wizard.html">Wizard &amp; File Upload</a>  </li>
                        </ul>
                    </li>
                </ul><!-- /.nav -->
            </div>
        </div><!-- /.container-fluid -->
    </nav><!-- /.navbar -->
    <header class="head">
        <div class="search-bar">
            <form class="main-search" action="">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Live Search ...">
                    <span class="input-group-btn">
                       
                    </span> 
                </div>
            </form><!-- /.main-search -->
        </div><!-- /.search-bar -->
        <div class="main-bar">
         

           
            <h4>   <?php echo Yii::$app->controller->module->id . ' / '.  Yii::$app->controller->action->id;
            ?></h4>
        </div><!-- /.main-bar -->
    </header><!-- /.head -->
</div><!-- /#top -->
<style>

    .logo{
        font-family: 'Kaushan Script', cursive;
        font-size: 24px;
    }
    .red{
        color:#CF3046;
    }
</style>   

