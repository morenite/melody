<nav class="navbar navbar-default" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Melody</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li><a href="<?php echo Router::url(array('controller' => 'users', 'action' => 'dashboard')) ?>"><span class="glyphicon glyphicon-home"></span> Dashboard</a></li>
                <li><a href="#"><span class="glyphicon glyphicon-list"></span> My Activity</a></li>
                <li><a href="<?php echo Router::url(array('controller' => 'songs', 'action' => 'index')) ?>"><span class="glyphicon glyphicon-music"></span> Song</a></li>
                <li><a href="#"><span class="glyphicon glyphicon-calendar"></span> Event</a></li>
                <li><a href="#"><span class="glyphicon glyphicon-envelope"></span> Message</a></li>
            </ul>
            
            <ul class="nav navbar-nav pull-right">
                <li><a href="#"><span class="glyphicon glyphicon-user"></span> username</a></li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
