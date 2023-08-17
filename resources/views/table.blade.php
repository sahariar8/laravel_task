<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
     {{-- botstrap --}}
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
    {{-- Tailwind && Daisy ui --}}
    <link href="https://cdn.jsdelivr.net/npm/daisyui@3.5.1/dist/full.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>

   
</head>
<body class="text-white ">
   
    <main class="max-w-screen-xl mx-auto">
       <h1 class="mx-5 mb-4 text-5xl text-center text-red-800 font-bold my-10">Details Information</h1><hr class="text-slate-800" >
       <h1 class="mx-5 mb-4 text-4xl text-center text-error font-semibold">{{Session::get("msg")}}</h1>
      
       <section class="mx-5 max-w-screen-xl md:mx-auto my-10">
            <table class="table table-dark table-striped text-center">
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Picture</th>
                    <th>Action</th>
                </tr>
                @foreach ($info as $i)
                <tr>
                    <td>{{$i->id}}</td>
                    <td>{{$i->name}}</td>
                    <td>{{$i->email}}</td>
                    <td><img src="{{asset('/')}}{{$i->img}}" alt="" class="h-16 w-16  m-auto"></td>
                    <td>
                        <a href="{{route('edit',$i->id)}}" class="btn btn-warning">Edit</a>
                        <a href="{{route('destroy',$i->id)}}" class="btn btn-error" onclick="return confirm('Are You Sure ??')">delete</a>
                        
                    </td>
                </tr>
                @endforeach
                
            </table>
       </section>
    </main>
    <footer class=" flex justify-end max-w-screen-xl mx-auto">
        <a href="{{route('index')}}" class="btn btn-success mx-5">Create new User</a>
    </footer>
</body>
</html>