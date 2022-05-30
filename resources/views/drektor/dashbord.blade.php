<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <title> @yield('title') </title>
    <style>
    
        #bbb{            
            position: relative;
            margin-top: -75px;
            left: 40%;
        }
        #gla{
            background-color: black;
            padding-block: 15px;
            display: flex;
        }

        .d222{
            margin-top: 20px;
        }

        .d223{
            display: none;
        }

        span{
            font-size: 35px;
            color: #bdbdbd;
            margin-right: 12px;
            padding: 10px;
            margin-right: -8px;
        }
        .men{
            display: none;
        }

        .btn-dark {
            color: #fff;
            background-color: #444a50;
            border-color: #212529;
        }
        .prof{
            width: 155px;
            height: 155px;
            background-color: white;
            border-radius: 58%;
            
        }
        #dash{
            background-color: rgb(0 0 0);
            color: white;
            position: fixed;
            height: 100%;            
        }
        .h{
            border: 1px solid black;
            display: block;
            padding: 8px;         
            border-radius: 12px;
            text-align: center;
        }
        #aler{
            background-color: black;
            color: white;
        }

      #widd{
        width: 100%;       
      }

      .abcd{
        padding-left: 30%;
      }
  
      .show{
          display: none;
      }
    
    .scrolll{
        overflow-x: auto;
    }

    .rty{
        width: 150%;
    }

    .scrolll2{
        overflow-x: auto;
    }

    .rty2{
        width: 500%;
    }
 
      @media only screen and (max-width: 930px){
        .d222{
            display: none;
        }
        .show2 {
            display: block;
            background-color: black;
            margin-top: 80px;
            margin-left: -153px;
            width: 100%;
        }
        #wida{
            padding: 5px 10px;
            width: 100%;
            color: white;
            text-decoration: none;
            margin-left: 17px;
        }
        #wida:hover{
            background-color: #198754;
            border-radius: 5px;
        }

        #wid{
            padding: 5px 10px;
            width: 100%;
            color: white;
            text-decoration: none;
            margin-left: 17px;
        }
  

        #wid0{
            padding: 5px 10px;
            width: 100%;
            color: white;
            text-decoration: none;
            margin-left: 17px;
        }
        #wid0:hover{
            background-color: #198754;
            border-radius: 5px;
        }

        #wid1{
            padding: 5px 10px;
            width: 100%;
            color: white;
            text-decoration: none;
            margin-left: 17px;
        }
        #wid1:hover{
            background-color: #198754;
            border-radius: 5px;
        }
        .men{
            display: block;
            padding: 3px;
            background-color: black;
            color: #fff;
            border: 1px solid white;
            border-radius: 5px;
            position: absolute;
            top: 36px;
            right: 28px;
            cursor: pointer;
        }
        th{
            font-size: 12px;
        }

        td{
            font-size: 12px;
        }
      }

      @media only screen and (max-width: 767px){
          .in{
              margin-top: -40px;
          }
      }
      @media only screen and (max-width: 600px){
        table{
              text-align: center;
          }
          .sssssssss{
              display: none;
          }
          .sssssssss1{
              display: none;
          }
          .nonem{
            display: none;
          }

          th{
            font-size: 12px;
        }

        td{
            font-size: 12px;
        }
        #wid{
            margin: 0;
        }
        #button{
            width: 100%;
            height: 140px;
        }
      }
    </style>

    <script>
        function f(){
            var d222 = document.querySelector('.d223');
            d222.classList.toggle("show2");
        }
    </script>
</head>
<body> 
    <div id="gla">
       <span>Дректор</span>
       <button onclick="f()" class="men">
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
            </svg>
       </button>
       <div class="d223">
        <a href="/glavninachal" id="wid">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bar-chart-line-fill" viewBox="0 0 16 16">
            <path d="M11 2a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v12h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1v-3a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3h1V7a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v7h1V2z"></path>
            </svg>
            Статистика малумотлар
        </a>
        <br>
        <a href="{{ route('logindrekror') }}" id="wid">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-key" viewBox="0 0 16 16">
                <path d="M0 8a4 4 0 0 1 7.465-2H14a.5.5 0 0 1 .354.146l1.5 1.5a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0L13 9.207l-.646.647a.5.5 0 0 1-.708 0L11 9.207l-.646.647a.5.5 0 0 1-.708 0L9 9.207l-.646.647A.5.5 0 0 1 8 10h-.535A4 4 0 0 1 0 8zm4-3a3 3 0 1 0 2.712 4.285A.5.5 0 0 1 7.163 9h.63l.853-.854a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.793-.793-1-1h-6.63a.5.5 0 0 1-.451-.285A3 3 0 0 0 4 5z"/>
                <path d="M4 8a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
              </svg>
                Шахсий малумотлар
            </a>        
        <br>
     
        <a href="/logaut" id="wid">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-in-right" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0v-2z"></path>
                <path fill-rule="evenodd" d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"></path>
                </svg>
                вход
            </a> 
        </div>
        <div class="d222">
        <a href="/glavninachal" class="btn btn-success" id="wid">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bar-chart-line-fill" viewBox="0 0 16 16">
            <path d="M11 2a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v12h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1v-3a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3h1V7a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v7h1V2z"></path>
            </svg>
            Статистика малумотлар
        </a>
        <a href="{{ route('logindrekror') }}" class="btn btn-dark" id="wid">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-key" viewBox="0 0 16 16">
                <path d="M0 8a4 4 0 0 1 7.465-2H14a.5.5 0 0 1 .354.146l1.5 1.5a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0L13 9.207l-.646.647a.5.5 0 0 1-.708 0L11 9.207l-.646.647a.5.5 0 0 1-.708 0L9 9.207l-.646.647A.5.5 0 0 1 8 10h-.535A4 4 0 0 1 0 8zm4-3a3 3 0 1 0 2.712 4.285A.5.5 0 0 1 7.163 9h.63l.853-.854a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.793-.793-1-1h-6.63a.5.5 0 0 1-.451-.285A3 3 0 0 0 4 5z"/>
                <path d="M4 8a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
            </svg>
            Шахсий малумотлар
        </a>
        <a href="/logaut" class="btn btn-success" id="wid">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-in-right" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0v-2z"></path>
            <path fill-rule="evenodd" d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"></path>
            </svg>
            вход
        </a>
       </div>
   </div>
    <div class="container-fluid">   
        <div class="row">                             
            @if (Session::has('succ'))
            <div class="alert alert-success" style="text-align: center">
                <h2> {{Session::get('succ')}}</h2>
            </div>
            @endif  
            @if (Session::has('danger'))
            <div class="alert alert-danger" style="text-align: center">
                {{Session::get('danger')}}
            </div>
            @endif
            @if (Session::has('file'))
            <div class="alert alert-danger" style="text-align: center">
                {{Session::get('file')}}
            </div>
            @endif
            @if (Session::has('success'))
            <div class="alert alert-success" style="text-align: center">
                {{Session::get('success')}}
            </div>
            @endif
            @if (Session::has('err'))
            <div class="alert alert-danger" style="text-align: center">
                {{Session::get('err')}}
            </div>
            @endif            
            @yield('drektor')
        </div>   
    </div>
</body>
</html>