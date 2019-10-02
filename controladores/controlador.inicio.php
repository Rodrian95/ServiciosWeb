<script>
    function cerrarSesion(){
    $.ajax({
        url: "../modelos/modelo.logout.php",
        type: "GET",
        success: function(msg){
            alert("Adios");
            location.href="../index.php"
        }
    })
}
</script>