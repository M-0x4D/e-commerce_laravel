<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>

    <form class="form form-control pt-5" action="{{route('users.store')}}" method="post">
    
        @csrf
     
     
         <div class="container">
          
     
           <label for="email"><b>email </b></label>
           <input type="text" placeholder="Enter email" name="email" >

           <label for="password"><b>password </b></label>
           <input type="text" placeholder="Enter password" name="password" >
       
       
           <button type="submit">log in</button>
      
       </form>



       <div class="pt-5">
        <code class="code-block pt-5">
            int number;
            string name;
            function()
            {
                print('please enter code')
            }
           </code>
    
           <pre class="code-block pt-5">
            &lt;article&gt;
               <h1>Article Heading</h1>
            &lt;/article&gt;
         </pre>
       </div>
    
</body>
</html>