<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
          <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
        <!-- Fonts -->
      

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
        @if($errors->any())
                <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)

                        <p>{{$error}}</p>
                    @endforeach
                
                </ul>

        </div>
        @endif
      
            <form class="" action="{{route('store')}}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <input type="title" name="title" placeholder="input title name"><br><br>
                <input type="file" name="image"><hr>
                <input type="submit" value="Upload Image" class="btn btn-primary">
                
            </form>
            <table class="table table-responsive table-hover" style="border:1px solid">
                <tr>
                    <th>Title</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
    @foreach($images as $image)
                <tr>
                    <td>{{  $image->title}}</td>
                    <td>
                        <img src="{{Storage::url($image->image)}}" alt="" width="200px">
                    </td>
                    <td>
                        <a href=""> Edit</a>
                    </td>
                </tr>
    @endforeach
            </table>
            
        </div>

  


    <script type="text/javascript" src="{{asset('js/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>
    </body>
</html>
