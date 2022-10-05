<div class="header">
		
    <div class="w3layouts_header_right">
        <div class="agileits-social top_content">
                <ul>
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-rss"></i></a></li>
                        <li><a href="#"><i class="fa fa-vk"></i></a></li>
                    </ul>
            </div>
    </div>
    <div class="w3layouts_header_left">
        <ul>
                <li><a href="#" data-toggle="modal" data-target="#myModal2"><i class="fa fa-user" aria-hidden="true"></i> Sign in</a></li>
                <li><a href="#" data-toggle="modal" data-target="#myModal3"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Sign up</a></li>
            </ul>

    </div>
    <div class="clearfix"> </div>
</div>
<div class="header_mid">
    <div class="w3layouts_header_mid">
        <ul>
            <li>
                <div class="header_contact_details_agile"><i class="fa fa-envelope-o" aria-hidden="true"></i>
                    <div class="w3l_header_contact_details_agile">
                         <div class="header-contact-detail-title">Send us a Message</div> 
                        <a href="mailto:info@example.com">info@example.com</a>
                    </div>
               </div>
            </li>
            <li>
                <div class="header_contact_details_agile"><i class="fa fa-phone" aria-hidden="true"></i>
                    <div class="w3l_header_contact_details_agile">
                         <div class="header-contact-detail-title">Give us a Call</div> 
                        <a class="w3l_header_contact_details_agile-info_inner"> 919-993-1000 </a>
                    </div>
               </div>
            </li>
            <li>
                <div class="header_contact_details_agile"><i class="fa fa-clock-o" aria-hidden="true"></i>
                    <div class="w3l_header_contact_details_agile">
                         <div class="header-contact-detail-title">Opening Hours</div> 
                        <a class="w3l_header_contact_details_agile-info_inner">Mon - Sat: 7:00 - 18:00</a>
                    </div>
               </div>
            </li>
            <li>
                <div class="header_contact_details_agile"><i class="fa fa-map-marker" aria-hidden="true"></i>
                    <div class="w3l_header_contact_details_agile">
                         <div class="header-contact-detail-title">3007 Sarah Drive</div> 
                            <a class="w3l_header_contact_details_agile-info_inner">Franklin, LA 70538 </a>
                    </div>
               </div>
            </li>
        </ul>
    </div>
</div>
<div class="banner">
    <nav class="navbar navbar-default">
        <div class="navbar-header navbar-left">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <h1><a class="navbar-brand" href="index.html"><span>F</span>unding</a></h1>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
            <nav class="link-effect-2" id="link-effect-2">
                <ul class="nav navbar-nav">
                    <li class="{{ $active && $active == 'home' ? 'active' : '' }}"><a href="{{ route('fe.home') }}"><span data-hover="Home">Home</span></a></li>
                    <li class="{{ $active && $active == 'about-us' ? 'active' : '' }}"><a href="{{ route('fe.about-us') }}"><span data-hover="About Us">About Us</span></a></li>
                    <li class="{{ $active && $active == 'qa' ? 'active' : '' }}"><a href="{{ route('fe.qa') }}"><span data-hover="QA">QA</span></a></li>
                    <li class="{{ $active && $active == 'contact-us' ? 'active' : '' }}"><a href="{{ route('fe.contact-us') }}"><span data-hover="Mail Us">Contact us</span></a></li>
                </ul>
            </nav>
        
        </div>
        <div class="w3_agile_search">
            <form action="#" method="post">
                <input type="search" name="Search" placeholder="Search Keywords..." required="" />
                <input type="submit" value="Search">
            </form>

        </div>
    </nav>
</div>