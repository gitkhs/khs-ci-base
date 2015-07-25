<!-- Fixed navbar -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">

        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">Logo[cover]</a>
        </div>

        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li <?php if($param['class']=='sample'&&$param['method']=='index'):?>class="active"<?php endif?>><a href="<?=$site['root']?>/sample">main</a></li>
            <li <?php if($param['class']=='sample'&&$param['method']=='left'):?>class="active"<?php endif?>><a href="<?=$site['root']?>/sample/left">side left</a></li>
            <li <?php if($param['class']=='sample'&&$param['method']=='right'):?>class="active"<?php endif?>><a href="<?=$site['root']?>/sample/right">side right</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Theme <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li <?php if($site['csstheme']=='cerulean'):?>class="active"<?php endif?>><a href="<?=$site['root']?>/sample/index/theme/cerulean">cerulean</a></li>
                <li <?php if($site['csstheme']=='cyborg'):?>class="active"<?php endif?>><a href="<?=$site['root']?>/sample/index/theme/cyborg">cyborg</a></li>
                <li <?php if($site['csstheme']=='darkly'):?>class="active"<?php endif?>><a href="<?=$site['root']?>/sample/index/theme/darkly">darkly</a></li>
                <li <?php if($site['csstheme']=='flatly'):?>class="active"<?php endif?>><a href="<?=$site['root']?>/sample/index/theme/flatly">flatly</a></li>
                <li <?php if($site['csstheme']=='journal'):?>class="active"<?php endif?>><a href="<?=$site['root']?>/sample/index/theme/journal">journal</a></li>
                <li <?php if($site['csstheme']=='lumen'):?>class="active"<?php endif?>><a href="<?=$site['root']?>/sample/index/theme/lumen">lumen</a></li>
                <li <?php if($site['csstheme']=='paper'):?>class="active"<?php endif?>><a href="<?=$site['root']?>/sample/index/theme/paper">paper</a></li>
                <li <?php if($site['csstheme']=='readable'):?>class="active"<?php endif?>><a href="<?=$site['root']?>/sample/index/theme/readable">readable</a></li>
                <li <?php if($site['csstheme']=='sandstone'):?>class="active"<?php endif?>><a href="<?=$site['root']?>/sample/index/theme/sandstone">sandstone</a></li>
                <li <?php if($site['csstheme']=='simplex'):?>class="active"<?php endif?>><a href="<?=$site['root']?>/sample/index/theme/simplex">simplex</a></li>
                <li <?php if($site['csstheme']=='slate'):?>class="active"<?php endif?>><a href="<?=$site['root']?>/sample/index/theme/slate">slate</a></li>
                <li <?php if($site['csstheme']=='spacelab'):?>class="active"<?php endif?>><a href="<?=$site['root']?>/sample/index/theme/spacelab">spacelab</a></li>
                <li <?php if($site['csstheme']=='united'):?>class="active"<?php endif?>><a href="<?=$site['root']?>/sample/index/theme/united">united</a></li>
                <li class="divider"></li>
                <li <?php if($site['csstheme']=='cosmo'):?>class="active"<?php endif?>><a href="<?=$site['root']?>/sample/index/theme/cosmo">cosmo</a></li>
                <li <?php if($site['csstheme']=='superhero'):?>class="active"<?php endif?>><a href="<?=$site['root']?>/sample/index/theme/superhero">superhero</a></li>
                <li <?php if($site['csstheme']=='yeti'):?>class="active"<?php endif?>><a href="<?=$site['root']?>/sample/index/theme/yeti">yeti</a></li>
                <li class="dropdown-header">Nav header</li>
  <li class="dropdown-submenu">
    <a tabindex="-1" href="#">More options</a>
    <ul class="dropdown-menu">
      <li><a tabindex="-1" href="#">Second level</a></li>
      <li class="dropdown-submenu">
        <a href="#">More..</a>
        <ul class="dropdown-menu">
        	<li><a href="#">3rd level</a></li>
        	<li><a href="#">3rd level</a></li>
        </ul>
      </li>
      <li><a href="#">Second level</a></li>
      <li><a href="#">Second level</a></li>
    </ul>
  </li>

              </ul>
            </li>
          </ul>
          
          <ul class="nav navbar-nav navbar-right">
            <li <?php if($param['class']=='sample'&&$param['method']=='dashbord'):?>class="active"<?php endif?>><a href="<?=$site['root']?>/sample/dashbord">Dashboard</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

<style>
body {
  padding-top: 70px;
  padding-bottom: 30px;
}

.theme-dropdown .dropdown-menu {
  position: static;
  display: block;
  margin-bottom: 20px;
}

.dropdown-submenu{position:relative;}
.dropdown-submenu>.dropdown-menu{top:0;left:100%;margin-top:-6px;margin-left:-1px;-webkit-border-radius:0 6px 6px 6px;-moz-border-radius:0 6px 6px 6px;border-radius:0 6px 6px 6px;}
.dropdown-submenu:hover>.dropdown-menu{display:block;}
.dropdown-submenu>a:after{display:block;content:" ";float:right;width:0;height:0;border-color:transparent;border-style:solid;border-width:5px 0 5px 5px;border-left-color:#cccccc;margin-top:5px;margin-right:-10px;}
.dropdown-submenu:hover>a:after{border-left-color:#ffffff;}
.dropdown-submenu.pull-left{float:none;}.dropdown-submenu.pull-left>.dropdown-menu{left:-100%;margin-left:10px;-webkit-border-radius:6px 0 6px 6px;-moz-border-radius:6px 0 6px 6px;border-radius:6px 0 6px 6px;}

</style>