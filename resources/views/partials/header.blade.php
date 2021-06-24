<header>

    <div class="container">

        <div class="logo-container">
            <img src="{{asset('images/dc-logo.png')}}" alt="">
        </div>
    
        <nav>
            <ul>
            
                <li>
                    <a href="#">Home</a>
                </li>
                <li>
                    <a href="{{ route('comics.index') }}">Comics</a>
                </li>
                <li>
                    <a href="{{ route('comics.create') }}">New record</a>
                </li>
            
            </ul>
        
        
        </nav>
    
    </div>

    <div class="jumbotron">
        <img src="{{asset('images/jumbotron.jpg')}}" alt="">
    </div>


</header>