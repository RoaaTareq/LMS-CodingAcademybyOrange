@extends('Publicsite.Layout.public')
@section('title')
Edit Post
@endsection
@section('link')
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<script src="https://kit.fontawesome.com/7ae71a9832.js" crossorigin="anonymous"></script>


<style>
 .img-sm {
    width: 46px;
    height: 46px;
}

.panel {
    box-shadow: 0 2px 0 rgba(0,0,0,0.075);
    border-radius: 0;
    border: 0;
    margin-bottom: 15px;
}

.panel .panel-footer, .panel>:last-child {
    border-bottom-left-radius: 0;
    border-bottom-right-radius: 0;
}

.panel .panel-heading, .panel>:first-child {
    border-top-left-radius: 0;
    border-top-right-radius: 0;
}

.panel-body {
    padding: 25px 20px;
}


.media-block .media-left {
    display: block;
    float: left
}

.media-block .media-right {
    float: right
}

.media-block .media-body {
    display: block;
    overflow: hidden;
    width: auto
}

.middle .media-left,
.middle .media-right,
.middle .media-body {
    vertical-align: middle
}

.thumbnail {
    border-radius: 0;
    border-color: #e9e9e9
}

.tag.tag-sm, .btn-group-sm>.tag {
    padding: 5px 10px;
}

.tag:not(.label) {
    background-color: #fff;
    padding: 6px 12px;
    border-radius: 2px;
    border: 1px solid #cdd6e1;
    font-size: 12px;
    line-height: 1.42857;
    vertical-align: middle;
    -webkit-transition: all .15s;
    transition: all .15s;
}
.text-muted, a.text-muted:hover, a.text-muted:focus {
    color: #acacac;
}
.text-sm {
    font-size: 0.9em;
}
.text-5x, .text-4x, .text-5x, .text-2x, .text-lg, .text-sm, .text-xs {
    line-height: 1.25;
}

.btn-trans {
    background-color: transparent;
    border-color: transparent;
    color: #929292;
}

.btn-icon {
    padding-left: 9px;
    padding-right: 9px;
}

.btn-sm, .btn-group-sm>.btn, .btn-icon.btn-sm {
    padding: 5px 10px !important;
}

.mar-top {
    margin-top: 15px;
}
/***/
.timeline {
    position: relative;
    padding: 20px 0;
    list-style: none;
    max-width: 1200px;
    margin: 0 auto;
}
.timeline:before {
    content: " ";
    position: absolute;
    top: 0;
    bottom: 0;
    left: 50%;
    width: 3px;
    margin-left: -1.5px;
    background-color: #e9ecef;
}
.timeline > .timeline-item {
    position: relative;
    margin-bottom: 20px;
}
.timeline > .timeline-item:after,
.timeline > .timeline-item:before {
    content: " ";
    display: table;
}
.timeline > .timeline-item:after {
    clear: both;
}
.timeline > .timeline-item > .timeline-panel {
    float: left;
    position: relative;
    width: 46%;
    padding: 20px;
    border: 1px solid #e9ecef;
    border-radius: 2px;
    box-shadow: 0 1px 6px rgba(0, 0, 0, 0.05);
}
.timeline > .timeline-item > .timeline-panel:before {
    content: " ";
    display: inline-block;
    position: absolute;
    top: 26px;
    right: -8px;
    border-color: transparent #e9ecef;
    border-style: solid;
    border-width: 8px 0 8px 8px;
}
.timeline > .timeline-item > .timeline-panel:after {
    content: " ";
    display: inline-block;
    position: absolute;
    top: 27px;
    right: -7px;
    border-color: transparent #fff;
    border-style: solid;
    border-width: 7px 0 7px 7px;
}
.timeline > .timeline-item > .timeline-badge {
    z-index: 10;
    position: absolute;
    top: 16px;
    left: 50%;
    width: 50px;
    height: 50px;
    margin-left: -25px;
    border-radius: 50% 50% 50% 50%;
    text-align: center;
    font-size: 1.4em;
    line-height: 50px;
    color: #fff;
    overflow: hidden;
}
.timeline > .timeline-item.timeline-inverted > .timeline-panel {
    float: right;
}
.timeline > .timeline-item.timeline-inverted > .timeline-panel:before {
    right: auto;
    left: -8px;
    border-right-width: 8px;
    border-left-width: 0;
}
.timeline > .timeline-item.timeline-inverted > .timeline-panel:after {
    right: auto;
    left: -7px;
    border-right-width: 7px;
    border-left-width: 0;
}
.timeline-badge.primary {
    background-color: #7460ee;
}
.timeline-badge.success {
    background-color: #39c449;
}
.timeline-badge.warning {
    background-color: #ffbc34;
}
.timeline-badge.danger {
    background-color: #f62d51;
}
.timeline-badge.info {
    background-color: #009efb;
}
.timeline-title {
    margin-top: 0;
    color: inherit;
    font-weight: 400;
}
.timeline-body > p,
.timeline-body > ul {
    margin-bottom: 0;
}
.timeline-left:before {
    left: 30px;
}
.timeline-left > .timeline-item > .timeline-badge {
    left: 30px;
    top: 9px;
}
.timeline-left > .timeline-item > .timeline-panel {
    width: calc(100% - 80px);
}
.timeline-right:before {
    right: 30px;
    left: auto;
}
.timeline-right > .timeline-item > .timeline-badge {
    right: 5px;
    top: 9px;
    left: auto;
}
.timeline-right > .timeline-item > .timeline-panel {
    width: calc(100% - 80px);
}
   </style>
@endsection
@section('main')


<div class="container bootdey">
  <div class="col-md-12 bootstrap snippets">
    <form role="form" id="myForm" method="POST" action="/updatepost/{{$show->id}}"  enctype="multipart/form-data">
      @csrf
     
  <div class="panel">
    <div class="panel-body">
      <textarea class="form-control" rows="2" name="post" placeholder="What are you thinking?"></textarea>
      @error("post")
      <p style="color:red;">{{$message}}</p>
      @enderror 
      <div class="mar-top clearfix">
        <button class="btn btn-sm btn-primary pull-right" type="submit"  style="background-color: rgb(255,108,1); border-color: rgb(255,108,1)"> Share</button>
      
      </div>
    </div>
  </div>
</form>

</div>
</div>

@endsection