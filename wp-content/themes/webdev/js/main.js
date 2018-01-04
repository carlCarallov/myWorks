  

document.addEventListener('DOMContentLoaded', function(){
    setTimeout(function(){
        var preloader = document.getElementById('pagePreloader');
        if(!preloader.classList.contains('done')){
            preloader.classList.add('done');
        }
    }, 800);
});

//showTable('all');
    new WOW().init();

 var i = 0;
function animateCross() {
    var crossLeft = document.getElementById('a3');
    var crossRight = document.getElementById('a1');
    var crossCenter = document.getElementById('a2');
    if (!crossLeft.classList.contains('crossInLeft')) {
        crossLeft.classList.remove('crossOutLeft');
            crossRight.classList.remove('crossOutRight');
            crossCenter.classList.remove('crossOutCenter');
        
        crossLeft.classList.add('crossInLeft');
        crossRight.classList.add('crossInRight');
        crossCenter.classList.add('crossInCenter');
        setTimeout(function () {
            crossLeft.style.transform = 'translate(34%,-5%) rotate(45deg)';
            crossRight.style.transform = 'translate(-41%,98%) rotate(-45deg)';
            crossCenter.style.opacity = '0';
        }, 700);
    } else if (crossLeft.classList.contains('crossInLeft')) {
         crossLeft.classList.remove('crossInLeft');
            crossRight.classList.remove('crossInRight');
            crossCenter.classList.remove('crossInCenter');
        
        crossCenter.classList.add('crossOutCenter');
        crossLeft.classList.add('crossOutLeft');
        crossRight.classList.add('crossOutRight');
        setTimeout(function () {
            crossCenter.style.opacity = '1';
            crossLeft.style.transform = 'translate(0%,95%) rotate(0deg)';
            crossRight.style.transform = 'translate(0%,85%) rotate(0deg)';
        }, 700);
    }
}

   
   
    
(function($){
    $('#navMenu').on('click', function () {

    if (i == 0) {
        animateCross();
        $('#w_menu').show(1000);
        $('#w_menu').css('z-index', '2');
        i++;
    } else if (i == 1) {
        animateCross();
        $('#w_menu').hide(1000);
        i = 0;
    }
  });
})(jQuery);

var id, timer, elem_offset, y;

 function scrollToElem(id) {
    var elem = document.querySelector(id);
    elem_offset = elem.offsetTop;
    y = window.pageYOffset;
    if (y > elem_offset) {
        slowScrollTop();

    } else if (y < elem_offset) {
        slowScrollDown();
    }


}

function slowScrollTop() {
    if (window.pageYOffset > elem_offset) {
        window.scrollTo(0, y);
        y -= 50;
        timer = setTimeout(slowScrollTop, 20)
    } else {
        clearTimeout(timer);
        window.scrollTo(0, elem_offset);

    }
}

function slowScrollDown() {
    if (window.pageYOffset < elem_offset) {
        window.scrollTo(0, y);
        y += 50;
        timer = setTimeout(slowScrollDown, 20);
    } else {
        clearTimeout(timer);
        window.scrollTo(0, elem_offset);

    }
}

//document.getElementById('nav').onclick = function (event) {
//    var indef1 = event.target.className;
//    showTable(indef1);
//}
//
//function showTable(indef) {
//var user = 'root', password = 'superUser';
//    var arr = new XMLHttpRequest();
//    arr.open('GET', 'table.json', true, user, password);
//    arr.send();
//    arr.onreadystatechange = function () {
//        if (arr.readyState == 4) {
//            var data = JSON.parse(arr.responseText);
//          if (indef == 'all') {
//                var portfolio = document.getElementById('portfolioTabl');
//                portfolio.innerHTML = '';
//                for (var key in data) {
//                    var parentDiv = document.createElement('div');
//                    parentDiv.classList.add('imgWin');
//                    portfolio.appendChild(parentDiv);
//                    var bgImg = document.createElement('img');
//                    bgImg.setAttribute('src', data[key].imgMin);
//                    bgImg.classList.add('imgWork');
//                    parentDiv.appendChild(bgImg);
//                    var childDiv = document.createElement('div');
//                    childDiv.classList.add('dropWin');
//                    parentDiv.appendChild(childDiv);
//                    var titleName = document.createElement('p');
//                    titleName.classList.add('nameWork');
//                    titleName.innerHTML = data[key].name;
//                    childDiv.appendChild(titleName);
//                    var presentButton = document.createElement('button');
//                    presentButton.onclick = fullShow;
//                    presentButton.classList.add(data[key].name);
//                    presentButton.id = 'present';
//                    presentButton.innerHTML = 'Посмотреть';
//                    childDiv.appendChild(presentButton);
//                }
//            } else {
//                var portfolio = document.getElementById('portfolioTabl');
//                portfolio.innerHTML = '';
//                for (var key in data) {
//                    if (indef == data[key].type) {
//                        var parentDiv = document.createElement('div');
//                        parentDiv.classList.add('imgWin');
//                        portfolio.appendChild(parentDiv);
//                        var bgImg = document.createElement('img');
//                        bgImg.setAttribute('src', data[key].imgMin);
//                        bgImg.classList.add('imgWork');
//                        parentDiv.appendChild(bgImg);
//                        var childDiv = document.createElement('div');
//                        childDiv.classList.add('dropWin');
//                        parentDiv.appendChild(childDiv);
//                        var titleName = document.createElement('p');
//                        titleName.classList.add('nameWork');
//                        titleName.innerHTML = data[key].name;
//                        childDiv.appendChild(titleName);
//                        var presentButton = document.createElement('button');
//                        presentButton.id = 'present';
//                        presentButton.classList.add(data[key].name);
//                        presentButton.innerHTML = 'Посмотреть';
//                        childDiv.appendChild(presentButton);
//                    }
//                }
//            }
//        } else if (arr.readyState == 0) {
//            alert('нет ответа сервера');
//        }
//    }
//}
//var full = document.getElementById('present');
//function fullShow() {
//    var cross = document.getElementById('navMenu');
//    cross.style.display = 'none';
//    var page = new XMLHttpRequest();
//    var block = document.getElementById('fullShow');
//    block.innerHTML = '';
//    var closeF = document.createElement('button');
//    closeF.id = 'closeF';
//    closeF.innerHTML = '&times';
//    closeF.onclick = closeBlock;
//    block.insertBefore(closeF, null);
//    block.style.display = 'block';
//    page.open('GET', 'table.json', true);
//    page.send();
//    s = this.className;
//    page.onreadystatechange = function () {
//        if (page.readyState == 4) {
//            var data = JSON.parse(page.responseText);
//            for (var key in data) {
//                if (s == data[key].name){
//                     var imgBig = document.createElement('img');
//                    imgBig.setAttribute('src', data[key].img);
//                    imgBig.setAttribute('width', 600);
//                    block.insertBefore(imgBig,null);
//                    var nameTxt = document.createElement('p');
//                    nameTxt.classList.add('nameTxt');
//                    nameTxt.innerHTML = data[key].name;
//                    block.insertBefore(nameTxt,null);
//                    var fullTxt = document.createElement('p');
//                    fullTxt.classList.add('fullTxt');
//                    fullTxt.innerHTML = data[key].title;
//                    block.insertBefore(fullTxt,null);
//                    }
//            }
//        }else if(page.readyState == 1) {
//            alert('server is cannot ready state');
//        }
//
//    }
//}
//
//function closeBlock(){
//   var burger = document.getElementById('navMenu');
//    burger.style.display = 'block';
//  var parentBlock = this.parentNode;
//    parentBlock.style.display = 'none';
//}
   
    
    

    




