<script>
    function verificaLogin(){
        if(document.getElementById("user").value != '' && document.getElementById("pass").value != ''){
            document.getElementById("btinicio").disabled = false;
        }
        else{
            document.getElementById("btinicio").disabled = true;
        }
    }
    function login(){
        var user = document.getElementById("user").value;
        var pass = document.getElementById("pass").value;

        console.log(user);
        console.log(pass);

        $.ajax({
            url: "modelos/modelo.login.php",
            type: "POST",
            data: ({
                user: user,
                pass: pass
            }),
            success: function(msg){
                if(msg=='1'){
                    location.href="vistas/inicio.php";
                }
                else {
                    alert('ERROR');
                }
                
                console.log(msg);
            },
            dataType: "JSON"
        });
    }
</script>