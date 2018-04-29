$(function () {
    var CMS = {
        s: {
            id: 0,
            form: {
                name: '',
                content: '',
                word: '',
                class_id: '',
                best: '',
                img: ''
            }
        },
        init: function () {
            this.bindEvent()
        },
        bindEvent: function () {
            var self = this;

            $('.j_new').click(function () {
                location.href = '/admin/teacherCreate'
            })
            $('.j_delete').click(function () {
                self.s.id = $(this).data('id');
                $('#deleteDialog').modal()
            })

            $('.j_edit').click(function () {
                location.href = '/admin/teacher/' + $(this).data('id')
            })

            $('.j_confirm_to_delete').click(function(){
                self.s.id && $.ajax({
                    type: 'delete',
                    url: '/admin/teacher/' + self.s.id,
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
                    name: $('.j_name').val(),
                    content: $('.j_content').val(),
                    img: $('.j_img_show').attr('src'),
                    word: $('.j_word').val(),
                    class_id: $('.j_class').val(),
                    best: $('.j_best:checked').val(),
                    create_user: 'admin'
                }

                if (id) {
                    $.ajax({
                        type: 'put',
                        url: '/admin/teacher/' + id,
                        data: data,
                        success: function (response) {
                            if(response.code === 1) {
                                location.href = '/admin/teacher'
                            }
                        }
                    })
                } else {
                    $.ajax({
                        type: 'post',
                        url: '/admin/teacher',
                        data: data,
                        success: function (response) {
                            if(response.code === 1) {
                                location.href = '/admin/teacher'
                            }
                        }
                    })
                }
            })
        }
    }

    CMS.init()
})