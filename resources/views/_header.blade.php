 <header>
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12">
                <div class="s-network">
                    <ul>
                        @if(setting('site.facebook_link'))
                            <li>
                                <a href="{{ setting('site.facebook_link') }}" target="blank">
                                    <i class="fa fa-facebook" ></i>
                                </a>
                            </li>
                        @endif
                        @if(setting('site.twitter_link'))
                            <li>
                                <a href="{{ setting('site.twitter_link') }}" target="blank">
                                    <i class="fa fa-twitter"></i>
                                </a>
                            </li>
                        @endif
                        @if(setting('site.youtube_link'))
                            <li>
                                <a href="{{ setting('site.youtube_link') }}" target="blank">
                                    <i class="fa fa-youtube"></i>
                                </a>
                            </li>
                        @endif
                        @if(setting('site.instagram_link'))
                            <li>
                                <a href="{{ setting('site.instagram_link') }}" target="blank">
                                    <i class="fa fa-instagram"></i>
                                </a>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
            <div class="col-lg-6 col-md-5 col-sm-8 col-xs-12">
                <div class="informations "> <span><i class="fa fa-phone" aria-hidden="true"></i>&nbsp; {{ $contact->phone_number }}</span> <span>&nbsp;&nbsp;&nbsp;</span><span><i class="fa fa-envelope-o" aria-hidden="true"></i>&nbsp; {{ $contact->email}}</span> </div>
            </div>
            <div class="consulting">
                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12"> 
                    <a href="/membership" class="consultation hvr-buzz-out">
                        {{ __('messages.become_member') }}
                    </a> 
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
                                <a class="navbar-brand" href="/"><img src="{{ Voyager::image(setting('site.logo')) }}" alt="logo"></a>
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
    <div class="container">
        @if ($message = Session::get('callback_success'))
        <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button> 
                <strong>{{ $message }}</strong>
        </div>
        @endif
    </div>
</header>
