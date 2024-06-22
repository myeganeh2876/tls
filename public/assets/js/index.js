
// ======================= slider mainSlider__swiper =========================== 
const mainSlider__swiper = new Swiper('.mainSlider__swiper', {
    spaceBetween: 10,
    slidesPerView: 1,
    loop: true,
    speed: 500,
    autoplay: {
        delay: 2000,
        disableOnInteraction: false,
        pauseOnMouseEnter: true
    },
    pagination: {
        el: '.swiperPaginationMainSlider',
        type: 'bullets',
        clickable: true
    },
})
// ======================= END slider mainSlider__swiper =========================== 
// ======================= slider focusSelling__swiper =========================== 
const permissionsJimPaul__swiper = new Swiper('.permissionsJimPaul__swiper', {
    spaceBetween: 12,
    slidesPerView: 1.4,
    loop: true,
    speed: 300,
    autoplay: {
        delay: 2000,
        disableOnInteraction: false,
    },
    breakpoints: {
        400: {
            slidesPerView: 1.7,
        },
        575: {
            slidesPerView: 2.1,
        },
        768: {
            slidesPerView: 3,
        },
        992: {
            slidesPerView: 2.1,
        },
        1200: {
            slidesPerView: 3,
        },
    },
})
// ======================= END  slider focusSelling__swiper =========================== 
// ======================= END slider mainSlider__swiper =========================== 
// ======================= slider focusSelling__swiper =========================== 
const single__swiper = new Swiper('.single__swiper', {
    spaceBetween: 12,
    slidesPerView: 1,
    loop: true,
    speed: 300,
    autoplay: {
        delay: 2000,
        disableOnInteraction: false,
    },
    pagination: {
        el: '.swiperPaginationSingle',
        type: 'bullets',
        clickable: true
    },
})
// ======================= END  slider focusSelling__swiper =========================== 

