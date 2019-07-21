var app = {
    init: function(){
        this.event();
    },
    event: function(){
        var _this = this;

        // modal 刷新
        $('body').on('hidden.bs.modal', '.modal', function () {
            $(this).removeData('bs.modal');
        });

        //添加分类
        $('.platform_category .add').on('click', function(e){
            e.preventDefault();
            _this.addPlatformCategory();
        });
        //修改分类
        $('.platform_category .edit').on('click', function(e){
            e.preventDefault();
            _this.editPlatformCategory();
        });

        //添加平台
        $('.add_platform .add').on('click', function(e){
            e.preventDefault();
            _this.addPlatform();
        });
        //修改平台
        $('.editPlatform .edit').on('click', function(e){
            e.preventDefault();
            _this.editPlatform();
        })
        //优惠卷审核
        $('.coupon-censor .pass').on('click', function(e){
            e.preventDefault();
            _this.passCouponCensor();
        });
        $('.check_reject .confirm').on('click', function(e){
            e.preventDefault();
            _this.nopeCouponCensor();
        });

        //试用品审核通过
        $('.trial-censor .pass').on('click', function(e){
            e.preventDefault();
            _this.passTrialCensor();
        });
        //试用品审核拒绝
        $('.reject .confirm').on('click', function(e){
            e.preventDefault();
            _this.rejectTrialCensor();
        });
        //店铺审核通过
        $('.censor_store .confirm').on('click', function(e){
            e.preventDefault();
            _this.passStoreCensor();
        });
        //店铺审核拒绝
        $('.censor_store .reject').on('click', function(e){
            e.preventDefault();
            _this.rejectStoreCensor();
        });
        //开启店铺
        $('.on_store .confirm').on('click', function(e){
            e.preventDefault();
            _this.onStore();
        });
        //关闭店铺
        $('.off_store .confirm').on('click', function(e){
            e.preventDefault();
            _this.offStore();
        });
        //处理问题
        $('.handle-problem .deal').on('click', function(e){
            e.preventDefault();
            _this.dealProblem();
        });

        //下架产品
        $('.handle-problem .down').on('click', function(e){
            e.preventDefault();
            _this.downProduct();
        });

        //激活账户
        $('.activate_user .confirm').on('click', function(e){
            e.preventDefault();
            _this.activateUser();
        });

        //设置商家
        $('.set_merchant .confirm').on('click', function(e){
            e.preventDefault();
            _this.setMerchant();
        })

    },
    addPlatformCategory: function(){
        $.ajax({
            "url": '/platform/add-platform-category',
            "type": 'POST',
            "data": $('.platform_category form').serialize(),
            dataType: 'json'
        }).always(function(res){
            if(res && res.err == 0){
                window.location.href=res.msg;
                return
            }
            var msg = res && res.msg ? res.msg : '请求异常';
            alert(msg);
        });
    },
    editPlatformCategory:function(){
        var id = $('.platform_category form #id').val();
        $.ajax({
            "url":'/platform/edit-platform-category/'+id,
            "type":'POST',
            "data":$('.platform_category form').serialize(),
            dataType:'json'
        }).always(function(res){
            if(res && res.err == 0){
                window.location.href=res.msg;
                return
            }
            var msg = res && res.msg ? res.msg : '请求异常';
            alert(msg);
        })
    },

    addPlatform: function(){
        $.ajax({
            "url":'/platform/post-add-platform',
            "type":'POST',
            "data":$('.add_platform form').serialize(),
            dataType:'json'
        }).always(function(res){
            if(res && res.err ==0){
                window.location.href=res.msg;
                return;
            }
            var msg = res && res.msg ? res.msg : '请求异常';
            alert(msg);
        })
    },
    editPlatform: function(){
        var id = $('.editPlatform form #id').val();
        $.ajax({
            "url":'/platform/edit-platform/'+id,
            "type":'POST',
            "data":$('.editPlatform form').serialize(),
            dataType:'json'
        }).always(function(res){
            if(res && res.err ==0){
                window.location.href=res.msg;
                return;
            }
            var msg = res && res.msg ? res.msg : '请求异常';
            alert(msg);
        })
    },
    passCouponCensor: function(){
        $.ajax({
            "url":'/coupons/post-censor-coupon',
            "type":'POST',
            "data":$('.coupon-censor form').serialize()+'&rever=1',
            dataType:'json'
        }).always(function(res){
            if(res && res.err ==0){
                window.location.href=res.msg;
                return;
            }
            var msg = res && res.msg ? res.msg : '请求异常';
            alert(msg);
        })
    },
    nopeCouponCensor: function(){
        $.ajax({
            "url":'/coupons/post-reject-coupon',
            "type":'POST',
            "data":$('.check_reject form').serialize()+'&rever=2',
            dataType:'json'
        }).always(function(res){
            if(res && res.err ==0){
                window.location.href=res.msg;
                return;
            }
            var msg = res && res.msg ? res.msg : '请求异常';
            alert(msg);
        })
    },
    passTrialCensor: function(){
        $.ajax({
            "url":'/trials/post-censor-trial',
            "type":'POST',
            "data":$('.trial-censor form').serialize(),
            dataType:'json'
        }).always(function(res){
            if(res && res.err ==0){
                window.location.href=res.msg;
                return;
            }
            var msg = res && res.msg ? res.msg : '请求异常';
            alert(msg);
        })
    },
    rejectTrialCensor: function(){
        $.ajax({
            "url":'/trials/post-reject-trial',
            "type":'POST',
            "data":$('.reject form').serialize(),
            dataType:'json'
        }).always(function(res){
            if(res && res.err ==0){
                window.location.href=res.msg;
                return;
            }
            var msg = res && res.msg ? res.msg : '请求异常';
            alert(msg);
        })
    },
    passStoreCensor: function(){
        $.ajax({
            "url":'/user/post-censor-store',
            "type":'POST',
            "data":$('.censor_store form').serialize()+'&rever=1',
            dataType:'json'
        }).always(function(res){
            if(res && res.err ==0){
                window.location.href=res.msg;
                return;
            }
            var msg = res && res.msg ? res.msg : '请求异常';
            alert(msg);
        })
    },
    rejectStoreCensor: function(){
        $.ajax({
            "url":'/user/post-censor-store',
            "type":'POST',
            "data":$('.censor_store form').serialize()+'&rever=2',
            dataType:'json'
        }).always(function(res){
            if(res && res.err ==0){
                window.location.href=res.msg;
                return;
            }
            var msg = res && res.msg ? res.msg : '请求异常';
            alert(msg);
        })
    },
    onStore: function(){
        $.ajax({
            "url":'/user/post-on-store',
            "type":'POST',
            "data":$('.on_store form').serialize(),
            dataType:'json'
        }).always(function(res){
            if(res && res.err ==0){
                window.location.href=res.msg;
                return;
            }
            var msg = res && res.msg ? res.msg : '请求异常';
            alert(msg);
        })
    },
    offStore: function(){
        $.ajax({
            "url":'/user/post-off-store',
            "type":'POST',
            "data":$('.off_store form').serialize(),
            dataType:'json'
        }).always(function(res){
            if(res && res.err ==0){
                window.location.href=res.msg;
                return;
            }
            var msg = res && res.msg ? res.msg : '请求异常';
            alert(msg);
        })
    },
    dealProblem: function() {
        $.ajax({
            "url": '/problems/post-handle-problem',
            "type": 'POST',
            "data": $('.handle-problem form').serialize(),
            dataType: 'json'
        }).always(function (res) {
            if (res && res.err == 0) {
                window.location.reload();
                return;
            }
            var msg = res && res.msg ? res.msg : '请求异常';
            alert(msg);
        })
    },
    downProduct: function(){
        $.ajax({
            "url":'/problems/post-handle-problem',
            "type":'POST',
            "data":$('.handle-problem form').serialize()+ '&downproduct=1',
            dataType:'json'
        }).always(function(res){
            if(res && res.err ==0){
                window.location.reload();
                return;
            }
            var msg = res && res.msg ? res.msg : '请求异常';
            alert(msg);
        })
    },
    activateUser: function(){
        $.ajax({
            "url":'/index/post-activate-user',
            "type":'POST',
            "data":$('.activate_user form').serialize(),
            dataType:'json'
        }).always(function(res){
            if(res && res.err ==0){
                window.location.reload();
                return;
            }
            var msg = res && res.msg ? res.msg : '请求异常';
            alert(msg);
        })
    },
    setMerchant: function(){
        $.ajax({
            "url":'/index/post-set-merchant',
            "type":'POST',
            "data":$('.set_merchant form').serialize(),
            dataType:'json'
        }).always(function(res){
            if(res && res.err ==0){
                window.location.reload();
                return;
            }
            var msg = res && res.msg ? res.msg : '请求异常';
            alert(msg);
        })
    }

};

app.init();
