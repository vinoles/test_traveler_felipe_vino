var id = 0;
function opendDelete(id) {

    bootbox.confirm("Está uste seguro de borrar el elemento seleccionado?", function (result) {
        if (result === true) {
          
            var url = Routing.generate('activity_delete', {id: id});
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
                          $("#activity-" + id).fadeOut("slow");
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


function confirmed(id) {
    bootbox.confirm("Está usted segurode termninar la actividad?", function (result) {
        if (result === true) {
         
            var url = Routing.generate('activity_confirm', {id: id});
            $.ajax({
                type: "POST",
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
                          $("#status-" + id).removeClass("badge btn-danger");
                          $("#status-" + id).addClass("badge btn-success");
                          $("#status-" + id).html("");
                          $("#status-" + id).html("si");
                          $("#confirm-button-" + id).hide();
                          $("#end-date-" + id).html("");
                          $("#end-date-" + id).html(data.response.endDate);
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