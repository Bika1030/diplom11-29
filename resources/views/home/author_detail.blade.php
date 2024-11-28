<!DOCTYPE html>
<html lang="en">

<head>
    @include('home.css')
</head>
<style>
    /* General Reset */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

/* Body Styles */
.bodyb{
    font-family: 'Arial', sans-serif;
    justify-content: center;
    align-items: center;
    height: 100vh;
}
.authors{
    padding-top: 150px
}

/* Author container */
.author-container{
    width: 80%;
    max-width: 1000px;
    border-radius: 8px;
    display: flex;
    padding: 30px;
    gap: 20px;
}

/* Author photo */
.author-photo img {
    max-width: 100%;
    border-radius: 50%;
    height: auto;
}

/* Author information */
.author-info {
    flex: 1;
}

/* Author Name */
.author-name {
    font-size: 2rem;
    color: #333;
    margin-bottom: 10px;
}

/* Author Biography */
.author-bio {
    font-size: 1.2rem;
    color: #555;
    margin-bottom: 20px;
}

/* Notable Works */
.notable-works-title {
    font-size: 1.5rem;
    margin-bottom: 10px;
    color: #333;
}

.notable-works {
    list-style-type: none;
    margin-bottom: 20px;
}

.notable-works li {
    font-size: 1.1rem;
    color: #444;
}

/* Social Links */
.social-links {
    margin-top: 20px;
}

.social-links h3 {
    font-size: 1.2rem;
    color: #333;
    margin-bottom: 10px;
}

.social-link {
    display: inline-block;
    margin-right: 10px;
    font-size: 1rem;
    text-decoration: none;
    color: #0077b5;
    border: 1px solid #0077b5;
    padding: 8px 15px;
    border-radius: 5px;

}

.social-link:hover {
    background-color: #0077b5;
    color: #fff;
}

</style>
<body class="bodyb">

    @include('home.header')
    <div class="authors">
        <div class="">
            <div class="row">
                <div class="col-md-6">
                    <div class="author-container">
                        <div class="author-photo">
                            <img src="{{asset($authors->image)}}" alt="">
                        </div>
                        <div class="author-info">
                            <h1 class="author-name">{{$authors->name}}</h1>
                            <p class="author-bio">
                              {{$authors->description}}
                            </p>


                            <div class="social-links">
                                <h3></h3>
                                <a href="https://twitter.com" target="_blank" class="social-link">Twitter</a>
                                <a href="https://facebook.com" target="_blank" class="social-link">Facebook</a>
                                <a href="https://instagram.com" target="_blank" class="social-link">Instagram</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="text">
                        <h4 style="color: #444; font-size:25px">Зохиолч (орчуулагч)-ийн номууд</h4>
                    </div>
                    <div class="author_book">
                   

                    </div>
                </div>
            </div>
        </div>
    </div>





@include('home.footer')

</body>
</html>
