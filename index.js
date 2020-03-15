$(document).ready(() => {

  $('#copyright').html('Copyright &copy; ' + (new Date()).getFullYear() + ' S&K Real Estate and Investments LLC');

  $.getJSON('https://ipapi.co/json/', function(data) {
    $("#locationInput").val(data['city'] + ", " + data['region_code']);
  });

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

  $('#isSellingForm').on('click', 'button', null, function(e) {
    e.preventDefault();
    let form = $('#isSellingForm');
    $('#isSellingInput').val($(this).html());
    form.hide();
    form.next().fadeIn(300);
  });

  $('#signUpForm').on('submit', async function(e) {
    e.preventDefault();
    if (this.checkValidity() === true) {
      let result = await axios.post('http://realtyperfected.com:3000/skrei/client', {
        "location": $('#locationInput').val(),
        "homeType": $('#homeTypeInput').val(),
        "budget": $('#budgetInput').val(),
        "timeFrame": $('#timeFrameInput').val(),
        "isSelling": $('#isSellingInput').val(),
        "fullName": $('#nameInput').val(),
        "email": $('#emailInput').val(),
        "phone": $('#phoneInput').val()
      });
      $(this).hide();
      $(this).next().fadeIn(300);
    }
    $(this).addClass('was-validated');
  });

});