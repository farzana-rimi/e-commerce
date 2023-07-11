<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Ample</title>
        <link href="{{url('https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css')}}" rel="stylesheet" />
        <link href="{{url('css/styles.css')}}" rel="stylesheet" />
        <script src="{{url('https://use.fontawesome.com/releases/v6.1.0/js/all.js')}}" crossorigin="anonymous"></script>
      
    </head>
    <body class="sb-nav-fixed">
        


@include('backend.partials.header')

        <div id="layoutSidenav">
            

@include('backend.partials.sidebar')


            <div id="layoutSidenav_content">
                <main>
                    




                @yield('content')

                </main>
              
@include('backend.partials.footer')




            </div>
        </div>
        <script src="{{url('https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js')}}" crossorigin="anonymous"></script>
        <script src="{{url('js/scripts.js')}}"></script>
        <script src="{{url('https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js')}}" crossorigin="anonymous"></script>
        <script src="{{url('assets/demo/chart-area-demo.js')}}"></script>
        <script src="{{url('assets/demo/chart-bar-demo.js')}}"></script>
        <script src="{{url('https://cdn.jsdelivr.net/npm/simple-datatables@latest')}}" crossorigin="anonymous"></script>
        <script src="{{url('js/datatables-simple-demo.js')}}"></script>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
        <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
    
    </body>




</html>