// ======================= slider commentsUser__swiper =========================== 
// window.onload = function () {
//     var commentsUser__swiper = new Swiper('.commentsUser__swiper', {
//         pagination: '.swiper-pagination',
//         autoHeight: true,
//         slidesPerView: 1,
//         paginationClickable: true,
//         spaceBetween: 30
//     });
// };
let isStsrting = false;
const commentsUser__swiper = new Swiper('.commentsUser__swiper', {
    direction: 'vertical',
    slidesPerView: 2,
    loop: true,
    speed: 300,
    simulateTouch: false,
    allowTouchMove: false,
    autoplay: {
        delay: 2000,
        disableOnInteraction: false,
        pauseOnMouseEnter: true,
        reverseDirection: true
    },
    navigation: {
        nextEl: '.commentsUser-swiper-button-next',
        prevEl: '.commentsUser-swiper-button-prev',
    },
    breakpoints: {
        300: {
            slidesPerView: 2.3,
            simulateTouch: false,
            allowTouchMove: false,
            // touchStartForcePreventDefault:true,
        },
        450: {
            slidesPerView: 3,
        },
        768: {
            slidesPerView: 3.3,
        },
        992: {
            slidesPerView: 3,
            // imulateTouch: true,
            // allowTouchMove: true,
        },
        1200: {
            slidesPerView: 4.3,
        },
        1400: {
            slidesPerView: 4,
        },
    },
    on: {
        init: function () {
            isStsrting = true;
        },
    }
})
function myFunctionslideAutoplayDelay() {
    var min = 2,
        max = 5;
    var rand = Math.floor(Math.random() * (max - min + 1) + min); //Generate Random number between 5 - 10
    setTimeout(myFunctionslideAutoplayDelay, rand * 1000);
    commentsUser__swiper.autoplay.start();
    commentsUser__swiper.params.autoplay.delay = rand;
    let arrayss = document.querySelectorAll('.boxCommentsUser__wrappperMain')
    arrayss && arrayss.forEach(element => {
        element.classList.remove('add')
    });
}
if (isStsrting) {
    myFunctionslideAutoplayDelay()
}
commentsUser__swiper.on('slideChange', function () {
    commentsUser__swiper.autoplay.stop();
});
commentsUser__swiper.on('navigationNext', function () {
    commentsUser__swiper.autoplay.stop();
    let arrayss = document.querySelectorAll('.boxCommentsUser__wrappperMain')
    arrayss && arrayss.forEach(element => {
        element.classList.add('add')
    });
});
commentsUser__swiper.on('navigationPrev', function () {
    commentsUser__swiper.autoplay.stop();
    let arrayss = document.querySelectorAll('.boxCommentsUser__wrappperMain')
    arrayss && arrayss.forEach(element => {
        element.classList.add('add')
    });
});
let thisinputValue = '';
// ======================= END slider commentsUser__swiper =========================== 
//! ======================= boxCommentsUser__head fixed overflow text  =========================== 
let boxCommentsUser__head = document.querySelectorAll('.boxCommentsUser__head')
let boxSlide = document.querySelector('.commentsUser__swiper .swiper-slide')
let boxSwiperWidths;
let modalCuFitnsCard = document.getElementById('modalCuFitnsCard')
let modalCuFilter = document.getElementById('modalCuFilter')
let closeModalingCu = document.getElementById('closeModalingCu')
let miniDashboard = document.getElementById('miniDashboard')
let modaling = document.getElementById('modaling')
let culoader = document.getElementById('culoader')
document.body.classList.add('overflowHide')
window.addEventListener("load", (event) => {
    setTimeout(() => {
        culoader ? culoader.style.display = 'none' : ''
        document.body.classList.remove('overflowHide')
    }, 2000);
    reportWindowSize()
    let fitnsCardDataCdCard = document.querySelectorAll('.fitnsCard[data-cardCode]')
    let fitnsCardWrapper = document.querySelectorAll('.single__contact[data-card]')
    let isChekcRepided = false;
    let codeBeforecRepided = 0;
    fitnsCardWrapper.forEach(element => {
        element.classList.remove('active')
    });
    if (miniDashboard) {
        miniDashboard && miniDashboard.classList.add('active')
        closeModalingCu ? closeModalingCu.style.display = 'none' : ''
    } else {
        closeModalingCu ? closeModalingCu.style.display = 'none' : ''
        if (window.innerWidth < 992) {

        } else {
            modalCuFitnsCard ? modalCuFitnsCard.style.display = 'none' : ''
        }
    }
    fitnsCardDataCdCard.forEach((fitnsCard) => {
        fitnsCard.addEventListener('click', function (event) {
            closeModalingCu.style.display = 'inline-flex'
            if (window.innerWidth < 992) {
                modaling.classList.add('active')
                isChekcRepided = false
                fitnsCardDataCdCard.forEach(element => {
                    element.classList.remove('active')
                });
                let cardCode = this.getAttribute('data-cardCode')
                this.classList.add('active')
                codeBeforecRepided === cardCode ? isChekcRepided = true : isChekcRepided = false
                if (isChekcRepided) {
                    console.log('repeded');
                } else {
                    fitnsCardWrapper.forEach(element => {
                        element.classList.remove('active')
                        if (element.dataset.card === cardCode) {
                            codeBeforecRepided = cardCode
                            element.classList.add('active')
                            // modalCuFitnsCard.classList.add('aniLogin')
                            modalCuFitnsCard.style.display = 'block';
                            modalCuFitnsCard.addEventListener("animationend", (event) => {
                            });
                        }
                    });
                }
            } else {
                isChekcRepided = false
                fitnsCardDataCdCard.forEach(element => {
                    element.classList.remove('active')
                });
                let cardCode = this.getAttribute('data-cardCode')
                this.classList.add('active')
                codeBeforecRepided === cardCode ? isChekcRepided = true : isChekcRepided = false
                if (isChekcRepided) {

                } else {
                    fitnsCardWrapper.forEach(element => {
                        element.classList.remove('active')
                        if (element.dataset.card === cardCode) {
                            codeBeforecRepided = cardCode
                            modalCuFitnsCard.classList.add('aniLogin')
                            // modalCuFilter.classList.add('reverse')
                            element.classList.add('active')
                            modalCuFitnsCard.addEventListener("animationend", (event) => {
                                modalCuFitnsCard.style.display = 'block';
                                modalCuFitnsCard.classList.remove('aniLogin')
                                // modalCuFilter.classList.remove('reverse')
                            });
                        }
                    });
                }
            }
        })
    });
    closeModalingCu && closeModalingCu.addEventListener('click', function () {
        if (window.innerWidth < 992) {
            modaling.classList.remove('active')
        } else {
            fitnsCardDataCdCard.forEach(element => {
                element.classList.remove('active')
            });
            fitnsCardWrapper.forEach(element => {
                element.classList.remove('active')
            });
            closeModalingCu.style.display = 'none'
            if (miniDashboard) {
                miniDashboard && miniDashboard.classList.add('active')
                modalCuFitnsCard.classList.add('aniLogin')
                modalCuFilter.classList.add('reverse')
                modalCuFitnsCard.addEventListener("animationend", (event) => {
                    modalCuFitnsCard.style.display = 'block';
                    modalCuFitnsCard.classList.remove('aniLogin')
                    modalCuFilter.classList.remove('reverse')
                });
            } else {
                modalCuFilter.classList.add('animation')
                modalCuFitnsCard.classList.add('aniLogin')
                modalCuFitnsCard.addEventListener("animationend", (event) => {
                    modalCuFitnsCard.style.display = 'none';
                    modalCuFitnsCard.classList.remove('aniLogin')
                    modalCuFilter.classList.remove('animation')
                });
            }
            codeBeforecRepided = 0
        }
    })
    let filterResult__more = document.querySelectorAll('.filterResult__more')
    if (filterResult__more.length > 0) {
        filterResult__more.forEach(item => {
            item.style.width = item.clientWidth + 'px'
            item.style.height = item.clientHeight + 'px'
            item.addEventListener('click', function (event) {
                this.children[0].style.display = 'none'
                this.style.pointerEvents = 'none'
                this.children[1].style.display = 'flex'
                setTimeout(() => {
                    this.children[0].style.display = 'block'
                    this.style.pointerEvents = 'all'
                    this.children[1].style.display = 'none'
                }, 3000);
            })
        });
    }
    let commentSingle__btnMore = document.querySelectorAll('.commentSingle__btnMore')
    if (commentSingle__btnMore.length > 0) {
        commentSingle__btnMore.forEach(element => {
            element.addEventListener('click', function (event) {
                this.children[0].style.display = 'none'
                this.style.pointerEvents = 'none'
                this.children[1].style.display = 'flex'
                setTimeout(() => {
                    this.children[0].style.display = 'block'
                    this.style.pointerEvents = 'all'
                    this.children[1].style.display = 'none'
                }, 3000);
            })
        });
    }
});
window.addEventListener("resize", reportWindowSize);
function reportWindowSize() {
    if (boxSlide) {
        if (window.innerWidth < 575) {
            boxSwiperWidths = boxSlide.clientWidth
            boxCommentsUser__head.forEach(element => {
                element.style.width = (boxSwiperWidths - 30) + 'px'
            });
        }
    }
}
//! ======================= END boxCommentsUser__head fixed overflow text  ======================= 
$(document).ready(function () {
    // =============================== toggle menu  accordion ==========================
    var action = 'click';
    var speed = "500";
    $('.faq-contact').slideUp();

    $('.Introduction_dropDown-list li:first-child .faq-contact').slideToggle();

    $('li.drop-down .faq-title').on(action, function () {
        $(this).next().slideToggle(speed);
        $(this).parent().siblings().find('.faq-contact').slideUp(speed)
        $(this).parent().siblings().find('.faq-title').removeClass('active');
        $(this).toggleClass('active');
        $(this).css({ pointerEvents: 'none' })
        setTimeout(() => {
            $(this).css({ pointerEvents: 'all' })
        }, speed);
    });
    // =============================== END toggle menu  accordion ==========================
    // =============================== just Open menu accordion ==========================
    $('li.drop-down .faq-title-item').on(action, function () {
        $(this).parent().parent().next().slideToggle(speed);
    });
    // =============================== END just Open menu accordion ==========================
})
function setFocus(on) {
    var element = document.activeElement;
    if (on) {
        setTimeout(function () {
            if (element.className == 'inputRegister') {
                element.parentNode.classList.add("focus")
            }
            else {
                element.parentNode.parentNode.classList.add("focus");
            }
        });
    } else {
        $("input").each(function () {
            var $input = $(this);
            var $parent = $input.closest('.header__search');
            $input.closest('.boxInput__wrInput').removeClass("focus")
            if ($input.val()) $parent.addClass("focus"); else
                $parent.removeClass("focus");
        });
    }
}
// =========================== setting selectbox custom filtering =====================
$(document).ready(function () {
    try {
        function formatState(state) {
            if (!state.id) {
                return state.text;
            }

            var $state = $(
                `<span class="custom-selecting">
                    <i class="icon-hambergerMenu"></i>
                    <span></span>
                    <i class="icon-arrowDown"></i>
                 </span>`
            );

            // Use .text() instead of HTML string concatenation to avoid script injection issues
            $state.find("span").text(state.text);
            return $state;
        };
        function formatStateCity(state) {
            if (!state.id) {
                return state.text;
            }

            var $state = $(
                `<span class="custom-selecting">
                    <span></span>
                    <i class="icon-arrowDown"></i>
                 </span>`
            );

            // Use .text() instead of HTML string concatenation to avoid script injection issues
            $state.find("span").text(state.text);
            return $state;
        };
        $('.selectBox__category').select2({
            //remove search select
            minimumResultsForSearch: Infinity,
            dropdownParent: $('.filter__category--wr'),
            templateSelection: formatState
        });

        $('.selectBox__category').on('select2:select', function (e) {
            var data = e.params.data;
            console.log('selectBox__category:', data);
            console.log('selectBox__category:', data.text);
            console.log('selectBox__category:', data.id);
        })
        $('.selectBox__city').select2({
            //remove search select
            minimumResultsForSearch: Infinity,
            dropdownParent: $('.filter__city--wr'),
            templateSelection: formatStateCity
        });
        $('.selectBox__city').on('select2:select', function (e) {
            var data = e.params.data;
            console.log('selectBox__city select:', data);
            console.log('selectBox__city select:', data.text);
            console.log('selectBox__city select:', data.id);
        });
    } catch (error) {

    }

})
// =========================== END setting selectbox custom filtering =================



