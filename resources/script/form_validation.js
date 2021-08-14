$(document).ready(function(){
	// 載入資料驗證_錯誤訊息 (改變input外框顏色)
	// ...


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

});


