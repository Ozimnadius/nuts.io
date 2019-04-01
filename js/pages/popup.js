$(function () {
    let popup = $('.popup'),
        popupWrap = popup.find('.popup__wrapper');


    $('body').on('click', '.callorderOpen', function (e) {
        e.preventDefault();

        let data = {
            action: 'callorderOpen'
        };

        $.ajax({
            dataType: "json",
            type: "POST",
            url: 'ajax.php',
            data: data,
            success: function (result) {
                if (result.status) {
                    popupWrap.html(result.html);
                    popup.addClass('active');
                    $('input[type=tel]').mask('+7 (999) 999-99-99');

                    $('.callorder__form').validate(
                        {
                            rules: {
                                name: "required",
                                tel: "required"
                            },
                            messages: {
                                name: "Введите ваше Имя",
                                tel: "Введите ваш Телефон",
                            },

                            submitHandler: function (form) {
                                sendAjax(form);
                            }
                        }
                    );

                } else {
                    alert('Что-то пошло не так, попробуйте еще раз!!!');
                }
            },
            error: function (result) {
                alert('Что-то пошло не так, попробуйте еще раз!!!');
            }
        });

    });

    $('body').on('click', '.fastOrder', function (e) {
        e.preventDefault();
            let $this = $(this),
                item = $this.closest('.buyItem'),
                count = item.find('.count__input'),
                val = count.val(),
                id = Number(item.attr('data-id'));


        let data = {
            id: id,
            val: val,
            action: 'fastOrder'
        };

        $.ajax({
            dataType: "json",
            type: "POST",
            url: 'ajax.php',
            data: data,
            success: function (result) {
                if (result.status) {
                    popupWrap.html(result.html);
                    popup.addClass('active');
                    $('input[type=tel]').mask('+7 (999) 999-99-99');

                    $('.callorder__form').validate(
                        {
                            rules: {
                                name: "required",
                                tel: "required"
                            },
                            messages: {
                                name: "Введите ваше Имя",
                                tel: "Введите ваш Телефон",
                            },

                            submitHandler: function (form) {
                                sendAjax(form);
                            }
                        }
                    );

                } else {
                    alert('Что-то пошло не так, попробуйте еще раз!!!');
                }
            },
            error: function (result) {
                alert('Что-то пошло не так, попробуйте еще раз!!!');
            }
        });

    });

    popup.on('click', function (e) {
       let target = $(e.target);

       if (target.closest('.popup__wrapper').length === 0){
           popup.removeClass('active');
       }
    });

    $('body').on('click', '.form__close', function (e) {
       e.preventDefault();
       popup.removeClass('active');
    });

    function sendAjax(form) {
        let data = $(form).serialize();

        $.ajax({
            dataType: "json",
            type: "POST",
            url: 'ajax.php',
            data: data,
            success: function (result) {
                if (result.status) {
                    popupWrap.html(result.html);
                    popup.addClass('active');
                } else {
                    alert('Что-то пошло не так, попробуйте еще раз!!!');
                }
            },
            error: function (result) {
                alert('Что-то пошло не так, попробуйте еще раз!!!');
            }
        });
    }

    $('.auth').on('click', function (e) {
        e.preventDefault();
        let data = {
            action: 'enter'
        };

        $.ajax({
            dataType: "json",
            type: "POST",
            url: 'ajax.php',
            data: data,
            success: function (result) {
                if (result.status) {
                    popupWrap.html(result.html);
                    popup.addClass('active');
                    $('.enter__form').validate(
                        {
                            rules: {
                                email: "required",
                                password: {
                                    required: true,
                                    minlength: 6
                                },
                            },
                            messages: {
                                email: "Введите Email",
                                password: {
                                    required: "Введите ваш пароль",
                                    minlength: "Не менее 6-ти символов"
                                },
                            },

                            submitHandler: function (form) {
                                sendEnterAjax(form)
                            }
                        }
                    );
                } else {
                    alert('Что-то пошло не так, попробуйте еще раз!!!');
                }
            },
            error: function (result) {
                alert('Что-то пошло не так, попробуйте еще раз!!!');
            }
        });
    });

    function sendEnterAjax(form) {
        let data = $(form).serialize();

        $.ajax({
            dataType: "json",
            type: "POST",
            url: 'ajax.php',
            data: data,
            success: function (result) {
                if (result.status) {
                    window.location = 'cabinet.html'
                } else {
                    popupWrap.html(result.html);
                    popup.addClass('active');
                    $('.enter__form').validate(
                        {
                            rules: {
                                email: "required",
                                password: {
                                    required: true,
                                    minlength: 6
                                },
                            },
                            messages: {
                                email: "Введите Email",
                                password: {
                                    required: "Введите ваш пароль",
                                    minlength: "Не менее 6-ти символов"
                                },
                            },
                            submitHandler: function (form) {
                                sendEnterAjax(form)
                            }
                        }
                    );
                }
            },
            error: function (result) {
                alert('Что-то пошло не так, попробуйте еще раз!!!');
            }
        });
    }

    $('body').on('click','.regForm', function (e) {
        e.preventDefault();
        let data = {
            action: 'reg'
        };

        $.ajax({
            dataType: "json",
            type: "POST",
            url: 'ajax.php',
            data: data,
            success: function (result) {
                if (result.status) {
                    popupWrap.html(result.html);
                    popup.addClass('active');
                    $('.reg__form').validate(
                        {
                            rules: {
                                name: "required",
                                email: "required",
                                password: {
                                    required: true,
                                    minlength: 6
                                },
                                confirmPassword: {
                                    required: true,
                                    equalTo: "#passwordReg"
                                },
                            },
                            messages: {
                                name: "Введите Имя",
                                email: "Введите Email",
                                password: {
                                    required: "Введите ваш пароль",
                                    minlength: "Не менее 6-ти символов"
                                },
                                confirmPassword: {
                                    required: "Введите ваш пароль",
                                    equalTo: "Пароли не совпадают"
                                }
                            },

                            submitHandler: function (form) {
                                sendRegAjax(form)
                            }
                        }
                    );
                } else {
                    alert('Что-то пошло не так, попробуйте еще раз!!!');
                }
            },
            error: function (result) {
                alert('Что-то пошло не так, попробуйте еще раз!!!');
            }
        });
    });

    function sendRegAjax(form) {
        let data = $(form).serialize();

        $.ajax({
            dataType: "json",
            type: "POST",
            url: 'ajax.php',
            data: data,
            success: function (result) {
                if (result.status) {
                    popupWrap.html(result.html);
                    popup.addClass('active');
                } else {
                    popupWrap.html(result.html);
                    popup.addClass('active');
                    $('.reg__form').validate(
                        {
                            rules: {
                                name: "required",
                                email: "required",
                                password: {
                                    required: true,
                                    minlength: 6
                                },
                                confirmPassword: {
                                    required: true,
                                    equalTo: "#passwordReg"
                                },
                            },
                            messages: {
                                name: "Введите Имя",
                                email: "Введите Email",
                                password: {
                                    required: "Введите ваш пароль",
                                    minlength: "Не менее 6-ти символов"
                                },
                                confirmPassword: {
                                    required: "Введите ваш пароль",
                                    equalTo: "Пароли не совпадают"
                                }
                            },

                            submitHandler: function (form) {
                                sendRegAjax(form)
                            }
                        }
                    );
                }
            },
            error: function (result) {
                alert('Что-то пошло не так, попробуйте еще раз!!!');
            }
        });
    }

    $('body').on('click','.recoveryForm', function (e) {
        e.preventDefault();
        let data = {
            action: 'recovery'
        };

        $.ajax({
            dataType: "json",
            type: "POST",
            url: 'ajax.php',
            data: data,
            success: function (result) {
                if (result.status) {
                    popupWrap.html(result.html);
                    popup.addClass('active');
                    $('.recovery__form').validate(
                        {
                            rules: {
                                email: "required",
                            },
                            messages: {
                                email: "Введите Email",
                            },

                            submitHandler: function (form) {
                                sendRecoveryAjax(form)
                            }
                        }
                    );
                } else {
                    alert('Что-то пошло не так, попробуйте еще раз!!!');
                }
            },
            error: function (result) {
                alert('Что-то пошло не так, попробуйте еще раз!!!');
            }
        });
    });


    function sendRecoveryAjax(form) {
        let data = $(form).serialize();

        $.ajax({
            dataType: "json",
            type: "POST",
            url: 'ajax.php',
            data: data,
            success: function (result) {
                if (result.status) {
                    popupWrap.html(result.html);
                    popup.addClass('active');
                } else {
                    popupWrap.html(result.html);
                    popup.addClass('active');
                    $('.recovery__form').validate(
                        {
                            rules: {
                                email: "required",
                            },
                            messages: {
                                email: "Введите Email",
                            },

                            submitHandler: function (form) {
                                sendRecoveryAjax(form)
                            }
                        }
                    );
                }
            },
            error: function (result) {
                alert('Что-то пошло не так, попробуйте еще раз!!!');
            }
        });
    }

    $('.ifeed__form').validate(
        {
            rules: {
                name: "required",
                tel: "required",
            },
            messages: {
                name: "Введите Имя",
                tel: "Введите Телефон",
            },

            submitHandler: function (form) {
                let data = $(form).serialize();

                $.ajax({
                    dataType: "json",
                    type: "POST",
                    url: 'ajax.php',
                    data: data,
                    success: function (result) {
                        if (result.status) {
                            popupWrap.html(result.html);
                            popup.addClass('active');
                        } else {
                            alert('Что-то пошло не так, попробуйте еще раз!!!');
                        }
                    },
                    error: function (result) {
                        alert('Что-то пошло не так, попробуйте еще раз!!!');
                    }
                });
            }
        }
    );

});