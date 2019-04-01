<!--layout.blade.php -->
<!DOCTYPE html>
<head>
    <title>@yield('title', 'Portfolio')</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<div class="wrapper">
    {{--<h1>Homepage</h1>--}}

    {{--<p>Geen navigatie bar</p>--}}

    {{--<p>blokken design < navigatie</p>--}}

    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-md-auto">
                <a href="profile"><p class="home-blocks">profiel</p></a>
            </div>
        </div>
        <div class="row justify-content-md-center">
            <div class="col-md-auto">
                <a href="grades"><p class="home-blocks">dashboard</p></a>
            </div>
        </div>
        <div class="row justify-content-md-center">
            <div class="col-md-auto">
                <a href="assignments"><p class="home-blocks">opdrachten</p></a>
            </div>
        </div>

    </div>

</div>
</body>
<style>
    body {
        /*background: #fafafa;*/
        line-height: 140%;
    }
    .wrapper {
        max-width: 950px;
        margin: 0 auto;
        background-color: white;
        padding: 30px 50px;
    }
    .home-blocks{
        background-color:#F2F2F2;
        margin: 15px;
        padding: 30px 0 30px 0;
        width:500px;
        text-align:center;
        color: grey;
        font-weight: lighter;
        text-transform:uppercase;
        font-size: 30pt;
    }
</style>