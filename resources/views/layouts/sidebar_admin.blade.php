<div class="kt-aside-menu-wrapper kt-grid__item kt-grid__item--fluid" id="kt_aside_menu_wrapper">
    <div id="kt_aside_menu" class="kt-aside-menu " data-ktmenu-vertical="1" data-ktmenu-scroll="1"
        data-ktmenu-dropdown-timeout="500">
        <ul class="kt-menu__nav ">
            <li class="kt-menu__item mb-3  {{ set_active('admin.dashboard') }}" aria-haspopup="true">
                <a href="{{ route('admin.dashboard') }}" class="kt-menu__link ">
                    <span class="kt-menu__link-icon">
                        <i class="fa fa-home"></i>
                    </span>
                    <span class="kt-menu__link-text">Dashboard</span>
                </a>
            </li>
            <li class="kt-menu__item mb-3  {{ set_active('admin.periode') }}" aria-haspopup="true">
                <a href="{{ route('admin.periode') }}" class="kt-menu__link ">
                    <span class="kt-menu__link-icon">
                        <i class="fa fa-home"></i>
                    </span>
                    <span class="kt-menu__link-text">Managemen Periode</span>
                </a>
            </li>
            <li class="kt-menu__item mb-3  {{ set_active('admin.orangtua') }}" aria-haspopup="true">
                <a href="{{ route('admin.orangtua') }}" class="kt-menu__link ">
                    <span class="kt-menu__link-icon">
                        <i class="fa fa-home"></i>
                    </span>
                    <span class="kt-menu__link-text">Managemen Akun Orang Tua</span>
                </a>
            </li>
            <li class="kt-menu__item mb-3" aria-haspopup="true">
                <a href="{{ route('logout.admin') }}" class="kt-menu__link ">
                    <span class="kt-menu__link-icon">
                        <i class="fa fa-sign-out-alt"></i>
                    </span>
                    <span class="kt-menu__link-text">Logout</span>
                </a>
            </li>
        </ul>
    </div>
</div>