$(document).on('click', '.remove-item', function(el){
    var _this = el.currentTarget;
    bootbox.confirm({
        size: 'big',
        message: "Tem certeza que deseja excluir?", 
        closeButton: false,
        buttons: {
            'confirm': {
                label: 'Sim',
                className: 'btn-danger btn-cons'
            },
            'cancel': {
                label: 'Não',
                className: 'btn-success btn-cons'
            }
        },
        callback: function(result) {
            console.log("Confirm result: "+result);
            if (result) {
                var btn = $(_this),
                        form = btn.parent('form');

                $.post(form.attr('action'), form.serialize(), function (data) {
                    if (data.success) {
                        btn.parents('tr').remove();
                    } else if(typeof(data.msg) != 'undefined') {
                        //alert(data.msg);
                        bootbox.alert({
                            size: 'small',
                            closeButton: false,
                            message: data.msg, 
                        });
                    }
                });

            }
        },
    });
});