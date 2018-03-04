$(document).ready(function(){
    $("#pi-tanggal").change((function(e){
      if($("#pi-ruang").val()){
        var a = $("#pi-ruang").data("url");
        var b = $("#pi-ruang").val();
        var c = $("#pi-tanggal").val();

        $.ajax(
        {
          method: "POST",
          url: a,
          data: {ruang:b, tanggal:c},
          success: function(result){
            var z = "Sesi yang telah terisi = ";
            for(var i = 0; i<result[0]["DATA"].length; i++){
              if(result[0]["DATA"][i]["STATUS"] != ""){
                if(i>0){
                  z+=","
                }
                  z += "Sesi ";
                  z+= i+1;
              }


            }


            $("#inforuang").html(

              z

            );
              $("#inforuang").fadeIn();

        }});
      }
      else{

      }

    }));
});
