<div class="app-sidebar sidebar-shadow">
    <div class="app-header__logo">
        <a href="http://localhost/stok/">
            <div class="logo-src"></div>
        </a>
        <div class="header__pane ml-auto">
            <div>
                <button type="button" class="hamburger close-sidebar-btn hamburger--elastic"
                    data-class="closed-sidebar">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </button>
            </div>
        </div>
    </div>

    <div class="app-header__mobile-menu">
        <div>
            <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </span>
            </button>
        </div>
    </div>

    <div class="app-header__menu">
        <span>
            <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                <span class="btn-icon-wrapper">
                    <i class="fa fa-ellipsis-v fa-w-6"></i>
                </span>
            </button>
        </span>
    </div>

    <div class="scrollbar-sidebar">
        <div class="app-sidebar__inner">
            <ul class="vertical-nav-menu">
                <li class="app-sidebar__heading">MENÜ</li>
                <li class=""><a href="#" aria-expanded="false"><i class="metismenu-icon fa fa-user "></i>Müşteri<i
                            class="metismenu-state-icon pe-7s-angle-down caret-left"></i></a>
                    <ul class="mm-collapse" style="height: 7.05px;">
                        <li><a href="{{route('customer.list')}}"><i class="metismenu-icon"></i>Listele</a>
                        </li>
                        <li><a class="collapse-item" href="{{route('customer.create')}}"><i class="metismenu-icon"></i>Ekle</a>
                        </li>
                    </ul>
                </li>
                <li class=""><a href="#" aria-expanded="false"><i
                            class="metismenu-icon fa fa-shopping-basket "></i>Ürünler<i
                            class="metismenu-state-icon pe-7s-angle-down caret-left"></i></a>
                    <ul class="mm-collapse" style="height: 7.05px;">
                        <li><a href="{{route('product.list')}}"><i class="metismenu-icon"></i>Listele</a> </li>
                        <li> <a class="collapse-item" href="{{route('product.create')}}"><i class="metismenu-icon"></i>Ekle</a>
                        </li>
                    </ul>
                </li>
                <li class=""><a href="#" aria-expanded="false"><i
                            class="metismenu-icon fa fa-box "></i>Kategoriler<i
                            class="metismenu-state-icon pe-7s-angle-down caret-left"></i></a>
                    <ul class="mm-collapse" style="height: 7.05px;">
                        <li><a href="{{route('category.list')}}"><i class="metismenu-icon"></i>Listele</a> </li>
                        <li> <a class="collapse-item" href="{{route('category.create')}}"><i class="metismenu-icon"></i>Ekle</a>
                        </li>
                    </ul>
                </li>
                <li class=""><a href="{{route('logout')}}" aria-expanded="false"><i
                            class="metismenu-icon fa fa-lock "></i>Güvenli Çıkış Yap</a></li>

            </ul>
        </div>
    </div>
</div>
