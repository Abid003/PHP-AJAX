$(document).ready(function () {
  function load() {
    $.ajax({
      type: "POST",
      url: "ajax_load.php",
      success: function (data) {
        $("#table-data").html(data);
      },
      error: function () {},
    });
  }

  $("#add-btn").click(function (e) {
    e.preventDefault();

    var name = $("#name").val();
    var id = $("#id").val();
    var sem = $("#sem").val();
    var sec = $("#sec").val();

    console.log(name);
    console.log(id);
    console.log(sem);
    console.log(sec);

    $.ajax({
      type: "POST",
      url: "insert_data.php",
      data: {
        sname: name,
        sid: id,
        ssec: sec,
        ssem: sem,
      },
      success: function (data) {
        if (data == 1) {
          load();
        } else {
          $("#table-data").text("hoyni");
        }
      }
    });
  });

  $("#search").keypress(function (e) {
    var search = $("#search").val()+e.key;
    
    $.ajax({
      type: "POST",
      url: "search.php",
      data: {
        search: search
      },
      success : function(data){
         $("#searchResult").html(data);
      }
    });
  });

});
