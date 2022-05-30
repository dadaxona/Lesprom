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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <title> @yield('title') </title>
    <style>

        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
    
        #aler{
            width: 100%;
            background-color: rgb(0, 0, 0);
            color: white;  
            padding-block: 30px;              
        }
       
        
        #wid2{
            display: block;
            position: relative;
            padding: 10px 0;
            border-radius: 5px;
            text-decoration: none;
            color: #fff;
            text-align: center;
            font-weight: 600;
            font-size: 15px;
            background: #1b1b1bc7;
            box-shadow: 0 0 5px rgb(167, 165, 165);
            display: flex;
            justify-content: center;
            align-items: center;
            letter-spacing: 1px;  
               
        }  

        /* #wid{
            position: relative;
            padding: 10px 0;
            border-radius: 5px;
            color: #fff;
            text-align: center;
            font-weight: 600;
            font-size: 15px;
            background: #1b1b1bc7;
            box-shadow: 0 0 5px rgb(167 165 165);
            justify-content: center;
            align-items: center;
            letter-spacing: 1px; 
               
        }   */
        #wid2::before{
            content: '';
            position: absolute;
            width: 0%;
            height:100%;
            z-index: -1;
            transition: all 0.7s;
            background: #ffffff;            
            border-radius: 5px;
            

        }  
        #wid2:hover:before{
            width: 100%;
            height: 100%;
            background: #ffffff;
           
        } 



        .glav{
            display: flex;            
           
        }
        .dash{
           background: rgb(0, 0, 0)  ;   
            color: white;
            position: fixed;
            display: none; 
            width: 20%;
            height: 100%;
            margin-right: 2px;
           
        }
        .razmer{
            width: 0%;
            margin-right: 0;
        }

        .divv{
            width: 100%;
            margin: 1px;
        }

        .but2{
            display: none;

        }

        #signal{
            color: rgb(255, 1, 1);
        }

           
        .togle{
            display: block;
        }

   
        .divv2{
            width: 80%;
           
        }
     .cursor{
         cursor: pointer;
     }
        .scrip{
            width: 20%;
            margin: 1px;
        }

        #button{
            font-size: 20px;
            width: 100%;
            margin-top: 10px;
            padding: 31px;
            font-weight: bold;
            height: 236px;
            color: #000;
            background-color: rgb(229 229 229);
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            position: relative;
          overflow: hidden;
          transition: all 1s;
        }
     
        #button[tool-tip]::before{
            content: attr(tool-tip);
            font-size: 20px;
            font-weight: bold;
            letter-spacing: 2px;
            font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            position: absolute;
            top: 10%;
            right: -60%;
         
           transform: rotate(35deg);
            width: 150%;
            height:35px;
            display: flex;
            justify-content: center;
            align-items: center;
            background: #00a832;  
                  
        }
        #button .ss{
            width: 40px;
            height: 40px;
        }
        
        #button:hover{
            background-color: rgb(32, 32, 32);
            color: #fff;
        
           
        }
        
        .btnss{
            padding: 10px 12px;
            background: green;
            color: #eeeeee;
            transition: 2s; 
            text-decoration: none;
            border: 2px;
            border-radius: 5px
        }

        .btnss:hover
        {
            
            color: #eeeeee;

        }
        .aaa{
            width: 100%;
        }
        #but{
            border: 4px solid rgb(4, 90, 61);
            padding: 8px 16px ;
            font-size: 17px;
            margin-right: 5px;
            text-decoration: none;
            color: rgb(4, 90, 61);
            font-weight: bold;
            background: none;
            letter-spacing: 1px;
            position: relative;
            top: 10px;
            border-radius: 15px;
            transition: all 0.5s;
           
        }

        .shadowe{
            box-shadow:0 0 5px rgb(34, 34, 34);
            padding-bottom: 10px;
            margin: 10px;
            padding: 20px;
        }
      
        #but:hover{
           background:rgb(4, 90, 61); 
           box-shadow:0 0 10px rgb(4, 90, 61),                       
                       0 0 30px rgb(4, 90, 61);
                       color: #fff;
        }
        th{
            font-size: 15px;
        }

        h5{
            font-size: 15px;
        }
        .mani{
            font-family:'Times New Roman', Times, serif;
            font-weight: bold;
            letter-spacing: 5px;
            color: rgb(255, 147, 7);
            text-shadow: 0 0 10px rgb(255, 147, 7),
                         0 0 15px rgb(255, 147, 7);
                       
        }
        .mani span{
            color: #fff;
            text-shadow:0 0 6px #fff,
                        0 0 20px #fff;
        }
        #signal{
            display: flex;
            flex-direction: column;
        }
        #signal span{
            width: 10px;
            height: 10px;
            background: red;
            border-radius: 50%;
        }
        .swde{
         margin-left: 5px;
         width: 33%;
     }
     
    </style>
 
