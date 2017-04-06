var id = 0;
function opendDelete(id) {
 
    bootbox.confirm("Está uste seguro de borrar el elemento seleccionado?", function (result) {
        if (result === true) {
            
            var url = Routing.generate('list_app_delete', {id: id});
            $.ajax({
                type: "DELETE",
                url: url,
                crossDomain: false,
                dataType: "html",
                success: function (data) {

                    var data = JSON.parse(data);
                    if (data.response.error)
                    {
                        if (data.response.message) {
                            bootbox.alert(data.response.message);
                        }
                    } else {
                        bootbox.alert(data.response.message);
                          $("#list-menu-" + id).fadeOut("slow");
                          $("#list-" + id).fadeOut("slow");
                    }
                },
                error: function (data) {
                    console.log("Error in Processing-----" + data.status);
                }
            });
        }
    });
    return false;
}