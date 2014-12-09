<?php
use yii\helpers\Url;
?>

<div id="left">
                <div class="media user-media bg-dark dker">
                    <div class="user-media-toggleHover">
                        <span class="fa fa-user"></span> 
                    </div>
                    <div class="user-wrapper bg-dark">
                        <a class="user-link" href="">
                            <img class="media-object img-thumbnail user-img" alt="User Picture" src="/matis/img/user.gif">
                            <span class="label label-danger user-label">16</span> 
                        </a> 
                        <div class="media-body">
                            <h5 class="media-heading">Archie</h5>
                            <ul class="list-unstyled user-info">
                                <li> <a href="">Administrator</a>  </li>
                                <li>Last Access :
                                    <br>
                                    <small>
                                        <i class="fa fa-calendar"></i>&nbsp;16 Mar 16:32</small> 
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- #menu -->
                <ul id="menu" class="dker">
                    <li class="nav-header">Menu</li>
                    <li class="nav-divider"></li>
                    <li class="">
                        <a href="dashboard.html">
                            <i class="fa"></i><span class="link-title">&nbsp;Dashboard</span> 
                        </a> 
                    </li>
                    <li class="">
                        <a href="<?= Url::to('/blog/show') ?>">
                            <i class="fa"></i><span class="link-title">&nbsp;Cтатьи</span> 
                        </a> 
                    </li>
                    <li class="">
                        <a href="<?= Url::to('/image/index') ?>">
                            <i class="fa"></i><span class="link-title">&nbsp;Слайдер</span> 
                        </a> 
                    </li>
                    <li class="">
                        <a href="<?= Url::to('/video/index') ?>">
                            <i class="fa"></i><span class="link-title">&nbsp;Youtube</span> 
                        </a> 
                    </li>
                    <li class="">
                        <a href="javascript:;">
                            <i class="fa fa-building "></i>
                            <span class="link-title">Layouts</span> 
                            <span class="fa arrow"></span> 
                        </a> 
                        <ul>
                            
                           
                            <li>
                                <a href="sm.html">
                                    <i class="fa fa-angle-right"></i>&nbsp; Mini Sidebar</a> 
                            </li>
                        </ul>
                    </li>
                    <li class="">
                        <a href="javascript:;">
                            <i class="fa fa-tasks"></i>
                            <span class="link-title">Components</span> 
                            <span class="fa arrow"></span> 
                        </a> 
                        <ul>
                            <li>
                                <a href="bgcolor.html">
                                    <i class="fa fa-angle-right"></i>&nbsp; Bg Color</a> 
                            </li>
                            <li>
                                <a href="bgimage.html">
                                    <i class="fa fa-angle-right"></i>&nbsp; Bg Image</a> 
                            </li>
                           
                            </li>
                        </ul>
                    </li>
                    <li class="">
                        <a href="javascript:;">
                            <i class="fa fa-pencil"></i>
                            <span class="link-title">
                                Forms
                            </span> 
                            <span class="fa arrow"></span> 
                        </a> 
                        <ul>
                            <li>
                                <a href="form-general.html">
                                    <i class="fa fa-angle-right"></i>&nbsp; Form General</a> 
                            </li>
                       
                        </ul>
                    </li>
                    
                    
                    <li>
                        <a href="javascript:;">
                            <i class="fa fa-exclamation-triangle"></i>
                            <span class="link-title">
                                Error Pages
                            </span> 
                            <span class="fa arrow"></span> 
                        </a> 
                        <ul>
                            
                            <li>
                                <a href="offline.html">
                                    <i class="fa fa-angle-right"></i>&nbsp;offline</a> 
                            </li>
                            <li>
                                <a href="countdown.html">
                                    <i class="fa fa-angle-right"></i>&nbsp;Under Construction</a> 
                            </li>
                        </ul>
                    </li>
                    
                    <li>
                        <a href="javascript:;">
                            <i class="fa fa-code"></i>
                            <span class="link-title">
                                Unlimited Level Menu 
                            </span> 
                            <span class="fa arrow"></span> 
                        </a> 
                        <ul>
                            <li>
                                <a href="javascript:;">Level 1  <span class="fa arrow"></span>  </a> 
                                <ul>
                                    <li> <a href="javascript:;">Level 2</a>  </li>
                                    <li> <a href="javascript:;">Level 2</a>  </li>
                                    <li>
                                        <a href="javascript:;">Level 2  <span class="fa arrow"></span>  </a> 
                                        <ul>
                                            <li> <a href="javascript:;">Level 3</a>  </li>
                                            <li> <a href="javascript:;">Level 3</a>  </li>
                                            <li>
                                                <a href="javascript:;">Level 3  <span class="fa arrow"></span>  </a> 
                                                <ul>
                                                    <li> <a href="javascript:;">Level 4</a>  </li>
                                                    <li> <a href="javascript:;">Level 4</a>  </li>
                                                    <li>
                                                        <a href="javascript:;">Level 4  <span class="fa arrow"></span>  </a> 
                                                        <ul>
                                                            <li> <a href="javascript:;">Level 5</a>  </li>
                                                            <li> <a href="javascript:;">Level 5</a>  </li>
                                                            <li> <a href="javascript:;">Level 5</a>  </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li> <a href="javascript:;">Level 4</a>  </li>
                                        </ul>
                                    </li>
                                    <li> <a href="javascript:;">Level 2</a>  </li>
                                </ul>
                            </li>
                            <li> <a href="javascript:;">Level 1</a>  </li>
                            <li>
                                <a href="javascript:;">Level 1  <span class="fa arrow"></span>  </a> 
                                <ul>
                                    <li> <a href="javascript:;">Level 2</a>  </li>
                                    <li> <a href="javascript:;">Level 2</a>  </li>
                                    <li> <a href="javascript:;">Level 2</a>  </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul><!-- /#menu -->
            </div><!-- /#left -->