@if(Session::has('comment_message'))
  <div class="alert alert-success">
    {{session('comment_message')}}
  </div>
@endif