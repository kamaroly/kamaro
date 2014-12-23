 <header class="top-header clearfix">

    <!-- Logo -->
    <div class="logo bg-dark" >
        <a href="#">
            <span class="ng-binding">App Name</span>
        </a>
    </div>

    <!-- needs to be put after logo to make it work -->
    <div class="menu-button" toggle-off-canvas="">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </div>

    <div class="top-nav">
        <ul class="nav-left list-unstyled">
            <li>
                <a href="#" data-toggle-nav-collapsed-min="" class="toggle-min"><i class="ti-menu"></i></a>
            </li>
            <li class="dropdown hidden-xs" d>
                <a href="javascript:;" class="dropdown-toggle" ><i class="ti-settings"></i></a>
            </li>
            <li class="dropdown hidden-xs" >
                <a href="javascript:;"><i class="ti-paint-bucket"></i></a>
               
           </li>
            <li class="search-box visible-md visible-lg">
                <div class="input-group">
                    <span class="input-group-addon"><i class="ti-search"></i></span>
                    <input type="text" class="form-control" placeholder="Search...">
                </div>
            </li>
            <li class="dropdown" dropdown="" is-open="status.isopenEmail">
                <a href="javascript:;">
                    <i class="ti-email"></i>
                    <span class="badge badge-danger">3</span>
                </a>
               
            </li>
            <li class="dropdown" dropdown="" is-open="status.isopenBell">
                <a href="">
                    <i class="ti-bell"></i>
                    <span class="badge badge-info">3</span>
                </a>
                
            </li>
        </ul> 

        <ul class="nav-right pull-right list-unstyled">

            <li class="dropdown text-normal nav-profile" dropdown="" is-open="status.isopenProfile">
                <a href="javascript:;" class="dropdown-toggle" dropdown-toggle="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img src="#" alt="" class="img-circle img30_30">
                    <span class="hidden-xs">
                        <span data-i18n="Lisa Doe">Kamaro</span>
                    </span>
                </a>
            </li>
            <li class="dropdown langs text-normal ng-scope" dropdown="" is-open="status.isopenLang" data-ng-controller="LangCtrl">
                <a href="javascript:;" class="dropdown-toggle  dropdown-toggleactive-flag" data-toggle="dropdown">
                    <div class="flag flags-american"></div>
                </a>
            </li>
        </ul>
    </div>

</header>