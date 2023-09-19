<div class="sidebar" data-color="white" data-active-color="danger">
    <div class="logo">
        <a href="" class="simple-text logo-mini">
            <div class="logo-image-small">
                <img src="{{ asset('paper') }}/img/perfillogo.jpg">
            </div>
        </a>
        <a href="/profile" class="simple-text logo-normal">
            {{ __(auth()->user()->name)}}
        </a>
    </div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="{{ $elementActive == 'dashboard' ? 'active' : '' }}">
                <a href="{{ route('home', 'dashboard') }}">
                    <i class="nc-icon nc-tile-56"></i>
                    <p>{{ __('Dashboard') }}</p>
                </a>
            </li>
            {{-- <li class="{{ $elementActive == 'user' || $elementActive == 'profile' ? 'active' : '' }}">
                <a data-toggle="collapse" aria-expanded="true" href="#laravelExamples">
                    <i class="nc-icon"><img src="{{ asset('paper/img/laravel.svg') }}"></i>
                    <p>
                            {{ __('Laravel examples') }}
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse show" id="laravelExamples">
                    <ul class="nav">
                        <li class="{{ $elementActive == 'profile' ? 'active' : '' }}">
                            <a href="{{ route('profile.edit') }}">
                                <span class="sidebar-mini-icon">{{ __('UP') }}</span>
                                <span class="sidebar-normal">{{ __(' User Profile ') }}</span>
                            </a>
                        </li>
                        <li class="{{ $elementActive == 'user' ? 'active' : '' }}">
                            <a href="{{ route('page.index', 'user') }}">
                                <span class="sidebar-mini-icon">{{ __('U') }}</span>
                                <span class="sidebar-normal">{{ __(' User Management ') }}</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li> --}}
            <li class="{{ $elementActive == 'contratos' ? 'active' : '' }}">
                <a href="{{ route('page.index', 'contratos') }}">
                    <i class="nc-icon nc-tile-56"></i>
                    <p>{{ __('Contratos') }}</p>
                </a>
            </li>
            <li class="{{ $elementActive == 'saldos' ? 'active' : '' }}">
                <a href="{{ route('page.index', 'saldos') }}">
                    <i class="nc-icon nc-tile-56"></i>
                    <p>{{ __('Saldos') }}</p>
                </a>
            </li>
            <li class="{{ $elementActive == 'adicionar' ? 'active' : '' }}">
                <a href="{{ route('page.index', 'adicionar') }}">
                    <i class="nc-icon nc-tile-56"></i>
                    <p>{{ __('Adicionar +') }}</p>
                </a>
            </li>
            <li class="{{ $elementActive == 'editar' ? 'active' : '' }}">
                <a href="{{ route('page.index', 'editar') }}">
                    <i class="nc-icon nc-tile-56"></i>
                    <p>{{ __('Editar') }}</p>
                </a>
            </li>
            <li class="{{ $elementActive == 'graficos' ? 'active' : '' }}">
                <a href="{{ route('page.index', 'graficos') }}">
                    <i class="nc-icon nc-tile-56"></i>
                    <p>{{ __('Gráficos') }}</p>
                </a>
            </li>
            
        </ul>
    </div>
</div>