// respondive Mobile
let showOverly = $('#bg-overly');
showOverly.on('click', function () {
    $('#ResponsiveMenuMobile').removeClass('show')
    showOverly.removeClass('showOverly')
    $('#ResponsiveMenuMobile').removeClass('show')
    showOverly.removeClass('showOverly')
    showOverly.removeClass('showOverly')
    $('.HamburgerAni').removeClass('close')
    $('body').removeClass('hideScroll')

})
$('#menuHamberger').on('click', () => {
    $('#ResponsiveMenuMobile').toggleClass('show')
    showOverly.addClass('showOverly')
    $('.HamburgerAni').addClass('close')
    $('body').addClass('hideScroll')

})
$('.ResponsiveMenuMobile_menu .toggleDropmenu').slideToggle(300)
$('.ResponsiveMenuMobile_menu .toggleDropmenu').slideToggle(300)
$('.ResponsiveMenuMobile_menu nav ul .toggleDropmenu').slideUp(300)
$('.ResponsiveMenuMobile_menu nav ul li').on('click', function () {
    $(this).siblings().children('ul').slideUp()
    $(this).children('ul').slideToggle(300)
})
$('#ResponsiveMenuMobile_close').on('click', function () {
    $('#ResponsiveMenuMobile').removeClass('show')
    showOverly.removeClass('showOverly');
    $('.HamburgerAni').removeClass('close')
    $('body').removeClass('hideScroll')

})
$('#ResponsiveMenuMobile_close-2').on('click', function () {
    $('#ResponsiveMenuMobile').removeClass('show')
    showOverly.removeClass('showOverly');
    $('.HamburgerAni').removeClass('close')
    $('body').removeClass('hideScroll')

})
var regex2 = new RegExp('^[\u06F0-\u06F90-9]+$');
function validateNumber(input, event) {
    let symbol = String.fromCharCode(event.keyCode);
    if (!regex.test(symbol)) {
        event.preventDefault();
        if (input.parentElement.nextElementSibling.className && input.parentElement.nextElementSibling.className === 'errorHandering') {
            input.parentElement.nextElementSibling.innerHTML = 'لطفا فقط از اعداد استفاده کنید'
        }
    }
    else {
        if (input.parentElement.nextElementSibling.className && input.parentElement.nextElementSibling.className === 'errorHandering') {
            input.parentElement.nextElementSibling.innerHTML = ''
        }

    }
}
//*? function 6 codePin page login
function moveToNext(input, event) {
    let maxLenght = parseInt(input.getAttribute('maxlength'));
    let inputValue = input.value;
    console.log(thisinputValue);
    if (thisinputValue) {
        thisinputValue = inputValue
    } else {
        if (event.key === 'Backspace' && inputValue.length === 0) {
            let previousInput = input.previousElementSibling;
            input
            if (previousInput) {
                previousInput && previousInput.classList.remove('Success')
                previousInput.value = '';
                previousInput.focus()
            }
        }
        else if (inputValue.length >= maxLenght & event.key !== 'Backspace') {
            let nextInput = input.nextElementSibling;
            input && input.classList.add('Success')
            if (nextInput) {
                input && input.classList.add('Success')
                // nextInput.value = ''
                nextInput.focus()
            } else {
                input.blur()
            }
        }
    }

}
// validation login whit mobile
let login__NumberUser = document.querySelector('.login__NumberUser')
let login__wrapperNumberUser = document.querySelector('.login__wrapperNumberUser')
let codeDigit__form = document.querySelector('.codeDigit__form')
let login__wrappercodeDigit = document.querySelector('.login__wrappercodeDigit')
let InputnameUSer = document.querySelector('#numberPhoneUser')
let codeDigit__number = document.querySelector('.codeDigit__number')
let codeDigit__editNumberUser = document.querySelector('.codeDigit__editNumberUser')
let codeDigit__timer = document.querySelector('.codeDigit__timer > span')
let codeDigit__timerMAin = document.querySelector('.codeDigit__timer')
let codeDigit__sendAgain = document.querySelector('.codeDigit__sendAgain')
let codeDigit__AllInput = document.querySelectorAll('.codeDigit__form--wr > input')
login__NumberUser && login__NumberUser.addEventListener('submit', function (event) {
    event.preventDefault();
    if (InputnameUSer && InputnameUSer.value !== '' && InputnameUSer.value.length > 10) {
        if (InputnameUSer.parentElement.nextElementSibling) {
            InputnameUSer.parentElement.nextElementSibling.innerHTML = '';
        }
        if (login__wrapperNumberUser) {
            login__wrapperNumberUser.style.display = 'none';
            if (login__wrappercodeDigit) {
                login__wrappercodeDigit.style.display = 'block';
            }
        }
        codeDigit__number ? codeDigit__number.innerHTML = InputnameUSer.value : '';
        timerCustom(10000)
        // BtnSendAgincode.classList.add('show');
        codeDigit__sendAgain ? codeDigit__sendAgain.style.display = 'none' : '';
        codeDigit__timerMAin ? codeDigit__timerMAin.style.display = 'block' : '';
    } else {
        if (InputnameUSer.value.length > 1) {
            InputnameUSer.parentElement.nextElementSibling.innerHTML = 'شماره موبایل نامعتبراست';
        }
        else {
            if (InputnameUSer.parentElement.nextElementSibling) {
                InputnameUSer.parentElement.nextElementSibling.innerHTML = 'شماره تماس نمیتواند خالی باشد';
            }
        }
    }


})
codeDigit__AllInput.forEach(element => {
    element.addEventListener('paste', (event) => {
        event.preventDefault();
        var regex = new RegExp('^[\u06F0-\u06F90-9]+$');
        let paste = (event.clipboardData || window.clipboardData).getData("text");
        let newNumberPast = paste.split('')
        let i = 0
        codeDigit__AllInput.forEach(element => {
            if (regex.test(newNumberPast[i])) {
                element.value = newNumberPast[i];
                element.classList.add('Success')
                element.blur()
                i++
            }
        })
        element.addEventListener('input', (event) => {
            // validation login page
            // let symbol = String.fromCharCode(event.keyCode);
            // if (event.target.value.length > 10) {
            //     event.preventDefault();
            // } else if (!regex.test(symbol)) {
            //     event.preventDefault();
            //     if (inputNumber.parentElement.nextElementSibling.className && inputNumber.parentElement.nextElementSibling.className === 'errorHandering') {
            //         inputNumber.parentElement.nextElementSibling.innerHTML = 'لطفا فقط از اعداد استفاده کنید'
            //     }
            // }
            // else {
            //     if (inputNumber.parentElement.nextElementSibling.className && inputNumber.parentElement.nextElementSibling.className === 'errorHandering') {
            //         inputNumber.parentElement.nextElementSibling.innerHTML = ''
            //     }
            // }

        })
    });
    element.addEventListener('focus', (event) => {
        // if (event.target.value) {

        thisinputValue = event.target.value
        // }
        // console.log();
    });
})
function thischeckvalue() {

}
codeDigit__form && codeDigit__form.addEventListener('submit', function (event) {
    event.preventDefault()
    let arrayCodeDigit = []
    codeDigit__AllInput.forEach(element => {
        if (element.value !== '') {
            arrayCodeDigit.push(element.value);
        }
    });
    let codeUSer = arrayCodeDigit.join('')
    if (!codeUSer) {
        codeDigit__form.childNodes[5].className === 'errorHandering' ? codeDigit__form.childNodes[5].innerHTML = 'کد نامعتبر است' : '';
    }
    else {
        if (codeUSer.length >= 6) {
            codeDigit__form.submit()
        }
        else {
            codeDigit__form.childNodes[5].className === 'errorHandering' ? codeDigit__form.childNodes[5].innerHTML = 'کد نامعتبر است' : '';
        }
    }
})
codeDigit__editNumberUser &&
    codeDigit__editNumberUser.addEventListener('click', function () {
        if (login__wrapperNumberUser) {
            login__wrapperNumberUser.style.display = 'block';
            if (login__wrappercodeDigit) {
                login__wrappercodeDigit.style.display = 'none';
            }
        }
        stopTimerCustom()
        codeDigit__AllInput.forEach(element => {
            element.value = ''
            element.classList.remove("Success")
        });
    })
