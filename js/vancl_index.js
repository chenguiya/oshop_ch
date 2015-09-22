$(function(){
	 setInterval(function(){
      $(".s_time_icon2").each(function(){
        var obj = $(this);
        var endTime = new Date(parseInt(obj.attr('value')) * 1000);
		var show_day =  obj.attr('showday');
        var nowTime = new Date();
        var nMS=endTime.getTime() - nowTime.getTime() + 28800000;
        var myD=Math.floor(nMS/(1000 * 60 * 60 * 24));
		var myH_show=Math.floor(nMS/(1000*60*60) % 24);
        var myH=Math.floor(nMS/(1000*60*60));
        var myM=Math.floor(nMS/(1000*60)) % 60;
        var myS=Math.floor(nMS/1000) % 60;
        var myMS=Math.floor(nMS/100) % 10;
		var a = myH+myM+myS+myMS;
        if(a>0){
			if(show_day == 'show')
			{
		
				var str = myD+'天'+myH_show+'时'+myM+'分'+myS+'秒'
				//var str = '还剩<strong class="tcd-d">'+myD+'</strong>天<strong class="tcd-h">'+myH_show+'</strong>小时<strong class="tcd-m">'+myM+'</strong>分<strong class="tcd-s">'+myS+'</strong>秒';
			}
			else
			{
		
				var str = '<span>还剩：</span><span class="num">'+myH+'</span>小时<span class="num">'+myM+'</span>分<span class="num">'+myS+'</span>秒';
			}
        }else{
			var str = "已结束！";	
		}
		obj.html(str);
      });
    }, 100);	
})
