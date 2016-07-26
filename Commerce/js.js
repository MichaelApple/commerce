// Image preview

jQuery(document).ready(function($) {

// FORM1 add logo
var imageLoader = document.getElementById('filePhoto');
    imageLoader.addEventListener('change', handleImage, false);

function handleImage(e) {
    var reader = new FileReader();
    reader.onload = function (event) {
        
        $('.uploader img').attr('src',event.target.result);
    }

    reader.readAsDataURL(e.target.files[0]);
}
// Перше фото
var imageLoader1 = document.getElementById('filePhoto1');
    imageLoader1.addEventListener('change', handleImage1, false);

function handleImage1(ev) {
    var reader1 = new FileReader();
    reader1.onload = function (event) {
        
        $('.uploader_photo1 img').attr('src',event.target.result);
    }

    reader1.readAsDataURL(ev.target.files[0]);
}

var imageLoader2 = document.getElementById('filePhoto2');
    imageLoader2.addEventListener('change', handleImage2, false);
// Друге фото
function handleImage2(e) {
    var reader2 = new FileReader();
    reader2.onload = function (event) {
        
        $('.uploader_photo2 img').attr('src',event.target.result);
    }

    reader2.readAsDataURL(e.target.files[0]);
}
// Третє фото
var imageLoader3 = document.getElementById('filePhoto3');
    imageLoader3.addEventListener('change', handleImage3, false);

function handleImage3(ev) {
    var reader3 = new FileReader();
    reader3.onload = function (event) {
        
        $('.uploader_photo3 img').attr('src',event.target.result);
    }

    reader3.readAsDataURL(ev.target.files[0]);
}

// Перше відео
var videoLoader = document.getElementById('fileVideo1');
    videoLoader.addEventListener('change', handleVideo, false);

function handleVideo(e) {
    var reader4 = new FileReader();
    reader4.onload = function (event) {
        
        $('.uploader_video1 source').attr('src',event.target.result);
    }

    reader4.readAsDataURL(e.target.files[0]);
}


// 	 var dropZone = $('#dropZone'),
//         maxFileSize = 1000000; // максимальний розмір файла - 1 мб.

// if (typeof(window.FileReader) == 'undefined') {
//     dropZone.text('Не підтримуєтьсяся браузером!');
//     dropZone.addClass('error');
// }

// dropZone[0].ondragover = function() {
//     dropZone.addClass('hover');
//     return false;
// };
    
// dropZone[0].ondragleave = function() {
//     dropZone.removeClass('hover');
//     return false;
// };

// dropZone[0].ondrop = function(event) {
//     event.preventDefault();
//     dropZone.removeClass('hover');
//     dropZone.addClass('drop');
// };

// var file = event.dataTransfer.files[0];
        
// if (file.size > maxFileSize) {
//     dropZone.text('Файл завеликий!');
//     dropZone.addClass('error');
//     return false;
// }

// var xhr = new XMLHttpRequest();
// xhr.upload.addEventListener('progress', uploadProgress, false);
// xhr.onreadystatechange = stateChange;
// xhr.open('POST', '/upload.php');
// xhr.setRequestHeader('X-FILE-NAME', file.name);
// xhr.send(file);

// function uploadProgress(event) {
//     var percent = parseInt(event.loaded / event.total * 100);
//     dropZone.text('Загрузка: ' + percent + '%');
// }

// function stateChange(event) {
//     if (event.target.readyState == 4) {
//         if (event.target.status == 200) {
//             dropZone.text('Загрузка успешно завершена!');
//         } else {
//             dropZone.text('Произошла ошибка!');
//             dropZone.addClass('error');
//         }
//     }
// }




    $('.nav-tabs > li a[title]').tooltip();
    
    //Wizard
    $('a[data-toggle="tab"]').on('show.bs.tab', function (e) {

        var $target = $(e.target);
    
        if ($target.parent().hasClass('disabled')) {
            return false;
        }
    });

    $(".next-step").click(function (e) {

        var $active = $('.wizard .nav-tabs li.active');
        $active.next().removeClass('disabled');
        nextTab($active);

    });
    $(".prev-step").click(function (e) {

        var $active = $('.wizard .nav-tabs li.active');
        prevTab($active);

    });


function nextTab(elem) {
    $(elem).next().find('a[data-toggle="tab"]').click();
}
function prevTab(elem) {
    $(elem).prev().find('a[data-toggle="tab"]').click();
}




$('#title').keyup(function(){
	$('#title2').attr('value', $('#title').val());
});


// Gender value
$('#progr').keyup(function(){
	if($('#progr').val() == ''){
		$('#progress_male').attr('value', '0');
	}
	else if($('#progr').val() >= 0){
		$('#progress_male').attr('value', $('#progr').val());
		var a = 100 - $('#progr').val();
		$('#progress_female').attr('value', a);
		$('#progr2').attr('value', a);
	}
	
});

$('#progr2').keyup(function(){
	if($('#progr2').val() == ''){
		$('#progress_female').attr('value', '0');
	}
	else if($('#progr2').val() >= 0){
		$('#progress_female').attr('value', $('#progr2').val());
		var a = 100 - $('#progr2').val();
		$('#progress_male').attr('value', a);
		$('#progr').attr('value', a);
	}

});

$('#gender-div>p>input').keyup(function(){
	var gender = Number($('#progr').val()) + Number($('#progr2').val());
		if (gender > 100) {
			$('#gender-div>p>input').attr('value', '0');
			$('#gender-div>p>progress').attr('value', '0');
			alert("Summ is more than 100. Please try againe.)");	
		}
		else if (gender == 100) {

			var gend = [Number($('#progr').val()), Number($('#progr2').val())];
			Array.prototype.max = function() {
			return Math.max.apply(null, this);
		}
		$('#maxGender').attr('value', gend.max());
		};
});

$('#age-div>p>input, #edu-div>p>input, #mar-div>p>input, #inc-div>p>input').keyup(function(){
	if($(this).val() == ''){
		$(this).find('+progress').attr('value', '0');
	}
	
	else if(100 >= $(this).val() >= 0){		//start of else if
		$(this).find('+progress').attr('value', $(this).val());

		var c = Number($('#age1').val()) + Number($('#age2').val()) + Number($('#age3').val()) + Number($('#age4').val())+ Number($('#age5').val()) + Number($('#age6').val()) + Number($('#age7').val());
		if (c > 100) {
			$('#age-div>p>input').attr('value', '0');
			$('#age-div>p>progress').attr('value', '0');
			alert("Summ is more than 100. Please try againe.)");
			
		}
		else if (c == 100) {
			var age_values = [Number($('#age1').val()), Number($('#age2').val()), Number($('#age3').val()), Number($('#age4').val()), Number($('#age5').val()), Number($('#age6').val()), Number($('#age7').val())];
			var age = {'0-17' : Number($('#age1').val()), '18-24':Number($('#age2').val()), '25-34':Number($('#age3').val()), '35-44':Number($('#age4').val()), '45-54':Number($('#age5').val()), '55-64':Number($('#age6').val()), '65+':Number($('#age7').val())};
			Array.prototype.max = function() {
			return Math.max.apply(null, this);
		}
		var max_age = Object.keys(age).filter(function(key){
			return age[key] == age_values.max();
		});
		$('#maxAge').attr('value', max_age.toString());
		};
		var education = Number($('#edu1').val()) + Number($('#edu2').val()) + Number($('#edu3').val()) + Number($('#edu4').val())+ Number($('#edu5').val());
		if (education > 100){
			$('#edu-div>p>input').attr('value', '0');
			$('#edu-div>p>progress').attr('value', '0');
			alert("Summ is more than 100. Please try againe.");
		}
		else if(education == 100){
			var edu_values = [Number($('#edu1').val()), Number($('#edu2').val()), Number($('#edu3').val()), Number($('#edu4').val()), Number($('#edu5').val())];
			var edu ={'Less than HS diploma':Number($('#edu1').val()), 'High school':Number($('#edu2').val()), 'Some college':Number($('#edu3').val()), 'Bachelor\'s degree':Number($('#edu4').val()), 'Graduate degree':Number($('#edu5').val())};
			Array.prototype.max = function() {
			return Math.max.apply(null, this);
		}
		var max_edu = Object.keys(edu).filter(function(key){
			return edu[key] == edu_values.max();
		});
		$('#maxEdu').attr('value', max_edu.toString());
		}

		var marital = Number($('#marital1').val()) + Number($('#marital2').val()) + Number($('#marital3').val());
		if (marital > 100){
			$('#mar-div>p>input').attr('value', '0');
			$('#mar-div>p>progress').attr('value', '0');
			alert("Summ is more than 100. Please try againe.");
		}
		else if (marital == 100) {
			var mar_values = [Number($('#marital1').val()), Number($('#marital2').val()), Number($('#marital3').val())];
			var mar = {'Single':Number($('#marital1').val()), 'Married/couple':Number($('#marital2').val()), 'Couple with children':Number($('#marital3').val())};
			Array.prototype.max = function(){
			return Math.max.apply(null, this);
		}
		var max_mar = Object.keys(mar).filter(function(key){
			return mar[key] == mar_values.max();
		});
		$('#maxMar').attr('value', max_mar.toString());
		}

		var income = Number($('#income1').val()) + Number($('#income2').val()) + Number($('#income3').val()) + Number($('#income4').val())+ Number($('#income5').val())+ Number($('#income6').val());
		if (income > 100){
			$('#inc-div>p>input').attr('value', '0');
			$('#inc-div>p>progress').attr('value', '0');
			alert("Summ is more than 100. Please try againe.");
		}
		else if(income == 100){
			var inc_values = [Number($('#income1').val()), Number($('#income2').val()), Number($('#income3').val()), Number($('#income4').val()), Number($('#income5').val()),  Number($('#income6').val())];
			var inc = {'$0-$24,999':Number($('#income1').val()), '$25,000-$49,999':Number($('#income2').val()), '$50,000-$74,999':Number($('#income3').val()), '$75,000-$99,999':Number($('#income4').val()), '$100,000-$149,000':Number($('#income5').val()), '$150,000 or more':Number($('#income6').val())};
			Array.prototype.max = function(){
			return Math.max.apply(null, this);
		}
		var max_inc = Object.keys(inc).filter(function(key){
			return inc[key] == inc_values.max();
		});
		$('#maxInc').attr('value', max_inc.toString());
		}
}	// end of else if
});


$(function () {

	

    $('.button-checkbox').each(function () {

        // Settings
        var $widget = $(this),
            $button = $widget.find('button'),
            $checkbox = $widget.find('input:checkbox'),
            color = $button.data('color'),
            settings = {
                on: {
                    icon: 'glyphicon glyphicon-check'
                },
                off: {
                    icon: 'glyphicon glyphicon-unchecked'
                }
            };

        // Event Handlers
        $button.on('click', function () {
            $checkbox.prop('checked', !$checkbox.is(':checked'));
            $checkbox.triggerHandler('change');
            updateDisplay();
        });
        $checkbox.on('change', function () {
            updateDisplay();
        });

        // Actions
        function updateDisplay() {
            var isChecked = $checkbox.is(':checked');

            // Set the button's state
            $button.data('state', (isChecked) ? "on" : "off");

            // Set the button's icon
            $button.find('.state-icon')
                .removeClass()
                .addClass('state-icon ' + settings[$button.data('state')].icon);

            // Update the button's color
            if (isChecked) {
                $button
                    .removeClass('btn-default')
                    .addClass('btn-' + color + ' active');
            }
            else {
                $button
                    .removeClass('btn-' + color + ' active')
                    .addClass('btn-default');
            }
        }

        // Initialization
        function init() {

            updateDisplay();

            // Inject the icon if applicable
            if ($button.find('.state-icon').length == 0) {
                $button.prepend('<i class="state-icon ' + settings[$button.data('state')].icon + '"></i>    ');
            }
        }
        init();
    });
});


});
