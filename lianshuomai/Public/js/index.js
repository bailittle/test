//功能点1：连锁卖input框搜索建议
window.onload = function(){
	var sou=document.getElementById('sou');
	sou.onkeyup=function(){
	  var v=sou.value;
	  if(v==''){
	    $('#menu_list').css('display','none');
	  }
	  $.ajax({
	    type:'GET',
	    url:'/lianshuomai/Application/Home/Index/sou',
	    data:{"sou":v},
	    success:function(obj){
	      if(v){ $('#menu_list').css('display','block');}
	      var html='';
	      for(var i=0;i<obj.length;i++){
	        html+='<li>${obj[i].pname}<span>约${obj.length}条</span></li>';
	        $('#parent').html(html);
	      }
	    }
	  })
	}
}
