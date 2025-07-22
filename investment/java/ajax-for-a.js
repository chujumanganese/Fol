$(document).ready(function(){
    $("#how_many_users").click(function(){
        $.get("../includes.dat/total_users.php", function(data, status){
            $("#users_count").text(data);
            console.log(status);
        });
    })

    // the second part of the code
    $("#lists_of_users").click(function(){
        $.get("../includes.dat/all_users.php", function(data, status){
            $(".fluctuate .space").html(data);
            console.log(status);
        });
    })

    $("#change_name_23").click(function(){
        $.post("../includes.dat/change_bussiness_name.php",
            // {
            //     sitename: $("#qed456").val(),
            //     sitename2: $("#q45ed456").val()
            // },
            function(data, status){
            $(".fluctuate .space").html(data);
            console.log(data);
        });
    })

}
)