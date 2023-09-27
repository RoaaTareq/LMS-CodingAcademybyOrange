
@extends('Dashboard.Layout.dashboardlayout')
@section('title')
View Post in dashboard
@endsection

@section('main')





  
  <main role="main" id="content" class="my-5">
  
    <div id="localContainer" class="o-nav-local navbar-light">
     
    </div>
  
    <div class="container-fluid">
      <table id="news-table" class="table tablesorter mb-5">
        <caption>
         ALL student Post 
          
        </caption>
        <thead class="cf">
          <tr>
            <th scope="col" class="header">ID</th>
            <th scope="col" class="header">body</th>
            <th scope="col" class="header">student</th>
            <th scope="col" class="header">time</th>
          
          </tr>
        </thead>
        <tbody>
          @foreach($post as $posts)
          <tr>
          
            <td class="align-middle">{{$posts->id}}</td>
            <td class="align-middle">{{$posts->body}}</td>
            <td class="align-middle">{{$posts->Student->student_name}}</td>
            <td class="align-middle">{{$posts->updated_at}}</td>


            

          
         
          </tr>
          @endforeach
          
        </tbody>
      </table>
      {{$post->links()}}
      <!-- Modal -->
      <div class="modal fade" id="confirm-dialog" role="dialog" aria-labelledby="myModalLabel" tabindex="-1">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h2 class="modal-title h4" id="myModalLabel">Confirm deletion</h2>
              <!-- Boosted mod: using visually hidden text instead of aria-label -->
              <button type="button" class="close" data-dismiss="modal">
                <span class="sr-only">Close confirmation modal</span>
              </button>
            </div>
            <div class="modal-body">
              <p>If you delete this entry, all information will be permanently lost. Are you sure?</p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
              <button type="button" class="btn btn-primary" data-dismiss="modal">OK</button>
            </div>
          </div>
        </div>
      </div>
      <!-- fin modal -->
      <!-- Nav tabs A-->
      
     
      <!-- fin nav tabs A -->
    </div>
  </main>
  <!--/.container-->
  @endsection
  
  