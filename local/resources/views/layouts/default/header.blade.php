<header>

    <div class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>


                @if (Auth::check())
                    <?php if(isset($home)){
                        $activeHome = $home;
                    }else{
                        $activeHome ='';
                    }
                    ?>
                    <a class="navbar-brand" href="{{url('/home')}}"><img src="{{asset('local/public/template/img/INNOVATION AND INCUBATION 02.png')}}" alt="" width="199" height="52" /></a>
                @else
                    <?php if(isset($welcome)){
                        $activeWelcome = $welcome;
                    }else{
                        $activeWelcome ='';
                    }
                    ?>
                    <a class="navbar-brand" href="{{url('/welcome-Home')}}"><img src="{{asset('local/public/template/img/INNOVATION AND INCUBATION 02.png')}}" alt="" width="199" height="52" /></a>
                @endif
            </div>

            <div class="navbar-collapse collapse ">
                <ul class="nav navbar-nav">

                    @if (Auth::check())
                        <?php if(isset($home)){
                            $activeHome = $home;
                        }else{
                            $activeHome ='';
                        }
                        ?>
                    <li class="dropdown">
                        <a href="{{url('/home')}}" class="dropdown-toggle" style="{{$activeHome}}" data-delay="0" data-close-others="false">Home</a>
                    </li>

                    @else
                        <?php if(isset($welcome)){
                            $activeWelcome = $welcome;
                        }else{
                            $activeWelcome ='';
                        }
                        ?>
                        <li class="dropdown">
                            <a href="{{url('welcome-Home')}}" style="{{$activeWelcome}}" class="dropdown-toggle"  data-delay="0" data-close-others="false">Home</a>
                        </li>
                    @endif




                        <?php if(isset($portfolio)){
                            $activePortfolio = $portfolio;
                        }else{
                            $activePortfolio ='';
                        }
                        ?>
                    <li><a href="{{ url('/portfolio') }}"><span style="{{$activePortfolio}}">Portfolio</span></a></li>

                        <?php if(isset($about)){
                            $activeAboutClass =$about;
                        }else{
                            $activeAboutClass ='';
                        }
                        ?>

                        <li><a  href="{{ url('/about') }}"><span style="{{$activeAboutClass}}">About</span></a></li>

                        <li class="dropdown">
                            <?php if(isset($news)){
                                $activenews = $news;
                            }else{
                                $activenews ='';
                            }
                            ?>
                            <a href="#" class="dropdown-toggle " data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false"><span style="{{$activenews}}">Events & News</span><i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">

                                <li><a href="{{ url('/events') }}"><span style="{{$activenews}}">Events</span></a></li>
                                <li><a href="{{ url('/news') }}"><span style="{{$activenews}}">News</span></a></li>
                            </ul>
                        </li>

                        <?php if(isset($resources)){
                            $activeresources = $resources;
                        }else{
                            $activeresources ='';
                        }
                        ?>

                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle " data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false">Resources<i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">

                                <?php if(isset($resources)){
                                    $activeresources = $resources;
                                }else{
                                    $activeresources ='';
                                }
                                ?>
                                <li><a href="{{ url('/books') }}"><span style="{{$activeresources}}">Books</span></a></li>

                                    <?php if(isset($resources)){
                                        $activeresources = $resources;
                                    }else{
                                        $activeresources ='';
                                    }
                                    ?>
                                <li><a href="{{ url('/articles') }}"><span style="{{$activeresources}}">Articles</span></a></li>

                                    <?php if(isset($resources)){
                                        $activeresources = $resources;
                                    }else{
                                        $activeresources ='';
                                    }
                                    ?>
                                <li><a href="{{ url('/videos') }}"><span style="{{$activeresources}}">Videos</span></a></li>
                            </ul>
                        </li>



                    @if (Auth::guest())
                            <?php if(isset($login)){
                                $activeLogin = $login;
                            }else{
                                $activeLogin ='';
                            }
                            ?>
                        {{--<li><a href="{{ url('/loginUser') }}"><span style="{{$activeLogin}}">Login</span></a></li>--}}

                                <?php if(isset($contact)){
                                    $activeContact = $contact;
                                }else{
                                    $activeContact ='';
                                }
                                ?>

                        <li><a href="{{url('/contact')}}"> <span style="{{$activeContact}}">Contact</span></a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle " data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false"> {{ Auth::user()->name }} <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <?php if(isset($userDetail)){
                                    $activeUserDetail =$userDetail;
                                }else{
                                    $activeUserDetail ='';
                                }
                                ?>
                                <li><a href="{{url('/dataDetail')}}"><span style="{{$activeUserDetail}}">User Detail</span></a></li>
                                    <?php if(isset($changePassword)){
                                        $activeChangePassword =$changePassword;
                                    }else{
                                        $activeChangePassword ='';
                                    }
                                    ?>
                                <li><a href="{{url('/create-news')}}"><span style="{{$activeChangePassword}}">Add News</span></a></li>

                                <li><a href="{{url('/change-password')}}"><span style="{{$activeChangePassword}}">Change Password</span></a></li>

                                <li>

                                    <a href="{{ url('/logoutUser') }}">
                                        Logout
                                    </a>
                                    <form id="logout-form" action="{{ url('/logoutUser') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </div>
</header>
<!-- end header -->


