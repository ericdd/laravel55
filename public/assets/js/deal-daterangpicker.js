var app = {
	init:function(){
		this.event();
	},
	event:function(){
		//时间选择器
        $('.input-daterange').datepicker({autoclose:true});
	}
};
app.init();