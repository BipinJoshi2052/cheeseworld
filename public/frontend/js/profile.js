function changeProfile() {
  $("#prf-pic").click();
}

$("#prf-pic").change(function () {
  if ($(this).val() != "") {
    upload(this);
    console.log(this);
  }
});

function upload(img) {
  var form_data = new FormData();
  form_data.append("file", img.files[0]);
  form_data.append("_token", "{{csrf_token()}}");
  $.ajax({
    url: "{{ route('update-user-profile-image) }}",
    data: form_data,
    type: "POST",
    contentType: false,
    processData: false,
    success: function (data) {
      $("body").removeClass("loading");
      //   $('#profile_img').attr('src', '{{asset('uploads/user/profile_img/200x200/')}}/' + data.profile_img);
      toastr.success(data.message);
    },
    error: function (xhr, status, error) {
      console.log(xhr.responseText);
    },
  });
}
