<div class="left-side-bar">
    <div class="brand-logo">
        <a href="/">
            <img src={{ asset("vendors/images/deskapp-logo.svg") }} alt="" class="dark-logo">
            <img src={{ asset("vendors/images/deskapp-logo-white.svg") }} alt="" class="light-logo">
        </a>
        <div class="close-sidebar" data-toggle="left-sidebar-close">
            <i class="ion-close-round"></i>
        </div>
    </div>
    <div class="menu-block customscroll">
        <div class="sidebar-menu">
            <ul id="accordion-menu">
                <li class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle">
                        <span class="micon dw dw-house-1"></span><span class="mtext">Home</span>
                    </a>
                    <ul class="submenu">
                        <li><a href="/files">Files</a></li>
                        
                    </ul>
                </li>
                </ul>
        </div>
    </div>
</div>
<div class="mobile-menu-overlay"></div>

        <!-- guest -->

        <div class="header">
            <div class="header-left">
                <div class="menu-icon dw dw-menu"></div>
                <div class="search-toggle-icon dw dw-search2" data-toggle="header_search"></div>
                <div class="header-search">
    
                    <form action="/files" class="form-inline my-2 my-lg-0" method="GET">
                        <div class="form-group mb-0">
                            <i class="dw dw-search2 search-icon"></i>
                            <input class="form-control search-input" type="search" placeholder="Search file Here" aria-label="Search" name="search">
                        </div>
                    </form>
                </div>
            </div>
            <div class="header-right">
                
                @auth
                <div class="user-info-dropdown">
                    <div class="dropdown">
                        <a class="dropdown-toggle" href="#" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            {{ Auth::user()->username }}
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                            <a class="dropdown-item" href="/users/{{ Auth::user()->id }}"></i> Profile</a>
                            <a class="dropdown-item" href="profile.html"><i class="dw dw-settings2"></i> Setting</a>
                            <a class="dropdown-item" href="/logout"><i class="dw dw-logout"></i> Log Out</a>
                        </div>
                    </div>
                </div>
                @endauth
            </div>
        </div>