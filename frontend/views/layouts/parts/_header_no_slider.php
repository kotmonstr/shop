<?php
use yii\helpers\Url;

?>
<header class="p0">
    <div class="container">
        <div class="row">
            <div class="span12">
                <div class="header-block clearfix">
                    <div class="clearfix header-block-pad">
                     
                        <a href="<?= Url::to('/site/index')?>"><h1 class="logo"><span class="red">Kot</span>monstr</h1><span>Enternet shop</span></a>
                        <form id="search-form" action="search.php" method="GET" accept-charset="utf-8" class="navbar-form" >
                            <input type="text" name="s" onBlur="if (this.value == '')
                                        this.value = ''" onFocus="if (this.value == '')
                                                    this.value = ''"  >
                            <a href="#" onClick="document.getElementById('search-form').submit()"></a>
                        </form>
                        <span class="contacts">Call Us Toll Free:  <span>+1 234 567 89 90</span><br>E-mail: <a href="#">kotmonstr@ukr.net</a></span>
                    </div>
                    <div class="navbar navbar_ clearfix">
                        <div class="navbar-inner navbar-inner_">
                            <div class="container">
                                <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse_">MENU</a>                                                   
                                <div class="nav-collapse nav-collapse_ " >
                                    <ul class="nav sf-menu">
                                        <li class="active li-first"><a href="<?= Url::to('/site/default/index')?>"><em class="hidden-phone"></em><span class="visible-phone">Home</span></a></li>
                                        <li class="sub-menu"><a href="<?= Url::to('/site/index-1')?>">about</a>
                                            <ul>
                                                <li><a href="<?= Url::to('/site/default/index')?>">Welcome Message</a></li>
                                                <li class="sub-menu"><a href="#">Company Profile</a>
                                                    <ul>
                                                        <li><a href="#">Our Capabilities</a></li>
                                                        <li><a href="#">Advantages</a></li>
                                                        <li><a href="#">Work Team</a></li>
                                                        <li><a href="#">Partnership</a></li>
                                                        <li><a href="#">Support</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#">Our History</a></li>
                                                <li><a href="#">Testimonials</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="<?= Url::to('/site/services')?>">services</a></li>
                                        <li><a href="<?= Url::to('/site/colection')?>">collections</a></li>
                                        <li><a href="index-4.html">styles</a></li>
                                        <li><a href="index-5.html">contacts</a></li>
                                        <li><a href="<?= Url::to('/blog/index')?>">Статьи</a></li>
                                        <li><a href="<?= Url::to('/admin/index')?>">Adminzone</a></li>
                                    </ul>
                                </div>
                                <ul class="social-icons">
                                    <li><a href="#"><img src="/img/icon-1.png" alt=""></a></li>
                                    <li><a href="#"><img src="/img/icon-2.png" alt=""></a></li>
                                    <li><a href="#"><img src="/img/icon-3.png" alt=""></a></li>
                                    <li><a href="#"><img src="/img/icon-4.png" alt=""></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>   
                </div>
            </div>
        </div>   
    </div>


</header>
<style>
    
    .logo{
        font-family: 'Kaushan Script', cursive;
        font-size: 50px;
    }
    .red{
        color:#CF3046;
    }
    </style>

    