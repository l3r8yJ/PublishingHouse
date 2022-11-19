$(document).ready(function (){
    $("#apply-filter-btn").click(
        function (){
            $.ajax({
                url: '/filter',
                method: 'get',
                dataType: 'json',
                data: generateJSON(),
                success: function (data){
                    alert("Successfully");
                },
                error: function (jqXHR, exception) {
                    alert(jqXHR.responseText);
                }
            });

            location.href = "/filter";
        }
    )
});


function generateJSON() {
    var _author = document.getElementById('input-author').value;
    var _title = document.getElementById('input-title').value;

    var _input_magazine = document.getElementById('input-magazine').value;
    var _input_year = document.getElementById('input-year').value;
    var _params = {
        author: _author.toString(),
        title: _title.toString(),
        text_content: _input_magazine.toString(),
        image_link: _input_year.toString(),
    }
    return _params;
}


