$(function(){
    /**
     * 模拟点击file-input
     */
    $('body').on('click','#add-work',function(){
        console.log('click');
        $('input[name="pic"]').trigger('click');
    });


    $('a[data-flag="typeselect"]').click(function(){
        var type = $(this).attr('data-id');
        var nameValue = $(this).text();
        $('#type-show-text').text(nameValue);
        $('input[name="type"]').val(type);
        refreshWork();
    });


    function refreshWork(){
        veil.down();
        $.ajax({
            url:'/worklist',
            data:{type:$('input[name="type"]').val()},
            dataType:'json',
            async:false,
            success:function(data){
                veil.up();
                if(data.status){
                    $('#base-frame').nextAll().remove();
                    var afterHtml = '';
                    $.each(data.data,function(ind,obj){
                        afterHtml += `<div class="col-md-3 col-sm-3 col-xs-6 work-item" data-id="`+obj.id+`">
                        <div class="dashboard-div-wrapper bk-clr-one work-show" style="position:relative;">
                        <img src="/images/work/`+obj.name+`" style="width: 100%;height: 100%;"/>
                        </div>
                        </div>`;
                    });
                    $('#base-frame').after(afterHtml);
                }
            },
            error:function(){
                veil.up();
            }
        });
    }

    refreshWork();

    /**
     * 上传图片
     */
    $('body').on('change','input[name="pic"]',function(){
        if(this.value){
            var formData = new FormData($("#data-form")[0]);
            $.ajax({
                url:'/savework',
                data:formData,
                type:'post',
                contentType: false,
                processData: false,
                dataType:'json',
                success:function(data){
                    if(data.status){
                        //$('#img-show').attr('src',data.data.img_url);
                        /*EMASCript 6的多行字符串*/
                        refreshWork();
                        $('input[name="pic"]').remove();
                        $('#add-work').before('<input type="file" style="display: none" name="pic"/>');
                    }
                }
            });
        }
    });


    $('#work-delete').click(function(){
        var innerHtml = `<span style="position: absolute;color:#FF4351;font-size:24px;top:-12px;right: -12px;" class="delete-work"><i class="fa fa-close"></i></span>`;
        if($('.delete-work').length){
            return;
        }else{
            $('.work-show').append(innerHtml);
        }
    });

    //$('.delete-work').click(function());
    $('body').on('click','.delete-work',function(){
        var id = $(this).parents('.work-item').attr('data-id');
        var target = $(this);
        $.ajax({
            url:'/workdelete',
            data:{id:id},
            dataType:'json',
            async:false,
            success:function(data){
                refreshWork();
            },
        });
    });
});