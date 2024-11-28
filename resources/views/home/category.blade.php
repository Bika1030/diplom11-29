<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Category Sidebar</title>
    <!-- Link to your CSS file -->
    <link rel="stylesheet" href="styles.css">
</head>
<style>
  /* General reset */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

/* Body and page container */
body {
    font-family: 'Arial', sans-serif;
    background-color: #f4f4f4;
    color: #333;
}

/* Main content area */
.home-main-area {
    padding: 100px 0;
    background-color: #fff;
}

/* Category area */
.category-area {
    background-color: #fff;
    border: 1px solid #ddd;
    padding: 20px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.category-area h3 {
    font-size: 24px;
    font-weight: bold;
    color: #3498db;
    margin-bottom: 20px;
    text-align: center;
}

/* Category menu styling */
.category-menu nav {
    margin-top: 20px;
}

.category-menu ul {
    list-style: none;
    padding-left: 0;
}

.category-menu ul li {
    margin-bottom: 10px;
}

.category-menu ul li a {
    font-size: 18px;
    color: #333;
    text-decoration: none;
    display: block;
    padding: 10px;
    transition: background-color 0.3s ease;
}

.category-menu ul li a:hover {
    background-color: #3498db;
    color: white;
    border-radius: 4px;
}

/* Mobile responsiveness */
@media (max-width: 768px) {
    .category-area {
        padding: 15px;
    }

    .category-area h3 {
        font-size: 20px;
    }

    .category-menu ul li a {
        font-size: 16px;
        padding: 8px;
    }
}

</style>
<body>
<div class="home-main-area mt-30">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                <div class="category-area mb-30">
                    <h3><a href="/">Ангилал</a></h3>
                    <div class="category-menu">
                        <nav class="menu">
                            <ul>
                                @foreach($categories as $category)
                                    <li><a href="{{route('category.search',['id'=>$category->id])}}">{{ $category->cat_title }}</a></li>
                                @endforeach
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
            @foreach($books as $data)

              <div class="carousel__container">
                <div class="carousel-item">
                <a href="{{route('home.book.details', $data->id)}}"><img
                    class="carousel-item__img"
                    src="{{asset($data->book_img)}}"
                    alt="people"
                  width=""/></a>
                    <h5 class="title" style="color:#3f3f95; text-align:center; font-size:18px;font-weight:600">{{$data->title}}</h5>
                    <h6 style="font-size: 12px; color: #999;text-align:center">{{$data->author->name}}</h6>
                </div>

              </div>
             @endforeach
          </div>

        </div>
    </div>
</div>

</body>
</html>
