<nav class="header-nav">
        <ul>
            <img id="logo" src="">
            <li><a href="index.php">Home</a></li>
            <li><a href="includes/about.php">About</a></li>
            <li><a href="includes/services.php">Services</a></li>
            <li><a href="includes/contact.php">Contact</a></li>
        </ul>
    </nav>
    
    <style>
        .header-nav{
            display: flex;
            background: darkblue;       
            height: 70px;      
            align-items: center;
        }

        li, a{
            display: inline-flex;
            align-items: center;
            color: white;
            list-style: none;
            text-decoration: none;
            flex: 1;
            justify-content: space-between;
            padding-left: 45px;
            font-size: larger;
        }
    </style>