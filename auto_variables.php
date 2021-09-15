<?php
function post(){//post method
   $_POST=array_merge(@$_POST,@$_FILES);
  if (isset($_POST) && count($_POST)>0){
    foreach ($_POST as $k => $v) {
      global ${$k};
      ${$k}=$v;
    }
    return true;
  }return false;
}
function get(){//get method
   $_GET=array_merge(@$_GET,@$_FILES);
  if (isset($_GET) && count($_GET)>0){
    foreach ($_GET as $k => $v) {
      global ${$k};
      ${$k}=$v;
    }
    return true;
  }return false;
}
if (post() || get()){//usage
  var_dump($id);
}
?>
<!-- exam form with post method -->
<form action="" method="post"  enctype="multipart/form-data">
  <input type="hidden" name="id" value="123">
  <input type="text" name="name" value="qweqwe">
  <input type="text" name="test" value="asdsad">
    <input type="file" name="file_name" value="">
    <button>send</button>
</form>
