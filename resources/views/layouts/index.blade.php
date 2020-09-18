<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/index.css">
    @yield('design')
    <title>Document</title>
</head>
<body>
    <nav class="navigation">
        <button class="toggle-btn" onclick="toggleSide()">
            <span></span>
            <span></span>
            <span></span>
        </button>
        <div id="nav-title">
            Memo Tracker
        </div>
        <div>
        </div>
    </nav>
    <div id="wrapper">
        <div id="sidebar">
            <ul id="list">
                <li><a href="/view">View Memo</a></li>
                <li><a href="/create">Create Memo</a></li>
            </ul>
        </div>
    
        @yield('content')
    </div>
    <script src="assets/js/index.js"></script>
</body>
</html>