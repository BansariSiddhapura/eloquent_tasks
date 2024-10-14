$(function () {
  $.ajax({
    type: "post",
    url: "action.php",
    data: {
      action: "select",
    },
    dataType: "json",
    success: function (response) {
      console.log(response);
      $.each(response, function (i, v) {
        $("#tbody").append(`<tr>
                    <td>${v.id}</td>
                    <td>${v.name}</td>
					<td>${v.email}</td>
					<td>${v.city}</td>
					<td>${v.gender}</td>
                    <td>
                    <button class='btn btn-sm btn-success' id='editBtn' name='editBtn' data-id=${v.id}>Edit</button>
                      <button class='btn btn-sm btn-danger' id='deleteBtn' name='deleteBtn' data-id=${v.id}>Delete</button>
                    </td>
                    </tr>`);
      });
    },
  });

  $("body").on("submit", "#myForm", function (e) {
    e.preventDefault();
    var formData = $(this).serialize();
    //console.log(formData);

    $.ajax({
      type: "post",
      url: "action.php",
      data: {
        action: "insert",
        data: formData,
      },
      dataType: "json",
      success: function (response) {
        $("#myForm").trigger("reset");
        $('input[name="id"]').val("");
        alert(response.message);
        window.location.href = "index.php";
      },
    });
  });

  $("body").on("click", "#deleteBtn", function () {
    var id = $(this).data("id");
    $.ajax({
      type: "post",
      url: "action.php",
      data: {
        action: "delete",
        data: id,
      },
      dataType: "json",
      success: function (response) {
        alert(response.message);
        window.location.href = "index.php";
      },
    });
  });
  $("body").on("click","#editBtn",function(){
    
  })
});
