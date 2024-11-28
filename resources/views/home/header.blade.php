<style>
    .search-form .form-control {
        width: 500px;
        margin-left: 50px;
        margin-top: 15px;
        height: 40px;
        border-radius: 5px 0  0 5px;
        color: #000;
        border: none;
        font-size: 16px;
    }

    .button {
       margin-right: 850px;
       margin-top: 15px;
        background: #01a85a none repeat scroll 0 0;
        color: #fff;
        font-size: 18px;
        line-height: 40px;
        position: absolute;
        right: 0;
        text-align: center;
        top: 0;
        width:70px;
        border-radius: 0 5px 5px 0;
}


</style>
<!-- ***** Header Area Start ***** -->
<header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="/" class="logo">
                        <h1 style="font-size: 30px; margin-top: 5px; font-weight:bold">Цахим ном</h1>
                    </a>
                    <form class="search-form" action="{{ url('search') }}" method="get">
                        @csrf
                        <div class="row">
                            <div class="col-md-8">
                                <input class="form-control" type="search" name="search" placeholder="Хайх утгаа оруулна уу">
                            </div>
                            <div class="button">
                                <button type="submit"><i class="fa fa-search"></i></button>
                            </div>
                        </div>
                    </form>
                    <ul class="nav">
                        <li class="active"><a href="/">Нүүр</a></li>
                        <li><a href="{{url('explore')}}">Номнууд</a></li>
                        <li><a href="{{route('home.authors')}}">Зохиолч</a></li>

                        @if (Route::has('login'))

                            @auth
                                <x-app-layout>
                                </x-app-layout>

                            @else
                                <li><a href="{{ route('login') }}">Нэвтрэх</a></li>

                                @if (Route::has('register'))
                                    <li><a href="{{ route('register') }}">Бүртгүүлэх</a></li>
                                @endif
                            @endauth

                        @endif


                    </ul>
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- ***** Header Area End ***** -->
