<!-- Main navbar -->
<div class="navbar navbar-expand-md navbar-dark">
    <div class="mt-2 mr-5">
        <a href="{{ route('dashboard') }}" class="d-inline-block">
            <h4 class="text-bold text-white">{{ Qs::getSystemName() }}</h4>
        </a>
    </div>

    <div class="d-md-none">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-mobile">
            <i class="icon-tree5"></i>
        </button>
    </div>

    <div class="collapse navbar-collapse" id="navbar-mobile">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown">
                <a href="{{ route('home') }}" class="navbar-nav-link">
                    <i class="icon-home"></i>
                    <span class="d-md-none ml-2">{{__('login.inicio')}}</span>
                </a>
            </li>

            <li class="nav-item dropdown">
                <a href="{{ route('login') }}" class="navbar-nav-link">
                    <i class="icon-user-tie"></i>
                    <span class="d-md-none ml-2">{{__('login.mi_cuenta')}}</span>
                </a>
            </li>
            <li>
                @if(session()->get('locale') == 'en')
                    <a href="{{url('locale/es')}}" class="navbar-nav-link">
                        <i class="icon">ES</i>
                        <span class="d-md-none ml-2">Español</span>
                    </a>
                @endif
                @if(session()->get('locale') == 'es')
                    <a href="{{url('locale/en')}}" class="navbar-nav-link">
                        <i class="icon">EN</i>
                        <span class="d-md-none ml-2">Ingles</span>
                    </a>
                @endif
            </li>

            <li class="nav-item dropdown">
                <a href="#" class="navbar-nav-link">
                    <i class="icon-cog3"></i>
                    <span class="d-md-none ml-2">{{__('login.opcion')}}</span>
                </a>
            </li>
        </ul>
    </div>
</div>
<!-- /main navbar -->