</head>

<body> 
    <div class="container-fluid">
        <div class="row">
            <div id="aler" style="text-align: center">
                <div class="row">
                <div class="col-3">
                    <a id="but" class="cursor" onclick="but()">
                        Menu
                    </a>
                    <a href="/dashbord" id="but">
                        <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" fill="currentColor" class="bi bi-house-door" viewBox="0 0 16 16">
                            <path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5z"/>
                          </svg>
                            Bosh Sahifa
                      </a>  
                
                    </div>
                    <div class="col-6">
                    <h1 class="mani">Lesprom <span>Holding</span> </h1>
                    </div>
                  @if ($yuridik)
                  <div class="col-1">
                    <a href="{{ route('index32') }}" id="signal">  
                        <span></span>                        
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-bell" viewBox="0 0 16 16">
                            <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zM8 1.918l-.797.161A4.002 4.002 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4.002 4.002 0 0 0-3.203-3.92L8 1.917zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5.002 5.002 0 0 1 13 6c0 .88.32 4.2 1.22 6z"/>
                          </svg>
                    </a>
                </div>
                  @elseif ($jismoniy)
                  <div class="col-1">
                        <a href="{{ route('index32') }}" id="signal">
                        <span></span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-bell" viewBox="0 0 16 16">
                                <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zM8 1.918l-.797.161A4.002 4.002 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4.002 4.002 0 0 0-3.203-3.92L8 1.917zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5.002 5.002 0 0 1 13 6c0 .88.32 4.2 1.22 6z"/>
                            </svg>
                        </a>
                    </div>
                    @else
                        <div class="col-1">
                            <a href="{{ route('index32') }}"  >                          
                                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-bell" viewBox="0 0 16 16">
                                    <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zM8 1.918l-.797.161A4.002 4.002 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4.002 4.002 0 0 0-3.203-3.92L8 1.917zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5.002 5.002 0 0 1 13 6c0 .88.32 4.2 1.22 6z"/>
                                </svg>
                            </a>
                        </div>
                  @endif

                
             
                    <div class="col-2">
                        <a href="/logaut" id="but">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-in-right" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0v-2z"></path>
                            <path fill-rule="evenodd" d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"></path>
                            </svg>
                            Chiqish
                        </a> 
                    </div>
                </div>
            </div>
        </div>       
    </div>  
   
     <div class="glav">
        <div class="col-2 p-4 dash">
            <h1>Bugalter</h1> 
            <hr>
                <a href="{{ route('loginbugalter') }}" id="wid2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-key" viewBox="0 0 16 16">
                        <path d="M0 8a4 4 0 0 1 7.465-2H14a.5.5 0 0 1 .354.146l1.5 1.5a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0L13 9.207l-.646.647a.5.5 0 0 1-.708 0L11 9.207l-.646.647a.5.5 0 0 1-.708 0L9 9.207l-.646.647A.5.5 0 0 1 8 10h-.535A4 4 0 0 1 0 8zm4-3a3 3 0 1 0 2.712 4.285A.5.5 0 0 1 7.163 9h.63l.853-.854a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.793-.793-1-1h-6.63a.5.5 0 0 1-.451-.285A3 3 0 0 0 4 5z"/>
                        <path d="M4 8a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
                      </svg>   
                Shaxsiy malumotlar
            </a>  
         
            <a href="{{ route('index') }}" class=" mt-3" id="wid2">
              Tavarlarni va Kompaniyalarni joylash                   
            </a>
            {{-- <a href="{{ route('show3') }}" class=" mt-3" id="wid2">
                Ishchilarni royhatga olish                   
            </a>    --}}
            <a href="{{ route('tiklash') }}" class=" mt-3" id="wid2">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"></path>
                <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"></path>
              </svg>
              Malumotlarni tiklash bo`limi
          </a>
        </div>

        <div class="razmer">

        </div>
         
                            
            <div class="divv">
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
                @yield('control')
            </div>                     
        </div>
          
     
        <script>
            // var dash = document.querySelector('.dash');
            // var razmer = document.querySelector('.razmer'); 
            // var divv = document.querySelector('.divv');

            // dash.classList.toggle("togle");
            // razmer.classList.toggle("scrip");
            // divv.classList.toggle("divv2");
            $(document).ready(function(){
                $("#but").click(function(){
                    $(".dash").toggle(500);
                    $(".razmer").toggle(500);
                    $(".divv").toggle(500);
                });
            });
        
        </script>
</body>
</html>