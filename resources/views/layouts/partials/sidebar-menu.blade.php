<div id="sidebar-menu">
    <!-- Left Menu Start -->
    <ul class="metismenu list-unstyled" id="side-menu">
        <li class="menu-title">Genel</li>
        <li>
            <a href="{{ route('admin.dashboard') }}" class="waves-effect">
                <i class="ti-home"></i>
                {{--                <span class="badge rounded-pill bg-primary float-end">2</span>--}}
                <span>Anasayfa</span>
            </a>
        </li>
        <li>
            <a href="javascript:void(0);" class="has-arrow waves-effect">
                <i class="ti-agenda"></i>
                <span>Urun Yonetimi</span>
            </a>
            <ul class="sub-menu" aria-expanded="false">
                <li><a href="{{ route('admin.products.index') }}">Urunler</a></li>
                <li><a href="{{ route('admin.categories.index') }}">Kategoriler</a></li>
                <li><a href="{{ route('admin.brands.index') }}">Markalar</a></li>
                <li><a href="{{ route('admin.tags.index') }}">Etiketler</a></li>
                <li><a href="{{ route('admin.attributes.index') }}">Urun Ozellikleri</a></li>
            </ul>
        </li>
    </ul>
</div>
