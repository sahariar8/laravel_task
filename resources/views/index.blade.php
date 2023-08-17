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
<body class="text-white bg-slate-800">
    <header>
        <h1 class="mx-5 mb-4 text-6xl text-center pt-20"><span class="font-semibold text-red-700">CRUD</span> Application</h1>
        <h1 class="mx-5 mb-4 text-4xl text-center text-success">{{Session::get("msg")}}</h1>
        <div class="pt-8 text-purple text-center">
            <h1 class="text-4xl text-purple-500">User Data Insert Table</h1>
        </div>
        <div class="flex justify-end max-w-screen-xl mx-auto">
            <a href="{{route('manage')}}" class="btn btn-warning mx-5">See Details Info</a>

        </div>
    </header>
    <main class="max-w-screen-xl mx-auto">
       <section>
        <form action="{{route('store')}}" method="POST" enctype="multipart/form-data" class="mx-5 pb-80">
            @csrf
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Name</label>
              <input type="text" class="form-control" name="name">
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Email</label>
              <input type="email" class="form-control" name="email">
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Picture</label>
              <input type="file" class="form-control" name="img">
            </div>
            <button type="submit" class="btn btn-success bg-green-500">Submit</button>
          </form>
       </section>
    </main>

    <footer>
        
    </footer>
</body>
</html>
