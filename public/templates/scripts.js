var sendDataFilter = document.getElementById("apply-filter-btn");
if(sendDataFilter !== null){
    sendDataFilter.addEventListener("click", function(e){
        e.preventDefault();
    }, false);
}

var cleardDataFilter = document.getElementById("clear-filter-btn");
if(cleardDataFilter !== null){
    cleardDataFilter.addEventListener("click", function(e){
        e.preventDefault();
    }, false);
}

const currentUrl = window.location.host;

var url = new URL(currentUrl);
if(document.getElementById('input-author') !== null){
    const searchString = new URLSearchParams(window.location.search);

    document.getElementById('input-author').value = searchString.get('author');
    document.getElementById('input-title').value = searchString.get('title');
    document.getElementById('input-magazine').value = searchString.get('magazine');
    document.getElementById('input-year').value = searchString.get('year_release');


    $(document).ready(function (){
        $("#apply-filter-btn").click(
            function (){
                var params = generateJSON();
                const currentUrl = window.location.host;
                var url = new URL(currentUrl);

                url.searchParams.append('title', params['title']);
                url.searchParams.append('author', params['author']);
                url.searchParams.append('magazine', params['magazine']);
                url.searchParams.append('year_release', params['year_release']);

                document.location.href = " http://" + url.href
            }
        )
    })
}



function generateJSON() {
    var _author = document.getElementById('input-author').value;
    var _title = document.getElementById('input-title').value;

    var _input_magazine = document.getElementById('input-magazine').value;
    var _input_year = document.getElementById('input-year').value;
    var _params = {
        author: _author.toString(),
        title: _title.toString(),
        magazine: _input_magazine.toString(),
        year_release: _input_year.toString(),
    }
    return _params;
}

$(document).ready(function () {
    $("#clear-filter-btn").click(
        function () {
            document.getElementById('input-author').value = '';
            document.getElementById('input-title').value = '';
            document.getElementById('input-magazine').value = '';
            document.getElementById('input-year').value = '';

            var params = generateJSON();
            const currentUrl = window.location.host;
            var url = new URL(currentUrl);

            url.searchParams.append('title', params['title']);
            url.searchParams.append('author', params['author']);
            url.searchParams.append('magazine', params['magazine']);
            url.searchParams.append('year_release', params['year_release']);
      
            document.location.href = " http://" + url.href
        }
    )
})

$(document).ready(function (){
    $(".registration-button").click(
        function () {
            location.href = "/registration";
        }
    )
});

// var goToRegistration = document.getElementsByClassName("registration-button");
// goToRegistration.addEventListener("click", function(e){
//     window.location.href = "http://registration";
// }, false);