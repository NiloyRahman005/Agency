@extends('app')
@section('title', 'The Ta-ask Story')
@section('content')
    <div class="container mt-5 pt-5">
        <div class="story-container mt-5 mb-5">
            <img src="{{ asset($taskStory->image) }}" alt="Founder Image" class="header-image" style="line-height:10px">
            <p class="text-center fw-bold " style="font-size:25px;">{{ $taskStory->designation ?? ' ' }}</p>
            <h1 class="story-title">The Ta-ask Story</h1>

            <p class="story-text highlight">
                {{ $taskStory->content }}
            </p>
        </div>
    </div>
    <style>
        .header-image {
            max-width: 350px;
            border-radius: 15px;
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.15);
            margin: 0 auto 40px auto;
            display: block;
            border: 5px solid #fff;
            transition: transform 0.3s ease;
        }

        .header-image:hover {
            transform: scale(1.05);
        }

        .story-container {
            /* max-width: 900px; */
            width: 100%;
            margin: 0 auto;
            padding: 50px 30px;
            background: #ffffff;
            border-radius: 15px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
            border-left: 5px solid #3498db;
            border-right: 5px solid #db3934;
            border-top: 5px solid #34db7a;
            border-bottom: 5px solid #db349b;
        }

        .dark .story-container {
            background: #121212 !important;
        }

        .story-title {
            color: #2c3e50;
            font-weight: 700;
            font-size: 2.5em;
            text-transform: uppercase;
            letter-spacing: 2px;
            margin-bottom: 25px;
            text-align: center;
            position: relative;
        }

        .dark .story-title {
            color: #fff;
        }

        .story-title::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 50px;
            height: 3px;
            background: #3498db;
        }

        .story-text {
            line-height: 1.8;
            color: #555;
            text-align: justify;
            font-size: 1.1em;
        }

        .dark .story-text {
            color: #fff;
        }

        .highlight {
            font-weight: 600;
            font-size: 22px;
            background-image: linear-gradient(to right, #3498db, #be4e41);
            /* Gradient from blue (#3498db) to red-orange (#e74c3c) */
            -webkit-background-clip: text;
            /* Clips the gradient to the text */
            -webkit-text-fill-color: transparent;
            /* Makes the text color transparent to show the gradient */
            /* display: inline-block; */
            /* Ensures the gradient applies correctly to inline elements */
        }

        <blade media|%20(max-width%3A%20768px)%20%7B%0D>.header-image {
            max-width: 100%;
            margin-bottom: 30px;
        }

        .story-container {
            padding: 30px 20px;
        }

        .story-title {
            font-size: 2em;
        }
        }
    </style>
@endsection