codeDigit__sendAgain && codeDigit__sendAgain.addEventListener('click', function () {
    codeDigit__AllInput.forEach(element => {
        element.value = ''
        element.classList.remove("Success")
    });
    timerCustom(120000)
    codeDigit__sendAgain ? codeDigit__sendAgain.style.display = 'none' : '';
    codeDigit__timerMAin ? codeDigit__timerMAin.style.display = 'block' : '';


})
// timer ==================================================>
//زمان 2 دقیقه برحسب میلی ثانیه
// فرمول 
// 2*60*1000
var distance = 120000;
//تایمیر برای کد احراز هویت
// Update the count down every 1 second
let nIntervId;
function timerCustom(distance) {
    if (!nIntervId) {
        nIntervId = setInterval(function () {
            distance = distance - 1000;
            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((distance % (1000 * 60)) / 1000);
            codeDigit__timer ? codeDigit__timer.innerHTML =
                + minutes + ":" + seconds : '';
            if (distance < 0) {
                stopTimerCustom()
                // BtnSendAgincode.classList.add('show');
                codeDigit__timer ? codeDigit__timer.innerHTML = "0:0" : '';
                codeDigit__sendAgain ? codeDigit__sendAgain.style.display = 'block' : '';
                codeDigit__timerMAin ? codeDigit__timerMAin.style.display = 'none' : '';
                // textMessageValidateinputs.innerText = 'زمان شما منقضی شده است'
            }
        }, 1000);
    }
}
// متوقف کردن تایمر
function stopTimerCustom() {
    codeDigit__timer ? codeDigit__timer.innerHTML = '2:00' : '';
    clearInterval(nIntervId);
    // release our intervalID from the variable
    nIntervId = null;
}
let JimCardInputRadio = document.querySelectorAll('.buyJimCard .JimCard')
// console.log(JimCardInputRadio[0]);
JimCardInputRadio.forEach(inputRadio => {
    if (inputRadio.children[0].children[0].children[0].checked === true) {
        console.log(inputRadio.classList.add('checked'));
    }
    inputRadio.addEventListener('click', function () {
        JimCardInputRadio.forEach(inputRadiov => {
            inputRadiov.children[0].children[0].children[0].checked = false
            inputRadiov.classList.remove('checked')
        })
        this.children[0].children[0].children[0].checked = true
        this.classList.add('checked')
    })

});
let filter__genderChecked = document.querySelectorAll('.filter__gender--wr input')
filter__genderChecked.forEach(inputRadio => {
    inputRadio.checked ? inputRadio.parentElement.parentElement.classList.add('checked') : inputRadio.parentElement.parentElement.classList.remove('checked')

    inputRadio.addEventListener('input', (event) => {

        if (event.srcElement.checked) {
            event.target.parentElement.parentElement.classList.add('checked')

        } else {
            event.target.parentElement.parentElement.classList.remove('checked')
        }

    })
});
let filter__typeJimList = document.querySelectorAll('.filter__typeJim--list input')
filter__typeJimList.forEach(inputRadio => {
    inputRadio.checked ? inputRadio.parentElement.classList.add('checked') : inputRadio.parentElement.classList.remove('checked')
    inputRadio.addEventListener('input', (event) => {
        if (event.srcElement.checked) {
            event.target.parentElement.classList.add('checked')

        } else {
            event.target.parentElement.classList.remove('checked')

        }
    })
});
let single__rateStars = document.querySelectorAll('.single__rate .single__rate--stars .rating input')
let modalcustomRadioInput = document.querySelectorAll('.modalcustom .single__rate--stars .rating input')
let emtiazDaynamic = document.querySelector('.single__rate .single__rate--number-emtiaz .single__rate--number-emtiaz--daynamic')
let emtiazDaynamicmodal = document.querySelector('.modalcustom .single__rate--number-emtiaz .single__rate--number-emtiaz--daynamic')
single__rateStars.forEach(input => {
    input.addEventListener('click', function (event) {
        emtiazDaynamic.innerHTML = event.target.value
        sdg()
    })
});
let opneModalRate = document.getElementById('opneModalRate')
let stareRate = 0
opneModalRate && opneModalRate.addEventListener('click', function () {
    sdg()
    // single__rateStars.forEach(element => {
    //     if (element.checked) {
    //         stareRate = Number(element.value)
    //     }
    // });
    // emtiazDaynamicmodal.innerHTML = stareRate
    // modalcustomRadioInput.forEach(element => {
    //     if (element.value == stareRate) {
    //         element.checked = true
    //     }
    // });
})
function sdg() {
    single__rateStars.forEach(element => {
        if (element.checked) {
            stareRate = Number(element.value)
        }
    });
    emtiazDaynamicmodal.innerHTML = stareRate
    modalcustomRadioInput.forEach(element => {
        if (element.value == stareRate) {
            element.checked = true
        }
    });
}
modalcustomRadioInput.forEach(element => {
    // console.log(element);
    element.addEventListener('click', function () {
        // console.log(this.value);
        emtiazDaynamicmodal.innerHTML = this.value

    })
});
const myModalEl = document.getElementById('exampleModal')
myModalEl && myModalEl.addEventListener('hidden.bs.modal', event => {
    // do something...
    single__rateStars.forEach(element => {
        element.checked = false;
        emtiazDaynamic.innerHTML = 0
    });
})
$(".heart").on("click", function () {
    $(this).toggleClass("is-active");
});
// Prevent the user from entering letters for input:number input:tel
var regex = new RegExp('^[\u06F0-\u06F90-9]+$');
// validation login page
function validationMobile(inputNumber, event) {
    let symbol = String.fromCharCode(event.keyCode);
    if (inputNumber.id === 'codeMeliUserRegister') {
        if (event.target.value.length > 9) {
            event.preventDefault();
        }
        else if (!regex.test(symbol)) {
            event.preventDefault();
            if (inputNumber.parentElement.nextElementSibling.className && inputNumber.parentElement.nextElementSibling.className === 'errorHandering') {
                inputNumber.parentElement.nextElementSibling.innerHTML = 'لطفا فقط از اعداد استفاده کنید'
            }
        }
        else {
            if (inputNumber.parentElement.nextElementSibling.className && inputNumber.parentElement.nextElementSibling.className === 'errorHandering') {
                inputNumber.parentElement.nextElementSibling.innerHTML = ''
            }
        }
    } else {
        if (event.target.value.length > 10) {
            event.preventDefault();
        } else if (!regex.test(symbol)) {
            event.preventDefault();
            if (inputNumber.parentElement.nextElementSibling.className && inputNumber.parentElement.nextElementSibling.className === 'errorHandering') {
                inputNumber.parentElement.nextElementSibling.innerHTML = 'لطفا فقط از اعداد استفاده کنید'
            }
        }
        else {
            if (inputNumber.parentElement.nextElementSibling.className && inputNumber.parentElement.nextElementSibling.className === 'errorHandering') {
                inputNumber.parentElement.nextElementSibling.innerHTML = ''
            }
        }
    }
}
// ============================ validation form register profile ============================
let userNameRegister = document.getElementById('userNameRegister')
let lastNameUserRegister = document.getElementById('lastNameUserRegister')
let codeMeliUserRegister = document.getElementById('codeMeliUserRegister')
let fatherUserRegister = document.getElementById('fatherUserRegister')
let dateBirthUserRegister = document.getElementById('dateBirthUserRegister')
let addressUserRegister = document.getElementById('addressUserRegister')
let profilerRegisterBtnSubmit = document.getElementById('profilerRegisterBtnSubmit');
let profilerRegister__form = document.querySelector('.profilerRegister__form');
let isuserNameRegister, islastNameUserRegister, iscodeMeliUserRegister, isfatherUserRegister, isdateBirthUserRegister, isaddressUserRegister = false;
profilerRegisterBtnSubmit && profilerRegisterBtnSubmit.addEventListener('click', (event) => {
    event.preventDefault()
    if (userNameRegister) {
        if (userNameRegister.value === '') {
            userNameRegister.parentElement.nextElementSibling.innerHTML = 'نام نمی تواند خالی باشد'
            userNameRegister.parentElement.classList.add('error')
            userNameRegister.parentElement.classList.remove('success')
        }
        else {
            userNameRegister.parentElement.nextElementSibling.innerHTML = ''
            userNameRegister.parentElement.classList.remove('error')
            userNameRegister.parentElement.classList.add('success')
            isuserNameRegister = true
        }
    }
    if (lastNameUserRegister) {
        if (lastNameUserRegister.value === '') {
            lastNameUserRegister.parentElement.nextElementSibling.innerHTML = 'نام خانوادگی نمی تواند خالی باشد'
            lastNameUserRegister.parentElement.classList.add('error')
            lastNameUserRegister.parentElement.classList.remove('success')
        }
        else {
            lastNameUserRegister.parentElement.nextElementSibling.innerHTML = ''
            lastNameUserRegister.parentElement.classList.remove('error')
            lastNameUserRegister.parentElement.classList.add('success')
            islastNameUserRegister = true
        }
    }
    if (fatherUserRegister) {
        if (fatherUserRegister.value === '') {
            fatherUserRegister.parentElement.nextElementSibling.innerHTML = 'نام پدر نمی تواند خالی باشد'
            fatherUserRegister.parentElement.classList.add('error')
            fatherUserRegister.parentElement.classList.remove('success')
        }
        else {
            fatherUserRegister.parentElement.nextElementSibling.innerHTML = ''
            fatherUserRegister.parentElement.classList.remove('error')
            fatherUserRegister.parentElement.classList.add('success')
            isfatherUserRegister = true
        }
    }
    if (dateBirthUserRegister) {
        if (dateBirthUserRegister.value === '') {
            dateBirthUserRegister.parentElement.nextElementSibling.innerHTML = 'تاریخ تولد نمی تواند خالی باشد'
            dateBirthUserRegister.parentElement.classList.add('error')
            dateBirthUserRegister.parentElement.classList.remove('success')
        }
        else {
            dateBirthUserRegister.parentElement.nextElementSibling.innerHTML = ''
            dateBirthUserRegister.parentElement.classList.remove('error')
            dateBirthUserRegister.parentElement.classList.add('success')
            isdateBirthUserRegister = true
        }
    }
    if (addressUserRegister) {
        if (addressUserRegister.value === '') {
            addressUserRegister.parentElement.nextElementSibling.innerHTML = 'آدرس نمی تواند خالی باشد'
            addressUserRegister.parentElement.classList.add('error')
            addressUserRegister.parentElement.classList.remove('success')
        }
        else {
            addressUserRegister.parentElement.nextElementSibling.innerHTML = ''
            addressUserRegister.parentElement.classList.remove('error')
            addressUserRegister.parentElement.classList.add('success')
            isaddressUserRegister = true
        }
    }
    if (codeMeliUserRegister) {
        if (codeMeliUserRegister.value === '') {
            codeMeliUserRegister.parentElement.nextElementSibling.innerHTML = 'کد ملی نمی تواند خالی باشد'
            codeMeliUserRegister.parentElement.classList.add('error')
            codeMeliUserRegister.parentElement.classList.remove('success')
        }
        else if (!isValidNationalCode(codeMeliUserRegister.value)) {
            codeMeliUserRegister.parentElement.nextElementSibling.innerHTML = 'فرمت کدملی درست نیست'
            codeMeliUserRegister.parentElement.classList.add('error')
            codeMeliUserRegister.parentElement.classList.remove('success')
        }
        else {
            codeMeliUserRegister.parentElement.nextElementSibling.innerHTML = ''
            codeMeliUserRegister.parentElement.classList.remove('error')
            codeMeliUserRegister.parentElement.classList.add('success')
            iscodeMeliUserRegister = true
        }
    }
    if (isuserNameRegister && islastNameUserRegister && iscodeMeliUserRegister && isfatherUserRegister && isdateBirthUserRegister && isaddressUserRegister) {
        profilerRegister__form.submit()
    }
})
function codeMeli() {
}
// isValidNationalCode
const isValidNationalCode = code => {
    if (code.length !== 10 || /(\d)(\1){9}/.test(code)) return false;

    let sum = 0,
        chars = code.split(''),
        lastDigit,
        remainder;

    for (let i = 0; i < 9; i++) sum += +chars[i] * (10 - i);

    remainder = sum % 11;
    lastDigit = remainder < 2 ? remainder : 11 - remainder;

    return +chars[9] === lastDigit;
};
// usage
// isValidNationalCode('0060647531');




