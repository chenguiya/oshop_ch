/*******init start*****/
var httpUrl="http://"+location.hostname;
/*******init end*****/

/*****宽窄屏幕自适应****/
/*
if(screen.width > 1210 && $(window).width() > 1210)
{
	$("body").addClass("full");
}
*/
$(function(){
	$("#myVancl").mouseenter(function(){
		$(this).removeClass("active");
		$(this).addClass("hover");
	})	
	
	$("#myVancl").mouseleave(function(){
		$(this).removeClass("hover");
		$(this).addClass("active");
	})	
	
	$(".vweixinbox").mouseenter(function(){
		$(".vweixinTip").show();
	})
	
	$(".vweixinbox").mouseleave(function(){
		$(".vweixinTip").hide();
	})		
	
	
	
	$("#shoppingCarNone").mouseenter(function(){
		$(this).removeClass("active");
		$(this).addClass("hover");
	})
	
	$("#shoppingCarNone").mouseleave(function(){
		$(this).removeClass("hover");
		$(this).addClass("active");
	})
	

	$(".allSortItem").mouseenter(function(){
		$(this).toggleClass("itemSelected");
		$("#V_Category").toggleClass("mainNavHover");
		$(this).find(".subCategory").show();
		var allSortBoxH = $(".allSortBox").height();
		var subCategoryH = $(this).find(".subViewLeft").height();
		if( subCategoryH <= allSortBoxH){
			$(this).find(".subViewLeft").css({"height":allSortBoxH+10})
		}
	})
	
	$(".allSortItem").mouseleave(function(){
		$(this).toggleClass("itemSelected");
		$("#V_Category").toggleClass("mainNavHover");
		$(this).find(".subCategory").hide();
	})
	
})

/*收藏夹功能*/
function bookmark() {
    var c;
    var a = /^http{1}s{0,1}:\/\/([a-z0-9_\\-]+\.)+(yihaodian|1mall|111|yhd){1}\.(com|com\.cn){1}\?(.+)+$/;
    if (a.test(httpUrl)) {
        c = "&ref=favorite"
    } else {
        c = "?ref=favorite"
    }
    var d = httpUrl + c;
    if ('undefined' == typeof (document.body.style.maxHeight)) {
        d = httpUrl
    }
    try {
        if (document.all) {
            window.external.AddFavorite(d, favorite)
        } else {
            try {
                window.sidebar.addPanel(favorite, d, "")
            } catch(b) {
                alert("抱歉，您所使用的浏览器无法完成此操作。\n\n加入收藏失败，请使用Ctrl+D进行添加")
            }
        }
    } catch(b) {
        alert("抱歉，您所使用的浏览器无法完成此操作。\n\n加入收藏失败，请使用Ctrl+D进行添加")
    }
}


//关闭顶部横条广告
$(function(){
	var img = $(".HeadAd img");
	var bodyW = $(window).width();
	var imgW = img.width();
	var imgML = (bodyW-imgW)/2;
	img.css({"marginLeft":imgML});
	//
	var colse = $(".HeadAdColse")
	var conMR = (bodyW-1200)/2;
	colse.css({"right":conMR});
	colse.click(function(){
		$(this).parent().hide();
	});	
});

//搜索获取焦点文字隐藏
$(function(){
	var Input=$(".ac_input");
	var Keytext=$(".keytext");
	Input.focus(function(){
		$(this).siblings("div").hide();
	})
	Input.blur(function(){
		if( $(this).val()=="" ){
			$(this).siblings("div").show();
		}else{
			$(this).siblings("div").hide();
		}
	})
	Keytext.click(function(){
		$(this).hide();
		$(this).next().focus()
	})
});
