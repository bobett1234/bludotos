<!DOCTYPE html>
<html>
<head>
  <style>img{ height: 100px; float: left; }</style>
  <script src="http://code.jquery.com/jquery-latest.js?callback=?"></script>
</head>
<body>
  <div id="images">

</div>
<script>
$.getJSON("http://chat.im/static/js/chat-base.js",
  {
  },
  function(data) {
    $.each(data.item, function(i,item){
      $("<img/>").attr("src", item.media.m).appendTo("#images");
      if ( i == 3 ) return false;
    });
  });</script>

</body>
</html>
