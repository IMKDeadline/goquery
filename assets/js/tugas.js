$(document).ready(function(){

  var no_soal = 0;
  var soal_arr = new Array();
  var soal_index = 0;
  var jawaban_index = 0;
  var jawaban_soal = new Array();

  function add_soal(e){
    no_soal++;
    var soal = '<div class="jumbotron" id="soal-'+ no_soal +'">' +
                '<p class="lead">Soal No '+ no_soal +'</p>' +
                '<input type="hidden" name="no_soal['+no_soal+']" value="'+no_soal+'">' +
                '<div class="form-group">' +
                  '<textarea name="soal['+ no_soal +']" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>' +
                '</div>' +
                '<hr class="my-4">' +
                  '<a  href="#'+ no_soal +'" class="btn btn-success btn-small add-jawaban">Add Answer</a>' +
                  '<div class="py-5 jawaban-'+ no_soal +'">'+
                        '<p class="lead"><b>Jawaban</b></p>' +
                  '</div>' +
                '<p class="lead">' +
                  '<a class="btn btn-danger del" href="#'+ no_soal +'" role="button"><i class="fas fa-trash-alt"></i></a>' +
                '</p>' +
              '</div>';

  $('#kolom-soal').prepend(soal);
  $('#soal-'+no_soal+' .add-jawaban').click(add_jawaban);
  $('#soal-'+no_soal+' .del').click(delete_soal);
  e.preventDefault();

  soal_arr[soal_index] = no_soal;

  }

  function delete_soal(){
    var href = $(this).attr('href');
    var href_arr = href.split('#');
    var no_soal = href_arr[1];
    var id_soal = '#soal-' + no_soal;
    $(id_soal).remove();
  }

  function add_jawaban(){
    var href = $(this).attr('href');
    var href_arr = href.split('#');
    var no_soal = href_arr[1];

    var jawaban = '<div>' +
                      '<input type="hidden" name="id_soal['+jawaban_index+']" value="'+no_soal+'">' + //buat no soal
                      '<input type="radio" name="jawaban_soal['+no_soal+']" value="'+jawaban_index+'">' +

                      '<div class="form-group">' +
                        '<label>'+ jawaban_index +'</label>' +
                        '<input type="text" name="jawaban['+jawaban_index+']" class="form-control">' +
                      '</div>'+
                  '</div>';
    var selector = '#kolom-soal .jawaban-'+ no_soal;
    $(selector).append(jawaban);
    jawaban_index++;
  }

  $('#add-soal').click(add_soal);

});
