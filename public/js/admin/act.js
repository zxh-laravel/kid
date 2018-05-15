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

            $('.j_new').click(function () {
                location.href = '/admin/actCreate'
            })
            $('.j_delete').click(function () {
                self.s.id = $(this).data('id');
                $('#deleteDialog').modal()
            })

            $('.j_edit').click(function () {
                location.href = '/admin/act/' + $(this).data('id')
            })

            $('.j_confirm_to_delete').click(function(){
                self.s.id && $.ajax({
                    type: 'delete',
                    url: '/admin/act/' + self.s.id,
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
                    title: $('.j_name').val(),
                    content: $('.j_content').val()
                }

                if (id) {
                    $.ajax({
                        type: 'put',
                        url: '/admin/act/' + id,
                        data: data,
                        success: function (response) {
                            if(response.code === 1) {
                                location.href = '/admin/act'
                            }
                        }
                    })
                } else {
                    $.ajax({
                        type: 'post',
                        url: '/admin/act',
                        data: data,
                        success: function (response) {
                            if(response.code === 1) {
                                location.href = '/admin/act'
                            }
                        }
                    })
                }
            })
        }
    }

    CMS.init()
})