// 
jalaliDatepicker.startWatch();
$(document).ready(() => {
    const photoInp = $("#photo");
    let imgURL;
    photoInp.change(function (e) {
        imgURL = URL.createObjectURL(e.target.files[0]);
        $("#imgPreview").attr("src", imgURL);
    });
});
if (window.innerWidth > 992) {
    document.addEventListener("mousemove", parallax);
    function parallax(e) {
        let body = document.querySelector('body')
        var x = (e.clientX * 5) / 250;
        var y = (e.clientY * 5) / 250;
        body.style.backgroundPositionX = x * 10 + 'px'
        body.style.backgroundPositionY = y * 10 + 'px'
        // body.style.backgroundPositionY = y
        // document.querySelectorAll(".circleShadow").forEach(function (move) {

        //     var moving_value = move.getAttribute("data-value");
        //     var x = (e.clientX * moving_value) / 250;
        //     var y = (e.clientY * moving_value) / 250;

        //     move.style.transform = "translateX(" + x + "px) translateY(" + y + "px) ";
        // });
    }
}


// javascript tooltip library
// https://atomiks.github.io/tippyjs/
tippy('.JimCard__title i', {
    content: 'برای یک ماه است',
    arrow: true,
    animation: 'scale-extreme',
    followCursor: true,
});


