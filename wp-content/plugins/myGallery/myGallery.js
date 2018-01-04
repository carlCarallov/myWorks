jQuery(function ($) {
    var i  = 0;
$(document).ready(function(){
    if(i == 0){
        showTable('all');
        i++;
    }
    
});
    $('#nav').click(function(event){
        var type = event.target.className;
        showTable(type);
    });

    function showTable(indef) {
        
        $.ajax({
            url: myPlugin.ajaxurl,
            type: 'GET',
            data: {
                action: 'table',
                param1: 'name',
                param2: 'type'
            },
            success: function (xhr) {
                var pre_addr = '';
                pre_addr = myPlugin.img_addr;
                var data = $.parseJSON(xhr);
                var out = $('#portfolioTabl');
                if (indef == 'all') {
                    out.empty();
                    for (var key in data) {
                        var parentDiv = $('<div />').attr('class', 'imgWin');
                        out.append(parentDiv);
                        var bgImg = $('<img>').attr('class', 'imgWork');
                        bgImg.attr('src',pre_addr+data[key].imgMin);
                        parentDiv.append(bgImg);
                        var childDiv = $('<div />').attr('class', 'dropWin');
                        parentDiv.append(childDiv);
                        var titleName = $('<p />').attr('class', 'nameWork');
                        titleName.html(data[key].name);
                        childDiv.append(titleName);
                        var presentButton = $('<button />').attr('class', data[key].name);
                        presentButton.on('click', fullInf);
                        presentButton.attr('id', 'present');
                        presentButton.html('Посмотреть');
                        childDiv.append(presentButton);
                    }
                }else{
                    out.empty();
                    for(var key in data){
                        if(indef == data[key].type){
                        var parentDiv = $('<div />').attr('class', 'imgWin');
                        out.append(parentDiv);
                        var bgImg = $('<img>').attr('class', 'imgWork');
                        bgImg.attr('src',pre_addr+data[key].imgMin);
                        parentDiv.append(bgImg);
                        var childDiv = $('<div />').attr('class', 'dropWin');
                        parentDiv.append(childDiv);
                        var titleName = $('<p />').attr('class', 'nameWork');
                        titleName.html(data[key].name);
                        childDiv.append(titleName);
                        var presentButton = $('<button />').attr('class', data[key].name);
                        presentButton.click( fullInf);
                        presentButton.attr('id', 'present');
                        presentButton.html('Посмотреть');
                        childDiv.append(presentButton);
                        }
                    }
                }


            }


        });


    }
    
    function fullInf(){
        var s = $(this).attr('class');
        $.ajax({
            url:myPlugin.ajaxurl,
            type: 'GET',
            data:{
                action: 'inf',
                param1: 'name',
                param2: 'type'
            },
            success: function(xhr){
                 $('#navMenu').hide();
                var temp_addr = '';
                temp_addr = myPlugin.img_addr;
                var fullData = $.parseJSON(xhr);
                var block = $('#fullShow');
                block.empty();
                var close = $('<button />').attr('class', 'closeF');
                close.on('click', closeBlock);
                close.html('&times');
                block.append(close);
                block.css('display','block');
                console.log(temp_addr);
                for(var key in fullData){
                    if(s == fullData[key].name){
                        var imgBig = $('<img>').attr('src', temp_addr+fullData[key].img);
                        imgBig.attr('class', 'imgBig');
                        imgBig.attr('width', 600);
                        var nameTxt = $('<p />').attr('class', 'nameTxt');
                        nameTxt.html(fullData[key].name);
                        var fullTxt = $('<p />').attr('class', 'fullTxt');
                        fullTxt.html(fullData[key].title);
                        block.append(imgBig,nameTxt,fullTxt);
                    }
                }
            }
        });
    }
    
    function closeBlock(){
        $('#navMenu').show();
        $('#fullShow').hide();
    }
});

