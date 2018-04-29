$(function () {
    var SCHOOL = {
        s: {
        },
        init: function () {
            this.bindEvent()
        },
        bindEvent: function () {
            $('.j_open_time').datetimepicker({
                viewMode: 'decades',
                format: 'HH:mm:ss'
            });
            $('.j_close_time').datetimepicker({
                viewMode: 'decades',
                format: 'HH:mm:ss'
            });

            $('.j_save').click(function () {
                var data = {
                    name: $('input[name="name"]').val(),
                    content: $('textarea[name="content"]').val(),
                    mobile: $('input[name="mobile"]').val(),
                    wechat: $('input[name="wechat"]').val(),
                    address: $('input[name="address"]').val(),
                    open_time: $('input[name="open_time"]').val(),
                    close_time: $('input[name="close_time"]').val()
                }
                $.ajax({
                    type: 'put',
                    url: '/admin/1',
                    data: data,
                    success: function (response) {
                        response.code === 1 && location.reload()
                    }
                })
            })
        }
    }

    SCHOOL.init()
})