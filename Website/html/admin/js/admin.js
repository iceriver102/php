function showTopnotification($msg,$title)
{
	if(typeof($title)=="undefined")
		$title="Thông báo";
	$.gritter.removeAll({
        after_close: function(){
          $.gritter.add({
            position: 'top-right',
            title: $title,
            text: $msg,
            class_name: 'clean'
          });
        }
      });
}