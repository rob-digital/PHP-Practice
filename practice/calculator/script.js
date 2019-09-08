
//var instance = M.Modal.getInstance(elem);

var Modalelem = document.querySelector('.modal');
var instance = M.Modal.init(Modalelem);
function showScore(num)
{
    document.addEventListener('DOMContentLoaded', function () {

        if (num) {
            console.log(num);
            document.getElementById('result').append(num);
           
            $('#modal1').modal('open');
            instance.open();
            }
        });


}

var closeBtn = document.getElementById('closeBtn');

closeBtn.addEventListener('click', closeModal);

var closeModal = function() {
    instance.close();
}
// $('#count').on('submit', function (e) {

//     e.preventDefault();

//     $.ajax({
//         type: 'post',
//         url: 'calculator.php',
//         data: $('#count').serialize(),
//         success: function (result) {
//             $("#score").text(result);// display result from getResult.php
//             console.log(result)
//         }
//     });

// });

// $('#1').click(function() {
//     $.ajax({
//     type: 'get',
//     url: 'calculator.php',
//     data: $('#1').serialize(),
//         success: function (result) {
//             $("#score").text(result);// display result from getResult.php
//             console.log(result)
//         }
//     });
// });