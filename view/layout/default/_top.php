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
            <li class="active"><a href="main.php">main</a></li>
            <li><a href="side-left.php">side left</a></li>
            <li><a href="side-right.php">side right</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="main.php?theme=cerulean">cerulean</a></li>
                <li><a href="main.php?theme=cyborg">cyborg</a></li>
                <li><a href="main.php?theme=darkly">darkly</a></li>
                <li><a href="main.php?theme=flatly">flatly</a></li>
                <li><a href="main.php?theme=journal">journal</a></li>
                <li><a href="main.php?theme=lumen">lumen</a></li>
                <li><a href="main.php?theme=paper">paper</a></li>
                <li><a href="main.php?theme=readable">readable</a></li>
                <li><a href="main.php?theme=sandstone">sandstone</a></li>
                <li><a href="main.php?theme=simplex">simplex</a></li>
                <li><a href="main.php?theme=slate">slate</a></li>
                <li><a href="main.php?theme=spacelab">spacelab</a></li>
                <li><a href="main.php?theme=united">united</a></li>
                <li class="divider"></li>
                <li><a href="main.php?theme=cosmo">cosmo</a></li>
                <li><a href="main.php?theme=superhero">superhero</a></li>
                <li><a href="main.php?theme=yeti">yeti</a></li>
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
            <li><a href="Dashboard.php">Dashboard</a></li>
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