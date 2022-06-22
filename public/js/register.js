jQuery(function($){

    let State = {
        APIUR: 'http://localhost:8000'
    }
    let Regis = {}
    
    Regis.actived = function() {
        Regis.Event.active()
    }

    Regis.API = {
        register: function(data) {
            $.ajax({
                method: 'POST',
                url: State.APIUR + '/api/register',
                data: data,
                processData: false,
                contentType: false,
                success: function(resp) {
                    if (resp.meta.code == '201') {
                        window.location.href = State.APIUR + '/login'
                    } else {
                        alert('Fail to register data');
                    }
                },
                error: function(e) {

                },
                complete: function() {

                }
            })
        }
    }

    Regis.Event = {
        active: function() {
            this.btnRegis()
        },
        btnRegis: function() {
            $('#btn-regist').on('click', function(e) {
                e.preventDefault()
                
                let data = new FormData($('#formData')[0])

                Regis.API.register(data)
            })
        }
    }

    Regis.actived()

})