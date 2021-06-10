<li class="nav-item">
    <a href="{{ route('users.index') }}"
       class="nav-link {{ Request::is('users*') ? 'active' : '' }}">
        <i class="fas fa-users"></i>
        <p>{{__("admin.users")}}</p>
    </a>
</li>

@if(auth()->user()->is_admin == 1)
<li class="nav-item">
    <a href="{{ route('categories.index') }}"
       class="nav-link {{ Request::is('categories*') ? 'active' : '' }}">
        <i class="fas fa-align-justify"></i>
        <p>{{__("admin.categories")}}</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('courses.index') }}"
       class="nav-link {{ Request::is('courses*') ? 'active' : '' }}">
        <i class="fas fa-book"></i>
        <p>{{__("admin.courses")}}</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('videos.index') }}"
       class="nav-link {{ Request::is('videos*') ? 'active' : '' }}">
        <i class="fas fa-camera"></i>
        <p>{{__("admin.videos")}}</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('reviews.index') }}"
       class="nav-link {{ Request::is('reviews*') ? 'active' : '' }}">
        <i class="fas fa-comments"></i>
        <p>
            {{__("admin.reviews")}}
        </p>
    </a>
</li>
@endif

<li class="nav-item">
    <a href="" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
       class="nav-link">
        <i class="fas fa-power-off"></i>
        <p>
            {{__("admin.logout")}}
        </p>
    </a>
</li>
