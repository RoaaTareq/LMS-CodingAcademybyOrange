
 @extends('Publicsite.Layout.public')
 @section('title')
Submit task
 @endsection

 @section('link')
 <link href="{{asset('assest/boosted-4.0.0-alpha.5-dist/css/orangeHelvetica.css')}}" rel="stylesheet">
 <link href="{{asset('assest/boosted-4.0.0-alpha.5-dist/css/orangeIcons.css')}}" rel="stylesheet">
     <link rel="stylesheet" href="{{asset('assest/boosted-4.0.0-alpha.5-dist/css/boosted.min.css')}}" />
 <link href="{{asset('assest/boosted-4.0.0-alpha.5-dist/v4-alpha5/example.css')}}" rel="stylesheet">

 <link rel="stylesheet" href="{{asset('CSSFrontend\task.css')}}">
   

    @endsection


    @section('main')
    



    
<main role="main" id="content" class="container my-5">
  <div class="row">
     
      <form role="form" id="myForm" method="POST" action="/task/create"  enctype="multipart/form-data">
          @csrf
          <div class="col-sm-12">
          
          <div class="form-group">
            <label for="inputName" class="is-required">Task</label>
            <input type="text" class="form-control" id="inputName"  name="task">
            @error("task")
<p style="color:red;">{{$message}}</p>
@enderror 
          </div>
          <div class="form-group">
            <label for="inputName" class="is-required">Upload file</label>
            <input name="file" class="form-control" maxlength="255" type="file" value="" >
            @error("file")
<p style="color:red;">{{$message}}</p>
@enderror 
          </div>
        
        
              <div class="form-group">
            <label for="inputComment">Message</label>
            <textarea class="form-control" rows="3" id="inputComment" name="message"></textarea>
            @error("message")
<p style="color:red;">{{$message}}</p>
@enderror 
          </div>
          
          <div class="form-group my-3">
            <button type="submit" class="btn btn-inverse btn-success mr-2">Save</button>
          </div>
        </form>
      </div>
    </div>
  </main><!--/.container-->

  @endsection

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="/docs/4.6/assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="/docs/4.6/dist/js/boosted.bundle.min.js" integrity="sha384-8GY/c7MOtsvb9OfczW1hZlZfhibvBlgxQshIoFKoTIuruwcGG4a3lGw5wdBTBocN" crossorigin="anonymous"></script>

      
        <script src="form.js"></script>
  </body>
</html>
