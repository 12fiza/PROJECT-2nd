<style>
    .dropdown-menu {
        position: absolute !important;
        left:-100px;
    }
    .home{
        position: absolute;
        height: 58px;
        left: 125px;
        top: 21px;
        font-family: Roboto;
        font-size: 25px;
        line-height: 42px;
        color: #000000;


    }
    </style>
<nav class="navbar navbar-light bg-light">
    <a class="navbar-brand" href="#">
        <img src="assets\images\webimages\home.jpeg" height="50">
    </a>
    <div class =home>Home</div>
    
        <ul class="navbar-nav">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="avatarPanelToggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <img src="assets/images/webimages/drop down.jpeg" class="rounded-circle" width="30" height="30">
                </a>
                <div class="dropdown-menu" aria-labelledby="avatarPanelToggle">
                <a class="dropdown-item" href="#">Dashboard</a>
                <a class="dropdown-item" href="#">Login</a>
                <a class="dropdown-item" href="#">Chatbot</a>
                <a class="dropdown-item" href="server.php?operation_type=logout">Logout</a>
                </div>
            </li>
        </ul>
    
</nav>