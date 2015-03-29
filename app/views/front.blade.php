@extends('template.layout.frontend')

@section('topbar')
<div class="pre-header">
        <div class="container">
            <div class="row">
                <!-- BEGIN TOP BAR LEFT PART -->
                <div class="col-md-6 col-sm-6 additional-shop-info">
                    <ul class="list-unstyled list-inline">
                        <li><i class="fa fa-phone"></i><span>+1 456 6717</span></li>
                        <li><i class="fa fa-envelope-o"></i><span>Info@HilaalBanking.com</span></li>
                    </ul>
                </div>
                <!-- END TOP BAR LEFT PART -->
                <!-- BEGIN TOP BAR MENU -->
                <div class="col-md-6 col-sm-6 additional-nav">
                    <ul class="list-unstyled list-inline pull-right">
                        <li><a href="{{route('login')}}">Log In</a></li>
                        <li><a href="{{route('register')}}">Registration</a></li>
                    </ul>
                </div>
                <!-- END TOP BAR MENU -->
            </div>
        </div>        
    </div>
@stop

@section('header')
<div class="header">
      <div class="container">
        <a class="site-logo" href="{{route('index')}}"><img src="http://assets.hilaalbanking.com/frontend/layout/img/logos/logo-corp-red.png" alt=""></a>

        <a href="javascript:void(0);" class="mobi-toggler"><i class="fa fa-bars"></i></a>

        <!-- BEGIN NAVIGATION -->
        <div class="header-navigation pull-right font-transform-inherit">
          <ul>
            <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="" data-target="#" href="{{route('index')}}">
                Home 
                
              </a>
                
              
            </li>
            <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="" data-target="#" href="{{route('about')}}">
                About 
                
              </a>
                
              
            </li>
            <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="" data-target="#" href="{{route('faq')}}">
                FAQ 
                
              </a>
                
              
            </li>
            <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="" data-target="#" href="{{route('news')}}">
                News 
                
              </a>
                
              
            </li>
            <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="" data-target="#" href="{{route('support')}}">
                Support 
                
              </a>
                
              
            </li>
          <!-- BEGIN TOP SEARCH -->
            <!--  <li class="menu-search">
              <span class="sep"></span>
              <i class="fa fa-search search-btn"></i>
              <div class="search-box">
                <form action="#">
                  <div class="input-group">
                    <input type="text" placeholder="Search" class="form-control">
                    <span class="input-group-btn">
                      <button class="btn btn-primary" type="submit">Search</button>
                    </span>
                  </div>
                </form>
              </div> 
            </li>-->
            <!-- END TOP SEARCH -->
          </ul>
        </div>
        <!-- END NAVIGATION -->
      </div>
    </div>
@stop
