
@extends('Dashboard.Layout.dashboardlayout')
@section('title')
View Comment in dashboard
@endsection
@section('main')





  
  <main role="main" id="content" class="my-5">
  
    <div id="localContainer" class="o-nav-local navbar-light">
     
    </div>
  
    <div class="container-fluid">
      <table id="news-table" class="table tablesorter mb-5">
        <caption>
         ALL Student Comment
          
        </caption>
        <thead class="cf">
          <tr>
            <th scope="col" class="header">ID</th>
            <th scope="col" class="header">Title</th>
            <th scope="col" class="header">Date</th>
            <th scope="col" class="header">student</th>
        
          </tr>
        </thead>
        <tbody>
          @foreach($allcomments as $comment)
          <tr>
            <td class="align-middle">{{$comment->id}}</td>
            <td class="align-middle">{{$comment->comment}}</td>
            <td class="align-middle">{{$comment->updated_at}}</td>
            <td class="align-middle">{{$comment->student->student_name}}</td>
          
              
            
          
          @endforeach
          
        </tbody>
      </table>
      <!-- Modal -->
  
      <!-- Nav tabs A-->
      
     
      <!-- fin nav tabs A -->
    </div>
  </main>
  <!--/.container-->
  @endsection
  
  