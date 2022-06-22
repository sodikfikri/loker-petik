jQuery(function($){
    
    let State = {
        APIURL: 'http://localhost:8000'
    }
    
    let Login = {}

    Login.activate = function() {
        Login.Event.activate()
    }

    Login.API = {
        login: function(data) {
            $.ajax({
                url: State.APIURL + '/api/login',
                method: 'POST',
                data: data,
                success: function(resp) {
                    if (resp.meta.code == '200') {
                        window.location.href = State.APIURL + '/home'
                    } else {
                        alert(resp.meta.message)
                    }
                }
            })
        }
    }

    Login.Event = {
        activate: function() {
            $('#btn-login').on('click', function(e) {
                e.preventDefault()

                let params = {
                    email: $('#input-email').val(),
                    password: $('#input-password').val()
                }
                
                Login.API.login(params)
            })
        }
    }

    Login.activate()

})