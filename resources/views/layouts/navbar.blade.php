<nav class="nav-bar" id="nav-bar">
    <label for="techy" id="techy">Tech Guy</label>
    <ul id="nav-links" class="nav-links">
        <li class="link" id="link"><a href="/">Home</a></li>
        <li class="link" id="link"><a href="#">Latest Posts</a></li>
        <li class="link" id="link"><a href="#">Topics</a></li>
        <li class="link" id="link"><a href="#">Users</a></li>
    </ul>
    @auth
    <li class="user-check" id="user-check"><a href="#"><i class="fa-solid fa-user"></i></a></li>
    <li class="logout" id="logout"><a href="{{Route("logout")}}"><i class="fa-solid fa-right-from-bracket"></i></a></li>
    @else 
    <li class="login" id="login"><a href="{{Route("loginPage")}}"><i class="fa-solid fa-right-to-bracket"></i></a></li>
    @endauth
</nav>