<!DOCTYPE html>
<html lang="en">

<head>
    @include('home.css')
</head>
<style>
  *{
    /* margin: 0;
    padding: 0;
    box-sizing: border-box; */
  }
  .bodyl{
      /* font-family: Arial, sans-serif;
      line-height: 1.6;
      background-color: #f9f9f9;
      color: #333;
      padding: 20px */
  }
  .book-detail{
    display: flex;
    padding: 20px;
    padding-top: 100px;
    padding-bottom: 100px;
    margin: 0 auto;
    background: #fff;
    box-shadow: 0 4px 6px rgba(0,0,0,0.1);
    border-radius: 8px;
    overflow: hidden;
  }
  .book-cover img{
    width: 350px;
    height: 500px;
    object-fit: cover;
  }
  .book-info{
    padding: 20px;
  }
  .book-title{
    font-size: 24px;
    margin-bottom: 10px;
    color: #2c3e50;
  }
  .author,
  .publisher,
  .release-date{
    margin-bottom: 15px;
    color: #555;
  }
  .description{
    color: #555;
    margin-top: 15px;
    margin-bottom: 20px;
  }
  .btn{
    width: 100px;
    display: flex;
    padding: 10px 20px;
    background: #3498bd;
    text-decoration: none;
    border-radius:5px;
  }
  .btn:hover{
    background: #2980b9;
  }

</style>
<body class="bodyl">

@include('home.header')
<div class="book-detail">
        <div class="book-cover">
            <img src="{{asset($book->book_img)}}" alt="Book Cover">
        </div>
        <div class="book-info">
            <h1 class="book-title">{{$book->title}}</h1>
            <a href="{{route('home.author.detail', $book->id)}}"><p class="author">Зохиолч: {{$book->author->name}}</p></a>
            <p class="publisher">Ангилал:  {{$book->category->cat_title}}</p>
            <p class="release-date">Хэвлэгдсэн тоо хэмжээ: {{$book->quantity}}</p>
            <p class="description">{{$book->description}}</p>
           <a href="{{ route('home.book.read', $book->id) }}" class="btn">Унших</a>
        </div>
    </div>

@include('home.footer')

</body>
</html>
