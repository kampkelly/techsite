$(document).ready(function () {
	$(window).scroll(function () {
		$('.kk').css("margin-top", "90px");
	});
	$('body').css("position", "relative");
//	$('header').css("position", "fixed");
	$('header').css("width", "100%");
	$('header').css("z-index", "99");
	//  $(".top_post").hide();
	$("p img").removeClass("img-responsive");
//	$(".top_post").fadeOut("fast");
//	$(".top_post ").fadeIn(5000);
//	$(".other_post").fadeOut("fast");
//	$(".other_post").fadeIn(7000); 
	// $('#other_post').css("position", "absolute");
//	$('#other_post').addClass("other_post_right");
	//$('.category_post').addClass("category_post_show");
	$("img").addClass("img-responsive");
	if ($(window).width() > 767) {
		$(window).scroll(function () {
			$('.header_hei').css("margin-top", "90px");
		});
		$(".left_sidebar").show();
		$(".main_content").addClass("main_content_spc");
	} else {
		$(window).scroll(function () {
			$('.header_hei').css("margin-top", "150px");
		});
		$(".left_sidebar").hide();
		$(".main_content").removeClass("main_content_spc");
	}
	//WINDOW RESIZE EVENTS BEGINS
	window.addEventListener("resize", myFunction);

	function myFunction() {
		var w = window.outerWidth;
		var h = window.outerHeight;
		var txt = "Window size: width=" + w + ", height=" + h;
		if (w < 767) {
			$(window).scroll(function () {
				$('.header_hei').css("margin-top", "150px");
			});
			$(".left_sidebar").hide();
			$(".main_content").removeClass("main_content_spc");
			//  document.getElementById("resize").innerHTML = txt;
		} else {
			$(window).scroll(function () {
				$('.header_hei').css("margin-top", "90px");
			});
			$(".left_sidebar").show();
			$(".main_content").addClass("main_content_spc");
		}
		if (w < 1250) {
			$("footer #right").addClass("yeye_footer");
		}
	}

	if ($(window).width() > 1250) {
		$("footer #right").addClass("yeye_footer");
	}

	//WINDOW RESIZE EVENTS ENDS

	//    $("#myForm").on("submit",function(){
	//    $("textarea").val($("#myHiddenInput").html();
	//  $("textarea").val("Glenn Quagmire");
	//          });
	$(window).scroll(function () {
		$('body').css("position", "relative");
		$('header').css("position", "fixed");
		$('header').css("width", "100%");
		//     $('header h3').css("visibility", "hidden");
		$('header').css("z-index", "1");
		//  $('.header_hei').css("margin-top", "60px");
		//   $('#other_post').removeClass("other_post_right");
		$('#other_post').addClass("other_post_rig");

	});
	//start
	/**
	 * Binds a TinyMCE widget to <textarea> elements.
	 */
	angular.module('ui.tinymce', [])
		.value('uiTinymceConfig', {})
		.directive('uiTinymce', ['uiTinymceConfig', function (uiTinymceConfig) {
			uiTinymceConfig = uiTinymceConfig || {};
			var generatedIds = 0;
			return {
				require: 'ngModel',
				link: function (scope, elm, attrs, ngModel) {
					var expression, options, tinyInstance;
					// generate an ID if not present
					if (!attrs.id) {
						attrs.$set('id', 'uiTinymce' + generatedIds++);
					}
					options = {
						// Update model when calling setContent (such as from the source editor popup)
						setup: function (ed) {
							ed.on('init', function (args) {
								ngModel.$render();
							});
							// Update model on button click
							ed.on('ExecCommand', function (e) {
								ed.save();
								ngModel.$setViewValue(elm.val());
								if (!scope.$$phase) {
									scope.$apply();
								}
							});
							// Update model on keypress
							ed.on('KeyUp', function (e) {
								console.log(ed.isDirty());
								ed.save();
								ngModel.$setViewValue(elm.val());
								if (!scope.$$phase) {
									scope.$apply();
								}
							});
						},
						mode: 'exact',
						elements: attrs.id
					};
					if (attrs.uiTinymce) {
						expression = scope.$eval(attrs.uiTinymce);
					} else {
						expression = {};
					}
					angular.extend(options, uiTinymceConfig, expression);
					setTimeout(function () {
						tinymce.init(options);
					});


					ngModel.$render = function () {
						if (!tinyInstance) {
							tinyInstance = tinymce.get(attrs.id);
						}
						if (tinyInstance) {
							tinyInstance.setContent(ngModel.$viewValue || '');
						}
					};
				}
			};
}]);

	var myApp = angular.module('myApp', ['ui.tinymce']);

	function TestCtrl($scope, $http) {
		$scope.from_one = {
			from_one: '<strong>bold data in controller in from_one.js</strong>'
		}
	};
	//end
});

$(function () {
	$("#fileupload").change(function () {
		$("#dvPreview").html("");
		var regex = /^([a-zA-Z0-9\s_\\.\-:])+(.jpg|.jpeg|.gif|.png|.bmp)$/;
		if (regex.test($(this).val().toLowerCase())) {
			if ($.browser.msie && parseFloat(jQuery.browser.version) <= 9.0) {
				$("#dvPreview").show();
				$("#dvPreview")[0].filters.item("DXImageTransform.Microsoft.AlphaImageLoader").src = $(this).val();
			} else {
				if (typeof (FileReader) != "undefined") {
					$("#dvPreview").show();
					$("#dvPreview").append("<img />");
					var reader = new FileReader();
					reader.onload = function (e) {
						$("#dvPreview img").attr("src", e.target.result);
					}
					reader.readAsDataURL($(this)[0].files[0]);
				} else {
					alert("This browser does not support FileReader.");
				}
			}
		} else {
			alert("Please upload a valid image file.");
		}
	});
});
