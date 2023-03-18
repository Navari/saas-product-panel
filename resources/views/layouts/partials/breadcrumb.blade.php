<div class="page-title-box">
    <div class="row align-items-center">
        <div class="col-md-8">
            <h6 class="page-title">{{ $page_title ?? '' }}</h6>
            <ol class="breadcrumb m-0">
                @php $segments = ''; @endphp
                @foreach(Request::segments() as $segment)
                    @php $segments .= '/'.$segment; @endphp
                    <li class="breadcrumb-item"><a href="{{ $segments }}">{{ trans($segment) }}</a></li>
                @endforeach
            </ol>
        </div>
        @isset($actions)
            <div class="col-md-4">
                <div class="float-end d-none d-md-block">
                    <div class="dropdown">
                        <button class="btn btn-primary  dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="mdi mdi-cog me-2"></i> Islemler
                        </button>
                        <div class="dropdown-menu dropdown-menu-end">
                            @foreach($actions as $action)
                                <a class="dropdown-item" href="{{ $action['url'] }}">{{ $action['label'] }}</a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        @endisset
    </div>
</div>
