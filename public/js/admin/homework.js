$(function () {
    var CMS = {
        s: {
            id: 0,
            form: {
                title: '',
                content: ''
            }
        },
        init: function () {
            this.bindEvent()
        },
        bindEvent: function () {
            var self = this;

            $('.j_time').datetimepicker({
                format: 'YYYY-MM-DD'
            });

            $('.j_new').click(function () {
                location.href = '/admin/homeworkCreate'
            })
            $('.j_delete').click(function () {
                self.s.id = $(this).data('id');
                $('#deleteDialog').modal()
            })

            $('.j_edit').click(function () {
                location.href = '/admin/homework/' + $(this).data('id')
            })

            $('.j_confirm_to_delete').click(function(){
                self.s.id && $.ajax({
                    type: 'delete',
                    url: '/admin/homework/' + self.s.id,
                    success: function (response) {
                        if(response.code === 1) {
                            location.reload()
                        }
                    }
                })
            })

            $('.img-upload-input').change(function(){
                var formData = new FormData($('#imgUpload')[0])
                $.ajax({
                    type: "post",
                    url: "/admin/upload",
                    data: formData,
                    contentType: false,
                    processData: false,
                    crossDomain: true,
                    success: function (response) {
                        if (response.code === 1) {
                            $('.j_img_show').attr('src', response.data.url);
                        }
                    },
                    error: function () {

                    }
                })
            })

            $('.j_save').click(function(){
                var id = $(this).data('id')
                var data = {
                    content: $('.j_name').val(),
                    class_id: $('.j_class').val(),
                    date: $('.j_time').val(),
                    create_user: $.trim($('#navbarUserDropdown').text()) || ''
                }

                if (id) {
                    $.ajax({
                        type: 'put',
                        url: '/admin/homework/' + id,
                        data: data,
                        success: function (response) {
                            if(response.code === 1) {
                                location.href = '/admin/homework'
                            }
                        }
                    })
                } else {
                    $.ajax({
                        type: 'post',
                        url: '/admin/homework',
                        data: data,
                        success: function (response) {
                            if(response.code === 1) {
                                location.href = '/admin/homework'
                            }
                        }
                    })
                }
            })
        }
    }

    CMS.init()
})