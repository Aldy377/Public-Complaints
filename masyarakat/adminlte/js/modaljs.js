//update ruang
function getUpdate(id){
  var id = id;
  $.ajax({
    url: "datapengaduan/lihat.php",
    type: "GET",
    data : {id: id,},
    success: function (ajaxData){
      $("#lihat").html(ajaxData);
      $("#lihat").modal('show',{backdrop: 'true'});
    }
  });
}

      $(document).ready(function (){
          /*$(".mapeledit").click(function (e){*/
            $("#example").on("click",".lihat",function(){
              var m = $(this).attr("id");
              $.ajax({
                  url: "datapengaduan/lihat.php",
                  type: "GET",
                  data : {id: m,},
                  success: function (ajaxData){
                      $("#lihat").html(ajaxData);
                      $("#lihat").modal('show',{backdrop: 'true'});
                  }
              });
          });
      });
//end of edit ruang
