$("#uploadImage").on("submit", function (e) {
  e.preventDefault();
  let dataFile = new FormData(this);
  $.ajax({
    url: "public/activitys/",
    method: "POST",
    data: dataFile,
    processData: false,
    success: function (data) {
      console.log(data);
    },
  });
});
