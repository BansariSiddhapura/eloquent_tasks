$(function () {
  //var search = "";
  $("#search_btn").on("click", function () {
    var search_item = $("#search_item").val();
    //var search = search_item;
    return ajaxCall(search_item);
  });

  ajaxCall();
  function ajaxCall(search) {
    // console.log(search);
    var urlType = new URLSearchParams(window.location.search);
    var type = urlType.get("type");
    $.ajax({
      type: "post",
      url: "action.php",
      data: {
        action: "select",
        type: type,
        search_item: search,
      },
      dataType: "json",
      success: function (response) {
        //console.log(response);
        //console.log(type);

        if (type == "updateRow" || type == "deleteRow") {
          $.each(response, function (i, v) {
            condition =
              type == "updateRow"
                ? `<button class='btn btn-sm btn-success' id='editBtn' name='editBtn' data-id=${v.id} data-bs-toggle="modal" data-bs-target="#updateForm">Edit</button>`
                : `<button class='btn btn-sm btn-danger' id='deleteBtn' name='deleteBtn' data-id=${v.id}>Delete</button>`;

            $("#tbody").append(
              `<tr>
                    <td>${v.id}</td>
                    <td>${v.name}</td>
                    <td>${v.email}</td>
                    <td>${v.city}</td>
                    <td>${v.gender}</td>
                    <td>${condition}</td>
                </tr>`
            );
          });
        } else if (type == "join") {
          $.each(response, function (i, v) {
            $("#tbody").append(
              `<tr>
                 <td>${v.id}</td>
                <td>${v.name}</td>
                <td>${v.email}</td>
                <td>${v.city}</td>
                <td>${v.gender}</td>
                <td>${v.hobbies}</td>
             </tr>`
            );
          });
        } else if (type == "groupBy") {
          $("#tbody").empty("");
          $.each(response, function (i, v) {
            var search_item =
              search == "name"
                ? v.name
                : search == "gender"
                ? v.gender
                : search == "city"
                ? v.city
                : v.name;

            $("#tbody").append(
              `<tr>
                    <td>${search_item}</td>
                    <td>${v.number_of_names}</td>
                </tr>`
            );
          });
        } else {
          $("#tbody").empty("");
          $.each(response, function (i, v) {
            var id = typeof v.id == "undefined" ? "-" : v.id;
            var name = typeof v.name == "undefined" ? "-" : v.name;
            var email = typeof v.email == "undefined" ? "-" : v.email;
            var city = typeof v.city == "undefined" ? "-" : v.city;
            var gender = typeof v.gender == "undefined" ? "-" : v.gender;
            $("#tbody").append(
              `<tr>
                 <td>${id}</td>
                 <td>${name}</td>
                 <td>${email}</td>
                 <td>${city}</td>
                 <td>${gender}</td>
              </tr>`
            );
          });
        }
      },
    });
  }

  $("body").on("click", "#editBtn", function () {
    var id = $(this).data("id");
    $.ajax({
      type: "post",
      url: "action.php",
      data: {
        action: "select",
        id: id,
      },
      dataType: "json",
      success: function (response) {
          $("#id").val(response.id);
          $("#name").val(response.name);
          $("#email").val(response.email);
          $("#pass").val(response.password);
          $("#city").val(response.city);
          $(`#${response.gender}`).prop("checked", true);
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
        id: id,
      },
      dataType: "json",
      success: function (response) {
          alert(response.message);
          window.location.href = "index.php?type=deleteRow";
      },
    });
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
          //$('input[name="id"]').val("");
          alert(response.message);
          if (type == "updateRow") {
            window.location.href = "index.php?type=updateRow";
          } else {
            window.location.href = "index.php?type=getRows";
          }
      },
    });
  });
});
