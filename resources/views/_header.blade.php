 <header>
    <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12">
                    <div class="s-network">
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook" ></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-google" ></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-5 col-sm-8 col-xs-12">
                    <div class="informations "> <span><i class="fa fa-phone" aria-hidden="true"></i>&nbsp; {{ $contact->phone_number }}</span> <span>&nbsp;&nbsp;&nbsp;</span><span><i class="fa fa-envelope-o" aria-hidden="true"></i>&nbsp; {{ $contact->email}}</span> </div>
                </div>
                <div class="consulting">
                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12"> <a href="consultation.html" class="consultation hvr-buzz-out">Free Consultation</a> </div>
                </div>
            </div>
        </div>
    </div>
    <hr>

    <div class="menu" data-spy="affix" data-offset-top="80">
        <div class="container">
            <div class="row">
                <nav class="navbar navbar-default">
                    <div class="container-fluid">
                        <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                            <!-- Change logo here -->
                                <a class="navbar-brand" href="/"><img src="images/logo.png" alt="logo"></a>
                        </div>
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            {!! menu('main', '_main_menu') !!}
                        </div>
                        <!-- /.navbar-collapse -->
                </div>
                    <!-- /.container-fluid -->
                </nav>
            </div>
        </div>
    </div>
</header>
