<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <style>
        body {
            color: var(--light);
        }

        .container-fluid{
            padding-right: 0;
        }

        a,
        a:hover {
            text-decoration: none;
            color: inherit;
        }

        .header.public {
            font-weight: 500;
        }

        .row {
            margin-right: 0;
        }

        .header.public .head {
            min-width: 100%;
            height: 4rem;
            display: flex;
            align-items: center;
            margin-bottom: 0;
        }

        .header.public .head .title {
            padding-left: 4rem;
        }

        .header.public .head .user {
            margin-left: auto;
            padding-right: 1rem;
        }

        .header.public .head .dropdown-menu {
            min-width: 3rem;
            margin: 0 1rem;
        }

        .header.public .head .dropdown-menu li:hover .sub-menu {
            visibility: visible;
        }

        .header.public .head .dropdown:hover .dropdown-menu {
            display: block;
        }

        .header.public .head .dropdown a.dropdown-item:active {
            background-color: var(--dark);
        }

        .btn {
            background-color: transparent;
            color: inherit;
        }

        .btn:focus,
        .btn:active:focus,
        .btn.active:focus,
        .btn.focus,
        .btn:active.focus,
        .btn.active.focus {
            outline: none;
            box-shadow: none;
        }

        .content .row .sidebar {
            flex-wrap: nowrap;
            height: 100%;
        }

        .content .sidebar {
            background-color: #92a1b1;
            min-width: 8%;
            text-align: center;
        }

        .content .maincontent {
            width: 92%;
            word-break: break-all;
            position: relative;
        }

        .content .sidebar .displaybtn {
            font-size: 1.2rem;
            margin-top: 1.5rem;
        }

        .content .sidebar .displaybtn button {
            background-color: transparent;
            color: #fff;
            border: none;
            outline: none;
            cursor: pointer;
        }

        .content .sidebar .displaybtn button:active {
            outline: none;
        }

        .content .sidebar .sidebarcontent div {
            margin-top: 1rem;
        }

        .content .sidebar .sidebarcontent .btn {
            padding: 0;
            font-size: 1rem;
        }

        .content .sidebar .sidebarcontent .accountDropdown {
            display: none;
            margin-top: 8px;
        }

        .content .sidebar .sidebarcontent .accountDropdown p {
            margin-bottom: 6px;
        }

        .content .sidebar .sidebarcontent .accountDropdown .dropdown-item {
            color: inherit;
            padding: 0;
            line-height: 1.5rem;
        }

        .content .sidebar .sidebarcontent .accountDropdown .dropdown-item:hover {
            color: #92a1b1;
        }

        .content .sidebar .sidebarcontent .accountDropdown .dropdown-item:active {
            color: #fff !important;
            background-color: var(--dark);
        }

        .content .sidebar .sidebarcontent .accountDropdown .dropdown-item:focus {
            color: #92a1b1;
            background-color: none;
        }

        .content .maincontent .iframe {
            position: absolute;
            width: 100%;
            height: 100%;
        }

        @media(max-width:1384px) {

            .content .sidebar .displaybtn,
            .content .sidebar .sidebarcontent .btn,
            .content .sidebar .sidebarcontent .accountDropdown {
                font-size: 0.7rem;
            }
        }
    </style>
    <title>後台系統</title>
</head>

<body>
    <div class="container-fluid">
        <div class="header public">
            <div class="row">
                <div class="head bg-dark h2">
                    <div class="title">
                        <a href="/admin/index/welcome">後台系統</a>
                    </div>
                    <div class="user">
                        <div class="dropdown">
                            <a class="btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink">
                                {{ Auth::guard('admin')->user()->username }}
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <li><a class="dropdown-item" href="#">個人資訊</a></li>
                                <li><a class="dropdown-item" href="/admin/public/logout">登出</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content">
            <div class="row">
                <div class="sidebar" id="sidebar">
                    <div class="displaybtn">
                        <span id="sidebarspan">功能選單</span>
                        <button id="sidebarbutton" class="sidebarbutton" onclick="sidebar_open()">&#9776;</button>
                    </div>
                    <div id="sidebarcontent" class="sidebarcontent">
                        <div id="dropdown1" class="dropdown">
                            <button class="btn dropdown-toggle" onclick="sidebarDropdown_open()">
                                帳號管理
                            </button>
                            <div class="accountDropdown" id="sidebarDropdown">
                                <p><a class="dropdown-item" target="iframe-welcome" href="#">新增管理員</a></p>
                                <p><a class="dropdown-item" target="iframe-welcome" href="/admin/manager/index">管理員列表</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="maincontent" class="maincontent">
                    <!-- <iframe id="iframe-welcome" name="iframe-welcome" class="iframe" data-scrolltop="0" scrolling="yes" frameborder="0"
                        src="/admin/index/welcome"></iframe> -->
                        <div class="iframe">
                            @yield('content')
                        </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script>
    var sidebarDropdownstatus = 1;
    var sidebarstatus = 1;

    /* sidebar 下拉顯示的縮合 */
    function sidebarDropdown_open() {
        if (sidebarDropdownstatus == 1) {
            document.getElementById("sidebarDropdown").style.display = "block";
            sidebarDropdownstatus = 0;
        } else {
            document.getElementById("sidebarDropdown").style.display = "none";
            sidebarDropdownstatus = 1;
        }
    }

    /* sidebar 的縮合 */
    function sidebar_open() {
        if (sidebarstatus == 1) {
            document.getElementById("sidebar").style.minWidth = '3%';
            document.getElementById("maincontent").style.width = '97%';
            document.getElementById("sidebarspan").style.display = 'none';
            document.getElementById("dropdown1").style.display = 'none';
            sidebarstatus = 0;
        } else {
            document.getElementById("sidebar").style.minWidth = '8%';
            document.getElementById("maincontent").style.width = '92%';
            document.getElementById("sidebarspan").style.display = 'inline';
            document.getElementById("dropdown1").style.display = 'block';
            sidebarstatus = 1;
        }
    }
</script>

</html>
