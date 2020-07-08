<div class="kt-aside-menu-wrapper kt-grid__item kt-grid__item--fluid" id="kt_aside_menu_wrapper">
    <div id="kt_aside_menu" class="kt-aside-menu " data-ktmenu-vertical="1" data-ktmenu-scroll="1"
        data-ktmenu-dropdown-timeout="500">
        <ul class="kt-menu__nav ">
            <li class="kt-menu__item mb-3  {{ set_active('orangtua.dashboard') }}" aria-haspopup="true">
                <a href="{{ route('orangtua.dashboard') }}" class="kt-menu__link ">
                    <span class="kt-menu__link-icon">
                        <i class="fa fa-home"></i>
                    </span>
                    <span class="kt-menu__link-text">Dashboard</span>
                </a>
            </li>
            <li class="kt-menu__item mb-3  {{ set_active('orangtua.mata_kuliah') }}" aria-haspopup="true">
                <a href="{{ route('orangtua.mata_kuliah') }}" class="kt-menu__link ">
                    <span class="kt-menu__link-icon">
                        <i class="fa fa-home"></i>
                    </span>
                    <span class="kt-menu__link-text">Data Mata Kuliah</span>
                </a>
            </li>
            
            {{-- <li class="kt-menu__item mb-3  {{ set_active('orangtua.presensi') }}" aria-haspopup="true">
                <a href="{{ route('orangtua.presensi') }}" class="kt-menu__link ">
                    <span class="kt-menu__link-icon">
                        <i class="fa fa-home"></i>
                    </span>
                    <span class="kt-menu__link-text">Data Mata Kuliah</span>
                </a>
            </li> --}}
            <li class="kt-menu__item mb-3" aria-haspopup="true">
                <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
            </li>
        </ul>
    </div>
</div>