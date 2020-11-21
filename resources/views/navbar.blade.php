<div class="header-container fixed-top">
    <header class="header navbar navbar-expand-sm expand-header">
        <a href="javascript:void(0);" class="sidebarCollapse" data-placement="bottom"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg></a>

        <ul class="flex-row ml-auto navbar-item">
            <li class="order-1 nav-item dropdown user-profile-dropdown order-lg-0">
                <a href="javascript:void(0);" class="nav-link dropdown-toggle user" id="userProfileDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user-check"><path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="8.5" cy="7" r="4"></circle><polyline points="17 11 19 13 23 9"></polyline></svg>
                </a>
                <div class="dropdown-menu position-absolute e-animated e-fadeInUp" aria-labelledby="userProfileDropdown">
                    <div class="user-profile-section">
                        @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                        <div class="mx-auto media">
                            <img src="{{ Auth::user()->profile_photo_url }}" class="mr-2 img-fluid" alt="{{ Auth::user()->name }}">
                            <div class="media-body">
                                <h5>{{ Auth::user()->name }}</h5>
                                <p>Akun kamu digunakan {{count(Auth::user()->sessions)}} Device</p>
                                @foreach (Auth::user()->sessions as $session)
                                <p>IP: {{ $session->ip_address }}</p>
                                @endforeach

                            </div>
                        </div>
                        @else
                            <div class="mx-auto media">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user-check">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path><circle cx="8.5" cy="7" r="4"></circle><polyline points="17 11 19 13 23 9"></polyline>
                                </svg>
                                <img src="{{ Auth::user()->profile_photo_url }}" class="mr-2 img-fluid" alt="{{ Auth::user()->name }}">
                                <div class="media-body">
                                    <h5>{{ Auth::user()->name }}</h5>
                                    <p>Akun kamu digunakan {{count(Auth::user()->sessions)}} Device</p>
                                    @foreach (Auth::user()->sessions as $session)
                                    <p>IP: {{ $session->ip_address }}</p>
                                    @endforeach

                                </div>
                            </div>

                        @endif
                    </div>
                    @if(Auth::user()->currentTeam->id == 1)
                    <div class="dropdown-item">
                        <a href="{{ route('teams.show', Auth::user()->currentTeam->id) }}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg> <span>My Profile</span>
                        </a>
                    </div>
                    @endif
                    {{--<div class="dropdown-item">
                        <a href="apps_mailbox.html">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-inbox"><polyline points="22 12 16 12 14 15 10 15 8 12 2 12"></polyline><path d="M5.45 5.11L2 12v6a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-6l-3.45-6.89A2 2 0 0 0 16.76 4H7.24a2 2 0 0 0-1.79 1.11z"></path></svg> <span>My Inbox</span>
                        </a>
                    </div> --}}

                        @foreach (Auth::user()->allTeams() as $team)
                        <div class="dropdown-item">
                            <x-jet-switchable-team :team="$team" />
                        </div>
                        @endforeach

                    <div class="dropdown-item">
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-jet-dropdown-link href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                                            this.closest('form').submit();">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-out"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg> <span>{{__('Log Out')}}</span>
                            </x-jet-dropdown-link>
                        </form>
                        {{-- <a href="auth_login.html">
                        </a> --}}
                    </div>
                </div>
            </li>
        </ul>
    </header>
</div>
