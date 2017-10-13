$('#header').load('/lianshuomai/Public/tpl/header.html',function(){
  
});

$('.same').mouseover(function (e) {
  $(this).children('.other_menu').css('display','block');
});
$('.same').mouseout(function (e) {
  $(this).children('.other_menu').css('display','none');
});
$('.same').each(function (i,elem){
  $(this).children('.other_menu').css('top',-i*29-10+'px');
});
$('.other_menu>p').click(function () {
  $('.other_menu').css('display','none');
});
var data=[
  {id:'0',img:'/lianshuomai/Public/img/lun1.jpg'},
  {id:'1',img:'/lianshuomai/Public/img/lun2.jpg'}
];
var slider={
  LIWIDTH:0,
  DURATION:1000,
  WAIT:1000,
  timer:null,
  canAuto:true,
  init: function () {
    this.LIWIDTH=parseFloat($('#big_ban').css('width'));
    this.updateView();
/*    document.addEventListener('scroll');*/
    $('#counts').on('mouseover','li:not(.hover)', function (e) {
      console.log(this);
      var $target=$(e.target);
      console.log($target.html());
      console.log($target.siblings('.hover').html());
      this.move($target.html()-$target.siblings('.hover').html());
    }.bind(this));
    $('#big_ban').hover(
      function(){this.canAuto=false;}.bind(this),
      function(){this.canAuto=true;}.bind(this)
    );
    this.autoMove();
  },
  autoMove: function () {
    this.timer=setTimeout(function() {
      if (this.canAuto) {
        this.move(1);
      } else {
        this.autoMove();
      }
    }.bind(this),this.WAIT);
  },
  move:function(n){
    clearTimeout(this.timer);
    this.timer=null;
    var left=parseFloat($('#banner').css('left'));
    if(n<0){
      $('#banner').stop(true);
      n*=-1;
      data=data.splice(data.length-n,n).concat(data);
      this.updateView();
      $('#banner').css('left',left-n*this.LIWIDTH);
      $('#banner').animate({left:'0'},this.DURATION);
      this.autoMove();
    }else{
      $('#banner').stop(true);
      $('#banner').animate({left:-n*this.LIWIDTH},this.DURATION,this.endMove.bind(this,n));

      this.autoMove();
    }
  },
  endMove: function (n) {
    data=data.concat(data.splice(0,n));
    this.updateView();
    $('#banner').css('left',0);
    this.autoMove();
  },
  updateView:function(){
    var html='';
    var cou='';
    for(var i=0;i<data.length;i++){
      html+=`<li><img src=${data[i].img}></li>`;
      cou+=`<li></li>`;
    }
    $('#banner').html(html)
      .css('width',this.LIWIDTH*data.length);
    $('#counts').html(cou);
    $("#counts>li:eq("+data[0].id+")").addClass('hover').siblings('.hover').removeClass('hover');
  }
}
slider.init();

$('.news>ul>li').mouseover(function(e){
  $(this).children('.news_list').css('display','block');
  $(this).siblings().children('.news_list').css('display','none');
  $(this).addClass('active')
    .siblings('.active').removeClass('active');
})

var jump={
  UPLEVEL:0,
  DOWNLEVEL:0,
  FHEIGHT:0,
  DURATION:1000,
  init: function () {
    this.FHEIGHT = parseFloat($('.style1').css('height')) + parseFloat($('.style1').css('marginBottom'));//style1+f1??arginBottom
    //console.log(this.FHEIGHT);
    //console.log($('.style1'));
    this.UPLEVEL = (innerHeight - this.FHEIGHT) /2;
    this.DOWNLEVEL = this.UPLEVEL + this.FHEIGHT;
    $(document).scroll(this.scroll.bind(this));
  },
  scroll: function () {
    $('.banner_main>.light').each(function (i, elem) {
     var totalTop=$(elem).offset().top;
      //console.log($(elem));
      //console.log(totalTop);
      var scrollTop=$("body").scrollTop();
      var innerTop=totalTop-scrollTop+500;
      //console.log(innerTop);
      if(innerTop>this.UPLEVEL&&innerTop<=this.DOWNLEVEL){
        //console.log(i);
        //console.log($(elem));
        $("#left-nav>li:eq("+i+") i").addClass("hover");
      }else{
        $("#left-nav>li:eq("+i+") i").removeClass("hover");
      }
    }.bind(this))
  }
};
jump.init();
$(document).scroll(function(){
  var scrollTop=$('body').scrollTop();
  //console.log(scrollTop);
  if(scrollTop>=100){
    $('#fix').css('opacity','1');
  }else{
    $('#fix').css('opacity','0');
  }
});



$('#left-nav').on('click','a',function(){
  var $target = $(this.hash);
  var targetOffset = $target.offset().top;
  $('html,body').animate({
    scrollTop: targetOffset
  },1000);
});
