$(document).ready(function(){
	// 導入Tooltip 
	$('[data-toggle="tooltip"]').tooltip();

	//偵測視窗大小
    $(window).resize(function() {
        var width=$(window).width();
        // 修正視窗大小後顯示sidebar
        if(width >= 767.98){
        	if($('#sidebar').css('visibility') == 'hidden'){
				$('#sidebar').css('visibility','visible');
				$('#sidebar').css('left','0px');
        	}
        }
        else{
			if($('#sidebar').css('visibility') == 'visible'){
	        	$('#sidebar').css('visibility','hidden');
				$('#sidebar').css('left','-350px');
			}
        }
    });


	// 回到頂端按鈕顯示&隱藏
	$(window).scroll(function() {
		if ( $(this).scrollTop() > 10 ){
			$('#BackTop').attr('style','visibility:visible');
		} else {
			$('#BackTop').attr('style','visibility:hidden');
		}
	}).scroll();

	//sidebar 控制器(顯示/隱藏)
	$('#toolbar_btn').click(function() {
		if ($('#sidebar').css('visibility') == 'visible'){
			$('#sidebar').animate({left: "-350px"}, 300, function(){
				// animate 完成後執行這段
				$('#sidebar').css('visibility','hidden');
			});
		} 
		else {
			$('#sidebar').css('visibility','visible');
			$('#sidebar').animate({left: "0px"},300);
		}
    });

    // 側邊目錄 ul_li 控制器(顯示/隱藏)
	$('.side_nav_title').click(function() {
		var i = this.id;
		i = i.substring(0,i.length-3);
		if ($('#'+i+'_ul').css('visibility') == 'visible'){
			$('#'+i+'_ul').animate({height: "0px"}, 300, function(){
				// animate 完成後執行這段
				$('#'+i+'_ul').css('visibility','hidden');
			});

			// chervon_down旋轉動畫
			$('#'+i+'_li').children('.chervon_down').animate({  borderSpacing: 450 }, {
			    step: function(now,fx) {
			      $(this).css('-webkit-transform','rotate('+now+'deg)'); 
			      $(this).css('-moz-transform','rotate('+now+'deg)');
			      $(this).css('transform','rotate('+now+'deg)');
			    },
			    duration:300
			},'linear');
		} 
		else {
			$('#'+i+'_ul').css('visibility','visible');
			$('#'+i+'_ul').animate({height: "84px"},300);

			// chervon_down旋轉動畫(恢復)
			$('#'+i+'_li').children('.chervon_down').animate({  borderSpacing: 0 }, {
			    step: function(now,fx) {
			      $(this).css('-webkit-transform','rotate('+now+'deg)'); 
			      $(this).css('-moz-transform','rotate('+now+'deg)');
			      $(this).css('transform','rotate('+now+'deg)');
			    },
			    duration:300
			},'linear');
		}
    });

});


