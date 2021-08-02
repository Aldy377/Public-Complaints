//update rubah status
function getUpdate(id){
  var id = id;
  $.ajax({
    url: "datapengaduan/rubahstatus.php",
    type: "GET",
    data : {id: id,},
    success: function (ajaxData){
      $("#rubahstatus").html(ajaxData);
      $("#rubahstatus").modal('show',{backdrop: 'true'});
    }
  });
}

      $(document).ready(function (){
          /*$(".mapeledit").click(function (e){*/
            $("#example").on("click",".rubahstatus",function(){
              var m = $(this).attr("id");
              $.ajax({
                  url: "datapengaduan/rubahstatus.php",
                  type: "GET",
                  data : {id: m,},
                  success: function (ajaxData){
                      $("#rubahstatus").html(ajaxData);
                      $("#rubahstatus").modal('show',{backdrop: 'true'});
                  }
              });
          });
      });
//end of edit rubah srarys

//update isi tanggapan
function getUpdate(id){
  var id = id;
  $.ajax({
    url: "datapengaduan/tanggapan.php",
    type: "GET",
    data : {id: id,},
    success: function (ajaxData){
      $("#isi").html(ajaxData);
      $("#isi").modal('show',{backdrop: 'true'});
    }
  });
}

      $(document).ready(function (){
          /*$(".mapeledit").click(function (e){*/
            $("#example").on("click",".isi",function(){
              var m = $(this).attr("id");
              $.ajax({
                  url: "datapengaduan/tanggapan.php",
                  type: "GET",
                  data : {id: m,},
                  success: function (ajaxData){
                      $("#isi").html(ajaxData);
                      $("#isi").modal('show',{backdrop: 'true'});
                  }
              });
          });
      });
//end of isi tanggapan

//update edit masyarakat
function getUpdate(id){
  var id = id;
  $.ajax({
    url: "datamasyarakat/uv_masyarakat.php",
    type: "GET",
    data : {id: id,},
    success: function (ajaxData){
      $("#editmasyarakat").html(ajaxData);
      $("#editmasyarakat").modal('show',{backdrop: 'true'});
    }
  });
}

      $(document).ready(function (){
          /*$(".mapeledit").click(function (e){*/
            $("#example").on("click",".editmasyarakat",function(){
              var m = $(this).attr("id");
              $.ajax({
                  url: "datamasyarakat/uv_masyarakat.php",
                  type: "GET",
                  data : {id: m,},
                  success: function (ajaxData){
                      $("#editmasyarakat").html(ajaxData);
                      $("#editmasyarakat").modal('show',{backdrop: 'true'});
                  }
              });
          });
      });
//end of edit masyarakat


//update edit petugas
function getUpdate(id){
  var id = id;
  $.ajax({
    url: "datapetugas/uv_petugas.php",
    type: "GET",
    data : {id: id,},
    success: function (ajaxData){
      $("#editpetugas").html(ajaxData);
      $("#editpetugas").modal('show',{backdrop: 'true'});
    }
  });
}

      $(document).ready(function (){
          /*$(".mapeledit").click(function (e){*/
            $("#example").on("click",".editpetugas",function(){
              var m = $(this).attr("id");
              $.ajax({
                  url: "datapetugas/uv_petugas.php",
                  type: "GET",
                  data : {id: m,},
                  success: function (ajaxData){
                      $("#editpetugas").html(ajaxData);
                      $("#editpetugas").modal('show',{backdrop: 'true'});
                  }
              });
          });
      });
//end of edit petugas
