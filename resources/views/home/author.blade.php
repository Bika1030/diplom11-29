<!DOCTYPE html>
<html lang="en">

<head>
    @include('home.css')
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <style>
        /* Basic styling */

        /* Section title style */
        .section-heading h2 {
            font-size: 32px;
            font-weight: bold;
            text-align: left;
            color: #333;
            margin-bottom: 20px;
        }

        /* Swiper container */
        .swiper-container {
            width: 100%;
            padding-top: 10px;
            padding-bottom: 50px;
        }

        /* Swiper slide - individual author cards */
        .slide {
           padding-right: 30px
        }

        .author-card {
            width: 250px;
            background-color: #fff;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .author-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

        /* Author image style */
        .author-card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-bottom: 2px solid #ddd;
        }

        /* Author content */
        .author-card .content {
            padding: 15px;
            text-align: center;
        }

        .author-card h4 {
            font-size: 18px;
            font-weight: bold;
            color: #333;
            margin-bottom: 10px;
        }

        .author-card .bid {
            font-size: 14px;
            color: #555;
            margin-bottom: 10px;
        }

        .author-card .text-button a {
            background-color: #007BFF;
            color: #fff;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            font-size: 14px;
            font-weight: bold;
            transition: background-color 0.3s ease;
        }

        .author-card .text-button a:hover {
            background-color: #0056b3;
        }

        /* Responsive styling for smaller screens */
        @media (max-width: 768px) {
            .swiper-container {
                padding-bottom: 30px;
            }

            .author-card {
                width: 20px;
            }

            .section-heading h2 {
                font-size: 28px;
                text-align: center;
            }
        }
    </style>
</head>

<body>

@include('home.header')

<div class="currently-market">
    <div class="containe">
        <div class="row">
            <div class="col-lg-6">

            </div>
            <div class="col-lg-6">
                <div class="filters">
                    <ul>
                        <!-- Add filter items here -->
                    </ul>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        @foreach($authors as $item)
                            <div class="slide">
                                <div class="author-card">
                                    <img src="{{$item->image}}" alt="Author Image">
                                    <div class="content">
                                        <h4>{{$item->name}}</h4>
                                        <span class="bid">
                                            Зохиосон ном: <strong>{{ $item->books()->count()}}</strong>
                                        </span>
                                        <div class="text-button">
                                            <br><a href="{{route('home.author.detail', $item->id)}}">Дэлгэрэнгүй</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('home.footer')

<!-- Swiper JS -->



</body>
</html>
