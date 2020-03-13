$(document).ready(() => {

  $('#copyright').html('Copyright &copy; ' + (new Date()).getFullYear() + ' S&K Real Estate and Investments LLC');

  $.getJSON('https://ipapi.co/json/', function(data) {
    $("#locationInput").val(data['city'] + ", " + data['region_code']);
  });

  $('#homeTypeForm').hide();
  $('#budgetForm').hide();
  $('#timeFrameForm').hide();
  $('#sellingForm').hide();
  $('#signUpForm').hide();
  $('#thankYou').hide();

  // $('input').on('focus', function(e) {
  //   $(this).parents('form:first').removeClass('was-validated');
  // });

  $('#locationForm').on('submit', function(e) {
    e.preventDefault();
    if (this.checkValidity() === true) {
      $(this).hide();
      $(this).next().fadeIn(300);
    }
    $(this).addClass('was-validated');
    // this.classList.add('was-validated');
  });

  $('#homeTypeForm').on('click', 'button', null, function(e) {
    e.preventDefault();
    let form = $('#homeTypeForm');
    $('#homeTypeInput').val($(this).html());
    form.hide();
    form.next().fadeIn(300);
  });

  $('#budgetForm').on('click', 'button', null, function(e) {
    e.preventDefault();
    let form = $('#budgetForm');
    $('#budgetInput').val($(this).html());
    form.hide();
    form.next().fadeIn(300);
  });

  $('#timeFrameForm').on('click', 'button', null, function(e) {
    e.preventDefault();
    let form = $('#timeFrameForm');
    $('#timeFrameInput').val($(this).html());
    form.hide();
    form.next().fadeIn(300);
  });

  $('#sellingForm').on('click', 'button', null, function(e) {
    e.preventDefault();
    let form = $('#sellingForm');
    $('#sellingInput').val($(this).html());
    form.hide();
    form.next().fadeIn(300);
  });

  $('#signUpForm').on('submit', function(e) {
    e.preventDefault();
    if (this.checkValidity() === true) {
      // let result = await axios({
      //   method: 'post',
      //   url: 'realtyperfected.com/skrei/client',
      //   data: {
      //     "location": $('#locationInput').val(),
      //     "homeType": $('#homeTypeInput').val(),
      //     "budget": $('#budgetInput').val(),
      //     "timeFrame": $('#timeFrameInput').val(),
      //     "selling": $('#sellingInput').val(),
      //     "fullName": $('#nameInput').val(),
      //     "email": $('#emailInput').val(),
      //     "phone": $('#phoneInput').val()
      //   }
      // });
      $(this).hide();
      $(this).next().fadeIn(300);
    }
    this.classList.add('was-validated');
  });

  //validation();

});

const validation = function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
}